<?php
/**
 * Section icon
 *
 * @package portfolio_hl
 */

?>

<section id="<?php echo esc_attr( 'icon' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'icon' ) ); ?>">
  <div class="content-section-icon container">
<?php
/**
 * Register Polylang strings
 */
if ( function_exists('pll_register_string') && !function_exists('portfolio_hl_register_strings')) :
function portfolio_hl_register_strings() {
	for ($c = 1; $c <= 6; $c++) {
		pll_register_string('Subtext ' . $c, get_theme_mod('icon_subtitle_' . $c), 'portfolio_hl');
	}
}
add_action( 'admin_init', 'portfolio_hl_register_strings' );
endif;

/**
 * Header hero area
 */

  $title            = get_theme_mod( 'section_icon_title' );
  $title_span       = get_theme_mod( 'section_icon_title_span' );
  $desc             = get_theme_mod( 'section_icon_desc' );
  $texte            = get_theme_mod( 'section_icon_texte' );
  $classe           = get_theme_mod('circle_icon');
  $style            = get_theme_mod('slider_style', 'col-md-5 style-column');


  ?>
    <?php


		echo 	'<div class="main-icon '. $style .'">';

			for ($c = 1; $c <= 6; $c++) {

				$icon_subtitle  = get_theme_mod('icon_subtitle_' . $c);

				// $icon_image 	 = get_theme_mod('icon_image_' . $c, get_template_directory_uri());
        $icon_icon   = get_theme_mod('icon_icon_' . $c);
				if ( !function_exists('pll_register_string') ) {
					$icon_subtitle  = get_theme_mod('icon_subtitle_' . $c);
				} else {
					$icon_subtitle  = pll__(get_theme_mod('icon_subtitle_' . $c));
				}



      if( $icon_icon) { ?>
        <div class="col-xs-6 col-sm-4 col-md-4 icon-style">
          <div class="icon-item <?php echo esc_attr( $classe ); ?>">
            <?php if ($c != 1) : ?>
              <i class="<?php echo esc_attr( $icon_icon ); ?>"></i>
              <?php else : ?>
              <i class="<?php echo esc_attr( $icon_icon ); ?>"></i>
              <?php endif; ?>
            </div>
            <div class="main-icon-caption">
                <p><?php echo esc_html($icon_subtitle); ?></p>
            </div>
          </div>
          <?php
          }
			}

        ?>
          </div>
            <?php

            if ( $title || $title_span || $desc ) {

                	echo 	'<div class="col-md-6 col-md-offset-1 bloc-txt-icon '. $style .'">';     ?>

                        <?php if ( $title ) { ?><h2 class="section-title-icon"><?php echo esc_html( $title ); ?><span class="title-span"><?php echo esc_html( $title_span ); ?></span>.</h2><?php } ?>
                        <?php if ( $desc ) { ?><div class="section-desc-icon"><p><?php echo apply_filters( 'portfolio_hl_content_text', $desc ); ?></p></div><?php } ?>
                </div>
                <?php
            }

          wp_reset_postdata();
      ?>


</div>
</section>
