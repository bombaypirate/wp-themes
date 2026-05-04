<?php
/**
 * Title: photos-archive
 * Slug: bombay-pirate-retro/photos-archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"full","className":"ink-border-top","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull ink-border-top" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"letterpress","style":{"typography":{"fontFamily":"'Playfair Display', Georgia, serif","fontWeight":"900"}}} -->
<h2 class="wp-block-heading letterpress" style="font-family:'Playfair Display', Georgia, serif;font-weight:900"><?php esc_html_e('Photos', 'bombay-pirate-retro');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"warm-gray"} -->
<p class="has-warm-gray-color has-text-color" style="margin-bottom:2rem;font-size:1rem;line-height:1.7"><?php esc_html_e('I am not a photographer, but sometimes I do take some good ones. Visit the full archiver here.', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"columns":3,"linkTo":"none","className":"photo-grid","style":{"spacing":{"blockGap":{"left":"1.5rem","top":"1.5rem"}}}} -->
<figure class="wp-block-gallery has-nested-images columns-3 is-cropped photo-grid"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/paper-background-title.webp" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/paper-background-title.webp" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/paper-background-title.webp" alt="" class=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":59,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"metadata":{"categories":["posts"],"name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"photo-grid","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-featured-image {"className":"photo-grid"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"space-mono"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->