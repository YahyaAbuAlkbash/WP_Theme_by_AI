<?php
/**
 * Header pattern with logo and navigation
 *
 * @package AI_Premium_Theme
 */

return array(
	'title'      => __( 'Default Header', 'ai-premium-theme' ),
	'categories' => array( 'header' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:1rem;padding-bottom:1rem">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":100} /-->
		
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title /-->
			<!-- wp:site-tagline /-->
		</div>
		<!-- /wp:group -->
		
		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
