<?php
/**
 * portfolio_hl Theme Customizer.
 *
 * @package portfolio_hl
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_hl_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
  $wp_customize->get_section( 'header_image' )->panel         = 'portfolio_hl_header_panel';
  $wp_customize->get_section( 'header_image' )->priority      = '12';

    //Titles
    class portfolio_hl_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
            <h3 style="margin-top:15px;border-bottom:2px solid;padding-bottom:5px;color:#53677b;text-transform:uppercase;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }

	//Get defaults
	$defaults = portfolio_hl_customizer_defaults();

	/**
	* Header Intro
	*/
	$wp_customize->add_panel( 'portfolio_hl_header_panel', array(
	  'priority'       => 10,
	  'capability'     => 'edit_theme_options',
	  'theme_supports' => '',
	  'title'          => __('Header', 'portfolio_hl'),
	) );


// section hello ////
////////////////////
	$wp_customize->add_section(
			'section_hello',
			array(
					'title'         => __('Section hello', 'portfolio_hl'),
					'priority'      => 10,
					'panel'         => 'portfolio_hl_header_panel',
			)
	);
	//phrase logo
	$wp_customize->add_setting(
	    'intro_title',
	    array(
	        'default'           => '',
	        'sanitize_callback' => 'portfolio_hl_sanitize_text',
	    )
	);

	$wp_customize->add_control(
	    'intro_title',
	    array(
	        'type'        => 'text',
	        'label'       => esc_html__('texte logo:', 'portfolio_hl'),
	        'section'     => 'section_hello',
	        'description' => __('Phrase explicative sur ma logique métier dans le logo ', 'portfolio_hl'),

	    )
	);
	//baiseline intro title
	$wp_customize->add_setting(
			'baiseline_title',
			array(
					'default'           => '',
					'sanitize_callback' => 'portfolio_hl_sanitize_text',
			)
	);
	$wp_customize->add_control(
			'baiseline_title',
			array(
					'type'        => 'text',
					'label'       => esc_html__('titre d\'accroche:', 'portfolio_hl'),
					'section'     => 'section_hello',

			)
	);
	//baiseline intro texte
	$wp_customize->add_setting(
			'baiseline_phrase',
			array(
					'default'           => '',
					'sanitize_callback' => 'portfolio_hl_sanitize_text',
			)
	);
	$wp_customize->add_control(
			'baiseline_phrase',
			array(
					'type'        => 'textarea',
					'label'       => esc_html__('texte d\'accroche:', 'portfolio_hl'),
					'section'     => 'section_hello',
					'description' => __('Baiseline d\'introduction en quelques mots', 'portfolio_hl'),

			)
	);

	/**
	 * Colors Hello
	 */
		$wp_customize->add_setting(
				'hello_bg_color',
				array(
						'default'           => $defaults['hello_bg_color'],
						'sanitize_callback' => 'sanitize_hex_color',
						'transport'         => 'postMessage'
				)
		);
		$wp_customize->add_control(
				new WP_Customize_Color_Control(
						$wp_customize,
						'hello_bg_color',
						array(
								'label'     => __('background color', 'portfolio_hl'),
								'section'   => 'section_hello',
						)
				)
		);

	// section graphic ////
	////////////////////
		$wp_customize->add_section(
				'section_graphic',
				array(
						'title'         => __('Section graphic design', 'portfolio_hl'),
						'priority'      => 10,
						'panel'         => 'portfolio_hl_header_panel',
				)
		);

		//block txt1 title
		$wp_customize->add_setting(
				'block_text_1_title',
				array(
						'default'           => '',
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);
		$wp_customize->add_control(
				'block_text_1_title',
				array(
						'type'        => 'text',
						'label'       => esc_html__('title:', 'portfolio_hl'),
						'section'     => 'section_graphic',

				)
		);
		$wp_customize->add_setting(
				'block_text_1_text',
				array(
						'default'           => '',
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);
		$wp_customize->add_control(
				'block_text_1_text',
				array(
						'type'        => 'textarea',
						'label'       => esc_html__('texte:', 'portfolio_hl'),
						'section'     => 'section_graphic',

				)
		);

		$wp_customize->add_setting(
			'img_graphic',
			array(
					'default' => '',
					'sanitize_callback' => 'esc_url_raw',
			)
	);
	$wp_customize->add_control(
			new WP_Customize_Image_Control(
					$wp_customize,
				'img_graphic',
					array(
						 'label'     => __( 'Image', 'portfolio_hl' ),
						 'type'      => 'image',
						 'section'   => 'section_graphic',
						 'priority'  => 10,
					)
			)
	);

	/**
	 * Colors Hello
	 */
		$wp_customize->add_setting(
				'graphic_bg_color',
				array(
						'default'           => $defaults['graphic_bg_color'],
						'sanitize_callback' => 'sanitize_hex_color',
						'transport'         => 'postMessage'
				)
		);
		$wp_customize->add_control(
				new WP_Customize_Color_Control(
						$wp_customize,
						'graphic_bg_color',
						array(
								'label'     => __('background color', 'portfolio_hl'),
								'section'   => 'section_graphic',
						)
				)
		);



	/**
	* Section
	*/
	$wp_customize->add_panel( 'portfolio_hl_section_panel', array(
			'priority'       => 11,
			'capability'     => 'edit_theme_options',
			'theme_supports' => '',
			'title'          => __('Home page', 'portfolio_hl'),
	) );

	$wp_customize->add_section(
			'section_presentation',
			array(
					'title'         => __('Section Presentation', 'portfolio_hl'),
					'priority'      => 10,
					'panel'         => 'portfolio_hl_section_panel',
			)
	);

	// Show section
	$wp_customize->add_setting( 'presentation_disable',
			array(
					'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
					'default'           => '',
			)
	);
	$wp_customize->add_control( 'presentation_disable',
			array(
					'type'        => 'checkbox',
					'label'       => esc_html__('cacher cette section ?', 'portfolio_hl'),
					'section'     => 'section_presentation',
			)
	);

	// presentation ID
	$wp_customize->add_setting( 'presentation_id',
			array(
					'sanitize_callback' => 'portfolio_hl_sanitize_text',
					'default'           => $defaults['section_presentation'],
			)
	);
	$wp_customize->add_control( 'presentation_id',
			array(
					'label' 		=> esc_html__('Section ID:', 'portfolio_hl'),
					'section' 		=> 'section_presentation',
					'description'   => esc_html__( 'L\'id de section que nous allons utiliser pour l\'ancre de lien.', 'portfolio_hl' )
			)
	);

	//presentation title
	$wp_customize->add_setting(
			'presentation_title',
			array(
					'default'           => $defaults['section_presentation'],
					'sanitize_callback' => 'portfolio_hl_sanitize_text',
			)
	);
	$wp_customize->add_control(
			'presentation_title',
			array(
					'type'        => 'text',
					'label'       => esc_html__('Section Titre:', 'portfolio_hl'),
					'section'     => 'section_presentation',
			)
	);

	//presentation subtile
	$wp_customize->add_setting(
			'presentation_subtitle',
			array(
					'default'           => $defaults['section_presentation'],
					'sanitize_callback' => 'portfolio_hl_sanitize_text',
			)
	);
	$wp_customize->add_control(
			'presentation_subtitle',
			array(
					'type'        => 'text',
					'label'       => esc_html__('Section Sous-Titre:', 'portfolio_hl'),
					'section'     => 'section_presentation',
			)
	);

	//presentation texte
	$wp_customize->add_setting(
			'presentation_texte',
			array(
					'default'           => $defaults['section_presentation'],
					'sanitize_callback' => 'portfolio_hl_sanitize_text',
			)
	);
	$wp_customize->add_control(
			'presentation_texte',
			array(
					'type'        => 'textarea',
					'label'       => esc_html__('Section Texte:', 'portfolio_hl'),
					'section'     => 'section_presentation',
			)
	);

	/**
	 * Colors Section presentation
	 */
    $wp_customize->add_setting(
        'presentation_bg_color',
        array(
            'default'           => $defaults['presentation_bg_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'presentation_bg_color',
            array(
                'label'     => __('background color', 'portfolio_hl'),
                'section'   => 'section_presentation',
            )
        )
    );

		///opacity Big title
$wp_customize->add_setting(
		'opacity_big_title',
		array(
				'default' => $defaults['opacity_big_title'],

		)
);
$wp_customize->add_control(
		'opacity_big_title',
		array(
				'label' => __( 'Opacity titre background ', 'portfolio_hl' ),
				'section' => 'section_presentation',
				'type' => 'number',
				'description'   => __('opacity [defaut: 1]', 'portfolio_hl'),
				'priority' => 15
		)
);




//section texte///
$wp_customize->add_section(
		'section_texte',
		array(
				'title'         => __('Section Texte', 'portfolio_hl'),
				'priority'      => 10,
				'panel'         => 'portfolio_hl_section_panel',
		)
);

// Show section
$wp_customize->add_setting( 'texte_disable',
		array(
				'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
				'default'           => '',
		)
);
$wp_customize->add_control( 'texte_disable',
		array(
				'type'        => 'checkbox',
				'label'       => esc_html__('cacher cette section ?', 'portfolio_hl'),
				'section'     => 'section_texte',
		)
);

//section texte light
$wp_customize->add_setting(
		'section_texte_light_texte',
		array(
				'default'           => '',
				'sanitize_callback' => 'portfolio_hl_sanitize_text',
		)
);
$wp_customize->add_control(
		'section_texte_light_texte',
		array(
				'type'        => 'textarea',
				'label'       => esc_html__('Texte style light:', 'portfolio_hl'),
				'section'     => 'section_texte',
		)
);

//section texte
$wp_customize->add_setting(
		'section_texte_texte',
		array(
				'default'           => '',
				'sanitize_callback' => 'portfolio_hl_sanitize_text',
		)
);
$wp_customize->add_control(
		'section_texte_texte',
		array(
				'type'        => 'textarea',
				'label'       => esc_html__('Texte:', 'portfolio_hl'),
				'section'     => 'section_texte',
		)
);

/**
 * Colors Section presentation
 */
	$wp_customize->add_setting(
			'section_texte_bg_color',
			array(
					'default'           => '',
					'sanitize_callback' => 'sanitize_hex_color',
					'transport'         => 'postMessage'
			)
	);
	$wp_customize->add_control(
			new WP_Customize_Color_Control(
					$wp_customize,
					'section_texte_bg_color',
					array(
							'label'     => __('background color', 'portfolio_hl'),
							'section'   => 'section_texte',
					)
			)
	);

//section 2//
////////////

//Slider//
    $wp_customize->add_section(
        'portfolio_hl_slider',
        array(
            'title'         => __('Section Slider', 'portfolio_hl'),
            'description'   => __('Configure your header slider here, then go to <strong>Header Area > Header Type</strong> and choose where you want to display it.', 'portfolio_hl'),
            'priority'      => 11,
            'panel'         => 'portfolio_hl_section_panel',
        )
    );

		// Show section
		$wp_customize->add_setting( 'slider_disable',
				array(
						'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
						'default'           => '',
				)
		);
		$wp_customize->add_control( 'slider_disable',
				array(
						'type'        => 'checkbox',
						'label'       => esc_html__('cacher cette section ?', 'portfolio_hl'),
						'section'     => 'portfolio_hl_slider',
						'priority'      => 1,
				)
		);
		$wp_customize->add_setting(
        'slider_bg_color',
        array(
            'default'           => $defaults['presentation_bg_color'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'slider_bg_color',
            array(
                'label'     => __('background color', 'portfolio_hl'),
                'section'   => 'portfolio_hl_slider',
								'priority'      => 2,
            )
        )
    );
		//presentation title
		$wp_customize->add_setting(
				'section_slider_title',
				array(
						'default'           => $defaults['section_presentation'],
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);
		$wp_customize->add_control(
				'section_slider_title',
				array(
						'type'        => 'text',
						'label'       => esc_html__('Section Titre:', 'portfolio_hl'),
						'section'     => 'portfolio_hl_slider',
						'priority'      => 3,
				)
		);

		//row
		$wp_customize->add_setting(
					'slider_class',
					array(
							'defaut' => $defaults['slider_class'],
							'sanitize_callback' => 'portfolio_hl_sanitize_text',
					)
			);

			$wp_customize->add_control(
					'slider_class',
					array(
							'type'      => 'text',
							'label'     => __('Ajoute une classe', 'portfolio_hl'),
							'section'   => 'portfolio_hl_slider',
							'priority'  => 4,
					)
			);

    //Speed
    $wp_customize->add_setting(
        'slider_speed',
        array(
            'default' => $defaults['slider_speed'],
            'sanitize_callback' => 'absint',
        )
    );
    $wp_customize->add_control(
        'slider_speed',
        array(
            'label' => __( 'Slider speed', 'portfolio_hl' ),
            'section' => 'portfolio_hl_slider',
            'type' => 'number',
            'description'   => __('Slider speed in miliseconds [default: 4000]', 'portfolio_hl'),
            'priority' => 7
        )
    );


	for ($c = 1; $c <= 3; $c++) {
	    $wp_customize->add_control( new portfolio_hl_Info( $wp_customize, 'slide' . $c, array(
	        'label' => __('Slide ', 'portfolio_hl') . $c,
	        'section' => 'portfolio_hl_slider',
	        'settings' => array(),
	        'priority' => 10
	        ) )
	    );

	    $wp_customize->add_setting(
	        'slide_image_' . $c,
	        array(
	            'default' => $defaults['slide_image_' . $c],
	            'sanitize_callback' => 'esc_url_raw',
	        )
	    );
	    $wp_customize->add_control(
	        new WP_Customize_Image_Control(
	            $wp_customize,
	        	'slide_image_' . $c,
	            array(
	               'label'     => __( 'Upload your image', 'portfolio_hl' ),
	               'type'      => 'image',
	               'section'   => 'portfolio_hl_slider',
	               'priority'  => 10,
	            )
	        )
	    );
	    $wp_customize->add_setting(
	        'slide_title_' . $c,
	        array(
	            'sanitize_callback' => 'portfolio_hl_sanitize_text',
	        )
	    );
	    $wp_customize->add_control(
	        'slide_title_' . $c,
	        array(
	            'label' 	=> __( 'Slide title', 'portfolio_hl' ),
	            'section' 	=> 'portfolio_hl_slider',
	            'type' 		=> 'text',
	            'priority' 	=> 10
	        )
	    );
	    $wp_customize->add_setting(
	        'slide_subtitle_' . $c,
	        array(
	            'sanitize_callback' => 'portfolio_hl_sanitize_text',
	        )
	    );
	    $wp_customize->add_control(
	        'slide_subtitle_' . $c,
	        array(
	            'label' 	=> __( 'Slide subtitle', 'portfolio_hl' ),
	            'section' 	=> 'portfolio_hl_slider',
	            'type' 		=> 'text',
	            'priority' 	=> 10
	        )
	    );

	}

	//section 3//
	////////////

	//Icon//
	    $wp_customize->add_section(
	        'section_icon',
	        array(
	            'title'         => __('Section Icon', 'portfolio_hl'),
	            'description'   => __('Configure your header slider here, then go to <strong>Header Area > Header Type</strong> and choose where you want to display it.', 'portfolio_hl'),
	            'priority'      => 11,
	            'panel'         => 'portfolio_hl_section_panel',
	        )
	    );
			// Show section
			$wp_customize->add_setting( 'icon_disable',
					array(
							'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
							'default'           => '',
					)
			);
			$wp_customize->add_control( 'icon_disable',
					array(
							'type'        => 'checkbox',
							'label'       => esc_html__('cacher cette section ?', 'portfolio_hl'),
							'section'     => 'section_icon',
							'priority'      => 1,
					)
			);

			//circle icon
			$wp_customize->add_setting(
					'circle_icon',
					array(
							'sanitize_callback' => 'portfolio_hl_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'circle_icon',
					array(
							'label'    =>__('style icon','portfolio_hl'),
							'type'     => 'select',
							'section'  => 'section_icon',
							'priority' => 10,
							'choices'     => array(
							 'icon-default' => __( 'defaut'),
							 'icon-circle'  => __( 'rond'),
							)
					)
			);


			//icon section title
			$wp_customize->add_setting(
					'section_icon_title',
					array(
							'default'           =>'',
							'sanitize_callback' => 'portfolio_hl_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'section_icon_title',
					array(
							'type'        => 'text',
							'label'       => esc_html__('Section Titre:', 'portfolio_hl'),
							'section'     => 'section_icon',
							'priority'      => 2,
					)
			);
			//icon section title span
			$wp_customize->add_setting(
					'section_icon_title_span',
					array(
							'default'           =>'',
							'sanitize_callback' => 'portfolio_hl_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'section_icon_title_span',
					array(
							'type'        => 'text',
							'label'       => esc_html__('Section Span:', 'portfolio_hl'),
							'section'     => 'section_icon',
							'priority'      => 3,
					)
			);
			//icon section title description
			$wp_customize->add_setting(
					'section_icon_desc',
					array(
							'default'           =>'',
							'sanitize_callback' => 'portfolio_hl_sanitize_text',
					)
			);
			$wp_customize->add_control(
					'section_icon_desc',
					array(
							'type'        => 'textarea',
							'label'       => esc_html__('Section Description:', 'portfolio_hl'),
							'section'     => 'section_icon',
							'priority'      => 4,
					)
			);
			//bg color
			$wp_customize->add_setting(
	        'section_icon_bg_color',
	        array(
	            'default'           => $defaults['section_icon_bg_color'],
	            'sanitize_callback' => 'sanitize_hex_color',
	            'transport'         => 'postMessage'
	        )
	    );
	    $wp_customize->add_control(
	        new WP_Customize_Color_Control(
	            $wp_customize,
	            'section_icon_bg_color',
	            array(
	                'label'     => __('background color', 'portfolio_hl'),
	                'section'   => 'section_icon',
									'priority'      => 5,
	            )
	        )
	    );
			$wp_customize->add_setting(
						'icon_color',
						array(
							'default'	=> $defaults['icon_color'],
							'sanitize_callback' => 'sanitize_hex_color',
							'transport'         => 'postMessage'
						)
				);
				$wp_customize->add_control(
						new WP_Customize_Color_Control(
								$wp_customize,
								'icon_color',
								array(
										'label'     => __('Icon color', 'portfolio_hl'),
										'section'   => 'section_icon',
										'priority'      => 6,
								)
						)
				);


			/// icon
			for ($c = 1; $c <= 6; $c++) {
			    $wp_customize->add_control( new portfolio_hl_Info( $wp_customize, 'icon' . $c, array(
			        'label' => __('Icon ', 'portfolio_hl') . $c,
			        'section' => 'section_icon',
			        'settings' => array(),
			        'priority' => 10
			        ) )
			    );

				$wp_customize->add_setting(
							'icon_icon_' . $c,
							array(
									'default'=>'',
									'sanitize_callback' => 'portfolio_hl_sanitize_text',
							)
					);

				$wp_customize->add_control(
							'icon_icon_' . $c,
							array(
									'label'    =>__('Liste icon','portfolio_hl'),
									'type'     => 'select',
									'section'  => 'section_icon',
									'priority' => 10,
									'choices'     => array(
									 'portfolio_hl-browser' => __( 'browser'),
									 'portfolio_hl-laptop'  => __( 'laptop'),
									 'portfolio_hl-light-bulb'  => __( 'light-bulb'),
									 'portfolio_hl-responsive'  => __( 'responsive'),
									 'portfolio_hl-settings'  => __( 'settings'),
									 'portfolio_hl-vector'  => __( 'vector'),
									)
							)
					);

			    $wp_customize->add_setting(
			        'icon_subtitle_' . $c,
			        array(
			            'sanitize_callback' => 'portfolio_hl_sanitize_text',
			        )
			    );
			    $wp_customize->add_control(
			        'icon_subtitle_' . $c,
			        array(
			            'label' 	=> __( 'Icon subtitle', 'portfolio_hl' ),
			            'section' 	=> 'section_icon',
			            'type' 		=> 'text',
			            'priority' 	=> 10
			        )
			    );
			}

			//section 4//
			////////////

			//Parallax//
			    $wp_customize->add_section(
			        'section_parallax',
			        array(
			            'title'         => __('Section parallax', 'portfolio_hl'),
			            'priority'      => 11,
			            'panel'         => 'portfolio_hl_section_panel',
			        )
			    );
					// Show section
					$wp_customize->add_setting( 'parallax_disable',
							array(
									'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
									'default'           => '',
							)
					);
					$wp_customize->add_control( 'parallax_disable',
							array(
									'type'        => 'checkbox',
									'label'       => esc_html__('cacher cette section ?', 'portfolio_hl'),
									'section'     => 'section_parallax',
									'priority'      => 1,
							)
					);

					//image parallax
					$wp_customize->add_setting(
							 'section_parallax_image',
							 array(
									 'default' => $defaults['section_web_image_1'],
									 'sanitize_callback' => 'esc_url_raw',
							 )
					 );
					 $wp_customize->add_control(
							 new WP_Customize_Image_Control(
									 $wp_customize,
								 'section_parallax_image',
									 array(
											'label'     => __( 'Image parallax', 'portfolio_hl' ),
											'description' => __('format png', 'portfolio_hl'),
											'type'      => 'image',
											'section'   => 'section_parallax',
											'priority'  => 10,
									 )
							 )
					 );

					 //image device
					 $wp_customize->add_setting(
								'section_parallax_image_device',
								array(
										'default' => $defaults['section_web_image_2'],
										'sanitize_callback' => 'esc_url_raw',
								)
						);
						$wp_customize->add_control(
								new WP_Customize_Image_Control(
										$wp_customize,
									'section_parallax_image_device',
										array(
											 'label'     => __( 'Image device', 'portfolio_hl' ),
											 'type'      => 'image',
											 'section'   => 'section_parallax',
											 'priority'  => 10,
										)
								)
						);
						//block txt title
						$wp_customize->add_setting(
								'section_parallax_title',
								array(
										'default'           => '',
										'sanitize_callback' => 'portfolio_hl_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'section_parallax_title',
								array(
										'type'        => 'text',
										'label'       => esc_html__('title:', 'portfolio_hl'),
										'section'     => 'section_parallax',

								)
						);
						$wp_customize->add_setting(
								'section_parallax_text',
								array(
										'default'           => '',
										'sanitize_callback' => 'portfolio_hl_sanitize_text',
								)
						);
						$wp_customize->add_control(
								'section_parallax_text',
								array(
										'type'        => 'textarea',
										'label'       => esc_html__('texte:', 'portfolio_hl'),
										'section'     => 'section_parallax',
								)
						);


						///control parallax
				$wp_customize->add_setting(
						'parallax_effect',
						array(
								'default' => $defaults['parallax_effect'],

						)
				);
				$wp_customize->add_control(
						'parallax_effect',
						array(
								'label' => __( 'Parallax effect', 'portfolio_hl' ),
								'section' => 'section_parallax',
								'type' => 'number',
								'description'   => __('force parallax [defaut: 1.85]', 'portfolio_hl'),
								'priority' => 7
						)
				);
				//bg color
				$wp_customize->add_setting(
						'parallax_bg_color',
						array(
								'default'           => $defaults['parallax_bg_color'],
								'sanitize_callback' => 'sanitize_hex_color',
								'transport'         => 'postMessage'
						)
				);
				$wp_customize->add_control(
						new WP_Customize_Color_Control(
								$wp_customize,
								'parallax_bg_color',
								array(
										'label'     => __('background color', 'portfolio_hl'),
										'section'   => 'section_parallax',
										'priority'      => 5,
								)
						)
				);


			//section 5//
			////////////

			//Post//
			    $wp_customize->add_section(
			        'section_post',
			        array(
			            'title'         => __('Section Post', 'portfolio_hl'),
			            'priority'      => 12,
			            'panel'         => 'portfolio_hl_section_panel',
			        )
			    );
					// Show section
					$wp_customize->add_setting( 'post_disable',
							array(
									'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
									'default'           => '',
							)
					);
					$wp_customize->add_control( 'post_disable',
							array(
									'type'        => 'checkbox',
									'label'       => esc_html__('cacher cette section ?', 'portfolio_hl'),
									'section'     => 'section_post',
									'priority'      => 1,
							)
					);
					//about me section title
					$wp_customize->add_setting(
							'post_title',
							array(
									'default'           =>'',
									'sanitize_callback' => 'portfolio_hl_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'post_title',
							array(
									'type'        => 'text',
									'label'       => esc_html__('Section Titre:', 'portfolio_hl'),
									'section'     => 'section_post',
									'priority'      => 2,
							)
					);
					//about me section title span
					$wp_customize->add_setting(
							'post_span',
							array(
									'default'           =>'',
									'sanitize_callback' => 'portfolio_hl_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'post_span',
							array(
									'type'        => 'text',
									'label'       => esc_html__('Section Span:', 'portfolio_hl'),
									'section'     => 'section_post',
									'priority'      => 3,
							)
					);
					//about me section title description
					$wp_customize->add_setting(
							'post_text',
							array(
									'default'           =>'',
									'sanitize_callback' => 'portfolio_hl_sanitize_text',
							)
					);
					$wp_customize->add_control(
							'post_text',
							array(
									'type'        => 'textarea',
									'label'       => esc_html__('Section Description:', 'portfolio_hl'),
									'section'     => 'section_post',
									'priority'      => 4,
							)
					);
					//bg color
					$wp_customize->add_setting(
			        'post_bg_color',
			        array(
			            'default'           => '',
			            'sanitize_callback' => 'sanitize_hex_color',
			            'transport'         => 'postMessage'
			        )
			    );
			    $wp_customize->add_control(
			        new WP_Customize_Color_Control(
			            $wp_customize,
			            'post_bg_color',
			            array(
			                'label'     => __('background color', 'portfolio_hl'),
			                'section'   => 'section_post',
											'priority'      => 5,
			            )
			        )
			    );

		/**
	  * Portfolio
		*/
	////////////////////
		$wp_customize->add_section(
				'portfolio_type',
				array(
						'title'         => __('Portfolio', 'portfolio_hl'),
						'priority'      => 10
				)
		);

//title page
		$wp_customize->add_setting(
			'title_page_folio',
			array(
				'default'						=>'',
				'sanitize_callback' => 'portfolio_hl_sanitize_text',
			)
		);

		$wp_customize->add_control(
				'title_page_folio',
				array(
						'type'        => 'text',
						'label'       => esc_html__('Titre de la page:', 'portfolio_hl'),
						'section'     => 'portfolio_type',
						'priority'      => 3,
				)
		);

		//grid portfolio
		$wp_customize->add_setting(
				'grid_folio',
				array(
					'default' 					 => 3,
					'sanitize_callback'  =>'portfolio_hl_sanitize_text',
				)
			);

			$wp_customize->add_control(
				'grid_folio',
				array(
            'type'        => 'select',
            'label'       => __('Grille', 'portfolio_hl'),
            'section'     => 'portfolio_type',
            'choices' => array(
                2 => 2,
                3 => 3,
                4 => 4
            )
        )
			);

			//Full width folio
			$wp_customize->add_setting(
					'fullwidth_folio',
					array(
							'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
					)
			);
			$wp_customize->add_control(
					'fullwidth_folio',
					array(
							'type'      => 'checkbox',
							'label'     => __('Full width portfolio', 'portfolio_hl'),
							'section'   => 'portfolio_type',
							'priority'  => 11,
					)
			);

		// //Full width singles
    // $wp_customize->add_setting(
    //     'fullwidth_single',
    //     array(
    //         'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
    //     )
    // );
    // $wp_customize->add_control(
    //     'fullwidth_single',
    //     array(
    //         'type'      => 'checkbox',
    //         'label'     => __('Full width solo', 'portfolio_hl'),
    //         'section'   => 'portfolio_type',
    //         'priority'  => 12,
    //     )
    // );


		/**
	  * Social
		*/
		$wp_customize->add_section(
				'social_type',
				array(
						'title'         => __('Social', 'portfolio_hl'),
						'priority'      => 10
				)
		);

		////facebook-url
		$wp_customize->add_setting(
				'social_facebook_url',
				array(
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
						'default'           => '',
				)
		);

		$wp_customize->add_control( new portfolio_hl_Info( $wp_customize, 'facebook', array(
				'label' => __('Facebook ', 'portfolio_hl'),
				'section' => 'social_type',
				'settings' => array(),
				'priority' => 10
				) )
		);

		$wp_customize->add_control(
				'social_facebook_url',
				array(
					'type'        => 'text',
					'label'       => esc_html__('Facebook url', 'portfolio_hl'),
					'section'   => 'social_type',
					'priority'  => 12,
				)
		);

		//facebook-icon
		$wp_customize->add_setting(
				'social_facebook_icon',
				array(
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);

		$wp_customize->add_control(
				'social_facebook_icon',
				array(
						'label'    =>__('Facebook icon','portfolio_hl'),
						'type'     => 'select',
						'section'  => 'social_type',
						'priority' => 13,
						'choices'     => array(
						 'fa-facebook-f' => __( 'facebook-f'),
						 'fa-facebook'  => __( 'facebook'),
						 'fa-facebook-square'  => __( 'facebook-square'),
						)
				)
		);

		////linkedin-url
		$wp_customize->add_setting(
				'social_linkedin_url',
				array(
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);

		$wp_customize->add_control( new portfolio_hl_Info( $wp_customize, 'linkedin', array(
				'label' => __('Linkedin ', 'portfolio_hl'),
				'section' => 'social_type',
				'settings' => array(),
				'priority' => 14,
				) )
		);

		$wp_customize->add_control(
				'social_linkedin_url',
				array(
					'type'        => 'text',
					'label'       => esc_html__('Linkedin url', 'portfolio_hl'),
					'section'   => 'social_type',
					'priority'  => 15,
				)
		);

		//linkedin-icon
		$wp_customize->add_setting(
				'social_linkedin_icon',
				array(
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);

		$wp_customize->add_control(
				'social_linkedin_icon',
				array(
						'label'    =>__('Linkedin icon','portfolio_hl'),
						'type'     => 'select',
						'section'  => 'social_type',
						'priority' => 15,
						'choices'     => array(
						 'fa-linkedin-in' => __( 'linkedin-in'),
						 'fa-linkedin'  => __( 'linkedin'),
						)
				)
		);

		////instagram-url
		$wp_customize->add_setting(
				'social_instagram_url',
				array(
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);

		$wp_customize->add_control( new portfolio_hl_Info( $wp_customize, 'instagram', array(
				'label' => __('Instagram ', 'portfolio_hl'),
				'section' => 'social_type',
				'settings' => array(),
				'priority' => 16,
				) )
		);

		$wp_customize->add_control(
				'social_instagram_url',
				array(
					'type'        => 'text',
					'label'       => esc_html__('Instagram url', 'portfolio_hl'),
					'section'   => 'social_type',
					'priority'  => 16,
				)
		);

		//linkedin-icon
		$wp_customize->add_setting(
				'social_instagram_icon',
				array(
						'sanitize_callback' => 'portfolio_hl_sanitize_text',
				)
		);

		$wp_customize->add_control(
				'social_instagram_icon',
				array(
						'label'    =>__('Instagram icon','portfolio_hl'),
						'type'     => 'select',
						'section'  => 'social_type',
						'priority' => 16,
						'choices'     => array(
						 'fa-instagram' => __( 'instagram'),
						)
				)
		);



		/**
	  * Colors General
		*/
			 $wp_customize->add_setting(
					 'logo_color',
					 array(
							 'default'           => $defaults['logo_color'],
							 'sanitize_callback' => 'sanitize_hex_color',
							 'transport'         => 'postMessage'
					 )
			 );
			 $wp_customize->add_control(
					 new WP_Customize_Color_Control(
							 $wp_customize,
							 'logo_color',
							 array(
									 'label' 	=> __('logo color', 'portfolio_hl'),
									 'section' 	=> 'colors',
									 'priority' 	=> 1
							 )
					 )
			 );
				$wp_customize->add_setting(
					 'bg_color',
					 array(
							 'default'           => $defaults['bg_color'],
							 'sanitize_callback' => 'sanitize_hex_color',
							 'transport'         => 'postMessage'
					 )
			 );
			 $wp_customize->add_control(
					 new WP_Customize_Color_Control(
							 $wp_customize,
							 'bg_color',
							 array(
									 'label' 	=> __('background color', 'portfolio_hl'),
									 'section' 	=> 'colors',
									 'priority' 	=> 11
							 )
					 )
			 );

			 $wp_customize->add_setting(
					 'body_color',
					 array(
							 'default'           => $defaults['body_color'],
							 'sanitize_callback' => 'sanitize_hex_color',
							 'transport'         => 'postMessage'
					 )
			 );
			 $wp_customize->add_control(
					 new WP_Customize_Color_Control(
							 $wp_customize,
							 'body_color',
							 array(
									 'label' 	=> __('body texte color', 'portfolio_hl'),
									 'section' 	=> 'colors',
									 'priority' 	=> 12
							 )
					 )
			 );



	/**
	 * Footer
	 */
    $wp_customize->add_section(
        'portfolio_hl_footer',
        array(
            'title'         => __('Footer', 'portfolio_hl'),
            'priority'      => 21,
        )
    );
    $wp_customize->add_setting(
        'footer_widget_areas',
        array(
            'default'           => '3',
            'sanitize_callback' => 'portfolio_hl_sanitize_fwidgets',
        )
    );
    $wp_customize->add_control(
        'footer_widget_areas',
        array(
            'type'        => 'radio',
            'label'       => __('Footer widget area', 'portfolio_hl'),
            'section'     => 'portfolio_hl_footer',
            'description' => __('Choose the number of widget areas in the footer, then go to Appearance > Widgets and add your widgets.', 'portfolio_hl'),
            'choices' => array(
                '1'     => __('One', 'portfolio_hl'),
                '2'     => __('Two', 'portfolio_hl'),
                '3'     => __('Three', 'portfolio_hl'),
            ),
        )
    );




    //Meta
    $wp_customize->add_setting(
      'hide_meta_singles',
      array(
        'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
        'default' => 0,
      )
    );
    $wp_customize->add_control(
      'hide_meta_singles',
      array(
        'type' => 'checkbox',
        'label' => __('Hide meta on single posts?', 'portfolio_hl'),
        'section' => 'portfolio_hl_blog',
        'priority' => 15,
      )
    );
    $wp_customize->add_setting(
      'hide_meta_index',
      array(
        'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
        'default' => 0,
      )
    );
    $wp_customize->add_control(
      'hide_meta_index',
      array(
        'type' => 'checkbox',
        'label' => __('Hide meta on blog index?', 'portfolio_hl'),
        'section' => 'portfolio_hl_blog',
        'priority' => 16,
      )
    );
    //Featured images
    $wp_customize->add_setting(
        'hide_featured_singles',
        array(
            'sanitize_callback' => 'portfolio_hl_sanitize_checkbox',
        )
    );
    $wp_customize->add_control(
        'hide_featured_singles',
        array(
            'type' => 'checkbox',
            'label' => __('Hide featured images on single posts?', 'portfolio_hl'),
            'section' => 'portfolio_hl_blog',
            'priority' => 17,
        )
    );
}
add_action( 'customize_register', 'portfolio_hl_customize_register' );

/**
 * Sanitize
 */

//Text
function portfolio_hl_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
//Checkboxes
function portfolio_hl_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}


//Footer widget areas
function portfolio_hl_sanitize_fwidgets( $input ) {
    if ( in_array( $input, array( '1', '2', '3' ), true ) ) {
        return $input;
    }
}
//Blog layout
function portfolio_hl_sanitize_folio( $input ) {
      if ( in_array( $input, array( '2', '3', '4' ), true ) ) {
        return $input;
    }
}
//Fonts
function portfolio_hl_sanitize_font_weights( $input ) {

    $multi_values = !is_array( $input ) ? explode( ',', $input ) : $input;

    return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function portfolio_hl_customize_preview_js() {
	wp_enqueue_script( 'portfolio_hl_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'portfolio_hl_customize_preview_js' );

/**
 * Load custom controls
 */
function portfolio_hl_load_customize_controls() {

    require_once( trailingslashit( get_template_directory() ) . 'inc/controls/control-multicheckbox.php' );
}
add_action( 'customize_register', 'portfolio_hl_load_customize_controls', 0 );
