<?php
/**
 * SEO Enhancements
 *
 * @package AI_Premium_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Add Open Graph meta tags
 */
function ai_premium_theme_add_open_graph_tags() {
	if ( is_singular() ) {
		$post = get_post();
		
		if ( ! $post ) {
			return;
		}
		
		// Open Graph Title
		$og_title = get_the_title( $post->ID );
		echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
		
		// Open Graph Type
		$og_type = is_single() ? 'article' : 'website';
		echo '<meta property="og:type" content="' . esc_attr( $og_type ) . '" />' . "\n";
		
		// Open Graph URL
		echo '<meta property="og:url" content="' . esc_url( get_permalink() ) . '" />' . "\n";
		
		// Open Graph Image
		if ( has_post_thumbnail() ) {
			$og_image = get_the_post_thumbnail_url( $post->ID, 'large' );
			echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />' . "\n";
		}
		
		// Open Graph Description
		if ( ! empty( $post->post_excerpt ) ) {
			$og_description = wp_trim_words( $post->post_excerpt, 30 );
		} else {
			$og_description = wp_trim_words( $post->post_content, 30 );
		}
		echo '<meta property="og:description" content="' . esc_attr( $og_description ) . '" />' . "\n";
		
		// Open Graph Site Name
		echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n";
	} elseif ( is_home() || is_front_page() ) {
		echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n";
		echo '<meta property="og:type" content="website" />' . "\n";
		echo '<meta property="og:url" content="' . esc_url( home_url( '/' ) ) . '" />' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'ai_premium_theme_add_open_graph_tags', 5 );

/**
 * Add Twitter Card meta tags
 */
function ai_premium_theme_add_twitter_card_tags() {
	if ( is_singular() ) {
		$post = get_post();
		
		if ( ! $post ) {
			return;
		}
		
		// Twitter Card Type
		echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
		
		// Twitter Title
		echo '<meta name="twitter:title" content="' . esc_attr( get_the_title( $post->ID ) ) . '" />' . "\n";
		
		// Twitter Description
		if ( ! empty( $post->post_excerpt ) ) {
			$twitter_description = wp_trim_words( $post->post_excerpt, 30 );
		} else {
			$twitter_description = wp_trim_words( $post->post_content, 30 );
		}
		echo '<meta name="twitter:description" content="' . esc_attr( $twitter_description ) . '" />' . "\n";
		
		// Twitter Image
		if ( has_post_thumbnail() ) {
			$twitter_image = get_the_post_thumbnail_url( $post->ID, 'large' );
			echo '<meta name="twitter:image" content="' . esc_url( $twitter_image ) . '" />' . "\n";
		}
	}
}
add_action( 'wp_head', 'ai_premium_theme_add_twitter_card_tags', 5 );

/**
 * Add Schema.org structured data for articles
 */
function ai_premium_theme_add_schema_markup() {
	if ( is_single() ) {
		$post = get_post();
		
		if ( ! $post ) {
			return;
		}
		
		$schema = array(
			'@context'      => 'https://schema.org',
			'@type'         => 'Article',
			'headline'      => get_the_title( $post->ID ),
			'datePublished' => get_the_date( 'c', $post->ID ),
			'dateModified'  => get_the_modified_date( 'c', $post->ID ),
			'author'        => array(
				'@type' => 'Person',
				'name'  => get_the_author_meta( 'display_name', $post->post_author ),
			),
		);
		
		// Add image if available
		if ( has_post_thumbnail() ) {
			$schema['image'] = get_the_post_thumbnail_url( $post->ID, 'large' );
		}
		
		// Add publisher information
		$schema['publisher'] = array(
			'@type' => 'Organization',
			'name'  => get_bloginfo( 'name' ),
			'url'   => home_url( '/' ),
		);
		
		// Add article body
		if ( ! empty( $post->post_excerpt ) ) {
			$schema['description'] = wp_trim_words( $post->post_excerpt, 30 );
		}
		
		echo '<script type="application/ld+json">' . "\n";
		echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "\n";
		echo '</script>' . "\n";
	}
	
	// Add Organization schema for homepage
	if ( is_home() || is_front_page() ) {
		$schema = array(
			'@context' => 'https://schema.org',
			'@type'    => 'Organization',
			'name'     => get_bloginfo( 'name' ),
			'url'      => home_url( '/' ),
		);
		
		echo '<script type="application/ld+json">' . "\n";
		echo wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "\n";
		echo '</script>' . "\n";
	}
}
add_action( 'wp_head', 'ai_premium_theme_add_schema_markup', 10 );

/**
 * Add breadcrumbs functionality
 */
function ai_premium_theme_breadcrumbs() {
	// Don't display on the homepage
	if ( is_front_page() ) {
		return;
	}
	
	$show_on_home = false; // If false, don't show on the homepage
	$delimiter    = ' &raquo; ';
	$home         = esc_html__( 'Home', 'ai-premium-theme' );
	$before       = '<span class="current">';
	$after        = '</span>';
	
	global $post;
	$home_link = home_url( '/' );
	
	echo '<nav class="breadcrumbs" aria-label="' . esc_attr__( 'Breadcrumb', 'ai-premium-theme' ) . '">';
	echo '<a href="' . esc_url( $home_link ) . '">' . esc_html( $home ) . '</a>' . $delimiter;
	
	if ( is_category() ) {
		$cat = get_queried_object();
		if ( $cat->parent != 0 ) {
			$parent_cat = get_category( $cat->parent );
			// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- get_category_parents() escapes output internally
			echo get_category_parents( $parent_cat, true, $delimiter );
		}
		echo $before . esc_html( single_cat_title( '', false ) ) . $after;
	} elseif ( is_search() ) {
		echo $before . esc_html__( 'Search results for', 'ai-premium-theme' ) . ' "' . esc_html( get_search_query() ) . '"' . $after;
	} elseif ( is_day() ) {
		echo '<a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $delimiter;
		echo '<a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . get_the_time( 'F' ) . '</a>' . $delimiter;
		echo $before . get_the_time( 'd' ) . $after;
	} elseif ( is_month() ) {
		echo '<a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $delimiter;
		echo $before . get_the_time( 'F' ) . $after;
	} elseif ( is_year() ) {
		echo $before . get_the_time( 'Y' ) . $after;
	} elseif ( is_single() && ! is_attachment() ) {
		if ( get_post_type() != 'post' ) {
			$post_type = get_post_type_object( get_post_type() );
			$slug      = $post_type->rewrite;
			echo '<a href="' . esc_url( $home_link . '/' . $slug['slug'] . '/' ) . '">' . esc_html( $post_type->labels->singular_name ) . '</a>' . $delimiter;
			echo $before . esc_html( get_the_title() ) . $after;
		} else {
			$cat = get_the_category();
			if ( ! empty( $cat ) ) {
				$cat = $cat[0];
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- get_category_parents() escapes output internally
				echo get_category_parents( $cat, true, $delimiter );
			}
			echo $before . esc_html( get_the_title() ) . $after;
		}
	} elseif ( ! is_single() && ! is_page() && get_post_type() != 'post' && ! is_404() ) {
		$post_type = get_post_type_object( get_post_type() );
		if ( $post_type ) {
			echo $before . esc_html( $post_type->labels->singular_name ) . $after;
		}
	} elseif ( is_attachment() ) {
		$post = get_post();
		if ( $post && $post->post_parent ) {
			$parent = get_post( $post->post_parent );
			if ( $parent ) {
				$cat = get_the_category( $parent->ID );
				if ( ! empty( $cat ) ) {
					$cat = $cat[0];
					// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- get_category_parents() escapes output internally
					echo get_category_parents( $cat, true, $delimiter );
				}
				echo '<a href="' . esc_url( get_permalink( $parent ) ) . '">' . esc_html( $parent->post_title ) . '</a>' . $delimiter;
			}
		}
		echo $before . esc_html( get_the_title() ) . $after;
	} elseif ( is_page() ) {
		$post = get_post();
		if ( ! $post ) {
			return;
		}
		if ( ! $post->post_parent ) {
			echo $before . esc_html( get_the_title() ) . $after;
		} else {
			$parent_id   = $post->post_parent;
			$breadcrumbs = array();
			while ( $parent_id ) {
				$page          = get_post( $parent_id );
				$breadcrumbs[] = '<a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( get_the_title( $page->ID ) ) . '</a>';
				$parent_id     = $page->post_parent;
			}
			$breadcrumbs = array_reverse( $breadcrumbs );
			foreach ( $breadcrumbs as $crumb ) {
				// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Already escaped above
				echo $crumb . $delimiter;
			}
			echo $before . esc_html( get_the_title() ) . $after;
		}
	} elseif ( is_tag() ) {
		echo $before . esc_html__( 'Tag', 'ai-premium-theme' ) . ' "' . esc_html( single_tag_title( '', false ) ) . '"' . $after;
	} elseif ( is_author() ) {
		$author = get_queried_object();
		echo $before . esc_html__( 'Author', 'ai-premium-theme' ) . ' "' . esc_html( $author->display_name ) . '"' . $after;
	} elseif ( is_404() ) {
		echo $before . esc_html__( '404 Error', 'ai-premium-theme' ) . $after;
	}
	
	if ( get_query_var( 'paged' ) ) {
		echo ' (' . esc_html__( 'Page', 'ai-premium-theme' ) . ' ' . absint( get_query_var( 'paged' ) ) . ')';
	}
	
	echo '</nav>';
}

/**
 * Add meta description
 */
function ai_premium_theme_add_meta_description() {
	if ( is_singular() ) {
		global $post;
		if ( ! empty( $post->post_excerpt ) ) {
			$description = wp_trim_words( $post->post_excerpt, 25 );
		} else {
			$description = wp_trim_words( $post->post_content, 25 );
		}
		echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
	} elseif ( is_home() || is_front_page() ) {
		$description = get_bloginfo( 'description' );
		if ( $description ) {
			echo '<meta name="description" content="' . esc_attr( $description ) . '" />' . "\n";
		}
	}
}
add_action( 'wp_head', 'ai_premium_theme_add_meta_description', 1 );
