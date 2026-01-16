<?php
/**
 * Features Grid Pattern
 *
 * @package AI_Premium_Theme
 */

return array(
	'title'       => __( 'Features Grid', 'ai-premium-theme' ),
	'categories'  => array( 'featured' ),
	'description' => __( 'A grid layout showcasing key features with icons.', 'ai-premium-theme' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center">' . esc_html__( 'Powerful Features', 'ai-premium-theme' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Everything you need to build an amazing website', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"3rem"},"blockGap":"2rem"}}} -->
<div class="wp-block-columns" style="margin-top:3rem"><!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"huge"} -->
<h3 class="wp-block-heading has-text-align-center has-huge-font-size">⚡</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center">' . esc_html__( 'Lightning Fast', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Optimized for speed and performance with minimal load times.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"huge"} -->
<h3 class="wp-block-heading has-text-align-center has-huge-font-size">📱</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center">' . esc_html__( 'Fully Responsive', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Looks perfect on all devices - desktop, tablet, and mobile.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"huge"} -->
<h3 class="wp-block-heading has-text-align-center has-huge-font-size">🎨</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center">' . esc_html__( 'Easy Customization', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Customize colors, fonts, and layouts without touching code.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"2rem"},"blockGap":"2rem"}}} -->
<div class="wp-block-columns" style="margin-top:2rem"><!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"huge"} -->
<h3 class="wp-block-heading has-text-align-center has-huge-font-size">♿</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center">' . esc_html__( 'Accessibility Ready', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'WCAG 2.1 AA compliant for maximum accessibility.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"huge"} -->
<h3 class="wp-block-heading has-text-align-center has-huge-font-size">🔒</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center">' . esc_html__( 'Secure & Safe', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Built with security best practices and regular updates.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-column" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"huge"} -->
<h3 class="wp-block-heading has-text-align-center has-huge-font-size">🌐</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":4} -->
<h4 class="wp-block-heading has-text-align-center">' . esc_html__( 'SEO Optimized', 'ai-premium-theme' ) . '</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Clean code and semantic markup for better search rankings.', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
