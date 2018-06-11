<?php
/**
 * @package portfolio_hl
 */
get_header(); ?>
<div class="">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- <?php
			 $page_header_image = get_theme_mod('page_header_image', get_template_directory_uri());
			 if ( $page_header_image ) {
				  ?>

					<div class="header-page">
					<div class="header-page-content" style="background-image: url(<?php echo $page_header_image; ?>);">
						<div class="title-page">
							<h2><?php echo get_the_title(get_option('page_for_posts', true)); ?></h2>
						</div>
					</div>
					</div>

			<?php }
			 ?> -->

			 <header class="header-folio">
			 	<div class="wrap-folio">
			 		<div class="content-folio">
						<h2 class="title-folio"><?php echo get_the_title(get_option('page_for_posts', true)); ?></h2>
						<!-- <div class="desc-folio">
							<p>Dév web/front-end/graphisme</p>
						</div>
						<div class="clear-fix"></div> -->
						<div class="container">
							<div class="info-folio">
							<p class="info-txt"><span class="_txt-lite _white">sélection</span><br> de mes travaux.</p>
							</div>
							<div class="bg-phone">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/phone.png"/>
							</div>
						</div>
			 		</div>
			 	</div>
			 </header>
		<?php if ( have_posts() ) : ?>
			<div class="container">
				<div class="txt-folio">
					<h3>lorem ipsum</h3>
					<p>Cervicibus interclusum Pontum in Byzantiorum Mithridaticos Pontum Byzantii urbem maximis atque suis custodita totumque in.</p>
				</div>
			</div>
			<div class="works-content">
			<div class="container" id="folio_fullwidth">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', 'works' ); ?>
				<?php endwhile; ?>
			</div>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
<?php get_footer(); ?>
