<?php
/**
 * Section image
 *
 * @package portfolio_hl
 */
  $about_img = get_theme_mod('about_img');
    $classes    = 'section-about_img';
 ?>

 <section id="<?php echo esc_attr( 'about-img' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'about_img' ) ); ?>">

                   <?php
                   if ( $about_img ) {

                      ?>
               <div class="about-img_full" style="background-image: url(<?php echo $about_img; ?>);">
                  <?php } ?>
         <?php

     wp_reset_postdata();
     ?>
 </section>
