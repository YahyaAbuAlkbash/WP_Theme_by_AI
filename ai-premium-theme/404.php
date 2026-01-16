<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AI_Premium_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found" style="text-align: center; padding: 4rem 2rem; max-width: 900px; margin: 0 auto;">
			<div style="font-size: 8rem; line-height: 1; margin-bottom: 1rem; background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: 800;">404</div>
			
			<header class="page-header" style="margin-bottom: 2rem;">
				<h1 class="page-title" style="font-size: 2.5rem; margin-bottom: 1rem; color: #1e293b;"><?php esc_html_e( 'Oops! Page Not Found', 'ai-premium-theme' ); ?></h1>
				<p style="font-size: 1.2rem; color: #64748b; max-width: 600px; margin: 0 auto;"><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'ai-premium-theme' ); ?></p>
			</header><!-- .page-header -->

			<div class="page-content">
				<div style="margin: 3rem 0;">
					<?php get_search_form(); ?>
				</div>

				<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem; text-align: left;">
					<div style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); padding: 2rem; border-radius: 12px; border: 2px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
						<h2 class="widget-title" style="font-size: 1.5rem; margin-bottom: 1.25rem; color: #1e293b;">📄 <?php esc_html_e( 'Recent Posts', 'ai-premium-theme' ); ?></h2>
						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					</div>

					<div style="background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%); padding: 2rem; border-radius: 12px; border: 2px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
						<h2 class="widget-title" style="font-size: 1.5rem; margin-bottom: 1.25rem; color: #1e293b;">📂 <?php esc_html_e( 'Categories', 'ai-premium-theme' ); ?></h2>
						<ul style="list-style: none; padding: 0; margin: 0;">
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div>
				</div>

				<div style="margin-top: 3rem;">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: inline-block; padding: 1rem 2.5rem; background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%); color: white; text-decoration: none; border-radius: 10px; font-weight: 700; font-size: 1.1rem; box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3); transition: all 0.3s ease;">
						🏠 <?php esc_html_e( 'Back to Homepage', 'ai-premium-theme' ); ?>
					</a>
				</div>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #primary -->

<?php
get_footer();
