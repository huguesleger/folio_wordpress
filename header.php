<?php
/**
 * @package portfolio_hl
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="wrap-branding">
		<div class="logo">
		<a href="http://folio/" class="custom-logo-link" rel="home" itemprop="url">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 75 75">
			  <g id="Calque_2" data-name="Calque 2">
			      <path class="" d="M59.36,40.41A7.66,7.66,0,0,0,61,42.81a7.77,7.77,0,0,0,2.37,1.62,7.07,7.07,0,0,0,2.91.6h8a37.53,37.53,0,1,0-2.79,8.4H66.26a15.46,15.46,0,0,1-6.21-1.26A16.18,16.18,0,0,1,55,48.75a15.78,15.78,0,0,1-3.39-5.07,15.46,15.46,0,0,1-.57-1.6V53.43h-8.4v-16a7.11,7.11,0,0,0-.6-2.91,7.82,7.82,0,0,0-1.62-2.37A7.72,7.72,0,0,0,38,30.57a7.32,7.32,0,0,0-2.94-.6,7.1,7.1,0,0,0-2.91.6,7.8,7.8,0,0,0-2.37,1.62,7.69,7.69,0,0,0-1.62,2.4,7.29,7.29,0,0,0-.6,2.94v15.9h-8.4V13.17h8.4V23.43a15.45,15.45,0,0,1,7.5-1.86,15.89,15.89,0,0,1,11.28,4.62,16.21,16.21,0,0,1,3.42,5.07,15.17,15.17,0,0,1,.6,1.67V13.17h8.4v24.3A7.28,7.28,0,0,0,59.36,40.41ZM33.05,35.49a2.71,2.71,0,0,1,2-.78,2.89,2.89,0,0,1,2,.78,2.59,2.59,0,0,1,.84,2,2.71,2.71,0,0,1-.84,2,2.78,2.78,0,0,1-2,.84,2.61,2.61,0,0,1-2-.84,2.76,2.76,0,0,1-.81-2A2.64,2.64,0,0,1,33.05,35.49Z"/>
			  </g>
			</svg></a>
		</div>
	  <?php portfolio_hl_site_branding(); ?>
	</div>

	<div class="nav-btn" id="Hamb">
	  <span class="nav-fill"></span>
	  <p class="nav-txt" id="txtHamb">menu</p>
	</div>

	<div class="wrap-nav">
	  <nav id="site-navigation" role="navigation">
	<?php wp_nav_menu(array('theme_location' => 'primary',

	                        // 'container_class' => 'menu-item',
	                        'menu_class' => 'global-menu__item')); ?>
	<!-- <span class="underline-title bg-red-underline"><h3 class="global-menu menu-item">Check Me.</h3></span> -->

	</nav>
	</div>
	  <!-- #site-navigation -->
		<?php
		  $facebook_url      = get_theme_mod( 'social_facebook_url' );
			$facebook_icon      = get_theme_mod( 'social_facebook_icon' );
			$linkedin_url      = get_theme_mod( 'social_linkedin_url' );
			$linkedin_icon      = get_theme_mod( 'social_linkedin_icon' );
			$instagram_url      = get_theme_mod( 'social_instagram_url' );
			$instagram_icon      = get_theme_mod( 'social_instagram_icon' );
		 ?>

	<div class="info-nav">
	<span class="underline-title bg-primary-underline"><h3 class="info-txt-global-menu">Infos</h3></span>
	<div class="list-infos">
	<ul class="content-list">
	  <li><i class="fas fa-map-marker-alt"></i>FRANCE/Montpellier</li>
	  <li><i class="fas fa-envelope-open"></i><a class="mail-global-menu" href="mailto:contactme@hl-developerz.com">contactme@hl-developerz.com</a></li>
		<?php
		  if ( $facebook_url ) { ?>
	  <li class="social-global-menu"><a class="mail-global-menu" href="https://<?php echo esc_html( $facebook_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $facebook_icon ); ?>"></i></a></li>
	<?php
}
		  if ( $linkedin_url ) { ?>
	  <li class="social-global-menu"><a class="mail-global-menu" href="https://<?php echo esc_html( $linkedin_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $linkedin_icon ); ?>"></i></a></li>
		<?php
	}
	if ( $instagram_url ) { ?>
	  <li class="social-global-menu"><a class="mail-global-menu" href="https://<?php echo esc_html( $instagram_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $instagram_icon ); ?>"></i></a></li>
		<?php
	} ?>
	</ul>
	</div>
	</div>
	<div id="color-img" class="img-nav">
		<!-- <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/triangle/whale-black.png"> -->
		          <?php get_template_part( 'template-parts/svg/content', 'triangle-nav' ); ?>
	</div>
	<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
	<path class="shape-overlays__path"></path>
	</svg>

	<?php
	add_action( 'portfolio_hl_header', 'portfolio_hl_header_bar', 9);

	/**
	 * Mobile menu
	 */
	function portfolio_hl_mobile_menu() {
	?>
		<div off-canvas="main-menu left shift">
			<div class="mobile-branding">
				<?php portfolio_hl_site_branding(); ?>
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-menu', 'menu_class' => 'mobile-menu' ) ); ?>
		</div>
	<?php
	}


	/**
	 * Site branding
	 */
	function portfolio_hl_site_branding() {
		?>
		<div class="fixed-branding">
		<?php
		if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
			the_custom_logo();
			?>
				<h1 class="title-branding"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
		} else {
			?>
				<h1 class="title-branding"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="description-branding"><?php echo $description; ?></p>
			<?php endif;
		}
		?>
		</div>
		<?php
}
?>


	<div id="content" class="site-content">
		<!-- <div class="container"> -->
