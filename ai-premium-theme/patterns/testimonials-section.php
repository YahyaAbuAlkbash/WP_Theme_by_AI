<?php
/**
 * Testimonials Section Pattern
 *
 * @package AI_Premium_Theme
 */

return array(
	'title'       => __( 'Testimonials Section', 'ai-premium-theme' ),
	'categories'  => array( 'featured' ),
	'description' => __( 'A section displaying customer testimonials in a grid layout.', 'ai-premium-theme' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"light"} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center">' . esc_html__( 'What Our Customers Say', 'ai-premium-theme' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Don\'t just take our word for it - hear from our satisfied customers', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
<div class="wp-block-columns" style="margin-top:3rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"white","className":"testimonial-card"} -->
<div class="wp-block-group testimonial-card has-white-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:paragraph -->
<p>"' . esc_html__( 'This theme is absolutely fantastic! It\'s easy to customize and looks professional on all devices. Highly recommended!', 'ai-premium-theme' ) . '"</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">' . esc_html__( 'John Doe', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
<p style="font-size:0.875rem">' . esc_html__( 'CEO, Company Inc.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"white","className":"testimonial-card"} -->
<div class="wp-block-group testimonial-card has-white-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:paragraph -->
<p>"' . esc_html__( 'Outstanding design and performance. The support team is incredibly helpful and responsive. A truly premium experience!', 'ai-premium-theme' ) . '"</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">' . esc_html__( 'Jane Smith', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
<p style="font-size:0.875rem">' . esc_html__( 'Marketing Director, Startup Co.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"backgroundColor":"white","className":"testimonial-card"} -->
<div class="wp-block-group testimonial-card has-white-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:paragraph -->
<p>"' . esc_html__( 'The best WordPress theme I\'ve ever used. Clean code, great documentation, and beautiful design out of the box.', 'ai-premium-theme' ) . '"</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">' . esc_html__( 'Mike Johnson', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
<p style="font-size:0.875rem">' . esc_html__( 'Web Developer, Digital Agency', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
