<?php
/**
 * @package portfolio_hl
 */



/**
* block detail work img and txt
* block peut fonctionner individuellement
* position des 2 blocks cote à cote
* peut inverser les blocks avec la classe "inverse"
*/

/**********block img************/
function block_fullimg_shortcode( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
			'img'=>'',
			'class'=>'',
			'height' =>'',
			'padding' => ''
		), $atts )
	);
return '<div class="'. $class .' cover-full-img" style="height:'. $height .'; padding-top:'. $padding .'; padding-bottom:'. $padding .'; background-image: url(' . $img . ')"></div>';
}
add_shortcode( 'block_fullimg', 'block_fullimg_shortcode' );


/**********block img + txt************/
function block_shortcode( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
      'title' =>'',
			'class'=>'',
      'txt' => '',
      'background'=> '#fff',
			'bg_section' => '',
      'color' => '#333',
			'padding' => '',
			'img' => $content
		), $atts )
	);
return '<div class="block-img_txt" style=" background-color:'. $bg_section .'; padding-top:'. $padding .'; padding-bottom:'. $padding .'">
				<div class="wrap-content-single">
				<div class="middle-img_txt '. $class .'"><div class="cover-detail" style="background-image: url(' . $img . ')"></div>
				<div class="content-detail" style=" background-color:'. $background .'">
        <div class="detail-title"><h3 style="color:'. $color .'">'.$title.'</h3></div>
        <div class="detail-txt-block"><p style="color:'. $color .'">'.$txt.'</p></div>
        </div>
				</div>
				</div>
				</div>';
}
add_shortcode( 'block', 'block_shortcode' );

/**********block detail-project************/
function block_detail_shortcode( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
      'txt' => '',
      'background'=> '#fff',
      'color' => '#333'
		), $atts )
	);
return '
				<div class="content-detail-project" style=" background-color:'. $background .'">
				<div class="wrap-content-single">
        <div class="detail-txt"><p style="color:'. $color .'">'.$txt.'</p></div>
        </div>
				</div>';
}
add_shortcode( 'block_detail', 'block_detail_shortcode' );

/**********block 3textes************/
function block_3textes_shortcode( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
      'txt' => '',
			'txt_2' => '',
			'txt_3' => '',
      'background'=> '#fff',
      'color' => '#333'
		), $atts )
	);
return '
				<div class="content-detail-project" style=" background-color:'. $background .'">
				<div class="wrap-content-single">
        <div class="detail-txt col-md-4"><p style="color:'. $color .'">'.$txt.'</p></div>
				<div class="detail-txt col-md-4"><p style="color:'. $color .'">'.$txt_2.'</p></div>
				<div class="detail-txt col-md-4"><p style="color:'. $color .'">'.$txt_3.'</p></div>
        </div>
				</div>';
}
add_shortcode( 'block_3textes', 'block_3textes_shortcode' );

/**********block row************/
function block_row_shortcode( $atts , $content = null ) {
	extract( shortcode_atts(
		array(
		), $atts )
	);
return '
				<div class="wrap-content-single">
        <div class="detail-txt"><p>'.$content.'</p></div>
        </div>';
}
add_shortcode( 'block_row', 'block_row_shortcode' );

add_action('init','add_buttons');
function add_buttons(){
	if(current_user_can('edit_posts') && current_user_can('edit_pages')) {
		add_filter('mce_external_plugins','add_plugins');
		add_filter('mce_buttons','register_buttons');
	}
}


function add_plugins($plugins){
	$plugins['block_detail'] = get_bloginfo('template_url').'/js/tinymce/block-txt.js';
	$plugins['block'] = get_bloginfo('template_url').'/js/tinymce/block.js';
	$plugins['block_3textes'] = get_bloginfo('template_url').'/js/tinymce/block-3txt.js';
	$plugins['block_fullimg'] = get_bloginfo('template_url').'/js/tinymce/block-fullimg.js';
	return $plugins;
}

function register_buttons($buttons){
	array_push ($buttons,'block_detail');
	array_push ($buttons,'block');
	array_push ($buttons,'block_3textes');
	array_push ($buttons,'block_fullimg');
	return $buttons;
}

add_action ( 'after_wp_tiny_mce', 'mytheme_tinymce_extra_vars' );

if ( !function_exists( 'mytheme_tinymce_extra_vars' ) ) {
	function mytheme_tinymce_extra_vars() { ?>
		<script type="text/javascript">
			var tinyMCE_object = <?php echo json_encode(
				array(
					'button_name' => esc_html__('block img/txt', 'mythemeslug'),
					'button_title' => esc_html__('block img/txt', 'mythemeslug'),
					'image_title' => esc_html__('Url image', 'mythemeslug'),
					'image_button_title' => esc_html__('Upload image', 'mythemeslug'),
				)
				);
			?>;
		</script><?php
	}
}

/*
*
* end block
*
*/


/**********seperate*************/
function seperate_shortcode($atts , $content= null) {
  extract(shortcode_atts(
    array(
      'height'=>'10px'
    ), $atts)
  );
  return '<div class="seperate" style="padding-top:'. $height .'; padding-bottom: '. $height .'"></div>';
}
add_shortcode('seperate', 'seperate_shortcode');


/*******block 2 img + txt ****/
function block_full_shortcode($atts, $content = null){
	extract(shortcode_atts(
		array(
			'img_left'=> '',
			'title'=>'',
			'txt'=>'',
			'color' =>'',
			'background'=>'',
			'img_right'=>''
	),$atts)
);
return '
				<div class="full-img_txt">
				<div class="col-md-6">
				<div class="cover-left" style="background-image: url(' . $img_left . ')"></div>
				</div>
				<div class="col-md-3 content-txt-full" style="background-color: '. $background .'"><h3 style="color: '. $color .'">'. $title .'</h3>
				<p style="color: '. $color .'"> '.$txt .'</p>
				</div>
				<div class="col-md-3">
				<div class="cover-right" style="background-image: url('. $img_right .')"></div>
				</div>
				</div>
				';
}
add_shortcode('block_full','block_full_shortcode');



/*****contact form******/
function contact_form_shortcode($atts, $content = null){
	extract(shortcode_atts(
		array(
	),$atts)
);
ob_start();
include 'templates/contact-form.php';
return ob_get_clean();

}
add_shortcode('contact_form','contact_form_shortcode');
