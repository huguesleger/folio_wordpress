<?php
/**
 * Section presentation
 *
 * @package portfolio_hl
 */
$title      = get_theme_mod( 'presentation_title' );
$subtitle   = get_theme_mod( 'presentation_subtitle' );
$texte      = get_theme_mod( 'presentation_texte' );
$classes    = 'section-presentation';



?>

<section id="present" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'presentation' ) ); ?>">


    <?php
    if ( $title || $subtitle || $texte ) {
        ?>
        <div class="container">
          <div class="wrap-content-present col-md-9">
                <?php if ( $title ) { ?><h2 class="section-title"><?php echo esc_html( $title ); ?></h2><?php } ?>
                <div class="content-present">
                <?php if ( $subtitle ) { ?><div class="section-subtitle"><?php echo esc_html( $subtitle ); ?></div><?php } ?>
                <?php if ( $texte ) { ?><div class="section-desc"><?php echo apply_filters( 'portfolio_hl_content_text', $texte ); ?></div><?php } ?>
                </div>
              </div>
        </div>
        <!-- <div class="device-header">
            <img src="<?php echo get_template_directory_uri(); ?>/img/device_header.png" class="img-responsive"/>
        </div> -->
        <?php
    } ?>

    <div class="bg-fluid">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 100">
        <g id="bgFluid" data-name="Calque 2">
            <path class="color-form" d="M100.51,0S-37.36,78.67,9.85,112.67s-4.64,65.59,39.35,92.13S-1.8,272,27.9,281.51c29.15,9.33-6.05,67.83,40.62,75.83s-92.63,56.24-29.33,126c65.33,72,61.33,160,61.33,160Z"/>
          </g>
      </svg> -->
    </div>

<?php
    wp_reset_postdata();
    ?>
</section>
<!-- </div> -->
<!-- <screen"> -->
