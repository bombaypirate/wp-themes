<?php
/**
 * Title: Latest-Blogs
 * Slug: bombay-pirate-retro/latest-blogs
 * Categories: homepage
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}}},"layout":{"type":"default"}} -->
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