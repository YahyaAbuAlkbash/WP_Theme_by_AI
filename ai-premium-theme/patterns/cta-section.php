<?php
/**
 * Call to action pattern
 *
 * @package AI_Premium_Theme
 */

return array(
	'title'      => __( 'Call to Action', 'ai-premium-theme' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-background-color has-background" style="padding-top:4rem;padding-bottom:4rem">
	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center">' . __( 'Ready to Get Started?', 'ai-premium-theme' ) . '</h2>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . __( 'Join thousands of satisfied users and start building your amazing website today.', 'ai-premium-theme' ) . '</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">' . __( 'Get Started Now', 'ai-premium-theme' ) . '</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->',
);
