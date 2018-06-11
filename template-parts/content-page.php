<?php
/**
 *
 * @package portfolio_hl
 */

?>

<article id=" post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-headerr">

	</header> -->


	<div class="entry-content container">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio_hl' ),
				'after'  => '</div>',
			) );
		?>
	</div>


</article>
