<?php
/**
 * functions du theme.
 * @package Onepale
 */

if( ! function_exists('portfolio_hl_setup')) :

  function portfolio_hl_setup() {
    /*
    * titre du document
    */
    add_theme_support('title-tag');




    /*
    * menu par default wordpress
    */
    register_nav_menus( array(
      'primary' => esc_html__('Primary','portfolio_hl'),
    ));


    /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'portfolio_hl-home-small', 200);
    add_image_size( 'portfolio_hl-home-large', 280, 280, true );
    add_image_size( 'portfolio_hl-blog-image', 690 );
    add_image_size( 'portfolio_hl-blog-thumb', 470);
    add_image_size( 'portfolio_hl-blog-header', 1920);

    /*
    * custum background wordpress function
    */
    add_theme_support('custum-background', apply_filters('portfolio_hl_custum_bakground_arg', array(
        'default-color' =>'ffffff',
        'default-image' => '',
    )));





    /**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_hl_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'portfolio_hl' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'portfolio_hl' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	) );



}
add_action( 'widgets_init', 'portfolio_hl_widgets_init' );
    /*
    * logo custum
    */
    add_theme_support('custom-logo',array(
        'height' => 55,
        'width' => 200,
        'flex-height' => true,
    ));

  }
endif;
add_action( 'after_setup_theme', 'portfolio_hl_setup' );



/**
 * Enqueue scripts and styles.
 */
function portfolio_hl_scripts() {
	wp_enqueue_style( 'portfolio_hl-style', get_stylesheet_uri() );

	wp_enqueue_style( 'portfolio_hl-fonts', portfolio_hl_fonts_url(), array(), null );

	wp_enqueue_style( 'portfolio_hl-animate', get_template_directory_uri() . '/css/animate/animate.css', array(), true );

    wp_enqueue_script( 'portfolio_hl-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'portfolio_hl-easings', get_template_directory_uri() . '/js/easings.js', array('jquery'), '', true );

  wp_enqueue_script( 'portfolio_hl-anim', get_template_directory_uri() . '/js/anime.min.js', array('jquery'), '', true );

  // wp_enqueue_script( 'portfolio_hl-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '', true );
   wp_enqueue_script( 'portfolio_hl-shape', get_template_directory_uri() . '/js/mainshape.js', array('jquery'), '', true );


  wp_enqueue_script( 'portfolio_hl-velocity', get_template_directory_uri() . '/js/velocity.js', array('jquery'), '', true );

  wp_enqueue_script( 'portfolio_hl-parallax', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), '', true );

    // wp_register_script( 'portfolio_hl-parallax', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', null, null, true );
    // wp_enqueue_script('portfolio_hl-parallax');

	wp_enqueue_script( 'portfolio_hl-main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

  wp_enqueue_script( 'portfolio_hl-hello', get_template_directory_uri() . '/js/hello.js', array('jquery'), '', true );
  wp_enqueue_script( 'portfolio_hl-illu', get_template_directory_uri() . '/js/illu.js', array('jquery'), '', true );


	wp_enqueue_script('masonry');

	// wp_enqueue_script( 'onepale-html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '', true );
  //   wp_script_add_data( 'onepale-html5shiv', 'conditional', 'lt IE 9' );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_hl_scripts' );




/**
 * Enqueue Bootstrap
 */
function portfolio_hl_enqueue_bootstrap() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.css', array(), true );
}
add_action( 'wp_enqueue_scripts', 'portfolio_hl_enqueue_bootstrap', 9 );

/**
 * Google Fonts - adapted from TwentySixteen
 *
 * Lets you load Google Fonts by adding only the name
 */
if ( ! function_exists( 'portfolio_hl_fonts_url' ) ) :
function portfolio_hl_fonts_url() {

	$fonts_url 		= '';
	$subsets   		= 'latin,latin-ext,cyrillic'; //Fallback for browsers with no unicode-range support
	$weights 		= get_theme_mod('font_weights', array( '300', '400', '400italic', '600', '600italic', '700', '800' ));
	$weights 		= implode(',', $weights);
	$body_font 		= get_theme_mod('body_font_family', 'Open Sans');
	$fonts     		= array();
	$fonts[] 		= esc_attr($body_font) . ':' . esc_attr($weights);

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Customizer defaults
 */
if ( !function_exists('portfolio_hl_customizer_defaults') ) :
function portfolio_hl_customizer_defaults() {
	$defaults = array(

		//section parallax
		'section_web_image_1'			=> get_template_directory_uri() . '/images/template_1.png',
    'section_web_image_2'			=> get_template_directory_uri() . '/images/wireframe_1.gif',
    'parallax_effect'			    => '1.85',
    //section slider
    'slider_speed'			      => '4000',
    'slider_class'            => 'container-fluid',
    'slide_image_1'           => get_template_directory_uri() . '/images/slider_1.png',
    'slide_image_2'           => get_template_directory_uri() . '/images/slider_2.png',
    'slide_image_3'           => get_template_directory_uri() . '/images/slider_3.png',
		//Menu
		'sticky_menu'			        => 'sticky',
		'menu_style'			        => 'inline',
		//Header type
		'front_header_type'		    => 'has-slider',
		'site_header_type'		    => 'nothing',
	);
	return $defaults;
}
endif;



/**
 * Styles
 */
require get_template_directory() . '/inc/styles.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';





/**
 * Functions
 */
require get_template_directory() . '/inc/about.php';

require get_template_directory() . '/inc/shortcode.php';

require get_template_directory() . '/inc/portfolio.php';

require get_template_directory() . '/inc/ajax.php';

require get_template_directory() . '/inc/breadcrumb.php';

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/inc/functions/loader.php';

require get_template_directory() . '/inc/cleanup.php';
