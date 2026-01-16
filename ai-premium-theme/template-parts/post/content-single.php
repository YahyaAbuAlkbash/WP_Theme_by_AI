<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_Premium_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background: white; border-radius: 12px; padding: 3rem; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05); margin-bottom: 2rem;">
	<header class="entry-header" style="text-align: center; margin-bottom: 2.5rem;">
		<?php the_title( '<h1 class="entry-title" style="font-size: 2.75rem; font-weight: 800; margin-bottom: 1.5rem; background: linear-gradient(135deg, #1e293b 0%, #2563eb 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">', '</h1>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta" style="font-size: 1rem; color: #64748b; display: flex; justify-content: center; gap: 1.5rem; flex-wrap: wrap;">
			<?php
			ai_premium_theme_posted_on();
			ai_premium_theme_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
	<div style="margin: 0 -3rem 2.5rem; height: 400px; overflow: hidden;">
		<?php the_post_thumbnail( 'large', array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
	</div>
	<?php endif; ?>

	<div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #334155;">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links" style="margin-top: 3rem; padding: 2rem; background: #f8fafc; border-radius: 10px; display: flex; gap: 0.5rem; flex-wrap: wrap;">' . esc_html__( 'Pages:', 'ai-premium-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer" style="margin-top: 3rem; padding-top: 2rem; border-top: 2px solid #e2e8f0; font-size: 0.95rem; color: #64748b;">
		<?php ai_premium_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
