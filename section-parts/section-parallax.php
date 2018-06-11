<?php
/**
 * Section parallax
 *
 * @package portfolio_hl
 */

 $section_parallax_title = get_theme_mod( 'section_parallax_title');
 $section_parallax_text = get_theme_mod( 'section_parallax_text' );
 $parallax_effect = get_theme_mod('parallax_effect', '1.85');
 $section_parallax_image = get_theme_mod('section_parallax_image', get_template_directory_uri() . '/images/template_1.png');
 $section_parallax_image_device = get_theme_mod('section_parallax_image_device', get_template_directory_uri() . '/images/wireframe_1.gif');


?>

<section id="<?php echo esc_attr( 'parallax' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'parallax' ) ); ?>">
  <!-- <div class="template-right">
    <div class="content-right">
      <div class="content-info">
          <?php if ( $section_parallax_title ) { ?><h3><?php echo esc_html( $section_parallax_title ); ?></h3><?php } ?>
          <?php if ( $section_parallax_text ) { ?><p><?php echo esc_html( $section_parallax_text ); ?></p><?php } ?>
      </div>
      <div class="wrap-bottom">
        <i class="far fa-images"></i>
      </div>
    </div>
  </div> -->
    <?php
    if ( $section_parallax_image || $section_parallax_image_device || $section_parallax_title ) {
        ?>
          <?php
          echo 	'<div class="wrap-template" id="WebTemplate" data-depth="' . ($parallax_effect) . '">';
          echo 	'<div class="wrap-img-bg" data-depth="' . ($parallax_effect) . '">';
          ?>
              <img class="img-responsive" src="<?php echo esc_url($section_parallax_image); ?>"/>
              <?php
              echo '</div>';
          		echo '</div>';
              ?>

            <div class="wrap-device">
              <div class="container">
                <div class="device">
                <img class="content-device" src="<?php echo esc_url($section_parallax_image_device); ?>"/>
              </div>

            <div class="block-info col-md-6">
            <div class="content-info">
                <?php if ( $section_parallax_title ) { ?><h3><?php echo esc_html( $section_parallax_title ); ?></h3><?php } ?>
                <?php if ( $section_parallax_text ) { ?><p><?php echo esc_html( $section_parallax_text ); ?></p><?php } ?>

                <div class="link-folio"><a class="btn-default-border btn-border-white btn-btn" href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>">en voir <i class="fas fa-plus"></i></a></div>
            </div>
          </div>
          </div>
          </div>

        <?php
    }


    wp_reset_postdata();
    ?>
</section>
