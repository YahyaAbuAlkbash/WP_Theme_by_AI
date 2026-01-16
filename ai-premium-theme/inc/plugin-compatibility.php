<?php
/**
 * Plugin Integration Support
 * 
 * Provides styling and compatibility for popular WordPress plugins
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Contact Form 7 Compatibility
 */
function ai_premium_theme_contact_form_7_support() {
	if ( ! function_exists( 'wpcf7_enqueue_scripts' ) ) {
		return;
	}

	// Add custom CF7 styles
	wp_enqueue_style(
		'ai-premium-theme-cf7',
		get_template_directory_uri() . '/assets/css/plugins/contact-form-7.css',
		array(),
		AI_PREMIUM_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_contact_form_7_support' );

/**
 * Elementor Compatibility
 */
function ai_premium_theme_elementor_support() {
	if ( ! did_action( 'elementor/loaded' ) ) {
		return;
	}

	// Add Elementor compatibility
	add_theme_support( 'elementor' );
	
	// Elementor Pro compatibility
	if ( class_exists( 'ElementorPro\Plugin' ) ) {
		add_theme_support( 'elementor-pro' );
	}

	// Add custom Elementor styles
	wp_enqueue_style(
		'ai-premium-theme-elementor',
		get_template_directory_uri() . '/assets/css/plugins/elementor.css',
		array(),
		AI_PREMIUM_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_elementor_support' );

/**
 * WPML Compatibility
 */
function ai_premium_theme_wpml_support() {
	if ( ! function_exists( 'icl_get_languages' ) ) {
		return;
	}

	// WPML is active, add language switcher support
	add_theme_support( 'wpml' );
}
add_action( 'after_setup_theme', 'ai_premium_theme_wpml_support' );

/**
 * Yoast SEO Breadcrumbs Integration
 */
function ai_premium_theme_yoast_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) && ! is_front_page() ) {
		echo '<div class="yoast-breadcrumbs-wrapper">';
		yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
		echo '</div>';
	}
}

/**
 * Gravity Forms Compatibility
 */
function ai_premium_theme_gravity_forms_support() {
	if ( ! class_exists( 'GFForms' ) ) {
		return;
	}

	// Add custom Gravity Forms styles
	wp_enqueue_style(
		'ai-premium-theme-gravity-forms',
		get_template_directory_uri() . '/assets/css/plugins/gravity-forms.css',
		array(),
		AI_PREMIUM_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_gravity_forms_support' );

/**
 * WPForms Compatibility
 */
function ai_premium_theme_wpforms_support() {
	if ( ! function_exists( 'wpforms' ) ) {
		return;
	}

	// Add custom WPForms styles
	wp_enqueue_style(
		'ai-premium-theme-wpforms',
		get_template_directory_uri() . '/assets/css/plugins/wpforms.css',
		array(),
		AI_PREMIUM_THEME_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_wpforms_support' );

/**
 * Jetpack Compatibility
 */
function ai_premium_theme_jetpack_support() {
	if ( ! class_exists( 'Jetpack' ) ) {
		return;
	}

	// Add theme support for Jetpack features
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

	// Support for Responsive Videos
	add_theme_support( 'jetpack-responsive-videos' );
	
	// Support for Content Options
	add_theme_support( 'jetpack-content-options', array(
		'post-details' => array(
			'stylesheet' => 'ai-premium-theme-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
		),
	) );
}
add_action( 'after_setup_theme', 'ai_premium_theme_jetpack_support' );

/**
 * bbPress Compatibility
 */
function ai_premium_theme_bbpress_support() {
	if ( ! class_exists( 'bbPress' ) ) {
		return;
	}

	// Add bbPress support
	add_theme_support( 'bbpress' );
}
add_action( 'after_setup_theme', 'ai_premium_theme_bbpress_support' );

/**
 * BuddyPress Compatibility
 */
function ai_premium_theme_buddypress_support() {
	if ( ! class_exists( 'BuddyPress' ) ) {
		return;
	}

	// Add BuddyPress support
	add_theme_support( 'buddypress' );
}
add_action( 'after_setup_theme', 'ai_premium_theme_buddypress_support' );

/**
 * Create plugin CSS directory and README
 */
function ai_premium_theme_create_plugin_css_directory() {
	$plugin_css_dir = get_template_directory() . '/assets/css/plugins';
	
	if ( ! file_exists( $plugin_css_dir ) ) {
		wp_mkdir_p( $plugin_css_dir );
		
		// Create README for plugin CSS
		$readme_content = "# Plugin Integration Styles\n\n";
		$readme_content .= "This directory contains CSS files for popular WordPress plugin integrations.\n\n";
		$readme_content .= "## Supported Plugins\n\n";
		$readme_content .= "- Contact Form 7 (contact-form-7.css)\n";
		$readme_content .= "- Elementor (elementor.css)\n";
		$readme_content .= "- Gravity Forms (gravity-forms.css)\n";
		$readme_content .= "- WPForms (wpforms.css)\n\n";
		$readme_content .= "Each CSS file provides custom styling to ensure the plugin integrates seamlessly with the AI Premium Theme design.\n";
		
		file_put_contents( $plugin_css_dir . '/README.md', $readme_content );
	}
}
add_action( 'after_setup_theme', 'ai_premium_theme_create_plugin_css_directory' );
