<?php
/**
 * Title: 3-column-photos
 * Slug: bombay-pirate-retro/3-column-photos
 * Categories: homepage
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"className":"letterpress","style":{"typography":{"fontFamily":"'Playfair Display', Georgia, serif","fontWeight":"900"}}} -->
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