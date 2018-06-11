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
$opacity    = get_theme_mod('opacity_big_title', '1');



?>

<section id="<?php echo esc_attr( get_theme_mod( 'presentation_id', 'presentation' ) ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'presentation' ) ); ?>">


    <?php
    if ( $title || $subtitle || $texte ) {
        ?>
        <div class="container">
          <div class="wrap-content-present col-md-9">
                <?php if ( $title ) { ?><h2 class="section-title _white"><?php echo esc_html( $title ); ?></h2><?php } ?>
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
    }


    wp_reset_postdata();
    ?>
</section>
<!-- </div> -->
<!-- <screen"> -->
