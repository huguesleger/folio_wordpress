<?php
/**
 *
 * @package portfolio_hl
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( has_post_thumbnail() && ( get_theme_mod( 'hide_featured_singles' ) != 1 ) ) : ?>
		<?php
		$header_thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
		if ( $header_thumb ) {

			 ?>
<div class="header-single-work" style="background-image: url(<?php echo $header_thumb; ?>);">

		<!-- <h1 class="entry-title"><?php echo the_category(get_option('page_for_posts', true))?></h1> -->
		<?php
	 the_title( '<h1 class="entry-title">', '</h1>' );
	if ( 'post' === get_post_type() && get_theme_mod( 'hide_meta_singles' ) != 1) : ?>

	<?php
	endif; ?>

	 <?php } ?>

		<?php endif; ?>
		<div class="breadcrumbs">
			<?php custom_breadcrumbs(); ?>
	</div>
	</header><!-- .entry-header -->

	<div id="portfolio-type" class="container">
	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'portfolio_hl' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

		?>
	</div><!-- .entry-content -->
	<div class="nav-folio">
	<?php
	// Previous/next post navigation.
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav">' . esc_html__( 'Next Post ', 'portfolio_hl' ) . '</span><span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav">' . esc_html__( 'Previous Post ', 'portfolio_hl' ) . '</span> ' . '<span class="screen-reader-text">' . esc_html__( 'Previous post:', 'portfolio_hl' ) . '</span><span class="post-title">%title</span>',
	) );
	?>
</div>
	</div>


</article><!-- #post-## -->
