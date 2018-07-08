<?php
 /* Template Name: About
  */
 ?>

 <?php
get_header();


 ?>
<!-- <header class="header-folio"> -->

<header id="<?php echo esc_attr( 'Header-about' ); ?>" class="header-page">
 <div class="content-header">
   <div class="about-txt">
     <div class="info-folio">
     <p class="info-txt"><span class="_txt-lite _white"><?php echo the_title(); ?></span><br>un peu de blabla.</p>
     </div>
   </div>
    </div>
    <?php
    $post_thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
    if ( $post_thumb ) {
       ?>
       <div class="cover-about" style="background-image: url(<?php echo $post_thumb; ?>);">
         <?php
       }?>


     <!-- <h2 class="title-folio"><?php echo the_title(); ?></h2> -->
   </div>
</header>




 <div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">

     <?php
     while ( have_posts() ) : the_post();


       get_template_part( 'template-parts/content', 'about' );

       // If comments are open or we have at least one comment, load up the comment template.
       if ( comments_open() || get_comments_number() ) :
         comments_template();
       endif;

     endwhile; // End of the loop.
     get_footer();
     ?>
