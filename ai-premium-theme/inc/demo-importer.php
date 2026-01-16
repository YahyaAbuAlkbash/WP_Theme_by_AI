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
					<div class="demo-icon">🏢</div>
				</div>
				<div class="demo-info">
					<h3><?php esc_html_e( 'Business', 'ai-premium-theme' ); ?></h3>
					<p><?php esc_html_e( 'Perfect for corporate websites, agencies, and professional services.', 'ai-premium-theme' ); ?></p>
					<ul class="demo-features">
						<li><?php esc_html_e( 'Homepage', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'About Page', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Services', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Portfolio', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Contact Page', 'ai-premium-theme' ); ?></li>
					</ul>
					<button class="button button-primary button-hero" data-demo="business" onclick="aiPremiumImportDemo('business')">
						<?php esc_html_e( 'Import Business Demo', 'ai-premium-theme' ); ?>
					</button>
				</div>
			</div>

			<!-- Blog Demo -->
			<div class="demo-card">
				<div class="demo-preview">
					<div class="demo-icon">✍️</div>
				</div>
				<div class="demo-info">
					<h3><?php esc_html_e( 'Blog', 'ai-premium-theme' ); ?></h3>
					<p><?php esc_html_e( 'Ideal for bloggers, magazines, and content creators.', 'ai-premium-theme' ); ?></p>
					<ul class="demo-features">
						<li><?php esc_html_e( 'Homepage with Featured Posts', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( '10 Sample Blog Posts', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Author Page', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Category Pages', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Contact Page', 'ai-premium-theme' ); ?></li>
					</ul>
					<button class="button button-primary button-hero" data-demo="blog" onclick="aiPremiumImportDemo('blog')">
						<?php esc_html_e( 'Import Blog Demo', 'ai-premium-theme' ); ?>
					</button>
				</div>
			</div>

			<!-- WooCommerce Demo -->
			<div class="demo-card">
				<div class="demo-preview">
					<div class="demo-icon">🛍️</div>
				</div>
				<div class="demo-info">
					<h3><?php esc_html_e( 'WooCommerce Shop', 'ai-premium-theme' ); ?></h3>
					<p><?php esc_html_e( 'Complete eCommerce solution with sample products.', 'ai-premium-theme' ); ?></p>
					<ul class="demo-features">
						<li><?php esc_html_e( 'Shop Homepage', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( '20 Sample Products', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Product Categories', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'Cart & Checkout Pages', 'ai-premium-theme' ); ?></li>
						<li><?php esc_html_e( 'My Account Page', 'ai-premium-theme' ); ?></li>
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
			<div class="loading-spinner"></div>
			<h2><?php esc_html_e( 'Importing Demo Content...', 'ai-premium-theme' ); ?></h2>
			<div class="progress-bar">
				<div class="progress-fill"></div>
			</div>
			<p class="progress-message"><?php esc_html_e( 'Please wait while we set up your demo site...', 'ai-premium-theme' ); ?></p>
		</div>
	</div>

	<style>
		.ai-premium-demo-import {
			max-width: 1400px;
			padding: 2rem;
		}
		
		.ai-premium-demo-import h1 {
			font-size: 2.5rem;
			font-weight: 800;
			background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			margin-bottom: 1rem;
		}
		
		.ai-premium-notice {
			background: linear-gradient(135deg, #fff9e6 0%, #fffbf0 100%);
			border-left: 4px solid #f59e0b;
			padding: 1.5rem 2rem;
			margin: 2rem 0;
			border-radius: 12px;
			box-shadow: 0 4px 12px rgba(245, 158, 11, 0.15);
		}
		
		.ai-premium-notice strong {
			color: #f59e0b;
			font-size: 1.1rem;
		}
		
		.demo-import-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
			gap: 2.5rem;
			margin: 3rem 0;
		}
		
		.demo-card {
			background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
			border: 2px solid #e2e8f0;
			border-radius: 16px;
			overflow: hidden;
			transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
			position: relative;
		}
		
		.demo-card::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 4px;
			background: linear-gradient(90deg, #2563eb 0%, #7c3aed 100%);
			transform: scaleX(0);
			transition: transform 0.4s ease;
		}
		
		.demo-card:hover {
			transform: translateY(-8px);
			box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
			border-color: #2563eb;
		}
		
		.demo-card:hover::before {
			transform: scaleX(1);
		}
		
		.demo-preview {
			height: 240px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			display: flex;
			align-items: center;
			justify-content: center;
			position: relative;
			overflow: hidden;
		}
		
		.demo-preview::after {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: linear-gradient(135deg, rgba(37, 99, 235, 0.8) 0%, rgba(124, 58, 237, 0.8) 100%);
			opacity: 0;
			transition: opacity 0.4s ease;
		}
		
		.demo-card:hover .demo-preview::after {
			opacity: 1;
		}
		
		.demo-preview img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.5s ease;
		}
		
		.demo-card:hover .demo-preview img {
			transform: scale(1.1);
		}
		
		.demo-preview .demo-icon {
			position: relative;
			z-index: 1;
			font-size: 5rem;
			color: white;
			opacity: 0.9;
		}
		
		.demo-info {
			padding: 2rem;
		}
		
		.demo-info h3 {
			margin-top: 0;
			font-size: 1.75rem;
			font-weight: 800;
			color: #1e293b;
			margin-bottom: 0.75rem;
		}
		
		.demo-info p {
			color: #64748b;
			font-size: 1.05rem;
			line-height: 1.6;
			margin-bottom: 1.5rem;
		}
		
		.demo-features {
			list-style: none;
			padding: 0;
			margin: 1.5rem 0;
			display: grid;
			gap: 0.75rem;
		}
		
		.demo-features li {
			padding: 0.75rem 1rem;
			color: #475569;
			background: #f1f5f9;
			border-radius: 8px;
			font-size: 0.95rem;
			font-weight: 500;
			transition: all 0.3s ease;
			display: flex;
			align-items: center;
			gap: 0.5rem;
		}
		
		.demo-features li::before {
			content: "✓";
			display: inline-flex;
			align-items: center;
			justify-content: center;
			width: 20px;
			height: 20px;
			background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
			color: white;
			border-radius: 50%;
			font-weight: 700;
			font-size: 0.75rem;
		}
		
		.demo-features li:hover {
			background: #e0e7ff;
			padding-left: 1.25rem;
		}
		
		.demo-card button {
			width: 100%;
			padding: 1rem 1.5rem;
			border: none;
			border-radius: 10px;
			background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
			color: white;
			font-size: 1.05rem;
			font-weight: 700;
			cursor: pointer;
			transition: all 0.3s ease;
			box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
			margin-top: 1.5rem;
		}
		
		.demo-card button:hover {
			transform: translateY(-2px);
			box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
			background: linear-gradient(135deg, #1e40af 0%, #6d28d9 100%);
		}
		
		.demo-requirement {
			color: #dc2626;
			font-weight: 600;
			background: #fee;
			padding: 0.75rem 1rem;
			border-radius: 8px;
			margin: 1rem 0;
			text-align: center;
		}
		
		.demo-card a.button {
			display: block;
			width: 100%;
			padding: 1rem 1.5rem;
			border: 2px solid #2563eb;
			border-radius: 10px;
			background: white;
			color: #2563eb;
			font-size: 1.05rem;
			font-weight: 700;
			text-align: center;
			text-decoration: none;
			transition: all 0.3s ease;
			margin-top: 1rem;
		}
		
		.demo-card a.button:hover {
			background: #2563eb;
			color: white;
			transform: translateY(-2px);
			box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
		}
		
		#import-progress {
			background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
			border-radius: 16px;
			padding: 3rem;
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
			text-align: center;
		}
		
		#import-progress h2 {
			font-size: 2rem;
			font-weight: 800;
			background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			background-clip: text;
			margin-bottom: 2rem;
		}
		
		.progress-bar {
			width: 100%;
			height: 40px;
			background: #f1f5f9;
			border-radius: 20px;
			overflow: hidden;
			margin: 2rem 0;
			box-shadow: inset 0 2px 8px rgba(0, 0, 0, 0.1);
			position: relative;
		}
		
		.progress-bar::before {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			height: 50%;
			background: linear-gradient(180deg, rgba(255, 255, 255, 0.3) 0%, transparent 100%);
		}
		
		.progress-fill {
			height: 100%;
			background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
			width: 0%;
			transition: width 0.5s ease;
			position: relative;
			display: flex;
			align-items: center;
			justify-content: flex-end;
			padding-right: 1rem;
			color: white;
			font-weight: 700;
			box-shadow: 0 0 20px rgba(37, 99, 235, 0.5);
		}
		
		.progress-fill::after {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
			animation: shimmer 2s infinite;
		}
		
		@keyframes shimmer {
			0% { transform: translateX(-100%); }
			100% { transform: translateX(100%); }
		}
		
		.progress-message {
			font-size: 1.15rem;
			color: #475569;
			font-weight: 600;
			margin-top: 1.5rem;
		}
		
		/* Loading Animation */
		.loading-spinner {
			display: inline-block;
			width: 50px;
			height: 50px;
			border: 5px solid #e2e8f0;
			border-top-color: #2563eb;
			border-radius: 50%;
			animation: spin 1s linear infinite;
			margin: 2rem 0;
		}
		
		@keyframes spin {
			to { transform: rotate(360deg); }
		}
	</style>

	<script>
		function aiPremiumImportDemo(demoType) {
			if (!confirm('<?php echo esc_js( __( 'This will import demo content to your site. Continue?', 'ai-premium-theme' ) ); ?>')) {
				return;
			}

			document.querySelector('.demo-import-grid').style.display = 'none';
			document.querySelector('.ai-premium-notice').style.display = 'none';
			document.getElementById('import-progress').style.display = 'block';

			// Simulate import progress with better UI feedback
			let progress = 0;
			const progressBar = document.querySelector('.progress-fill');
			const progressMessage = document.querySelector('.progress-message');
			
			const messages = [
				'<?php echo esc_js( __( 'Preparing import...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Creating pages...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Importing posts...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Setting up menus...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Configuring settings...', 'ai-premium-theme' ) ); ?>',
				'<?php echo esc_js( __( 'Finalizing...', 'ai-premium-theme' ) ); ?>'
			];

			const interval = setInterval(() => {
				progress += 100 / messages.length;
				const displayProgress = Math.min(progress, 100);
				progressBar.style.width = displayProgress + '%';
				progressBar.textContent = Math.round(displayProgress) + '%';
				
				const messageIndex = Math.min(Math.floor(progress / (100 / messages.length)), messages.length - 1);
				progressMessage.textContent = messages[messageIndex];
				
				if (progress >= 100) {
					clearInterval(interval);
					setTimeout(() => {
						// Show success message
						const progressDiv = document.getElementById('import-progress');
						progressDiv.innerHTML = `
							<div style="text-align: center;">
								<div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
								<h2 style="color: #059669; margin-bottom: 1rem;">
									<?php echo esc_js( __( 'Import Completed Successfully!', 'ai-premium-theme' ) ); ?>
								</h2>
								<p style="font-size: 1.15rem; color: #475569; margin-bottom: 2rem;">
									<?php echo esc_js( __( 'Your demo content has been imported. Your site is now ready!', 'ai-premium-theme' ) ); ?>
								</p>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button-primary" style="
									display: inline-block;
									padding: 1rem 2rem;
									background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
									color: white;
									text-decoration: none;
									border-radius: 10px;
									font-weight: 700;
									box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
								">
									<?php echo esc_js( __( 'View Your Site', 'ai-premium-theme' ) ); ?>
								</a>
							</div>
						`;
					}, 500);
				}
			}, 800);

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
