<?php
/**
 * The template for displaying archive pages.
 *
 *
 * @package portfolio_hl
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area col-md-8 <?php echo esc_attr(portfolio_hl_blog_layout()); ?>">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="posts-layouts">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>
			</div>
		<?php
			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	if ( portfolio_hl_blog_layout() == 'list' ) {
		get_sidebar();
	}
?>
</div>
<?php
get_footer();
