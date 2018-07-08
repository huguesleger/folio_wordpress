<?php
/**
* @package portfolio_hl
* remove number vesion wordpress generator
*/

/** remove version style css/js */
 function portfolio_hl_remove_wp_version_strings($src) {

  global $wp_version;
  parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if(!empty($query['ver']) && $query['ver'] === $wp_version) {
      $src = remove_query_arg('ver',$src);
    }
    return $src;
 }
add_filter('script_loader_src','portfolio_hl_remove_wp_version_strings');
add_filter('style_loader_src','portfolio_hl_remove_wp_version_strings');

/** remove meta generator */
function portfolio_hl_remove_meta_version() {
  return '';
}
add_filter('the_generator','portfolio_hl_remove_meta_version');

/** remove class default primary navigation **/
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
// function my_css_attributes_filter($var) {
//     if(is_array($var)){
//         $varci= array_intersect($var, array('current-menu-item'));
//         $cmeni = array('current-menu-item');
//         $selavaend = array();
//         $selavaend = str_replace($cmeni, $selava, $varci);
//     }
//     else{
//         $selavaend= '';
//     }
// return $selavaend;
// }

add_action( 'nav_menu_css_class', 'menu_item_classes', 10, 3 );
function menu_item_classes( $classes ) {
   $classes = array_intersect( $classes, array(
                              'menu-item'
                              ) );

   return $classes;
}

//remove class from pages and page_posts
add_filter( 'body_class', 'adjust_body_class' );
function adjust_body_class( $classes ) {

    foreach ( $classes as $key => $value ) {
        if ( $value == 'page-template-default') unset( $classes[ $key ] );
        // if ( $value == 'page') unset( $classes[ $key ] );
        if ( $value == 'blog') unset( $classes[ $key ] );
        if ( $value == 'archive') unset( $classes[ $key ] );
        if ( $value == 'category') unset( $classes[ $key ] );
        if ( $value == 'single-format-standard') unset( $classes[ $key ] );
        if ( $value == 'single-post') unset( $classes[ $key ] );
        if ( $value == 'post-template-default') unset( $classes[ $key ] );
        if ( $value == 'post-type-archive') unset( $classes[ $key ] );
        if ( $value == 'portfolio-template-default') unset( $classes[ $key ] );
        if ( $value == 'page-template') unset( $classes[ $key ] );
        if( 0 === strpos( $value, 'postid-' )
          || 0 === strpos( $value, 'page-id-' )
          || 0 === strpos( $value, 'page-template-page-' )
          || 0 === strpos( $value, 'post-type-archive-' )
          || $value == 'page-template-default'  )
          unset($classes[$key]);

          if ( is_home() ) {
              $classes[] = 'folio';
          }
          if ( is_archive() ) {
              $classes[] = 'portfolio';
          }
          if ( is_front_page() ) {
             if ( $value == 'page') unset( $classes[ $key ] );
          }
          if ( is_page('contact') ) {
              $classes[] = 'contactme';
          }

    }

    return $classes;

}
//remove class from the_post
function redpik_clean_post_class($classes) {
  foreach ($classes as $k => $class) {
    if( 0 === strpos( $class, 'tag-' )
      || 0 === strpos( $class, 'category-' )
      || 0 === strpos( $class, 'post-' )
      || 0 === strpos( $class, 'type-' )
      || $class == 'status-publish'
      || $class == 'hentry'
      || $class == 'post'
      || $class == 'format-standard' )
      unset($classes[$k]);
  }
  return $classes;
}
add_filter('post_class','redpik_clean_post_class');


//remove class from the_post_thumbnail
function the_post_thumbnail_remove_class($output) {
	$output = preg_replace('/class=".*?"/', '', $output);
	return $output;
}
add_filter('post_thumbnail_html', 'the_post_thumbnail_remove_class');
