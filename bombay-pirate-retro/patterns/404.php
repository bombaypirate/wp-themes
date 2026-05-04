<?php
/**
 * Title: 404
 * Slug: bombay-pirate-retro/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.75"><?php esc_html_e('It looks like something is off and what we were looking for was not found.', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="line-height:1.75"><?php esc_html_e('But do not lose heart, there are', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"letterpress","style":{"typography":{"lineHeight":"0.95","letterSpacing":"-2px","fontStyle":"normal","fontWeight":"800"}},"fontSize":"x-large","fontFamily":"playfair"} -->
<p class="letterpress has-playfair-font-family has-x-large-font-size" style="font-style:normal;font-weight:800;letter-spacing:-2px;line-height:0.95"><?php esc_html_e('404 reasons', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><?php esc_html_e('that all is ultimately okay!', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"elephant-track","style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group elephant-track" style="margin-top:2rem"></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"broadsheet-frame","layout":{"type":"default"}} -->
<div class="wp-block-group broadsheet-frame"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide"} -->
<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/paper-background-title.webp" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->