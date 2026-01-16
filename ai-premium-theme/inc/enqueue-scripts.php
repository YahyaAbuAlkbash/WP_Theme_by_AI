<?php
/**
 * Enqueue scripts and styles
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue block editor styles.
 */
function ai_premium_theme_block_editor_styles() {
	wp_enqueue_style( 'ai-premium-theme-block-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), AI_PREMIUM_THEME_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'ai_premium_theme_block_editor_styles' );

/**
 * Generate custom CSS based on customizer settings.
 */
function ai_premium_theme_customizer_css() {
	$custom_css = '';

	// Typography Settings
	$body_font     = get_theme_mod( 'body_font_family', 'system' );
	$heading_font  = get_theme_mod( 'heading_font_family', 'system' );
	$body_font_size = get_theme_mod( 'body_font_size', '18' );

	// Google Fonts mapping
	$google_fonts = array(
		'roboto'     => 'Roboto, sans-serif',
		'open-sans'  => '"Open Sans", sans-serif',
		'lato'       => 'Lato, sans-serif',
		'montserrat' => 'Montserrat, sans-serif',
		'poppins'    => 'Poppins, sans-serif',
		'playfair'   => '"Playfair Display", serif',
	);

	// Body Font
	if ( 'system' !== $body_font && isset( $google_fonts[ $body_font ] ) ) {
		$custom_css .= 'body { font-family: ' . $google_fonts[ $body_font ] . '; }' . "\n";
	}

	// Heading Font
	if ( 'system' !== $heading_font && isset( $google_fonts[ $heading_font ] ) ) {
		$custom_css .= 'h1, h2, h3, h4, h5, h6 { font-family: ' . $google_fonts[ $heading_font ] . '; }' . "\n";
	}

	// Body Font Size
	if ( '18' !== $body_font_size ) {
		$custom_css .= 'body { font-size: ' . absint( $body_font_size ) . 'px; }' . "\n";
	}

	// Header Settings
	$header_sticky = get_theme_mod( 'header_sticky', true );
	if ( $header_sticky ) {
		$custom_css .= '
		.site-header {
			position: sticky;
			top: 0;
			z-index: 999;
			transition: all 0.3s ease;
		}
		.site-header.scrolled {
			background: rgba(255, 255, 255, 0.95);
			box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
		}' . "\n";
	}

	$header_transparent = get_theme_mod( 'header_transparent', false );
	if ( $header_transparent && is_front_page() ) {
		$custom_css .= '
		.home .site-header {
			background: transparent;
			position: absolute;
			width: 100%;
		}
		.home .site-header .site-title a,
		.home .site-header .main-navigation a {
			color: #ffffff;
		}' . "\n";
	}

	// Blog Layout
	$blog_layout = get_theme_mod( 'blog_layout', 'list' );
	if ( 'grid' === $blog_layout || 'grid-3' === $blog_layout ) {
		$columns = ( 'grid-3' === $blog_layout ) ? '3' : '2';
		$custom_css .= '
		.blog .site-main,
		.archive .site-main {
			display: grid;
			grid-template-columns: repeat(' . $columns . ', 1fr);
			gap: 2rem;
		}
		@media (max-width: 768px) {
			.blog .site-main,
			.archive .site-main {
				grid-template-columns: 1fr;
			}
		}' . "\n";
	}

	// Sidebar Position
	$sidebar_position = get_theme_mod( 'sidebar_position', 'right' );
	if ( 'left' === $sidebar_position ) {
		$custom_css .= '
		.content-area {
			order: 2;
		}
		.widget-area {
			order: 1;
		}' . "\n";
	} elseif ( 'none' === $sidebar_position ) {
		$custom_css .= '
		.content-area {
			width: 100%;
			max-width: 800px;
			margin: 0 auto;
		}
		.widget-area {
			display: none;
		}' . "\n";
	}

	// Footer Layout
	$footer_layout = get_theme_mod( 'footer_layout', 'columns-3' );
	$footer_columns = str_replace( 'columns-', '', $footer_layout );
	if ( '3' !== $footer_columns ) {
		$custom_css .= '
		.footer-widgets-inner {
			grid-template-columns: repeat(' . absint( $footer_columns ) . ', 1fr);
		}' . "\n";
	}

	// Output custom CSS
	if ( ! empty( $custom_css ) ) {
		wp_add_inline_style( 'ai-premium-theme-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_customizer_css', 11 );

/**
 * Enqueue Google Fonts based on customizer settings.
 */
function ai_premium_theme_google_fonts() {
	$body_font    = get_theme_mod( 'body_font_family', 'system' );
	$heading_font = get_theme_mod( 'heading_font_family', 'system' );

	$fonts_to_load = array();

	// Google Fonts mapping - validated font slugs only
	$google_fonts_map = array(
		'roboto'     => 'Roboto:300,400,500,700',
		'open-sans'  => 'Open+Sans:300,400,600,700',
		'lato'       => 'Lato:300,400,700,900',
		'montserrat' => 'Montserrat:300,400,500,600,700',
		'poppins'    => 'Poppins:300,400,500,600,700',
		'playfair'   => 'Playfair+Display:400,500,600,700',
	);

	// Sanitize font selections and only add validated fonts
	$body_font    = sanitize_key( $body_font );
	$heading_font = sanitize_key( $heading_font );

	if ( 'system' !== $body_font && isset( $google_fonts_map[ $body_font ] ) ) {
		$fonts_to_load[] = $google_fonts_map[ $body_font ];
	}

	if ( 'system' !== $heading_font && isset( $google_fonts_map[ $heading_font ] ) && $heading_font !== $body_font ) {
		$fonts_to_load[] = $google_fonts_map[ $heading_font ];
	}

	if ( ! empty( $fonts_to_load ) ) {
		// Fonts are from validated whitelist, safe to construct URL
		$fonts_url = 'https://fonts.googleapis.com/css2?family=' . implode( '&family=', $fonts_to_load ) . '&display=swap';
		wp_enqueue_style( 'ai-premium-theme-google-fonts', $fonts_url, array(), null );
	}
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_google_fonts', 8 );
