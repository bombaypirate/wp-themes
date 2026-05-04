<?php
/**
 * Title: footer
 * Slug: bombay-pirate-retro/footer
 * Inserter: no
 */
?>
<!-- wp:group {"className":"broadsheet-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0"}},"color":{"background":"#1C1C1C"}},"textColor":"parchment","layout":{"type":"default"}} -->
<div class="wp-block-group broadsheet-footer has-parchment-color has-text-color has-background" style="background-color:#1C1C1C;margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|parchment"}}}},"textColor":"parchment","fontFamily":"space-mono"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.7"}},"textColor":"warm-gray"} -->
<p class="has-warm-gray-color has-text-color" style="font-size:0.875rem;line-height:1.7"><?php esc_html_e('I write here a few times a month. It can range from about a good movie I saw, to books I read, to learnings around open-source and WordPress.', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"'Space Mono', monospace","fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"sage"} -->
<h4 class="wp-block-heading has-sage-color has-text-color" style="font-family:'Space Mono', monospace;font-size:0.8rem;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Links', 'bombay-pirate-retro');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"2"}},"textColor":"warm-gray"} -->
<p class="has-warm-gray-color has-text-color" style="font-size:0.875rem;line-height:2"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element, 3. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Photos%1$sAbout%2$sStudio Goncharov%3$sContact', 'bombay-pirate-retro' ), '<br>', '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading {"level":4,"style":{"typography":{"fontFamily":"'Space Mono', monospace","fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"sage"} -->
<h4 class="wp-block-heading has-sage-color has-text-color" style="font-family:'Space Mono', monospace;font-size:0.8rem;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('Signals', 'bombay-pirate-retro');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"2"}},"textColor":"warm-gray"} -->
<p class="has-warm-gray-color has-text-color" style="font-size:0.875rem;line-height:2"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element, 3. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Twitter / X%1$sLinked In%2$sGithub%3$sContact me', 'bombay-pirate-retro' ), '<br>', '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide","style":{"color":{"background":"#A89F91"}}} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#A89F91;color:#A89F91"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"1px"}},"textColor":"warm-gray"} -->
<p class="has-warm-gray-color has-text-color" style="font-size:0.75rem;letter-spacing:1px"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Powered by %1$sWordPress%2$s', 'bombay-pirate-retro' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" target="_blank" rel="noopener noreferrer">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"1px"}},"textColor":"warm-gray"} -->
<p class="has-warm-gray-color has-text-color" style="font-size:0.75rem;letter-spacing:1px"><?php esc_html_e('Bombay Pirate - by Aditya Kane. 2026.', 'bombay-pirate-retro');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->