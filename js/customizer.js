/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
	value.bind( function( to ) {
		$( '.site-description' ).text( to );
	} );
} );

wp.customize( 'hello_bg_color', function( value ) {
	value.bind( function( to ) {
		$( '.part_home' ).css('background-color', to );
	} );
} );

wp.customize( 'graphic_bg_color', function( value ) {
	value.bind( function( to ) {
		$( '.part_full' ).css('background-color', to );
	} );
} );

	wp.customize( 'presentation_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#present' ).css('background-color', to );
		} );
	} );

	wp.customize( 'slider_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#slider' ).css('background-color', to );
		} );
	} );

	wp.customize( 'section_icon_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#icon' ).css('background-color', to );
		} );
	} );

	wp.customize( 'icon_color', function( value ) {
	value.bind( function( to ) {
		$( '.icon-item i' ).css('color', to );
	} );
	} );

	wp.customize( 'icon_color', function( value ) {
	value.bind( function( to ) {
		$( '.icon-item' ).css('border-color', to );
	} );
	} );

	wp.customize( 'parallax_bg_color', function( value ) {
	value.bind( function( to ) {
		$( '#parallax' ).css('background-color', to );
	} );
	} );

	wp.customize( 'post_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#post' ).css('background-color', to );
		} );
	} );

	wp.customize( 'cursus_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#cursus' ).css('background-color', to );
		} );
	} );

	wp.customize( 'about_txt_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#texte' ).css('background-color', to );
		} );
	} );

	wp.customize( 'about_txt_texte_color', function( value ) {
		value.bind( function( to ) {
			$( '.content-texte_list' ).css('color', to );
		} );
	} );

	wp.customize( 'about_txt_texte_color', function( value ) {
		value.bind( function( to ) {
			$( '.content-about_texte' ).css('color', to );
		} );
	} );

	wp.customize( 'icon_outils_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '#icon-outils' ).css('background-color', to );
		} );
	} );

	wp.customize( 'icon_outils_thumb_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.block-icon' ).css('background-color', to );
		} );
	} );

	wp.customize( 'icon_outils_thumb_bg_color_dark', function( value ) {
		value.bind( function( to ) {
			$( '.block-icon._dark' ).css('background-color', to );
		} );
	} );


	wp.customize( 'body_color', function( value ) {
	value.bind( function( to ) {
		$( 'body' ).css('color', to );
	} );
} );

wp.customize( 'bg_color', function( value ) {
value.bind( function( to ) {
	$( 'body' ).css('background-color', to );
} );
} );



// 	wp.customize( 'slide_animation_title_', function( value ) {
// 	value.bind( function( to ) {
// 		$( '.title-animate' ).text( to );
// 	} );
// } );

// wp.customize('slide_animation_title_',function( value ) {
// 		value.bind( function( newval ) {
// 				$('.title-animate').adClass( newval );
// 		} );
// });


} )( jQuery );
