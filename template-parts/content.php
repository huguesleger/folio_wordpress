<?php
/**
 *
 * @package portfolio_hl
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="entryyyy-thumb">
		<!-- <img class="img-responsive" src="<?php the_post_thumbnail('portfolio_hl-blog-image'); ?>"> -->
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('portfolio_hl-blog-image', array('class' => 'img-responsive')); ?></a>
	</div>
	<?php endif; ?>

	<div class="post-content">
		<header class="entry-header">
			<?php

			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );

			if ( 'post' === get_post_type() && get_theme_mod( 'hide_meta_index' ) != 1) : ?>

			<div class="entry-meta">
			<?php portfolio_hl_posted_on(); ?>
		</div><!-- .entry-meta -->
			<?php
			endif; ?>


		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_excerpt();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio_hl' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
