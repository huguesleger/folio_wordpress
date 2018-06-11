<?php
/**
 * Section slider
 *
 * @package portfolio_hl
 */

?>

<section id="<?php echo esc_attr( 'slider' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'slider' ) ); ?>">
  <div class="content-section-slider">
<?php
/**
 * Register Polylang strings
 */
if ( function_exists('pll_register_string') && !function_exists('portfolio_hl_register_strings')) :
function portfolio_hl_register_strings() {
	for ($c = 1; $c <= 3; $c++) {
		pll_register_string('Main title ' . $c, get_theme_mod('slide_title_' . $c), 'portfolio_hl');
		pll_register_string('Subtext ' . $c, get_theme_mod('slide_subtitle_' . $c), 'portfolio_hl');
		pll_register_string('Button text' . $c, get_theme_mod('slide_btn_title_' . $c), 'portfolio_hl');
	}
}
add_action( 'admin_init', 'portfolio_hl_register_strings' );
endif;

/**
 * Header hero area
 */

	$sliderspeed = get_theme_mod('slider_speed', '4000');
  $slider_class = get_theme_mod('slider_class', 'container-fluid');
  $title      = get_theme_mod( 'section_slider_title' );
  ?>
    <?php

    if ( $title ) { ?><div class="container"><h2 class="section-title title-right"><?php echo esc_html( $title ); ?></h2></div><?php }

		echo '<div class="main-slider-box">';
		echo 	'<div class="main-slider '. $slider_class .'" data-sliderspeed="' . absint($sliderspeed) . '">';

			for ($c = 1; $c <= 3; $c++) {

				$slide_title 	 = get_theme_mod('slide_title_' . $c);
				$slide_subtitle  = get_theme_mod('slide_subtitle_' . $c);

				$slide_image 	 = get_theme_mod('slide_image_' . $c, get_template_directory_uri() . '/images/slider_' . $c . '.png');
				if ( !function_exists('pll_register_string') ) {
					$slide_title 	 = get_theme_mod('slide_title_' . $c);
					$slide_subtitle  = get_theme_mod('slide_subtitle_' . $c);
				} else {
					$slide_title 	 = pll__(get_theme_mod('slide_title_' . $c));
					$slide_subtitle  = pll__(get_theme_mod('slide_subtitle_' . $c));
				}

				if ( $slide_image ) { ?>
					<div class="slider-item">
						<?php if ( $c != 1 ) : ?>
						<img class="img-responsive" src="<?php echo esc_url($slide_image); ?>">
						<?php else : ?>
						<img class="img-responsive" src="<?php echo esc_url($slide_image); ?>"/>
						<?php endif; ?>
						<div class="main-slider-caption">
								<h1><?php echo esc_html($slide_title); ?></h1>
								<p><?php echo esc_html($slide_subtitle); ?></p>
						</div>
					</div>
				<?php }
			}
          wp_reset_postdata();
      ?>
    </div>
  </div>
  </div>
</section>
