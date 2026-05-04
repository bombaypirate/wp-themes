<?php

/**
 * Seeds a theme's sample pages and CPT entries from content/ HTML files.
 *
 * Content files live in the theme under content/pages/<slug>.html and
 * content/cpt/<cpt-slug>/<item-slug>.html. Each begins with a single
 * <!-- telex:meta --> HTML comment carrying metadata (title at minimum),
 * followed by block markup that becomes the post_content.
 *
 * This file is injected into every generated theme by
 * AddArbitraryFilesToArtefactTask; do not edit it inside a generated theme.
**/

/**
 * Parse a content file into its meta header and body.
 *
 * `has_header` is true when the file begins with a well-formed
 * `<!-- telex:meta ... -->` comment, regardless of whether that header
 * carries any parseable keys. This lets the loader distinguish a file
 * with no header (skip) from a file with a header missing `title:`
 * (fall back to the titleized slug).
 *
 * @param string $content Raw file content.
 * @return array{has_header: bool, meta: array<string,string>, body: string}
 */
function telex_parse_content_file(string $content): array
{
    $trimmed = ltrim($content);
    $prefix = '<!-- telex:meta';

    if (strncmp($trimmed, $prefix, strlen($prefix)) !== 0) {
        return ['has_header' => false, 'meta' => [], 'body' => $content];
    }

    $closePos = strpos($trimmed, '-->');
    if ($closePos === false) {
        return ['has_header' => false, 'meta' => [], 'body' => $content];
    }

    $headerInner = substr($trimmed, strlen($prefix), $closePos - strlen($prefix));
    $body = substr($trimmed, $closePos + 3);

    $meta = [];
    foreach (explode("\n", $headerInner) as $line) {
        $line = trim($line);
        if ($line === '') {
            continue;
        }
        $colonPos = strpos($line, ':');
        if ($colonPos === false) {
            continue;
        }
        $key = trim(substr($line, 0, $colonPos));
        $value = trim(substr($line, $colonPos + 1));
        if ($key === '') {
            continue;
        }
        $meta[$key] = $value;
    }

    return ['has_header' => true, 'meta' => $meta, 'body' => $body];
}

/**
 * Given a relative content-file path and its parsed meta, derive post fields.
 *
 * @param string $relativePath Path relative to the theme root (e.g. content/pages/home.html).
 * @param array<string,string> $meta Parsed meta from telex_parse_content_file().
 * @return array{post_type: string, post_name: string, post_title: string, is_home: bool}|null
 */
function telex_derive_post_info(string $relativePath, array $meta): ?array
{
    if (!str_ends_with($relativePath, '.html')) {
        return null;
    }

    $post_type = null;
    $post_name = null;

    if (preg_match('#^content/pages/([^/]+)\.html$#', $relativePath, $m)) {
        $post_type = 'page';
        $post_name = $m[1];
    } elseif (preg_match('#^content/cpt/([^/]+)/([^/]+)\.html$#', $relativePath, $m)) {
        $post_type = $m[1];
        $post_name = $m[2];
    } else {
        return null;
    }

    $title = isset($meta['title']) && $meta['title'] !== ''
        ? $meta['title']
        : ucwords(str_replace('-', ' ', $post_name));

    return [
        'post_type'  => $post_type,
        'post_name'  => $post_name,
        'post_title' => $title,
        'is_home'    => ($post_type === 'page' && $post_name === 'home'),
    ];
}

/**
 * Scan content/ in the active theme and insert one post per content file.
 *
 * Idempotent via the telex_seeded_v1 option flag (runs once per theme
 * activation) and a per-slug get_page_by_path() check (never overwrites
 * existing posts). Hooked to init priority 99 so CPTs (registered at
 * default init priority 10) are available when inserts happen.
 */
function telex_seed_content(): void
{
    if (get_option('telex_seeded_v1')) {
        return;
    }

    $theme_dir = get_template_directory();
    $paths = array_merge(
        glob($theme_dir . '/content/pages/*.html') ?: [],
        glob($theme_dir . '/content/cpt/*/*.html') ?: []
    );

    // Allow the `theme:` pseudo-protocol through wp_kses_post during seeding so
    // theme-relative asset URLs (e.g. theme:./assets/hero.png) survive the
    // content_save_pre sanitization that runs inside wp_insert_post. Without
    // this the prefix is stripped and block validation fails in the editor.
    $allow_theme_protocol = static function (array $protocols): array {
        $protocols[] = 'theme';
        return $protocols;
    };
    add_filter('kses_allowed_protocols', $allow_theme_protocol);

    $home_id = null;

    foreach ($paths as $absolute_path) {
        $relative = ltrim(str_replace($theme_dir, '', $absolute_path), '/');
        $raw = @file_get_contents($absolute_path);
        if ($raw === false) {
            error_log("telex_seed_content: could not read {$relative}");
            continue;
        }

        $parsed = telex_parse_content_file($raw);
        if (!$parsed['has_header']) {
            error_log("telex_seed_content: missing telex:meta header in {$relative}, skipping");
            continue;
        }

        $info = telex_derive_post_info($relative, $parsed['meta']);
        if ($info === null) {
            error_log("telex_seed_content: unexpected path shape {$relative}, skipping");
            continue;
        }

        $existing = get_page_by_path($info['post_name'], OBJECT, $info['post_type']);
        if ($existing) {
            if ($info['is_home'] && $home_id === null) {
                $home_id = (int) $existing->ID;
            }
            continue;
        }

        // menu_order: 0 for Home so it sorts first, 10+ for everything else.
        // This drives the default wp_list_pages() ordering used by the
        // Navigation block fallback when no explicit menu is set.
        $menu_order = ($info['post_type'] === 'page')
            ? ($info['is_home'] ? 0 : 10)
            : 0;

        $inserted = wp_insert_post([
            'post_type'    => $info['post_type'],
            'post_name'    => $info['post_name'],
            'post_title'   => $info['post_title'],
            'post_content' => $parsed['body'],
            'post_status'  => 'publish',
            'menu_order'   => $menu_order,
        ], true);

        if (is_wp_error($inserted) || !$inserted) {
            $msg = is_wp_error($inserted) ? $inserted->get_error_message() : 'unknown error';
            error_log("telex_seed_content: wp_insert_post failed for {$relative}: {$msg}");
            continue;
        }

        if ($info['is_home']) {
            $home_id = (int) $inserted;
        }
    }

    remove_filter('kses_allowed_protocols', $allow_theme_protocol);

    // Remove the WordPress default "Sample Page" so it does not appear in the
    // theme's navigation. Force-delete to bypass trash.
    $sample_page = get_page_by_path('sample-page', OBJECT, 'page');
    if ($sample_page) {
        wp_delete_post((int) $sample_page->ID, true);
    }

    if ($home_id) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_id);
    }

    update_option('telex_seeded_v1', 1);
}

if (function_exists('add_action')) {
    add_action('init', 'telex_seed_content', 99);
}