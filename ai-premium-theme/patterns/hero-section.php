<?php
/**
 * Hero section pattern
 *
 * @package AI_Premium_Theme
 */

return array(
	'title'      => __( 'Hero Section', 'ai-premium-theme' ),
	'categories' => array( 'featured' ),
	'content'    => '<!-- wp:cover {"overlayColor":"dark","minHeight":500,"isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:500px">
	<span aria-hidden="true" class="wp-block-cover__background has-dark-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">
		<!-- wp:heading {"textAlign":"center","level":1,"textColor":"white"} -->
		<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color">' . __( 'Welcome to AI Premium Theme', 'ai-premium-theme' ) . '</h1>
		<!-- /wp:heading -->
		
		<!-- wp:paragraph {"align":"center","textColor":"white"} -->
		<p class="has-text-align-center has-white-color has-text-color">' . __( 'A modern, feature-rich WordPress theme built for 2026', 'ai-premium-theme' ) . '</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"backgroundColor":"primary"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button">' . __( 'Get Started', 'ai-premium-theme' ) . '</a></div>
			<!-- /wp:button -->
			
			<!-- wp:button {"backgroundColor":"accent"} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button">' . __( 'Learn More', 'ai-premium-theme' ) . '</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
</div>
<!-- /wp:cover -->',
);
