<?php
/**
 * Title: search
 * Slug: bombay-pirate-retro/search
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"search","fontFamily":"'Playfair Display', Georgia, serif","style":{"typography":{"fontWeight":"900"}}} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#1C1C1C"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-bottom:var(--wp--preset--spacing--40);background-color:#1C1C1C;color:#1C1C1C"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":2,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"relevance","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"1.25rem","bottom":"1.25rem","left":"1.25rem","right":"1.25rem"},"margin":{"bottom":"1rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group post-card" style="margin-bottom:1rem;padding-top:1.25rem;padding-right:1.25rem;padding-bottom:1.25rem;padding-left:1.25rem"><!-- wp:post-title {"level":3,"isLink":true,"fontFamily":"'Playfair Display', Georgia, serif","style":{"typography":{"fontSize":"1.35rem","fontWeight":"900"}}} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":30,"textColor":"warm-gray","style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.65"}}} /-->

<!-- wp:post-date {"textColor":"saffron","style":{"typography":{"fontSize":"0.75rem","textTransform":"uppercase","letterSpacing":"1px"}},"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
<p style="font-size:1rem"><?php esc_html_e('No dispatches found matching your search. Try a different query or browse the archives.', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->