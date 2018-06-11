<?php
/**
 *
 * @package portfolio_hl
 */

?>

<div class="sections-content">
        <?php

        do_action( 'portfolio_hl_frontpage_before_section_parts' );

  if ( ! has_action( 'portfolio_hl_frontpage_section_parts' ) ) {

    $sections = apply_filters (
      'portfolio_hl_frontpage_sections_order',
      array(
            'cursus',
            'texte',
            'image',
            'icon-outils'



              )
    );

    foreach ( $sections as $section ){
                // If  section not disable
                if ( ! get_theme_mod( $section.'_disable' ) ) {
                    /**
                     * Hook before section
                     */
                    do_action('portfolio_hl_before_section_' . $section);
                    do_action('portfolio_hl_before_section_part', $section);

                    /**
                     * Load section template part
                     */
                    get_template_part('section-parts/about/section', $section);

                    /**
                     * Hook after section
                     */
                    do_action('portfolio_hl_after_section_part', $section);
                    do_action('portfolio_hl_after_section_' . $section);
                }
    }

  } else {
    do_action( 'portfolio_hl_frontpage_section_parts' );
  }

        do_action( 'portfolio_hl_frontpage_after_section_parts' );
        ?>
