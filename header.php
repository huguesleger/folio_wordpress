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
	<div class="img-nav">
		<!-- <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/triangle/whale-black.png"> -->
			<svg id="Triangles-nav" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 283.28 186.33">
				<g data-depth="0.15">
					<polygon id="t1" class="cls-1" points="0 58.67 51.19 42.66 56.17 53.51 0 58.67"/>
					<polygon id="t2" class="cls-1" points="55.91 53.51 70.33 79.83 110.73 58.67 55.91 53.51"/>
					<polygon id="t3" class="cls-2" points="50.92 42.66 55.91 53.51 110.73 58.67 50.92 42.66"/>
					<polygon id="t4" class="cls-3" points="0 58.67 51.19 42.66 10.71 51.12 0 58.67"/>
					<polygon id="t5" class="cls-4" points="51.19 42.66 110.73 58.67 129.5 45.86 51.19 42.66"/>
					<polygon id="t6" class="cls-5" points="52.28 42.66 129.5 45.86 81.09 39.73 52.28 42.66"/>
					<polygon id="t7" class="cls-2" points="56.17 53.51 52 89.33 0 58.67 56.17 53.51"/>
					<polygon id="t8" class="cls-3" points="52 89.33 70.3 79.78 55.91 53.51 52 89.33"/>
					<polygon id="t9" class="cls-2" points="52 89.33 87.58 116.42 111 58.52 52 89.33"/>
					<polygon id="t10" class="cls-3" points="110.73 58.67 96.4 94.62 135.06 85.56 110.73 58.67"/>
					<polygon id="t29" class="cls-14" points="129.5 45.86 135.06 85.56 110.73 58.67 129.5 45.86"/>
					<polygon id="t30" class="cls-4" points="129.5 45.86 135.06 85.56 147.83 82.67 129.5 45.86"/>
					<polygon id="t11" class="cls-7" points="87.58 116.42 66.59 136.42 64.84 99.1 87.58 116.42"/>
					<polygon id="t12" class="cls-8" points="66.59 136.42 61.15 161 91.08 143.67 66.59 136.42"/>
					<polygon id="t13" class="cls-8" points="61.15 161 47.67 186.33 63.58 175.42 61.15 161"/>
					<polygon id="t14" class="cls-9" points="47.67 186.33 66.59 179.84 63.58 175.42 47.67 186.33"/>
					<polygon id="t15" class="cls-2" points="61.15 161 63.58 175.42 81.02 169.35 61.15 161"/>
					<polygon id="t16" class="cls-10" points="63.58 175.42 66.59 179.84 81.02 169.35 63.58 175.42"/>
					<polygon id="t17" class="cls-1" points="61.15 161 81.02 169.35 91.08 143.67 61.15 161"/>
					<polygon id="t18" class="cls-3" points="81.02 169.35 102.5 141.35 91.08 143.67 81.02 169.35"/>
					<polygon id="t19" class="cls-5" points="102.5 141.35 126.83 109.49 104.74 92.43 102.5 141.35"/>
					<polygon id="t20" class="cls-11" points="66.59 136.42 91.08 143.67 87.58 116.42 66.59 136.42"/>
					<polygon id="t21" class="cls-12" points="104.74 92.43 102.5 141.35 87.58 116.42 104.74 92.43"/>
					<polygon id="t22" class="cls-9" points="91.08 143.67 102.5 141.35 87.58 116.42 91.08 143.67"/>
					<polygon id="t23" class="cls-1" points="87.58 116.42 104.74 92.43 96.59 94.16 87.58 116.42"/>
					<polygon id="t24" class="cls-13" points="104.74 92.43 126.83 109.49 153.33 92.67 104.74 92.43"/>
					<polygon id="t25" class="cls-14" points="153.33 92.67 147.83 82.67 104.74 92.43 153.33 92.67"/>
					<polygon id="t26" class="cls-5" points="147.83 82.67 191.73 50.97 232.65 100.99 147.83 82.67"/>
					<polygon id="t27" class="cls-4" points="147.83 82.67 153.33 92.67 232.65 100.99 147.83 82.67"/>
					<polygon id="t28" class="cls-13" points="129.5 45.86 147.83 82.67 191.73 50.97 129.5 45.86"/>
					<polygon id="t31" class="cls-11" points="141.07 46.81 191.73 50.97 206.33 23.33 141.07 46.81"/>
					<polygon id="t32" class="cls-2" points="232.65 100.99 283.28 38.5 191.73 50.97 232.65 100.99"/>
					<polygon id="t33"class="cls-3" points="232.65 100.99 283.28 106.67 283.28 38.5 232.65 100.99"/>
					<polygon id="t34" class="cls-8" points="191.73 50.97 283.28 38.5 206.33 23.33 191.73 50.97"/>
					<polygon id="t35"class="cls-7" points="206.33 23.33 243.37 17.89 252.91 32.51 206.33 23.33"/>
					<polygon id="t36" class="cls-11" points="243.37 17.89 283.28 38.5 283.28 12 243.37 17.89"/>
					<polygon id="t37" class="cls-9" points="243.37 17.89 252.91 32.51 283.28 38.5 243.37 17.89"/>
					<polygon id="t38" class="cls-5" points="243.37 17.89 248.33 0.17 265.59 14.61 243.37 17.89"/>
					<polygon id="t39" class="cls-4" points="273.63 13.42 265.59 14.61 258.16 5.65 273.63 13.42"/>
					<polygon id="t40" class="cls-14" points="248.33 0.17 265.59 14.61 254.65 1.42 248.33 0.17"/>
					<polygon id="t41" class="cls-13" points="245.74 9.34 240 0 248.33 0.17 245.74 9.34"/>
				</g>
			</svg>
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
