<?php
/**
 * Pricing Table Pattern
 *
 * @package AI_Premium_Theme
 */

return array(
	'title'       => __( 'Pricing Table', 'ai-premium-theme' ),
	'categories'  => array( 'featured' ),
	'description' => __( 'A pricing table with three tiers for showcasing product or service plans.', 'ai-premium-theme' ),
	'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"light"} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:heading {"textAlign":"center","level":2} -->
<h2 class="wp-block-heading has-text-align-center">' . esc_html__( 'Choose Your Plan', 'ai-premium-theme' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">' . esc_html__( 'Select the perfect plan for your needs', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"3rem"},"blockGap":"2rem"}}} -->
<div class="wp-block-columns" style="margin-top:3rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"text-light","backgroundColor":"white"} -->
<div class="wp-block-group has-border-color has-text-light-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">' . esc_html__( 'Starter', 'ai-premium-theme' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color">$29</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">' . esc_html__( 'per month', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:1.5rem;margin-bottom:1.5rem"/>
<!-- /wp:separator -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>' . esc_html__( '5 Projects', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( '10GB Storage', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( 'Email Support', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( 'Basic Features', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Get Started', 'ai-premium-theme' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5rem","right":"2rem","bottom":"2.5rem","left":"2rem"}},"border":{"width":"2px","radius":"8px"}},"borderColor":"primary","backgroundColor":"white"} -->
<div class="wp-block-group has-border-color has-primary-border-color has-white-background-color has-background" style="border-width:2px;border-radius:8px;padding-top:2.5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem"}},"backgroundColor":"primary","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-primary-background-color has-text-color has-background" style="font-size:0.75rem">' . esc_html__( 'MOST POPULAR', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">' . esc_html__( 'Professional', 'ai-premium-theme' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color">$79</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">' . esc_html__( 'per month', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:1.5rem;margin-bottom:1.5rem"/>
<!-- /wp:separator -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>' . esc_html__( '20 Projects', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( '100GB Storage', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( 'Priority Support', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( 'All Features', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button {"backgroundColor":"primary","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">' . esc_html__( 'Get Started', 'ai-premium-theme' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"text-light","backgroundColor":"white"} -->
<div class="wp-block-group has-border-color has-text-light-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">' . esc_html__( 'Enterprise', 'ai-premium-theme' ) . '</h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":2,"textColor":"primary"} -->
<h2 class="wp-block-heading has-text-align-center has-primary-color has-text-color">$199</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">' . esc_html__( 'per month', 'ai-premium-theme' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"1.5rem","bottom":"1.5rem"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity" style="margin-top:1.5rem;margin-bottom:1.5rem"/>
<!-- /wp:separator -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>' . esc_html__( 'Unlimited Projects', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( 'Unlimited Storage', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( '24/7 Support', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>' . esc_html__( 'Custom Features', 'ai-premium-theme' ) . '</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">' . esc_html__( 'Contact Us', 'ai-premium-theme' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);
