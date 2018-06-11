<?php
/**
 * portfolio_hl Theme Customizer about.
 *
 * @package portfolio_hl
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_hl_customize_register_about( $wp_customize ) {

  /**
  * page about
  */
  $wp_customize->add_panel( 'portfolio_hl_section_about_panel', array(
      'priority'       => 16,
      'capability'     => 'edit_theme_options',
      'theme_supports' => '',
      'title'          => __('A propos', 'portfolio_hl'),
  ) );

  $wp_customize->add_section(
      'section_cursus',
      array(
          'title'         => __('Section cursus', 'portfolio_hl'),
          'priority'      => 10,
          'panel'         => 'portfolio_hl_section_about_panel',
      )
  );

			for ($c = 1; $c <= 3; $c++) {

        $wp_customize->add_control( new portfolio_hl_Info( $wp_customize, 'cursus' . $c, array(
            'label' => __('Texte ', 'portfolio_hl') . $c,
            'section' => 'section_cursus',
            'settings' => array(),
            'priority' => 10
            ) )
        );
  //cursus big_texte
  $wp_customize->add_setting(
      'cursus_big_texte'. $c,
      array(
          'default'           => '',
          'sanitize_callback' => 'portfolio_hl_sanitize_text',
      )
  );
  $wp_customize->add_control(
      'cursus_big_texte'. $c,
      array(
          'type'        => 'textarea',
          'label'       => esc_html__('big texte:', 'portfolio_hl'),
          'section'     => 'section_cursus',
      )
  );

  //cursus min_texte
  $wp_customize->add_setting(
      'cursus_min_texte'. $c,
      array(
          'default'           => '',
          'sanitize_callback' => 'portfolio_hl_sanitize_text',
      )
  );
  $wp_customize->add_control(
      'cursus_min_texte'. $c,
      array(
          'type'        => 'textarea',
          'label'       => esc_html__('min texte:', 'portfolio_hl'),
          'section'     => 'section_cursus',
      )
  );
}
  /**
   * Colors
   */
    $wp_customize->add_setting(
        'cursus_bg_color',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'cursus_bg_color',
            array(
                'label'     => __('background color', 'portfolio_hl'),
                'section'   => 'section_cursus',
            )
        )
    );


