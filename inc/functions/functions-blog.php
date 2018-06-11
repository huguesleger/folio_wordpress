<?php
/**
 * @package portfolio_hl
 */

 /**
  * Excerpt length
  */
 function portfolio_hl_excerpt_length( $length ) {
   $excerpt = get_theme_mod('exc_length', '20');
   return $excerpt;
 }
 add_filter( 'excerpt_length', 'portfolio_hl_excerpt_length', 999 );

 /**
  * Excerpt read more
  */
 function portfolio_hl_custom_excerpt( $more ) {
  $more = get_theme_mod('custom_read_more');
   if ($more == '') {
     return '&nbsp;[&hellip;]';
  } else {
    return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . esc_html($more) . '</a>';
  }
 }
 add_filter( 'excerpt_more', 'portfolio_hl_custom_excerpt' );

 /**
  * Remove archive labels
  */
 function portfolio_hl_archive_labels($title) {
     if ( is_category() ) {
         $title = single_cat_title( '', false );
     } elseif ( is_tag() ) {
         $title = single_tag_title( '', false );
     } elseif ( is_author() ) {
         $title = '<span class="vcard">' . get_the_author() . '</span>' ;
  }
     return $title;
 }
 add_filter( 'get_the_archive_title', 'portfolio_hl_archive_labels');

 /**
  * Blog layout
  */
 function portfolio_hl_blog_layout() {
   $layout = get_theme_mod('blog_layout','list');
   return $layout;
 }

 /**
 * folio
 */
function portfolio_hl_fullwidth_folio($classes) {

  $folio_layout = get_theme_mod('fullwidth_folio', 0);
  if ( is_home() && $folio_layout ) {
    $classes[] = 'fullwidth-folio';
  }
  return $classes;
}
add_filter('body_class', 'portfolio_hl_fullwidth_folio');

 /**
 * Single posts
 */
function portfolio_hl_fullwidth_singles($classes) {

  $single_layout = get_theme_mod('fullwidth_single', 0);
  if ( is_single() && $single_layout ) {
    $classes[] = 'fullwidth-single';
  }
  return $classes;
}
add_filter('body_class', 'portfolio_hl_fullwidth_singles');
