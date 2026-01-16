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
