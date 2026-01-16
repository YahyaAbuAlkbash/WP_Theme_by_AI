<?php
/**
 * The front page template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_Premium_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<!-- Hero Section -->
	<section class="hero-section" style="
		background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
		padding: 5rem 2rem;
		text-align: center;
		color: white;
		margin: -3rem -2rem 3rem;
		position: relative;
		overflow: hidden;
	">
		<div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); opacity: 0.3;"></div>
		
		<div style="position: relative; z-index: 1; max-width: 900px; margin: 0 auto;">
			<h1 style="font-size: 3.5rem; font-weight: 900; margin-bottom: 1.5rem; text-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);">
				<?php bloginfo( 'name' ); ?>
			</h1>
			<p style="font-size: 1.5rem; margin-bottom: 2.5rem; opacity: 0.95; line-height: 1.6;">
				<?php 
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) {
					echo esc_html( $description );
				} else {
					esc_html_e( 'A Modern WordPress Theme Built for Excellence', 'ai-premium-theme' );
				}
				?>
			</p>
			<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
				<a href="#features" style="
					display: inline-block;
					padding: 1.25rem 2.5rem;
					background: white;
					color: #2563eb;
					text-decoration: none;
					border-radius: 10px;
					font-weight: 700;
					font-size: 1.1rem;
					box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
					transition: all 0.3s ease;
				" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 28px rgba(0, 0, 0, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(0, 0, 0, 0.2)';">
					<?php esc_html_e( 'Explore Features', 'ai-premium-theme' ); ?>
				</a>
				<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" style="
					display: inline-block;
					padding: 1.25rem 2.5rem;
					background: rgba(255, 255, 255, 0.2);
					color: white;
					text-decoration: none;
					border-radius: 10px;
					font-weight: 700;
					font-size: 1.1rem;
					border: 2px solid white;
					backdrop-filter: blur(10px);
					transition: all 0.3s ease;
				" onmouseover="this.style.background='rgba(255, 255, 255, 0.3)'; this.style.transform='translateY(-3px)';" onmouseout="this.style.background='rgba(255, 255, 255, 0.2)'; this.style.transform='translateY(0)';">
					<?php esc_html_e( 'View Blog', 'ai-premium-theme' ); ?>
				</a>
			</div>
		</div>
	</section>

	<!-- Features Section -->
	<section id="features" class="features-section" style="padding: 4rem 2rem; max-width: 1200px; margin: 0 auto;">
		<div style="text-align: center; margin-bottom: 4rem;">
			<h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
				<?php esc_html_e( 'Amazing Features', 'ai-premium-theme' ); ?>
			</h2>
			<p style="font-size: 1.2rem; color: #64748b; max-width: 700px; margin: 0 auto;">
				<?php esc_html_e( 'Everything you need to create a stunning website', 'ai-premium-theme' ); ?>
			</p>
		</div>

		<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2.5rem;">
			<!-- Feature 1 -->
			<div style="
				background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
				padding: 2.5rem;
				border-radius: 16px;
				border: 2px solid #e2e8f0;
				transition: all 0.3s ease;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
			" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(37, 99, 235, 0.15)'; this.style.borderColor='#2563eb';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.05)'; this.style.borderColor='#e2e8f0';">
				<div style="font-size: 3rem; margin-bottom: 1.5rem;">🚀</div>
				<h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;"><?php esc_html_e( 'Lightning Fast', 'ai-premium-theme' ); ?></h3>
				<p style="color: #64748b; line-height: 1.7;"><?php esc_html_e( 'Optimized for speed and performance to give your visitors the best experience.', 'ai-premium-theme' ); ?></p>
			</div>

			<!-- Feature 2 -->
			<div style="
				background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
				padding: 2.5rem;
				border-radius: 16px;
				border: 2px solid #e2e8f0;
				transition: all 0.3s ease;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
			" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(37, 99, 235, 0.15)'; this.style.borderColor='#2563eb';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.05)'; this.style.borderColor='#e2e8f0';">
				<div style="font-size: 3rem; margin-bottom: 1.5rem;">📱</div>
				<h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;"><?php esc_html_e( 'Fully Responsive', 'ai-premium-theme' ); ?></h3>
				<p style="color: #64748b; line-height: 1.7;"><?php esc_html_e( 'Looks perfect on all devices, from mobile phones to large desktop screens.', 'ai-premium-theme' ); ?></p>
			</div>

			<!-- Feature 3 -->
			<div style="
				background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
				padding: 2.5rem;
				border-radius: 16px;
				border: 2px solid #e2e8f0;
				transition: all 0.3s ease;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
			" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(37, 99, 235, 0.15)'; this.style.borderColor='#2563eb';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.05)'; this.style.borderColor='#e2e8f0';">
				<div style="font-size: 3rem; margin-bottom: 1.5rem;">🎨</div>
				<h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;"><?php esc_html_e( 'Beautiful Design', 'ai-premium-theme' ); ?></h3>
				<p style="color: #64748b; line-height: 1.7;"><?php esc_html_e( 'Modern, clean design with attention to detail and user experience.', 'ai-premium-theme' ); ?></p>
			</div>

			<!-- Feature 4 -->
			<div style="
				background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
				padding: 2.5rem;
				border-radius: 16px;
				border: 2px solid #e2e8f0;
				transition: all 0.3s ease;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
			" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(37, 99, 235, 0.15)'; this.style.borderColor='#2563eb';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.05)'; this.style.borderColor='#e2e8f0';">
				<div style="font-size: 3rem; margin-bottom: 1.5rem;">♿</div>
				<h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;"><?php esc_html_e( 'Accessible', 'ai-premium-theme' ); ?></h3>
				<p style="color: #64748b; line-height: 1.7;"><?php esc_html_e( 'Built with accessibility in mind to ensure everyone can use your site.', 'ai-premium-theme' ); ?></p>
			</div>

			<!-- Feature 5 -->
			<div style="
				background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
				padding: 2.5rem;
				border-radius: 16px;
				border: 2px solid #e2e8f0;
				transition: all 0.3s ease;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
			" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(37, 99, 235, 0.15)'; this.style.borderColor='#2563eb';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.05)'; this.style.borderColor='#e2e8f0';">
				<div style="font-size: 3rem; margin-bottom: 1.5rem;">🔍</div>
				<h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;"><?php esc_html_e( 'SEO Optimized', 'ai-premium-theme' ); ?></h3>
				<p style="color: #64748b; line-height: 1.7;"><?php esc_html_e( 'Enhanced for search engines to help your content rank better.', 'ai-premium-theme' ); ?></p>
			</div>

			<!-- Feature 6 -->
			<div style="
				background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
				padding: 2.5rem;
				border-radius: 16px;
				border: 2px solid #e2e8f0;
				transition: all 0.3s ease;
				box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
			" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(37, 99, 235, 0.15)'; this.style.borderColor='#2563eb';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.05)'; this.style.borderColor='#e2e8f0';">
				<div style="font-size: 3rem; margin-bottom: 1.5rem;">🛒</div>
				<h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem; color: #1e293b;"><?php esc_html_e( 'WooCommerce Ready', 'ai-premium-theme' ); ?></h3>
				<p style="color: #64748b; line-height: 1.7;"><?php esc_html_e( 'Full integration with WooCommerce for your online store needs.', 'ai-premium-theme' ); ?></p>
			</div>
		</div>
	</section>

	<!-- Recent Posts Section -->
	<?php
	$recent_posts = new WP_Query( array(
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	) );

	if ( $recent_posts->have_posts() ) :
	?>
	<section class="recent-posts-section" style="padding: 4rem 2rem; background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); margin: 0 -2rem;">
		<div style="max-width: 1200px; margin: 0 auto;">
			<div style="text-align: center; margin-bottom: 4rem;">
				<h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
					<?php esc_html_e( 'Latest Posts', 'ai-premium-theme' ); ?>
				</h2>
				<p style="font-size: 1.2rem; color: #64748b;">
					<?php esc_html_e( 'Check out our most recent articles', 'ai-premium-theme' ); ?>
				</p>
			</div>

			<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem;">
				<?php
				while ( $recent_posts->have_posts() ) :
					$recent_posts->the_post();
				?>
				<article style="
					background: white;
					border-radius: 16px;
					overflow: hidden;
					box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
					transition: all 0.3s ease;
				" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0, 0, 0, 0.1)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(0, 0, 0, 0.05)';">
					<?php if ( has_post_thumbnail() ) : ?>
						<div style="height: 220px; overflow: hidden;">
							<?php the_post_thumbnail( 'medium', array( 'style' => 'width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;' ) ); ?>
						</div>
					<?php endif; ?>
					<div style="padding: 2rem;">
						<h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.75rem;">
							<a href="<?php the_permalink(); ?>" style="color: #1e293b; text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='#2563eb';" onmouseout="this.style.color='#1e293b';">
								<?php the_title(); ?>
							</a>
						</h3>
						<div style="font-size: 0.9rem; color: #64748b; margin-bottom: 1rem;">
							<?php echo get_the_date(); ?>
						</div>
						<div style="color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
							<?php echo wp_trim_words( get_the_excerpt(), 15 ); ?>
						</div>
						<a href="<?php the_permalink(); ?>" style="
							display: inline-block;
							padding: 0.75rem 1.5rem;
							background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
							color: white;
							text-decoration: none;
							border-radius: 8px;
							font-weight: 600;
							transition: all 0.3s ease;
							box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
						" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 20px rgba(37, 99, 235, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 12px rgba(37, 99, 235, 0.3)';">
							<?php esc_html_e( 'Read More', 'ai-premium-theme' ); ?> →
						</a>
					</div>
				</article>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- CTA Section -->
	<section class="cta-section" style="padding: 5rem 2rem; text-align: center; max-width: 900px; margin: 0 auto;">
		<div style="
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			padding: 4rem 3rem;
			border-radius: 20px;
			color: white;
			box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
		">
			<h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1.5rem; text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);">
				<?php esc_html_e( 'Ready to Get Started?', 'ai-premium-theme' ); ?>
			</h2>
			<p style="font-size: 1.25rem; margin-bottom: 2.5rem; opacity: 0.95;">
				<?php esc_html_e( 'Join thousands of satisfied users and create something amazing today.', 'ai-premium-theme' ); ?>
			</p>
			<a href="<?php echo esc_url( admin_url( 'themes.php?page=ai-premium-demo-import' ) ); ?>" style="
				display: inline-block;
				padding: 1.25rem 2.5rem;
				background: white;
				color: #2563eb;
				text-decoration: none;
				border-radius: 10px;
				font-weight: 700;
				font-size: 1.1rem;
				box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
				transition: all 0.3s ease;
			" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 28px rgba(0, 0, 0, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(0, 0, 0, 0.2)';">
				<?php esc_html_e( 'Import Demo Content', 'ai-premium-theme' ); ?>
			</a>
		</div>
	</section>

</main><!-- #primary -->

<?php
get_footer();
