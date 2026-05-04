<?php
if ( file_exists( __DIR__ . '/content-loader.php' ) ) { require_once __DIR__ . '/content-loader.php'; }
if ( file_exists( __DIR__ . '/styles.php' ) ) { require_once __DIR__ . '/styles.php'; }
if ( file_exists( __DIR__ . '/fonts.php' ) ) { require_once __DIR__ . '/fonts.php'; }
if ( file_exists( __DIR__ . '/theme-assets-rewrite.php' ) ) { require_once __DIR__ . '/theme-assets-rewrite.php'; }

/**
 * Theme setup.
 */
if ( ! function_exists( 'bombay_pirate_retro_setup' ) ) {
	function bombay_pirate_retro_setup(): void {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'post-thumbnails' );
	}
}
add_action( 'after_setup_theme', 'bombay_pirate_retro_setup' );

/**
 * Enqueue front-end custom styles.
 */
if ( ! function_exists( 'bombay_pirate_retro_enqueue' ) ) {
	function bombay_pirate_retro_enqueue(): void {
		wp_enqueue_style(
			'bombay-pirate-retro-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'enqueue_block_assets', 'bombay_pirate_retro_enqueue' );

/**
 * Inject the scroll elephant markup into the footer.
 */
if ( ! function_exists( 'bombay_pirate_retro_scroll_elephant' ) ) {
	function bombay_pirate_retro_scroll_elephant(): void {
		?>
		<div class="scroll-elephant-container" aria-hidden="true">
			<div class="scroll-elephant-trail"></div>
			<div class="scroll-elephant">
				<svg viewBox="0 0 100 80" xmlns="http://www.w3.org/2000/svg">
					<rect x="20" y="30" width="50" height="30" rx="10" fill="currentColor" />
					<circle cx="70" cy="35" r="15" fill="currentColor" />
					<path d="M75,25 Q90,15 95,5 Q100,5 95,15 Q85,35 75,45 Z" fill="currentColor" />
					<path d="M55,25 C65,20 75,25 75,40 C75,50 65,55 55,45 Z" fill="currentColor" stroke="#F5F0E8" stroke-width="2"/>
					<rect x="25" y="55" width="10" height="18" rx="3" fill="currentColor" />
					<rect x="40" y="52" width="10" height="18" rx="3" fill="currentColor" />
					<rect x="55" y="55" width="10" height="18" rx="3" fill="currentColor" />
					<path d="M22,35 Q10,40 10,50" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
					<circle cx="75" cy="32" r="2" fill="#F5F0E8" />
				</svg>
			</div>
		</div>
		<?php
	}
}
add_action( 'wp_footer', 'bombay_pirate_retro_scroll_elephant' );

/**
 * Enqueue the scroll elephant script on the front-end.
 */
if ( ! function_exists( 'bombay_pirate_retro_elephant_script' ) ) {
	function bombay_pirate_retro_elephant_script(): void {
		wp_enqueue_script(
			'telex-scroll-elephant',
			get_stylesheet_directory_uri() . '/scroll-elephant.js',
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'bombay_pirate_retro_elephant_script' );

/**
 * Content seeder — handled by the Telex content loader.
 */
add_action( 'init', 'telex_seed_content', 99 );