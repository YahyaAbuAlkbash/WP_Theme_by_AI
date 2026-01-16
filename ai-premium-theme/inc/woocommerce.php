<?php
/**
 * WooCommerce Compatibility
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Declare WooCommerce support
 */
function ai_premium_theme_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'ai_premium_theme_woocommerce_support' );

/**
 * WooCommerce wrapper start
 */
function ai_premium_theme_woocommerce_wrapper_before() {
	echo '<div id="primary" class="content-area"><main id="main" class="site-main" role="main">';
}
add_action( 'woocommerce_before_main_content', 'ai_premium_theme_woocommerce_wrapper_before' );

/**
 * WooCommerce wrapper end
 */
function ai_premium_theme_woocommerce_wrapper_after() {
	echo '</main></div>';
}
add_action( 'woocommerce_after_main_content', 'ai_premium_theme_woocommerce_wrapper_after' );

/**
 * Remove default WooCommerce wrappers
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

/**
 * Add cart icon to header menu
 */
function ai_premium_theme_woocommerce_cart_link() {
	if ( ! function_exists( 'WC' ) ) {
		return;
	}
	?>
	<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'ai-premium-theme' ); ?>">
		<span class="cart-icon">🛒</span>
		<span class="cart-count"><?php echo absint( WC()->cart->get_cart_contents_count() ); ?></span>
	</a>
	<?php
}

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function ai_premium_theme_woocommerce_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	ai_premium_theme_woocommerce_cart_link();
	$fragments['a.cart-contents'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ai_premium_theme_woocommerce_header_add_to_cart_fragment' );

/**
 * Change number of products displayed per page
 */
function ai_premium_theme_woocommerce_products_per_page() {
	return 12;
}
add_filter( 'loop_shop_per_page', 'ai_premium_theme_woocommerce_products_per_page', 20 );

/**
 * Change number of related products
 */
function ai_premium_theme_woocommerce_related_products_args( $args ) {
	$args['posts_per_page'] = 4;
	$args['columns']        = 4;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'ai_premium_theme_woocommerce_related_products_args' );

/**
 * Customize breadcrumb separator
 */
function ai_premium_theme_woocommerce_breadcrumb_defaults( $defaults ) {
	$defaults['delimiter']   = ' &raquo; ';
	$defaults['wrap_before'] = '<nav class="woocommerce-breadcrumb" aria-label="' . esc_attr__( 'Breadcrumb', 'ai-premium-theme' ) . '">';
	$defaults['wrap_after']  = '</nav>';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'ai_premium_theme_woocommerce_breadcrumb_defaults' );

/**
 * Enqueue WooCommerce styles
 */
function ai_premium_theme_woocommerce_scripts() {
	wp_enqueue_style( 'ai-premium-theme-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), AI_PREMIUM_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'ai_premium_theme_woocommerce_scripts' );
