<?php
/**
 * @package portfolio_hl
 */

//Converts hex colors to rgba for the menu background color
function portfolio_hl_hex2rgba($color, $opacity = false) {

        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        $rgb =  array_map('hexdec', $hex);
        $opacity = 0.54;
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';

        return $output;
}

function portfolio_hl_custom_styles($custom) {

	$defaults 	= portfolio_hl_customizer_defaults();

	//Get the options
  $logo_color               = get_theme_mod('logo_color', $defaults['logo_color']);
  $hello_bg_color		        = get_theme_mod('hello_bg_color', $defaults['hello_bg_color']);
  $graphic_bg_color		        = get_theme_mod('graphic_bg_color', $defaults['graphic_bg_color']);
	$presentation_bg_color		= get_theme_mod('presentation_bg_color');
  $presentation_title_color		= get_theme_mod('presentation_title_color');
  $slider_bg_color		      = get_theme_mod('slider_bg_color', $defaults['slider_bg_color']);
  $slider_title_color		= get_theme_mod('slider_title_color');
  $parallax_bg_color		    = get_theme_mod('parallax_bg_color', $defaults['parallax_bg_color']);
  $icon_bg_color		        = get_theme_mod('section_icon_bg_color', $defaults['section_icon_bg_color']);
  $post_bg_color		        = get_theme_mod('post_bg_color', $defaults['post_bg_color']);
  $icon_color		            = get_theme_mod('icon_color', $defaults['icon_color']);
  $body_color		            = get_theme_mod('body_color', $defaults['body_color']);
  $bg_color		              = get_theme_mod('bg_color', $defaults['bg_color']);
  $opacity		              = get_theme_mod('opacity_big_title', $defaults['opacity_big_title']);

  //color sections about
  	$cursus_bg_color		= get_theme_mod('cursus_bg_color');
    $about_txt_bg_color		= get_theme_mod('about_txt_bg_color');
    $about_txt_texte_color		= get_theme_mod('about_txt_texte_color');
    $icon_outils_bg_color		= get_theme_mod('icon_outils_bg_color');
    $icon_outils_thumb_bg_color		= get_theme_mod('icon_outils_thumb_bg_color');
    $icon_outils_thumb_bg_color_dark		= get_theme_mod('icon_outils_thumb_bg_color_dark');

	//Build CSS
	$custom 	= '';

	if ( $menu_style == 'centered') {
		$custom 	.= ".main-header .row { display: block;}"."\n";
		$custom 	.= ".branding-container { width: 100%;text-align:center;margin-bottom:15px;padding-bottom:15px;border-bottom:1px solid rgba(0,0,0,0.05);}"."\n";
		$custom 	.= ".menu-container { width: 100%;}"."\n";
		$custom 	.= ".main-navigation { text-align:center;}"."\n";
	}


  $custom 	.= ".site-title-mode  { color:" . esc_attr($logo_color) . ";}"."\n";
  $custom 	.= ".part_home { background-color:" . esc_attr($hello_bg_color) . ";}"."\n";
  $custom 	.= "#block.__deform path { fill:" . esc_attr($hello_bg_color) . ";}"."\n";
  $custom 	.= ".part_full { background-color:" . esc_attr($graphic_bg_color) . ";}"."\n";
	$custom 	.= "#present { background-color:" . esc_attr($presentation_bg_color) . ";}"."\n";
  $custom 	.= "#present .section-title { color:" . esc_attr($presentation_title_color) . ";}"."\n";
  $custom 	.= "#present .section-title::before { background-color:" . esc_attr($presentation_title_color) . ";}"."\n";
  $custom 	.= "#slider { background-color:" . esc_attr($slider_bg_color) . ";}"."\n";
  $custom 	.= "#slider .section-title { color:" . esc_attr(  $slider_title_color) . ";}"."\n";
  $custom 	.= "#slider .section-title::before { background-color:" . esc_attr($slider_title_color) . ";}"."\n";
  $custom 	.= "#icon { background-color:" . esc_attr($icon_bg_color) . ";}"."\n";
  $custom 	.= "#parallax { background-color:" . esc_attr($parallax_bg_color) . ";}"."\n";
  $custom 	.= ".bg-color-right { background-color:" . esc_attr($post_bg_color) . ";}"."\n";
  $custom 	.= ".icon-work { background-color:" . esc_attr($post_bg_color) . ";}"."\n";
  $custom 	.= ".icon-item i { color:" . esc_attr($icon_color) . ";}"."\n";
  $custom 	.= ".icon-item { border-color:" . esc_attr($icon_color) . ";}"."\n";
  $custom 	.= "body  { color:" . esc_attr($body_color) . ";}"."\n";
  $custom 	.= "body  { background-color:" . esc_attr($bg_color) . ";}"."\n";
  $custom 	.= ".big-title-present  { opacity:" . esc_attr($opacity) . ";}"."\n";


  $custom 	.= "#cursus { background-color:" . esc_attr($cursus_bg_color) . ";}"."\n";
  $custom 	.= "#texte { background-color:" . esc_attr($about_txt_bg_color) . ";}"."\n";
  $custom 	.= ".content-texte_list { color:" . esc_attr($about_txt_texte_color) . ";}"."\n";
  $custom 	.= ".content-about_texte { color:" . esc_attr($about_txt_texte_color) . ";}"."\n";
  $custom 	.= " .section-title-txt:before { background-color:" . esc_attr($about_txt_texte_color) . ";}"."\n";
  $custom 	.= " #icon-outils { background-color:" . esc_attr($icon_outils_bg_color) . ";}"."\n";
  $custom 	.= " .block-icon { background-color:" . esc_attr($icon_outils_thumb_bg_color) . ";}"."\n";
  $custom 	.= " .block-icon._dark { background-color:" . esc_attr($icon_outils_thumb_bg_color_dark) . ";}"."\n";




	//Output all the styles
	wp_add_inline_style( 'portfolio_hl-style', $custom );
}
add_action( 'wp_enqueue_scripts', 'portfolio_hl_custom_styles' );
