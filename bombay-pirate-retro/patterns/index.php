<?php
/**
 * Title: index
 * Slug: bombay-pirate-retro/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"metadata":{"patternName":"bombay-pirate-retro/hero-section","name":"Hero Section","categories":["homepage"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"broadsheet-tag"} -->
<p class="broadsheet-tag"><?php esc_html_e('Personal', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"broadsheet-tag"} -->
<p class="broadsheet-tag"><?php esc_html_e('Blog', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"className":"letterpress","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 5.5rem)","lineHeight":"0.92","letterSpacing":"-2px","fontFamily":"'Playfair Display', Georgia, serif","fontWeight":"900"},"spacing":{"margin":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<h1 class="wp-block-heading letterpress" style="margin-top:1.5rem;margin-bottom:1.5rem;font-family:'Playfair Display', Georgia, serif;font-size:clamp(3rem, 6vw, 5.5rem);font-weight:900;letter-spacing:-2px;line-height:0.92"><?php esc_html_e('aditya\'s blog', 'bombay-pirate-retro');?></h1>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#1C1C1C"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#1C1C1C;color:#1C1C1C"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.75"}}} -->
<p style="font-size:1.05rem;line-height:1.75"><?php esc_html_e('I write here a few times a month. It can range from about a good movie I saw, to books I read, to learnings around open-source and WordPress.', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Once in a while I upload a few photos too in my photos section.', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"elephant-track","style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group elephant-track" style="margin-top:2rem"></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:group {"className":"broadsheet-frame","layout":{"type":"default"}} -->
<div class="wp-block-group broadsheet-frame"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bombaypirate-twentysix-1024x572.webp" alt="" class=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"bombay-pirate-retro/two-column-sticky-post","name":"Two-Column-Sticky-Post","categories":["homepage"]},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"color":{"background":"#1C1C1C"}}} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#1C1C1C;color:#1C1C1C"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query {"queryId":17,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false},"metadata":{"categories":["posts"],"name":"Image at left"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#1C1C1C"},"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="margin-top:1rem;margin-bottom:1.5rem;background-color:#1C1C1C;color:#1C1C1C"/>
<!-- /wp:separator -->

<!-- wp:post-excerpt /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:post-featured-image {"isLink":true,"className":"broadsheet-frame","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"bombay-pirate-retro/latest-blogs","name":"Latest-Blogs","categories":["homepage"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#1C1C1C"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#1C1C1C;color:#1C1C1C"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:heading {"className":"letterpress","style":{"typography":{"fontFamily":"'Playfair Display', Georgia, serif","fontWeight":"900"}}} -->
<h2 class="wp-block-heading letterpress" style="font-family:'Playfair Display', Georgia, serif;font-weight:900"><?php esc_html_e('latest', 'bombay-pirate-retro');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-label","textColor":"saffron"} -->
<p class="category-label has-saffron-color has-text-color"><?php esc_html_e('from the blog', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":20,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"format":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"post-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group post-card"><!-- wp:post-terms {"term":"category","className":"category-label","style":{"elements":{"link":{"color":{"text":"var:preset|color|sage"},":hover":{"color":{"text":"var:preset|color|saffron"}}}}},"textColor":"sage"} /-->

<!-- wp:post-title {"level":3,"style":{"typography":{"fontSize":"1.35em"}},"fontFamily":"playfair"} /-->

<!-- wp:post-excerpt {"moreText":""} /-->

<!-- wp:read-more {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"patternName":"bombay-pirate-retro/3-column-photos","name":"3-column-photos","categories":["homepage"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
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
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/paper-background-title.webp" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/paper-background-title.webp" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/paper-background-title.webp" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->