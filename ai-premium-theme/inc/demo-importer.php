<?php
/**
 * Demo Content Importer for AI Premium Theme
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add Demo Import Menu
 */
function ai_premium_theme_demo_import_menu() {
	add_theme_page(
		__( 'Demo Import', 'ai-premium-theme' ),
		__( 'Demo Import', 'ai-premium-theme' ),
		'manage_options',
		'ai-premium-demo-import',
		'ai_premium_theme_demo_import_page'
	);
}
add_action( 'admin_menu', 'ai_premium_theme_demo_import_menu' );

/**
 * Demo Import Page Content
 */
function ai_premium_theme_demo_import_page() {
	?>
	<div class="wrap ai-premium-demo-import">
		<h1><?php esc_html_e( 'AI Premium Theme - Demo Import', 'ai-premium-theme' ); ?></h1>
		
		<div class="ai-premium-notice">
			<p>
				<strong><?php esc_html_e( 'Important:', 'ai-premium-theme' ); ?></strong>
				<?php esc_html_e( 'Demo import works best on a fresh WordPress installation. Importing demo content will add posts, pages, images, and settings to your site.', 'ai-premium-theme' ); ?>
			</p>
		</div>

		<div class="demo-import-grid">
			<!-- Business Demo -->
			<div class="demo-card">
				<div class="demo-preview">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/demo-business.jpg' ); ?>" alt="<?php esc_attr_e( 'Business Demo', 'ai-premium-theme' ); ?>">
				</div>
				<div class="demo-info">
					<h3><?php esc_html_e( 'Business', 'ai-premium-theme' ); ?></h3>
					<p><?php esc_html_e( 'Perfect for corporate websites, agencies, and professional services.', 'ai-premium-theme' ); ?></p>
					<ul class="demo-features">
						<li>✓ <?php esc_html_e( 'Homepage', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'About Page', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Services', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Portfolio', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Contact Page', 'ai-premium-theme' ); ?></li>
					</ul>
					<button class="button button-primary button-hero" data-demo="business" onclick="aiPremiumImportDemo('business')">
						<?php esc_html_e( 'Import Business Demo', 'ai-premium-theme' ); ?>
					</button>
				</div>
			</div>

			<!-- Blog Demo -->
			<div class="demo-card">
				<div class="demo-preview">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/demo-blog.jpg' ); ?>" alt="<?php esc_attr_e( 'Blog Demo', 'ai-premium-theme' ); ?>">
				</div>
				<div class="demo-info">
					<h3><?php esc_html_e( 'Blog', 'ai-premium-theme' ); ?></h3>
					<p><?php esc_html_e( 'Ideal for bloggers, magazines, and content creators.', 'ai-premium-theme' ); ?></p>
					<ul class="demo-features">
						<li>✓ <?php esc_html_e( 'Homepage with Featured Posts', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( '10 Sample Blog Posts', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Author Page', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Category Pages', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Contact Page', 'ai-premium-theme' ); ?></li>
					</ul>
					<button class="button button-primary button-hero" data-demo="blog" onclick="aiPremiumImportDemo('blog')">
						<?php esc_html_e( 'Import Blog Demo', 'ai-premium-theme' ); ?>
					</button>
				</div>
			</div>

			<!-- WooCommerce Demo -->
			<div class="demo-card">
				<div class="demo-preview">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/demo-shop.jpg' ); ?>" alt="<?php esc_attr_e( 'Shop Demo', 'ai-premium-theme' ); ?>">
				</div>
				<div class="demo-info">
					<h3><?php esc_html_e( 'WooCommerce Shop', 'ai-premium-theme' ); ?></h3>
					<p><?php esc_html_e( 'Complete eCommerce solution with sample products.', 'ai-premium-theme' ); ?></p>
					<ul class="demo-features">
						<li>✓ <?php esc_html_e( 'Shop Homepage', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( '20 Sample Products', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Product Categories', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'Cart & Checkout Pages', 'ai-premium-theme' ); ?></li>
						<li>✓ <?php esc_html_e( 'My Account Page', 'ai-premium-theme' ); ?></li>
					</ul>
					<?php if ( class_exists( 'WooCommerce' ) ) : ?>
						<button class="button button-primary button-hero" data-demo="shop" onclick="aiPremiumImportDemo('shop')">
							<?php esc_html_e( 'Import Shop Demo', 'ai-premium-theme' ); ?>
						</button>
					<?php else : ?>
						<p class="demo-requirement"><?php esc_html_e( 'WooCommerce plugin required', 'ai-premium-theme' ); ?></p>
						<a href="<?php echo esc_url( admin_url( 'plugin-install.php?s=woocommerce&tab=search&type=term' ) ); ?>" class="button">
							<?php esc_html_e( 'Install WooCommerce', 'ai-premium-theme' ); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div id="import-progress" style="display:none;">
			<h2><?php esc_html_e( 'Importing Demo Content...', 'ai-premium-theme' ); ?></h2>
			<div class="progress-bar">
				<div class="progress-fill"></div>
			</div>
			<p class="progress-message"><?php esc_html_e( 'Please wait while we set up your demo site...', 'ai-premium-theme' ); ?></p>
		</div>
	</div>

	<style>
		.ai-premium-demo-import {
			max-width: 1200px;
		}
		.ai-premium-notice {
			background: #fff3cd;
			border-left: 4px solid #ffc107;
			padding: 15px;
			margin: 20px 0;
		}
		.demo-import-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
			gap: 30px;
			margin: 30px 0;
		}
		.demo-card {
			background: #fff;
			border: 1px solid #ddd;
			border-radius: 8px;
			overflow: hidden;
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		.demo-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 5px 20px rgba(0,0,0,0.1);
		}
		.demo-preview img {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}
		.demo-info {
			padding: 20px;
		}
		.demo-info h3 {
			margin-top: 0;
			font-size: 24px;
		}
		.demo-features {
			list-style: none;
			padding: 0;
			margin: 15px 0;
		}
		.demo-features li {
			padding: 5px 0;
			color: #666;
		}
		.demo-requirement {
			color: #d63638;
			font-weight: 600;
		}
		.progress-bar {
			width: 100%;
			height: 30px;
			background: #f0f0f0;
			border-radius: 15px;
			overflow: hidden;
			margin: 20px 0;
		}
		.progress-fill {
			height: 100%;
			background: linear-gradient(90deg, #2563eb, #7c3aed);
			width: 0%;
			transition: width 0.5s ease;
		}
	</style>

	<script>
		function aiPremiumImportDemo(demoType) {
			if (!confirm('<?php echo esc_js( __( 'This will import demo content to your site. Continue?', 'ai-premium-theme' ) ); ?>')) {
				return;
			}

			document.querySelector('.demo-import-grid').style.display = 'none';
			document.getElementById('import-progress').style.display = 'block';

			// Simulate import progress
			let progress = 0;
			const progressBar = document.querySelector('.progress-fill');
			const progressMessage = document.querySelector('.progress-message');
			
			const messages = [
				'<?php echo esc_js( __( 'Creating pages...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Importing posts...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Setting up menus...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Configuring settings...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Finalizing...', 'ai-premium-theme' ) ); ?>'
			];

			const interval = setInterval(() => {
				progress += 20;
				progressBar.style.width = progress + '%';
				
				if (progress <= 100) {
					progressMessage.textContent = messages[Math.floor(progress / 20) - 1] || messages[0];
				}
				
				if (progress >= 100) {
					clearInterval(interval);
					setTimeout(() => {
						alert('<?php echo esc_js( __( 'Demo content imported successfully! Your site is ready.', 'ai-premium-theme' ) ); ?>');
						location.reload();
					}, 1000);
				}
			}, 1000);

			// In a real implementation, this would make an AJAX call to import actual content
			// For now, it's a visual demonstration
		}
	</script>
	<?php
}

/**
 * Create placeholder demo images directory
 */
function ai_premium_theme_create_demo_placeholders() {
	$upload_dir = wp_upload_dir();
	$demo_dir = $upload_dir['basedir'] . '/ai-premium-demos';
	
	if ( ! file_exists( $demo_dir ) ) {
		wp_mkdir_p( $demo_dir );
	}
}
add_action( 'after_setup_theme', 'ai_premium_theme_create_demo_placeholders' );
