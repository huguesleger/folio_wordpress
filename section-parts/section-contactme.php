<?php
/**
 * Section contactme
 *
 * @package portfolio_hl
 */
$classes    = 'section-contactme';
?>

<section id="<?php echo esc_attr( 'contactme' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'contactme' ) ); ?>">
  <div class="container">
    <div class="wrap-contactme">
    <div class="col-md-4">
      <p class="txt-contactme">Envie de collaborer ?</p>
      <a class="btn-link-contact" href="<?php the_permalink(8); ?>"><i class="fas fa-long-arrow-alt-right"></i> écrivez-moi</a>
      <!-- <img class="icon-smile" src="<?php echo get_template_directory_uri(); ?>/img/face.png"> -->
      <a class="link-email" href="mailto:contactme@hl-developerz.com">contactme@hl-developerz.com</a>
      </div>
    </div>
  </div>
  <!-- <div class="bg-round">
  </div> -->

</section>
</div><!--fin div id sections-->

</div>
</div>