////////////section txt
    $wp_customize->add_section(
        'section_about_txt',
        array(
            'title'         => __('Section texte', 'portfolio_hl'),
            'priority'      => 10,
            'panel'         => 'portfolio_hl_section_about_panel',
        )
    );

    //about_title_section
    $wp_customize->add_setting(
    'about_title_section',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfolio_hl_sanitize_text',
    )
    );
    $wp_customize->add_control(
    'about_title_section',
    array(
        'type'        => 'text',
        'label'       => esc_html__('Title section:', 'portfolio_hl'),
        'section'     => 'section_about_txt',
    )
    );

    //about_texte_section
    $wp_customize->add_setting(
    'about_texte_section',
    array(
        'default'           => '',
        'sanitize_callback' => 'portfolio_hl_sanitize_text',
    )
    );

    $wp_customize->add_control(
    'about_texte_section',
    array(
        'type'        => 'textarea',
        'label'       => esc_html__('Texte section:', 'portfolio_hl'),
        'section'     => 'section_about_txt',
    )
    );

    for ($c = 1; $c <= 6; $c++) {

      $wp_customize->add_control( new portfolio_hl_Info( $wp_customize, 'about_txt' . $c, array(
          'label' => __('Texte ', 'portfolio_hl') . $c,
          'section' => 'section_about_txt',
          'settings' => array(),
          'priority' => 10
          ) )
      );
    //about_txt_title
    $wp_customize->add_setting(
    'about_txt_title'. $c,
    array(
        'default'           => '',
        'sanitize_callback' => 'portfolio_hl_sanitize_text',
    )
    );
    $wp_customize->add_control(
    'about_txt_title'. $c,
    array(
        'type'        => 'text',
        'label'       => esc_html__('Title:', 'portfolio_hl'),
        'section'     => 'section_about_txt',
    )
    );

    //about_txt_texte
    $wp_customize->add_setting(
    'about_txt_texte'. $c,
    array(
        'default'           => '',
        'sanitize_callback' => 'portfolio_hl_sanitize_text',
    )
    );

    $wp_customize->add_control(
    'about_txt_texte'. $c,
    array(
        'type'        => 'textarea',
        'label'       => esc_html__('texte:', 'portfolio_hl'),
        'section'     => 'section_about_txt',
    )
    );
    }

    /**
     * Colors
     */
      $wp_customize->add_setting(
          'about_txt_bg_color',
          array(
              'default'           => '',
              'sanitize_callback' => 'sanitize_hex_color',
              'transport'         => 'postMessage'
          )
      );
      $wp_customize->add_control(
          new WP_Customize_Color_Control(
              $wp_customize,
              'about_txt_bg_color',
              array(
                  'label'     => __('background color', 'portfolio_hl'),
                  'section'   => 'section_about_txt',
              )
          )
      );

      /**
       * Colors txt
       */
        $wp_customize->add_setting(
            'about_txt_texte_color',
            array(
                'default'           => '',
                'sanitize_callback' => 'sanitize_hex_color',
                'transport'         => 'postMessage'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'about_txt_texte_color',
                array(
                    'label'     => __('texte color', 'portfolio_hl'),
                    'section'   => 'section_about_txt',
                )
            )
        );


      ////////////section image
          $wp_customize->add_section(
              'section_about_img',
              array(
                  'title'         => __('Section image', 'portfolio_hl'),
                  'priority'      => 10,
                  'panel'         => 'portfolio_hl_section_about_panel',
              )
          );


          		$wp_customize->add_setting(
          			'about_img',
          			array(
          					'default' => '',
          					'sanitize_callback' => 'esc_url_raw',
          			)
          	);
          	$wp_customize->add_control(
          			new WP_Customize_Image_Control(
          					$wp_customize,
          				'about_img',
          					array(
          						 'label'     => __( 'Image', 'portfolio_hl' ),
          						 'type'      => 'image',
          						 'section'   => 'section_about_img',
          						 'priority'  => 10,
          					)
          			)
          	);

            ////////////section icon-outils
                $wp_customize->add_section(
                    'section_icon_outils',
                    array(
                        'title'         => __('Section language/framework', 'portfolio_hl'),
                        'priority'      => 13,
                        'panel'         => 'portfolio_hl_section_about_panel',
                    )
                );

                //about_title_section
                $wp_customize->add_setting(
                'icon_outils_title',
                array(
                    'default'           => '',
                    'sanitize_callback' => 'portfolio_hl_sanitize_text',
                )
                );
                $wp_customize->add_control(
                'icon_outils_title',
                array(
                    'type'        => 'text',
                    'label'       => esc_html__('Title:', 'portfolio_hl'),
                    'section'     => 'section_icon_outils',
                )
                );

                //about_texte_section
                $wp_customize->add_setting(
                'icon_outils_texte',
                array(
                    'default'           => '',
                    'sanitize_callback' => 'portfolio_hl_sanitize_text',
                )
                );

                $wp_customize->add_control(
                'icon_outils_texte',
                array(
                    'type'        => 'textarea',
                    'label'       => esc_html__('Texte:', 'portfolio_hl'),
                    'section'     => 'section_icon_outils',
                )
                );

                /**
                 * Colors
                 */
                  $wp_customize->add_setting(
                      'icon_outils_bg_color',
                      array(
                          'default'           => '',
                          'sanitize_callback' => 'sanitize_hex_color',
                          'transport'         => 'postMessage'
                      )
                  );
                  $wp_customize->add_control(
                      new WP_Customize_Color_Control(
                          $wp_customize,
                          'icon_outils_bg_color',
                          array(
                              'label'     => __('background color', 'portfolio_hl'),
                              'section'   => 'section_icon_outils',
                          )
                      )
                  );

                  /**
                   * Colors icon
                   */
                    $wp_customize->add_setting(
                        'icon_outils_thumb_bg_color',
                        array(
                            'default'           => '',
                            'sanitize_callback' => 'sanitize_hex_color',
                            'transport'         => 'postMessage'
                        )
                    );
                    $wp_customize->add_control(
                        new WP_Customize_Color_Control(
                            $wp_customize,
                            'icon_outils_thumb_bg_color',
                            array(
                                'label'     => __('background color icon', 'portfolio_hl'),
                                'section'   => 'section_icon_outils',
                            )
                        )
                    );

                    /**
                     * Colors icon_dark
                     */
                      $wp_customize->add_setting(
                          'icon_outils_thumb_bg_color_dark',
                          array(
                              'default'           => '',
                              'sanitize_callback' => 'sanitize_hex_color',
                              'transport'         => 'postMessage'
                          )
                      );
                      $wp_customize->add_control(
                          new WP_Customize_Color_Control(
                              $wp_customize,
                              'icon_outils_thumb_bg_color_dark',
                              array(
                                  'label'     => __('background color icon dark', 'portfolio_hl'),
                                  'section'   => 'section_icon_outils',
                              )
                          )
                      );

}

add_action( 'customize_register', 'portfolio_hl_customize_register_about' );


/**
 * Sanitize
 */

//Text
function portfolio_hl_sanitize_text_about( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
//Checkboxes
function portfolio_hl_sanitize_checkbox_about( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function portfolio_hl_customize_preview_js_about() {
	wp_enqueue_script( 'portfolio_hl_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'portfolio_hl_customize_preview_js_about' );
