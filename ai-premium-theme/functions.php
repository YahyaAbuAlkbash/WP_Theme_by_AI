<?php
/**
 * AI Premium Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme version
 */
define( 'AI_PREMIUM_THEME_VERSION', '1.0.2' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function ai_premium_theme_setup() {
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'ai-premium-theme', get_template_directory() . '/languages' );

	/*
	 * Add default posts and comments RSS feed links to head.
	 */
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 675, true );

	/*
	 * Register navigation menus.
	 */
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'ai-premium-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'ai-premium-theme' ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/*
	 * Add theme support for custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Add theme support for selective refresh for widgets.
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Add support for core custom background feature.
	 */
	add_theme_support(
		'custom-background',
		apply_filters(
			'ai_premium_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	/*
	 * Add support for Block Editor features.
	 */
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	/*
	 * Add support for custom line height controls.
	 */
	add_theme_support( 'custom-line-height' );

	/*
	 * Add support for custom spacing controls.
	 */
	add_theme_support( 'custom-spacing' );

	/*
	 * Add support for custom units.
	 */
	add_theme_support( 'custom-units' );

	/*
	 * Add support for editor color palette.
	 */
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Primary', 'ai-premium-theme' ),
				'slug'  => 'primary',
				'color' => '#2563eb',
			),
			array(
				'name'  => esc_html__( 'Secondary', 'ai-premium-theme' ),
				'slug'  => 'secondary',
				'color' => '#7c3aed',
			),
			array(
				'name'  => esc_html__( 'Accent', 'ai-premium-theme' ),
				'slug'  => 'accent',
				'color' => '#f59e0b',
			),
			array(
				'name'  => esc_html__( 'Dark', 'ai-premium-theme' ),
				'slug'  => 'dark',
				'color' => '#1e293b',
			),
			array(
				'name'  => esc_html__( 'Light', 'ai-premium-theme' ),
				'slug'  => 'light',
				'color' => '#f8fafc',
			),
		)
	);

	/*
	 * Add support for editor font sizes.
	 */
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => esc_html__( 'Small', 'ai-premium-theme' ),
				'size' => 14,
				'slug' => 'small',
			),
			array(
				'name' => esc_html__( 'Normal', 'ai-premium-theme' ),
				'size' => 18,
				'slug' => 'normal',
			),
			array(
				'name' => esc_html__( 'Medium', 'ai-premium-theme' ),
				'size' => 24,
				'slug' => 'medium',
			),
			array(
				'name' => esc_html__( 'Large', 'ai-premium-theme' ),
				'size' => 32,
				'slug' => 'large',
			),
			array(
				'name' => esc_html__( 'Huge', 'ai-premium-theme' ),
				'size' => 40,
				'slug' => 'huge',
			),
		)
	);
}
add_action( 'after_setup_theme', 'ai_premium_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function ai_premium_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ai_premium_theme_content_width', 1200 );
}
add_action( 'after_setup_theme', 'ai_premium_theme_content_width', 0 );

/**
 * Register widget areas.
 */
function ai_premium_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'ai-premium-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'ai-premium-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'ai-premium-theme' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'ai-premium-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'ai-premium-theme' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'ai-premium-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'ai-premium-theme' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'ai-premium-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ai_premium_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ai_premium_theme_scripts() {
	// Enqueue main stylesheet
	wp_enqueue_style( 'ai-premium-theme-style', get_stylesheet_uri(), array(), AI_PREMIUM_THEME_VERSION );
	
	// Add RTL support
	wp_style_add_data( 'ai-premium-theme-style', 'rtl', 'replace' );
	
	// Enqueue responsive styles
	wp_enqueue_style( 'ai-premium-theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), AI_PREMIUM_THEME_VERSION );
	
	// Enqueue dark mode styles
	wp_enqueue_style( 'ai-premium-theme-dark-mode', get_template_directory_uri() . '/assets/css/dark-mode.css', array(), AI_PREMIUM_THEME_VERSION );
	
	// Enqueue main JavaScript
	wp_enqueue_script( 'ai-premium-theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), AI_PREMIUM_THEME_VERSION, true );
	
	// Enqueue navigation JavaScript
	wp_enqueue_script( 'ai-premium-theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), AI_PREMIUM_THEME_VERSION, true );
	
	// Enqueue accessibility JavaScript
	wp_enqueue_script( 'ai-premium-theme-accessibility', get_template_directory_uri() . '/assets/js/accessibility.js', array(), AI_PREMIUM_THEME_VERSION, true );

	// Enqueue comment reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_scripts' );

/**
 * Add preconnect for Google Fonts.
 */
function ai_premium_theme_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'ai-premium-theme-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => true,
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'ai_premium_theme_resource_hints', 10, 2 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Enqueue scripts additions.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * SEO enhancements.
 */
require get_template_directory() . '/inc/seo-enhancements.php';

/**
 * WooCommerce compatibility.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
