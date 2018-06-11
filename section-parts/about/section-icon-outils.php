<?php
/**
 * Section icon-outils
 *
 * @package portfolio_hl
 */


   $classes    = 'section-icon-outils';
 ?>

 <section id="<?php echo esc_attr( 'icon-outils' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'icon-outils' ) ); ?>">
   <div class="container">
     <div class="content-icon">
       <div class="txt-section-icon">
         <?php
         $icon_outils_title   = get_theme_mod( 'icon_outils_title' );
         $icon_outils_texte      = get_theme_mod( 'icon_outils_texte' );
           ?>
      <?php if ( $icon_outils_title ) { ?><h3><?php echo esc_html( $icon_outils_title ); ?></h3><?php } ?>
      <?php if ( $icon_outils_texte ) { ?><p><?php echo esc_html( $icon_outils_texte); ?></p><?php } ?>
     </div>
     <ul class="icon-outils_list">
<li class="block-icon">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/photoshop.png"/>
<span>photoshop</span>
</li>
<li class="block-icon">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/illustrator.png"/>
<span>illustrator</span>
</li>
<li class="block-icon">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/indesign.png"/>
<span>indesing</span>
</li>
<li class="block-icon">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/adobexd.png"/>
<span>experience design</span>
</li>
<li class="block-icon _dark">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/html5.png"/>
<span>html5</span>
</li>
<li class="block-icon _dark">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/css3.png"/>
<span>css3</span>
</li>
<li class="block-icon _dark">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/sass.png"/>
<span>sass</span>
</li>
<li class="block-icon _dark">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/jquery.png"/>
<span>jquery</span>
</li>
<li class="block-icon _dark">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/js.png"/>
<span>javascript</span>
</li>
<li class="block-icon _dark">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/php.png"/>
<span>php</span>
</li>
<li class="block-icon ">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/bootstrap.png"/>
<span>bootstrap</span>
</li>
<li class="block-icon ">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/symfony.png"/>
<span>symfony</span>
</li>
<li class="block-icon ">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/wordpress.png"/>
<span>wordpress</span>
</li>
<li class="block-icon ">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/icon_outils/github.png"/>
<span>github</span>
</li>
</ul>

   </div>
   </div>
 </section>

 </div>
