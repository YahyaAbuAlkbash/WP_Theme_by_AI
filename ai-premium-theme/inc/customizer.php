<?php
/**
 * AI Premium Theme Customizer
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ai_premium_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ai_premium_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ai_premium_theme_customize_partial_blogdescription',
			)
		);
	}

	// ============================================
	// HEADER SETTINGS PANEL
	// ============================================
	$wp_customize->add_panel(
		'ai_premium_theme_header_panel',
		array(
			'title'       => esc_html__( 'Header Settings', 'ai-premium-theme' ),
			'description' => esc_html__( 'Customize your header layout and styling', 'ai-premium-theme' ),
			'priority'    => 30,
		)
	);

	// Header Layout Section
	$wp_customize->add_section(
		'ai_premium_theme_header_layout',
		array(
			'title' => esc_html__( 'Header Layout', 'ai-premium-theme' ),
			'panel' => 'ai_premium_theme_header_panel',
		)
	);

	// Header Style
	$wp_customize->add_setting(
		'header_style',
		array(
			'default'           => 'default',
			'sanitize_callback' => 'ai_premium_theme_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'header_style',
		array(
			'label'   => esc_html__( 'Header Style', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_header_layout',
			'type'    => 'select',
			'choices' => array(
				'default'  => esc_html__( 'Default (Centered)', 'ai-premium-theme' ),
				'left'     => esc_html__( 'Logo Left, Menu Right', 'ai-premium-theme' ),
				'minimal'  => esc_html__( 'Minimal Centered', 'ai-premium-theme' ),
			),
		)
	);

	// Header Sticky
	$wp_customize->add_setting(
		'header_sticky',
		array(
			'default'           => true,
			'sanitize_callback' => 'ai_premium_theme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'header_sticky',
		array(
			'label'   => esc_html__( 'Sticky Header', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_header_layout',
			'type'    => 'checkbox',
		)
	);

	// Header Transparency
	$wp_customize->add_setting(
		'header_transparent',
		array(
			'default'           => false,
			'sanitize_callback' => 'ai_premium_theme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'header_transparent',
		array(
			'label'       => esc_html__( 'Transparent Header', 'ai-premium-theme' ),
			'description' => esc_html__( 'Make header transparent on homepage', 'ai-premium-theme' ),
			'section'     => 'ai_premium_theme_header_layout',
			'type'        => 'checkbox',
		)
	);

	// ============================================
	// TYPOGRAPHY PANEL
	// ============================================
	$wp_customize->add_panel(
		'ai_premium_theme_typography_panel',
		array(
			'title'    => esc_html__( 'Typography', 'ai-premium-theme' ),
			'priority' => 40,
		)
	);

	// Body Typography Section
	$wp_customize->add_section(
		'ai_premium_theme_body_typography',
		array(
			'title' => esc_html__( 'Body Typography', 'ai-premium-theme' ),
			'panel' => 'ai_premium_theme_typography_panel',
		)
	);

	// Body Font Family
	$wp_customize->add_setting(
		'body_font_family',
		array(
			'default'           => 'system',
			'sanitize_callback' => 'ai_premium_theme_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'body_font_family',
		array(
			'label'   => esc_html__( 'Body Font', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_body_typography',
			'type'    => 'select',
			'choices' => array(
				'system'      => esc_html__( 'System Fonts (Recommended)', 'ai-premium-theme' ),
				'roboto'      => esc_html__( 'Roboto', 'ai-premium-theme' ),
				'open-sans'   => esc_html__( 'Open Sans', 'ai-premium-theme' ),
				'lato'        => esc_html__( 'Lato', 'ai-premium-theme' ),
				'montserrat'  => esc_html__( 'Montserrat', 'ai-premium-theme' ),
				'poppins'     => esc_html__( 'Poppins', 'ai-premium-theme' ),
			),
		)
	);

	// Body Font Size
	$wp_customize->add_setting(
		'body_font_size',
		array(
			'default'           => '18',
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		'body_font_size',
		array(
			'label'       => esc_html__( 'Body Font Size (px)', 'ai-premium-theme' ),
			'section'     => 'ai_premium_theme_body_typography',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 14,
				'max'  => 24,
				'step' => 1,
			),
		)
	);

	// Heading Typography Section
	$wp_customize->add_section(
		'ai_premium_theme_heading_typography',
		array(
			'title' => esc_html__( 'Heading Typography', 'ai-premium-theme' ),
			'panel' => 'ai_premium_theme_typography_panel',
		)
	);

	// Heading Font Family
	$wp_customize->add_setting(
		'heading_font_family',
		array(
			'default'           => 'system',
			'sanitize_callback' => 'ai_premium_theme_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'heading_font_family',
		array(
			'label'   => esc_html__( 'Heading Font', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_heading_typography',
			'type'    => 'select',
			'choices' => array(
				'system'      => esc_html__( 'System Fonts (Recommended)', 'ai-premium-theme' ),
				'roboto'      => esc_html__( 'Roboto', 'ai-premium-theme' ),
				'open-sans'   => esc_html__( 'Open Sans', 'ai-premium-theme' ),
				'lato'        => esc_html__( 'Lato', 'ai-premium-theme' ),
				'montserrat'  => esc_html__( 'Montserrat', 'ai-premium-theme' ),
				'poppins'     => esc_html__( 'Poppins', 'ai-premium-theme' ),
				'playfair'    => esc_html__( 'Playfair Display', 'ai-premium-theme' ),
			),
		)
	);

	// ============================================
	// BLOG SETTINGS PANEL
	// ============================================
	$wp_customize->add_section(
		'ai_premium_theme_blog_settings',
		array(
			'title'    => esc_html__( 'Blog Settings', 'ai-premium-theme' ),
			'priority' => 50,
		)
	);

	// Blog Layout
	$wp_customize->add_setting(
		'blog_layout',
		array(
			'default'           => 'list',
			'sanitize_callback' => 'ai_premium_theme_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'blog_layout',
		array(
			'label'   => esc_html__( 'Blog Layout', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_blog_settings',
			'type'    => 'select',
			'choices' => array(
				'list'    => esc_html__( 'List View', 'ai-premium-theme' ),
				'grid'    => esc_html__( 'Grid View (2 Columns)', 'ai-premium-theme' ),
				'grid-3'  => esc_html__( 'Grid View (3 Columns)', 'ai-premium-theme' ),
				'masonry' => esc_html__( 'Masonry Grid', 'ai-premium-theme' ),
			),
		)
	);

	// Sidebar Position
	$wp_customize->add_setting(
		'sidebar_position',
		array(
			'default'           => 'right',
			'sanitize_callback' => 'ai_premium_theme_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'sidebar_position',
		array(
			'label'   => esc_html__( 'Sidebar Position', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_blog_settings',
			'type'    => 'select',
			'choices' => array(
				'right' => esc_html__( 'Right Sidebar', 'ai-premium-theme' ),
				'left'  => esc_html__( 'Left Sidebar', 'ai-premium-theme' ),
				'none'  => esc_html__( 'No Sidebar (Full Width)', 'ai-premium-theme' ),
			),
		)
	);

	// Show Featured Image
	$wp_customize->add_setting(
		'show_featured_image',
		array(
			'default'           => true,
			'sanitize_callback' => 'ai_premium_theme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'show_featured_image',
		array(
			'label'   => esc_html__( 'Show Featured Images', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_blog_settings',
			'type'    => 'checkbox',
		)
	);

	// Show Post Meta
	$wp_customize->add_setting(
		'show_post_meta',
		array(
			'default'           => true,
			'sanitize_callback' => 'ai_premium_theme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'show_post_meta',
		array(
			'label'   => esc_html__( 'Show Post Meta (Date, Author)', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_blog_settings',
			'type'    => 'checkbox',
		)
	);

	// Excerpt Length
	$wp_customize->add_setting(
		'excerpt_length',
		array(
			'default'           => '55',
			'sanitize_callback' => 'absint',
		)
	);
	$wp_customize->add_control(
		'excerpt_length',
		array(
			'label'       => esc_html__( 'Excerpt Length (words)', 'ai-premium-theme' ),
			'section'     => 'ai_premium_theme_blog_settings',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 100,
				'step' => 5,
			),
		)
	);

	// ============================================
	// FOOTER SETTINGS
	// ============================================
	$wp_customize->add_section(
		'ai_premium_theme_footer_settings',
		array(
			'title'    => esc_html__( 'Footer Settings', 'ai-premium-theme' ),
			'priority' => 60,
		)
	);

	// Footer Layout
	$wp_customize->add_setting(
		'footer_layout',
		array(
			'default'           => 'columns-3',
			'sanitize_callback' => 'ai_premium_theme_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'footer_layout',
		array(
			'label'   => esc_html__( 'Footer Widget Layout', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_footer_settings',
			'type'    => 'select',
			'choices' => array(
				'columns-3' => esc_html__( '3 Columns', 'ai-premium-theme' ),
				'columns-4' => esc_html__( '4 Columns', 'ai-premium-theme' ),
				'columns-2' => esc_html__( '2 Columns', 'ai-premium-theme' ),
			),
		)
	);

	// Footer Copyright Text
	$wp_customize->add_setting(
		'footer_copyright',
		array(
			'default'           => sprintf(
				/* translators: %s: Current year and site name */
				esc_html__( '© %1$s %2$s. All rights reserved.', 'ai-premium-theme' ),
				date_i18n( 'Y' ),
				get_bloginfo( 'name' )
			),
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		'footer_copyright',
		array(
			'label'       => esc_html__( 'Copyright Text', 'ai-premium-theme' ),
			'section'     => 'ai_premium_theme_footer_settings',
			'type'        => 'textarea',
			'description' => esc_html__( 'Customize your footer copyright text', 'ai-premium-theme' ),
		)
	);

	// ============================================
	// SOCIAL MEDIA LINKS
	// ============================================
	$wp_customize->add_section(
		'ai_premium_theme_social_links',
		array(
			'title'    => esc_html__( 'Social Media Links', 'ai-premium-theme' ),
			'priority' => 70,
		)
	);

	// Social Media Links
	$social_networks = array(
		'facebook'  => 'Facebook',
		'twitter'   => 'Twitter (X)',
		'instagram' => 'Instagram',
		'linkedin'  => 'LinkedIn',
		'youtube'   => 'YouTube',
		'pinterest' => 'Pinterest',
		'github'    => 'GitHub',
	);

	foreach ( $social_networks as $network => $label ) {
		$wp_customize->add_setting(
			'social_' . $network,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'social_' . $network,
			array(
				'label'   => $label . esc_html__( ' URL', 'ai-premium-theme' ),
				'section' => 'ai_premium_theme_social_links',
				'type'    => 'url',
			)
		);
	}

	// ============================================
	// PERFORMANCE SETTINGS
	// ============================================
	$wp_customize->add_section(
		'ai_premium_theme_performance',
		array(
			'title'    => esc_html__( 'Performance', 'ai-premium-theme' ),
			'priority' => 80,
		)
	);

	// Lazy Loading
	$wp_customize->add_setting(
		'enable_lazy_loading',
		array(
			'default'           => true,
			'sanitize_callback' => 'ai_premium_theme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'enable_lazy_loading',
		array(
			'label'       => esc_html__( 'Enable Lazy Loading', 'ai-premium-theme' ),
			'description' => esc_html__( 'Load images only when visible', 'ai-premium-theme' ),
			'section'     => 'ai_premium_theme_performance',
			'type'        => 'checkbox',
		)
	);

	// Smooth Scrolling
	$wp_customize->add_setting(
		'enable_smooth_scroll',
		array(
			'default'           => true,
			'sanitize_callback' => 'ai_premium_theme_sanitize_checkbox',
		)
	);
	$wp_customize->add_control(
		'enable_smooth_scroll',
		array(
			'label'   => esc_html__( 'Enable Smooth Scrolling', 'ai-premium-theme' ),
			'section' => 'ai_premium_theme_performance',
			'type'    => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'ai_premium_theme_customize_register' );

/**
 * Sanitize select fields.
 *
 * @param string $input The input value.
 * @param object $setting The setting object.
 * @return string
 */
function ai_premium_theme_sanitize_select( $input, $setting ) {
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Sanitize checkbox fields.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool
 */
function ai_premium_theme_sanitize_checkbox( $checked ) {
	return ( ( isset( $checked ) && true === $checked ) ? true : false );
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ai_premium_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ai_premium_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ai_premium_theme_customize_preview_js() {
	wp_enqueue_script( 'ai-premium-theme-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), AI_PREMIUM_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'ai_premium_theme_customize_preview_js' );
