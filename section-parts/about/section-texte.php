<?php
/**
 * Section texte
 *
 * @package portfolio_hl
 */
 ?>
      <?php
  $about_title_section   = get_theme_mod( 'about_title_section' );
  $about_texte_section   = get_theme_mod( 'about_texte_section' );
  $classes    = 'section-about_texte';
   ?>
 <section id="<?php echo esc_attr( 'texte' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'about_texte' ) ); ?>">

<div class="container">
  <div class="content-about_texte col-md-9">
  <?php if ( $about_title_section ) { ?><div class="section-title-txt"><?php echo apply_filters( 'portfolio_hl_content_text', $about_title_section ); ?></div><?php } ?>
  <?php if ( $about_texte_section ) { ?><div class="section-texte-txt"><?php echo esc_html( $about_texte_section); ?></div><?php } ?>
  </div>
</div>

<div class="container">
  <div class="row">
   <?php
   for ($c = 1; $c <= 6; $c++) {
  $about_txt_title   = get_theme_mod( 'about_txt_title'. $c );
  $about_txt_texte      = get_theme_mod( 'about_txt_texte'. $c );

    if( $about_txt_title) {
		echo 	'<div class="col-md-6">';
    ?>

                 <div class="content-texte_list">
                  <?php if ($c != 1) : ?>
                 <?php if ( $about_txt_title ) { ?><div class="title-txt"><?php echo apply_filters( 'portfolio_hl_content_text', $about_txt_title ); ?></div><?php } ?>
                 <?php if ( $about_txt_texte ) { ?><div class="texte-txt"><?php echo esc_html( $about_txt_texte); ?></div><?php } ?>
                 <?php else : ?>
                 <?php if ( $about_txt_title ) { ?><div class="title-txt"><?php echo apply_filters( 'portfolio_hl_content_text', $about_txt_title ); ?></div><?php } ?>
                 <?php if ( $about_txt_texte ) { ?><div class="texte-txt"><?php echo esc_html( $about_txt_texte); ?></div><?php } ?>
                 <?php endif; ?>
                 </div>

         </div>
         <?php
       }?>
         <?php
 }   ?>
 </div>
</div>


 <?php
     wp_reset_postdata();
     ?>
 </section>
 
