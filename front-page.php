<?php
/**
 * Front page
 *
 * @package portfolio_hl
 */

get_header();
$introTitle = get_theme_mod( 'intro_title' );
$baiseline = get_theme_mod( 'baiseline_title' );
$baiselinePhrase = get_theme_mod( 'baiseline_phrase' );
$bigTexteH1 = get_theme_mod( 'big_text_bg_h1' );
$bigTexteSpan = get_theme_mod( 'big_text_bg_span' );
$designTitle  = get_theme_mod( 'block_text_1_title' );
$designTxt = get_theme_mod( 'block_text_1_text' );
 ?>


<div class="wrap-part part_home __visible">
    <div class="content-home">
      <div class="triangle">
          <?php get_template_part( 'template-parts/svg/content', 'triangle' ); ?>
      </div>

      <div class="content-block">
      <div class="wrap-block">
      <svg xmlns="http://www.w3.org/2000/svg" id="block" width="100%" height="100%" viewBox="0 0 100 100">
        <path d="M0 0h199v199H0z"/>
      </svg>
    </div>
  </div>

      <div class="hello">
        <svg id="hello_part1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 154.37 41.53">
          <g id="letters-part1">
            <path class="hello_part1 letter-h" stroke="none" d="M5.64,4.38h12V19H29V4.38H41V41H29V26.64H17.63V41h-12Z"/>
            <path class="hello_part1 _E letter-e" stroke="none" d="M47.94,4.38H73.67v8.1H60.88v6.66H72.55v6.71H60.88v7.08H73.67V41H47.94Z"/>
            <path class="hello_part1 _L letter-l" stroke="none" d="M79.64,4.38H91.14V32.93h12.73V41H79.64Z"/>
          </g>
          <path class="hello_fill" d="M1.25,41.52l0-40.27H41.56"/>
        </svg>

        <div class="wrap-info">
        <div class="info-hello">
          <?php if ( $introTitle ) { ?><h4 class="hello-title"><?php echo esc_html( $introTitle ); ?></h4><?php } ?>
        </div>
        </div>
        <svg id="hello_part2" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 147.13 38.13">
          <g id="letters-part2">
            <path class="hello_part2" d="M.5,1.29H11.91V29.6H24.53v8H.5Z"/>
            <path class="hello_part2" d="M43.19,35.64a17,17,0,0,1-6.71-6.58,19,19,0,0,1-2.4-9.58,19.23,19.23,0,0,1,2.4-9.66,16.81,16.81,0,0,1,6.71-6.58A20.34,20.34,0,0,1,53.08.89,20.34,20.34,0,0,1,63,3.24,16.87,16.87,0,0,1,69.68,9.8a19.19,19.19,0,0,1,2.4,9.68,19,19,0,0,1-2.4,9.58,17,17,0,0,1-6.74,6.58A20.2,20.2,0,0,1,53.08,38,20.16,20.16,0,0,1,43.19,35.64Zm15.23-9.55a10.12,10.12,0,0,0,2.09-6.66,11.87,11.87,0,0,0-1-4.88,8,8,0,0,0-2.66-3.36A6.51,6.51,0,0,0,53,10a6.44,6.44,0,0,0-3.82,1.21,7.84,7.84,0,0,0-2.63,3.36,12.15,12.15,0,0,0-.93,4.88,10.2,10.2,0,0,0,2.07,6.66,6.94,6.94,0,0,0,10.71,0Z"/>
          </g>
          <g id="circle">
          <path class="hello_circle" d="M91.24,26.24a5.89,5.89,0,1,0,5.89,5.89A5.89,5.89,0,0,0,91.24,26.24Zm2.45,6.07H91.53v2.16h-.31V32.31H89.06V32h2.16V29.84h.31V32h2.16Z"/>
          <path fill="none" stroke="#000" stroke-linejoin="round" stroke-width="11.7" d="M91.28 1.29v23.6"/>
          </g>
        </svg>
      </div>
    <!--closing wrap is open logo right header-->
      <div id="close"></div>

      <div class="txt-hello">
        <?php if ( $baiseline ) { ?><span class="col-md-12 col-xs-12"><?php echo esc_html( $baiseline ); ?></span><?php } ?>
        <?php if ( $baiselinePhrase ) { ?><h1 class="col-md-7 col-xs-12"><?php echo esc_html( $baiselinePhrase ); ?></h1><?php } ?>
      </div>
  </div>
  <div class="wrap-line-skip">
    <div class="line-skip">
    </div>
  </div>
</div>

<div class="wrap-part part_full __hidden">
   <?php
   $img_graphic = get_theme_mod('img_graphic', get_template_directory_uri());
   if ( $img_graphic ) {
      ?>
      <div class="cover-img-graphic" style="background-image: url(<?php echo $img_graphic; ?>);">
      </div>
  <?php } else {

   ?>
   <!--img par defaut-->
   <div class="illustrations">
    <?php get_template_part( 'template-parts/svg/content', 'illu' ); ?>
    <div class="cpright"><span>&copy HL</span></div>
   </div>

<?php } ?>

<div class="infos-design">
  <div class="wrap-title-design">
  <?php if ( $designTitle ) { ?><h1 class="title-design"><?php echo esc_html( $designTitle ); ?></h1><?php } ?>
  <div class="head-more">
  <svg id="circle-more" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 11.8 11.8">
    <path d="M5.9,0A5.85,5.85,0,0,0,0,5.9a5.85,5.85,0,0,0,5.9,5.9,5.85,5.85,0,0,0,5.9-5.9A5.91,5.91,0,0,0,5.9,0ZM8.4,6.1H6.2V8.3H5.9V6.1H3.7V5.8H5.9V3.6h.3V5.8H8.4Z"/>
  </svg>
</div>
</div>
  <?php if ( $designTxt ) { ?><p class="txt-design"><?php echo esc_html( $designTxt ); ?></p><?php } ?>
</div>
<div class="wrap-line-skip">
  <div class="line-skip">
  </div>
</div>

</div>

<div class="bullet-header">
    <span class="bullet-round btn_hello __active"></span>
    <span class="bullet-round btn_design"></span>
</div>
<div class="skip-intro">
  <a id="Home" name="" role="button"><i class="fas fa-th"></i></a>
</div>

<div class="wrap-part part_sections __hidden" name="">
  <div class="scroll-sections">
    <div class="sections-content">
            <?php

            do_action( 'portfolio_hl_frontpage_before_section_parts' );

			if ( ! has_action( 'portfolio_hl_frontpage_section_parts' ) ) {

				$sections = apply_filters (
					'portfolio_hl_frontpage_sections_order',
					array(
              	'presentation',
                'slider',
                'icon',
                'parallax',
                'texte',
                'post',
                'contactme' /// en dur dans le template



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
                        get_template_part('section-parts/section', $section);

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


<?php get_footer(); ?>
