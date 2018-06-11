<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package portfolio_hl
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if (has_post_thumbnail( )) : ?>
			<?php
			 $page_header_image = wp_get_attachment_image_url( get_post_thumbnail_id( $post->ID ),'full');;
			 if ( $page_header_image ) {
					?>
					<div class="header-page">
					<div class="header-page-content" style="background-image: url(<?php echo $page_header_image; ?>);">
						<div class="title-page">
								<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
						</div>
					</div>
					</div>

			<?php }
			 ?>
			<?php else : ?>
				<div class="wech"></div>
			<?php endif; ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>






		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
