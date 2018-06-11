<?php
/**
 * Section cursus
 *
 * @package portfolio_hl
 */
 ?>
      <?php
  $classes    = 'section-cursus';
   ?>
 <section id="<?php echo esc_attr( 'cursus' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'cursus' ) ); ?>">
     <?php


   for ($c = 1; $c <= 3; $c++) {
  $min_texte   = get_theme_mod( 'cursus_min_texte'. $c );
  $big_texte      = get_theme_mod( 'cursus_big_texte'. $c );


		echo 	'<div class="container">';
         ?>
                 <div class="content-cursus col-md-9">
                   <div class="number-cursus">
                      <?php if ($c == 1) : ?>
                        <span>01</span>
                      <?php elseif ($c == 2): ?>
                        <span>02</span>
                      <?php elseif ($c == 3): ?>
                        <span>03</span>
                        <?php endif; ?>
                      </div>
                 <?php if ( $big_texte ) { ?><div class="section-big-txt"><?php echo apply_filters( 'portfolio_hl_content_text', $big_texte ); ?></div><?php } ?>
                 <?php if ( $min_texte ) { ?><div class="section-min-txt"><?php echo esc_html( $min_texte); ?></div><?php } ?>
                 </div>
         </div>
         <?php
 }



     wp_reset_postdata();
     ?>
 </section>
