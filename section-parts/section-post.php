<?php
/**
 * Section post
 *
 * @package portfolio_hl
 */


 $title      = get_theme_mod( 'post_title' );
 $title_span      = get_theme_mod( 'post_span' );
 $texte      = get_theme_mod( 'post_text' );

?>

<section id="<?php echo esc_attr( 'post' ); ?>" class="<?php echo esc_attr( apply_filters( 'portfolio_hl_section_class', $classes, 'post' ) ); ?>">

  <?php
    $query = new WP_query(array(
      'post_type'=>'portfolio',
      'posts_per_page'=>1,
      'orderby' => 'post_date',
      'order' => 'DESC',
      ));
    while($query->have_posts()): $query->the_post(); global $post;
    ?>
    <div class="full-last-work">
      <div class="bg-color-right"></div>
      <?php
      $post_thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
      if ( $post_thumb ) { ?>
  <div class="lastwork-cover container">
      <?php if ( $title ) { ?><h2 class="section-title _white title-right"><?php echo esc_html( $title ); ?><span class="title-span"><?php echo esc_html( $title_span ); ?></span>.</h2><?php } ?>
      <img class="img-responsive col-md-8" src="<?php echo $post_thumb; ?>">
    <?php if ( $texte ) { ?><div class="section-desc col-md-4"><?php echo the_excerpt(); ?></div><?php } ?>
    <div class="link-single"><a class="btn-default-border btn-border-white btn-btn" href="<?php the_permalink() ?>">en voir <i class="fas fa-plus"></i></a></div>
      <div class="content-cat">
         <h4 class="title-post-in"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
         <?php
         $terms_list = wp_get_post_terms($post->ID,'works');
         foreach ($terms_list as $term) {
         ?>
        <div class="cat"><p>/ <?php echo $term->name;?></p></div>
         <?php
         }
         ?>
          <div class="icon-work">
            <div class="content-icon-work">
            <i class="far fa-images"></i>
          </div>
        </div>
      </div>
  </div>
     <?php } ?>
<?php endwhile; ?>
</div>

      <?php
    wp_reset_postdata();
    ?>
</section>
