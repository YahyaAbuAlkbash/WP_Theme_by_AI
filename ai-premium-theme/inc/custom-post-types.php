<?php
/**
 * Custom Post Types for AI Premium Theme
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Portfolio Custom Post Type
 */
function ai_premium_theme_register_portfolio_cpt() {
	$labels = array(
		'name'                  => _x( 'Portfolio', 'Post Type General Name', 'ai-premium-theme' ),
		'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'ai-premium-theme' ),
		'menu_name'             => __( 'Portfolio', 'ai-premium-theme' ),
		'name_admin_bar'        => __( 'Portfolio Item', 'ai-premium-theme' ),
		'archives'              => __( 'Portfolio Archives', 'ai-premium-theme' ),
		'attributes'            => __( 'Portfolio Attributes', 'ai-premium-theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'ai-premium-theme' ),
		'all_items'             => __( 'All Items', 'ai-premium-theme' ),
		'add_new_item'          => __( 'Add New Item', 'ai-premium-theme' ),
		'add_new'               => __( 'Add New', 'ai-premium-theme' ),
		'new_item'              => __( 'New Item', 'ai-premium-theme' ),
		'edit_item'             => __( 'Edit Item', 'ai-premium-theme' ),
		'update_item'           => __( 'Update Item', 'ai-premium-theme' ),
		'view_item'             => __( 'View Item', 'ai-premium-theme' ),
		'view_items'            => __( 'View Items', 'ai-premium-theme' ),
		'search_items'          => __( 'Search Item', 'ai-premium-theme' ),
		'not_found'             => __( 'Not found', 'ai-premium-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ai-premium-theme' ),
		'featured_image'        => __( 'Featured Image', 'ai-premium-theme' ),
		'set_featured_image'    => __( 'Set featured image', 'ai-premium-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'ai-premium-theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'ai-premium-theme' ),
		'insert_into_item'      => __( 'Insert into item', 'ai-premium-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'ai-premium-theme' ),
		'items_list'            => __( 'Items list', 'ai-premium-theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'ai-premium-theme' ),
		'filter_items_list'     => __( 'Filter items list', 'ai-premium-theme' ),
	);

	$args = array(
		'label'               => __( 'Portfolio Item', 'ai-premium-theme' ),
		'description'         => __( 'Portfolio items for showcasing work', 'ai-premium-theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-portfolio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);

	register_post_type( 'portfolio', $args );

	// Register Portfolio Category Taxonomy
	$category_labels = array(
		'name'              => _x( 'Portfolio Categories', 'taxonomy general name', 'ai-premium-theme' ),
		'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name', 'ai-premium-theme' ),
		'search_items'      => __( 'Search Categories', 'ai-premium-theme' ),
		'all_items'         => __( 'All Categories', 'ai-premium-theme' ),
		'parent_item'       => __( 'Parent Category', 'ai-premium-theme' ),
		'parent_item_colon' => __( 'Parent Category:', 'ai-premium-theme' ),
		'edit_item'         => __( 'Edit Category', 'ai-premium-theme' ),
		'update_item'       => __( 'Update Category', 'ai-premium-theme' ),
		'add_new_item'      => __( 'Add New Category', 'ai-premium-theme' ),
		'new_item_name'     => __( 'New Category Name', 'ai-premium-theme' ),
		'menu_name'         => __( 'Categories', 'ai-premium-theme' ),
	);

	register_taxonomy( 'portfolio_category', array( 'portfolio' ), array(
		'hierarchical'      => true,
		'labels'            => $category_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio-category' ),
		'show_in_rest'      => true,
	) );
}
add_action( 'init', 'ai_premium_theme_register_portfolio_cpt', 0 );

/**
 * Register Team Members Custom Post Type
 */
function ai_premium_theme_register_team_cpt() {
	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'ai-premium-theme' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'ai-premium-theme' ),
		'menu_name'             => __( 'Team', 'ai-premium-theme' ),
		'name_admin_bar'        => __( 'Team Member', 'ai-premium-theme' ),
		'archives'              => __( 'Team Archives', 'ai-premium-theme' ),
		'attributes'            => __( 'Team Attributes', 'ai-premium-theme' ),
		'all_items'             => __( 'All Members', 'ai-premium-theme' ),
		'add_new_item'          => __( 'Add New Member', 'ai-premium-theme' ),
		'add_new'               => __( 'Add New', 'ai-premium-theme' ),
		'new_item'              => __( 'New Member', 'ai-premium-theme' ),
		'edit_item'             => __( 'Edit Member', 'ai-premium-theme' ),
		'update_item'           => __( 'Update Member', 'ai-premium-theme' ),
		'view_item'             => __( 'View Member', 'ai-premium-theme' ),
		'view_items'            => __( 'View Members', 'ai-premium-theme' ),
		'search_items'          => __( 'Search Members', 'ai-premium-theme' ),
		'not_found'             => __( 'Not found', 'ai-premium-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ai-premium-theme' ),
	);

	$args = array(
		'label'               => __( 'Team Member', 'ai-premium-theme' ),
		'description'         => __( 'Team members and staff', 'ai-premium-theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-groups',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);

	register_post_type( 'team', $args );

	// Register Team Department Taxonomy
	$department_labels = array(
		'name'              => _x( 'Departments', 'taxonomy general name', 'ai-premium-theme' ),
		'singular_name'     => _x( 'Department', 'taxonomy singular name', 'ai-premium-theme' ),
		'search_items'      => __( 'Search Departments', 'ai-premium-theme' ),
		'all_items'         => __( 'All Departments', 'ai-premium-theme' ),
		'edit_item'         => __( 'Edit Department', 'ai-premium-theme' ),
		'update_item'       => __( 'Update Department', 'ai-premium-theme' ),
		'add_new_item'      => __( 'Add New Department', 'ai-premium-theme' ),
		'new_item_name'     => __( 'New Department Name', 'ai-premium-theme' ),
		'menu_name'         => __( 'Departments', 'ai-premium-theme' ),
	);

	register_taxonomy( 'team_department', array( 'team' ), array(
		'hierarchical'      => true,
		'labels'            => $department_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'department' ),
		'show_in_rest'      => true,
	) );
}
add_action( 'init', 'ai_premium_theme_register_team_cpt', 0 );

/**
 * Register Services Custom Post Type
 */
function ai_premium_theme_register_services_cpt() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'ai-premium-theme' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'ai-premium-theme' ),
		'menu_name'             => __( 'Services', 'ai-premium-theme' ),
		'name_admin_bar'        => __( 'Service', 'ai-premium-theme' ),
		'archives'              => __( 'Service Archives', 'ai-premium-theme' ),
		'all_items'             => __( 'All Services', 'ai-premium-theme' ),
		'add_new_item'          => __( 'Add New Service', 'ai-premium-theme' ),
		'add_new'               => __( 'Add New', 'ai-premium-theme' ),
		'new_item'              => __( 'New Service', 'ai-premium-theme' ),
		'edit_item'             => __( 'Edit Service', 'ai-premium-theme' ),
		'update_item'           => __( 'Update Service', 'ai-premium-theme' ),
		'view_item'             => __( 'View Service', 'ai-premium-theme' ),
		'view_items'            => __( 'View Services', 'ai-premium-theme' ),
		'search_items'          => __( 'Search Services', 'ai-premium-theme' ),
		'not_found'             => __( 'Not found', 'ai-premium-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ai-premium-theme' ),
	);

	$args = array(
		'label'               => __( 'Service', 'ai-premium-theme' ),
		'description'         => __( 'Services offered', 'ai-premium-theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-lightbulb',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);

	register_post_type( 'service', $args );
}
add_action( 'init', 'ai_premium_theme_register_services_cpt', 0 );

