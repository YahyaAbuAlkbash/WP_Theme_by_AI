<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_Premium_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?> style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); transition: all 0.3s ease; margin-bottom: 2rem;">
	<?php ai_premium_theme_post_thumbnail(); ?>

	<div style="padding: 2rem;">
		<header class="entry-header" style="text-align: left; margin-bottom: 1.25rem;">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title" style="font-size: 1.75rem; margin-bottom: 0.75rem;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" style="color: #1e293b; text-decoration: none; transition: color 0.3s ease;">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta" style="font-size: 0.9rem; color: #64748b; display: flex; gap: 1rem; flex-wrap: wrap;">
					<?php
					ai_premium_theme_posted_on();
					ai_premium_theme_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content" style="color: #475569; line-height: 1.7;">
			<?php
			if ( is_singular() ) {
				the_content();
			} else {
				the_excerpt();
			}

			if ( ! is_singular() ) :
				?>
				<a href="<?php the_permalink(); ?>" style="display: inline-block; margin-top: 1rem; padding: 0.75rem 1.5rem; background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);">
					<?php esc_html_e( 'Read More', 'ai-premium-theme' ); ?> →
				</a>
				<?php
			endif;

			wp_link_pages(
				array(
					'before' => '<div class="page-links" style="margin-top: 2rem; padding-top: 2rem; border-top: 2px solid #e2e8f0;">' . esc_html__( 'Pages:', 'ai-premium-theme' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<?php if ( is_singular() ) : ?>
		<footer class="entry-footer" style="margin-top: 2rem; padding-top: 2rem; border-top: 2px solid #e2e8f0;">
			<?php ai_premium_theme_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php endif; ?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
