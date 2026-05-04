<?php
/**
 * Title: single
 * Slug: bombay-pirate-retro/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"bottom":"1rem"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="margin-bottom:1rem"><!-- wp:post-terms {"term":"category","className":"category-label","style":{"typography":{"fontSize":"0.75rem","textTransform":"uppercase","letterSpacing":"1.5px","fontWeight":"700"}},"textColor":"sage"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"}},"textColor":"warm-gray"} -->
<p class="has-warm-gray-color has-text-color" style="font-size:0.75rem"><?php esc_html_e('/', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontSize":"0.75rem","textTransform":"uppercase","letterSpacing":"1px"}},"textColor":"warm-gray"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"style":{"typography":{"fontWeight":"900","letterSpacing":"-1px"},"spacing":{"margin":{"bottom":"1.5rem"}}},"fontFamily":"'Playfair Display', Georgia, serif"} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#1C1C1C"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-bottom:var(--wp--preset--spacing--40);background-color:#1C1C1C;color:#1C1C1C"/>
<!-- /wp:separator -->

<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

<!-- wp:separator {"className":"is-style-dots","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontSize":"0.8rem"}},"textColor":"saffron"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->