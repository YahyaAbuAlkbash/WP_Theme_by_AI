<?php
/**
 * AI Premium Theme Child Functions
 *
 * @package AI_Premium_Theme_Child
 */

/**
 * Enqueue parent and child theme styles
 */
function ai_premium_child_enqueue_styles() {
	// Enqueue parent theme stylesheet
	wp_enqueue_style(
		'ai-premium-theme-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->parent()->get( 'Version' )
	);
	
	// Enqueue child theme stylesheet
	wp_enqueue_style(
		'ai-premium-theme-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( 'ai-premium-theme-parent-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'ai_premium_child_enqueue_styles' );

/**
 * Add your custom functions below this line
 */
