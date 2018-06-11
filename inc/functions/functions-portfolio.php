<?php
/**
 * @package portfolio_hl
 */

 /**
  * Excerpt length
  */

/**
* folio
*/
function portfolio_hl_fullwidth_portfolio($classes) {

 $portfolio_layout = get_theme_mod('fullwidth_folio', 0);
 if ( is_archive() && $portfolio_layout ) {
   $classes[] = 'fullwidth-folio';
 }
 return $classes;
}
add_filter('body_class', 'portfolio_hl_fullwidth_portfolio');

/**
* Single posts
*/
function portfolio_hl_fullwidth_singles_portfolio($classes) {

 $single_layout = get_theme_mod('fullwidth_single', 0);
 if ( is_single() && $single_layout ) {
   $classes[] = 'fullwidth-single';
 }
 return $classes;
}
add_filter('body_class', 'portfolio_hl_fullwidth_singles_portfolio');
