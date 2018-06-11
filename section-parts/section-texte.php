<?php
/**
 * Section texte
 *
 * @package portfolio_hl
 */
$texte_light      = get_theme_mod( 'section_texte_light_texte' );
$texte      = get_theme_mod( 'section_texte_texte' );
$classes    = 'section-texte';



?>

<section id="<?php echo esc_attr( 'sectionTexte' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'texte' ) ); ?>">


    <?php
    if ( $texte_light || $texte ) {
        ?>
        <div class="container">
          <div class="wrap-content-present col-md-9">
                <?php if ( $texte_light ) { ?><h2 class="section-title"><?php echo esc_html( $texte_light ); ?></h2><?php } ?>
                <div class="content-present">
                <?php if ( $texte ) { ?><div class="section-desc"><?php echo apply_filters( 'portfolio_hl_content_text', $texte ); ?></div><?php } ?>
                </div>
              </div>
        </div>
        <?php
    }


    wp_reset_postdata();
    ?>
</section>
<!-- </div> -->
<!-- <screen"> -->
