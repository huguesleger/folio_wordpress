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
        <svg id="Triangles" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 283.28 186.33">
          <g data-depth="0.15">
            <polygon id="t1" class="cls-1" points="0 58.67 51.19 42.66 56.17 53.51 0 58.67"/>
            <polygon id="t2" class="cls-1" points="55.91 53.51 70.33 79.83 110.73 58.67 55.91 53.51"/>
            <polygon id="t3" class="cls-2" points="50.92 42.66 55.91 53.51 110.73 58.67 50.92 42.66"/>
            <polygon id="t4" class="cls-3" points="0 58.67 51.19 42.66 10.71 51.12 0 58.67"/>
            <polygon id="t5" class="cls-4" points="51.19 42.66 110.73 58.67 129.5 45.86 51.19 42.66"/>
            <polygon id="t6" class="cls-5" points="52.28 42.66 129.5 45.86 81.09 39.73 52.28 42.66"/>
            <polygon id="t7" class="cls-2" points="56.17 53.51 52 89.33 0 58.67 56.17 53.51"/>
            <polygon id="t8" class="cls-3" points="52 89.33 70.3 79.78 55.91 53.51 52 89.33"/>
            <polygon id="t9" class="cls-2" points="52 89.33 87.58 116.42 111 58.52 52 89.33"/>
            <polygon id="t10" class="cls-3" points="110.73 58.67 96.4 94.62 135.06 85.56 110.73 58.67"/>
            <polygon id="t29" class="cls-14" points="129.5 45.86 135.06 85.56 110.73 58.67 129.5 45.86"/>
            <polygon id="t30" class="cls-4" points="129.5 45.86 135.06 85.56 147.83 82.67 129.5 45.86"/>
            <polygon id="t11" class="cls-7" points="87.58 116.42 66.59 136.42 64.84 99.1 87.58 116.42"/>
            <polygon id="t12" class="cls-8" points="66.59 136.42 61.15 161 91.08 143.67 66.59 136.42"/>
            <polygon id="t13" class="cls-8" points="61.15 161 47.67 186.33 63.58 175.42 61.15 161"/>
            <polygon id="t14" class="cls-9" points="47.67 186.33 66.59 179.84 63.58 175.42 47.67 186.33"/>
            <polygon id="t15" class="cls-2" points="61.15 161 63.58 175.42 81.02 169.35 61.15 161"/>
            <polygon id="t16" class="cls-10" points="63.58 175.42 66.59 179.84 81.02 169.35 63.58 175.42"/>
            <polygon id="t17" class="cls-1" points="61.15 161 81.02 169.35 91.08 143.67 61.15 161"/>
            <polygon id="t18" class="cls-3" points="81.02 169.35 102.5 141.35 91.08 143.67 81.02 169.35"/>
            <polygon id="t19" class="cls-5" points="102.5 141.35 126.83 109.49 104.74 92.43 102.5 141.35"/>
            <polygon id="t20" class="cls-11" points="66.59 136.42 91.08 143.67 87.58 116.42 66.59 136.42"/>
            <polygon id="t21" class="cls-12" points="104.74 92.43 102.5 141.35 87.58 116.42 104.74 92.43"/>
            <polygon id="t22" class="cls-9" points="91.08 143.67 102.5 141.35 87.58 116.42 91.08 143.67"/>
            <polygon id="t23" class="cls-1" points="87.58 116.42 104.74 92.43 96.59 94.16 87.58 116.42"/>
            <polygon id="t24" class="cls-13" points="104.74 92.43 126.83 109.49 153.33 92.67 104.74 92.43"/>
            <polygon id="t25" class="cls-14" points="153.33 92.67 147.83 82.67 104.74 92.43 153.33 92.67"/>
            <polygon id="t26" class="cls-5" points="147.83 82.67 191.73 50.97 232.65 100.99 147.83 82.67"/>
            <polygon id="t27" class="cls-4" points="147.83 82.67 153.33 92.67 232.65 100.99 147.83 82.67"/>
            <polygon id="t28" class="cls-13" points="129.5 45.86 147.83 82.67 191.73 50.97 129.5 45.86"/>
            <polygon id="t31" class="cls-11" points="141.07 46.81 191.73 50.97 206.33 23.33 141.07 46.81"/>
            <polygon id="t32" class="cls-2" points="232.65 100.99 283.28 38.5 191.73 50.97 232.65 100.99"/>
            <polygon id="t33"class="cls-3" points="232.65 100.99 283.28 106.67 283.28 38.5 232.65 100.99"/>
            <polygon id="t34" class="cls-8" points="191.73 50.97 283.28 38.5 206.33 23.33 191.73 50.97"/>
            <polygon id="t35"class="cls-7" points="206.33 23.33 243.37 17.89 252.91 32.51 206.33 23.33"/>
            <polygon id="t36" class="cls-11" points="243.37 17.89 283.28 38.5 283.28 12 243.37 17.89"/>
            <polygon id="t37" class="cls-9" points="243.37 17.89 252.91 32.51 283.28 38.5 243.37 17.89"/>
            <polygon id="t38" class="cls-5" points="243.37 17.89 248.33 0.17 265.59 14.61 243.37 17.89"/>
            <polygon id="t39" class="cls-4" points="273.63 13.42 265.59 14.61 258.16 5.65 273.63 13.42"/>
            <polygon id="t40" class="cls-14" points="248.33 0.17 265.59 14.61 254.65 1.42 248.33 0.17"/>
            <polygon id="t41" class="cls-13" points="245.74 9.34 240 0 248.33 0.17 245.74 9.34"/>
          </g>
        </svg>
      </div>

      <div class="wrap-block">
      <svg xmlns="http://www.w3.org/2000/svg" id="block" width="100%" height="100%" viewBox="0 0 100 100">
        <path fill="#e6e6e6" d="M0 0h199v199H0z"/>
      </svg>
    </div>

      <div class="hello">
        <svg id="hello_part1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 154.37 41.53">
          <g id="letters-part1">
            <path class="hello_part1 letter-h" stroke="none" d="M5.64,4.38h12V19H29V4.38H41V41H29V26.64H17.63V41h-12Z"/>
            <path class="hello_part1 _E letter-e" stroke="none" d="M47.94,4.38H73.67v8.1H60.88v6.66H72.55v6.71H60.88v7.08H73.67V41H47.94Z"/>
            <path class="hello_part1 _L letter-l" stroke="none" d="M79.64,4.38H91.14V32.93h12.73V41H79.64Z"/>
          </g>
          <path class="hello_fill" stroke="#ff5252" d="M1.25,41.52l0-40.27H41.56"/>
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
          <path class="hello_circle" fill="#ff5252" d="M91.24,26.24a5.89,5.89,0,1,0,5.89,5.89A5.89,5.89,0,0,0,91.24,26.24Zm2.45,6.07H91.53v2.16h-.31V32.31H89.06V32h2.16V29.84h.31V32h2.16Z"/>
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
   <div class="cover-img-graphic" style="background-image: url(<?php echo $img_graphic; ?>);">
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
                'contactme' /// en dur d en le template



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