/**
 * Register Testimonials Custom Post Type
 */
function ai_premium_theme_register_testimonials_cpt() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'ai-premium-theme' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'ai-premium-theme' ),
		'menu_name'             => __( 'Testimonials', 'ai-premium-theme' ),
		'name_admin_bar'        => __( 'Testimonial', 'ai-premium-theme' ),
		'all_items'             => __( 'All Testimonials', 'ai-premium-theme' ),
		'add_new_item'          => __( 'Add New Testimonial', 'ai-premium-theme' ),
		'add_new'               => __( 'Add New', 'ai-premium-theme' ),
		'new_item'              => __( 'New Testimonial', 'ai-premium-theme' ),
		'edit_item'             => __( 'Edit Testimonial', 'ai-premium-theme' ),
		'update_item'           => __( 'Update Testimonial', 'ai-premium-theme' ),
		'view_item'             => __( 'View Testimonial', 'ai-premium-theme' ),
		'search_items'          => __( 'Search Testimonials', 'ai-premium-theme' ),
		'not_found'             => __( 'Not found', 'ai-premium-theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'ai-premium-theme' ),
	);

	$args = array(
		'label'               => __( 'Testimonial', 'ai-premium-theme' ),
		'description'         => __( 'Customer testimonials and reviews', 'ai-premium-theme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 8,
		'menu_icon'           => 'dashicons-format-quote',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => false,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);

	register_post_type( 'testimonial', $args );
}
add_action( 'init', 'ai_premium_theme_register_testimonials_cpt', 0 );
