<?php
/**
 * Footer pattern with site info and navigation
 *
 * @package AI_Premium_Theme
 */

return array(
	'title'      => __( 'Default Footer', 'ai-premium-theme' ),
	'categories' => array( 'footer' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"backgroundColor":"dark","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-dark-background-color has-text-color has-background" style="padding-top:2rem;padding-bottom:2rem">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3} -->
			<h3>' . __( 'About Us', 'ai-premium-theme' ) . '</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>' . __( 'A modern WordPress theme built with best practices.', 'ai-premium-theme' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3} -->
			<h3>' . __( 'Quick Links', 'ai-premium-theme' ) . '</h3>
			<!-- /wp:heading -->
			
			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3} -->
			<h3>' . __( 'Contact', 'ai-premium-theme' ) . '</h3>
			<!-- /wp:heading -->
			
			<!-- wp:paragraph -->
			<p>' . __( 'Get in touch with us today.', 'ai-premium-theme' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	
	<!-- wp:separator {"backgroundColor":"text-light"} -->
	<hr class="wp-block-separator has-text-color has-text-light-color has-alpha-channel-opacity has-text-light-background-color has-background"/>
	<!-- /wp:separator -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">© ' . date( 'Y' ) . ' ' . __( 'All rights reserved.', 'ai-premium-theme' ) . '</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->',
);
