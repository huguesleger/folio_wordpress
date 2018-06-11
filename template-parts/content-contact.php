<?php
/**
 *
 * @package portfolio_hl
 */


 $facebook_url      = get_theme_mod( 'social_facebook_url' );
 $facebook_icon      = get_theme_mod( 'social_facebook_icon' );
 $linkedin_url      = get_theme_mod( 'social_linkedin_url' );
 $linkedin_icon      = get_theme_mod( 'social_linkedin_icon' );
 $instagram_url      = get_theme_mod( 'social_instagram_url' );
 $instagram_icon      = get_theme_mod( 'social_instagram_icon' );
?>

<div id=" post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-headerr">

	</header> -->
	<div class="wrap-contact-me">
	<div class="container" id="content-form">
    <div class="col-md-9">
			<div class="contact-me">
    	<?php
			the_content();
      ?>
      </div>
			</div>
			<div class="col-md-3">
				<!-- <div class="contact-me-txt">
				</div>
				<div class="social-contact">
				</div> -->
				<div class="block-infos-contact">
				<h3 class="title-list">Infos</h3>
				<ul class="content-list-contact">
					<li><i class="fas fa-map-marker-alt"></i>FRANCE/Montpellier</li>
					<li><i class="fas fa-envelope-open"></i><a class="mail-global-menu" href="mailto:contactme@hl-developerz.com">contactme@hl-developerz.com</a></li>
						</ul>
					</div>
					<div class="block-social-contact">
						<h3 class="title-list">Réseaux</h3>
						<ul class="content-list-contact">
					<?php
						if ( $facebook_url ) { ?>
					<li class="social-global-menu"><a class="link-social" href="https://<?php echo esc_html( $facebook_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $facebook_icon ); ?>"></i></a></li>
				<?php
			}
						if ( $linkedin_url ) { ?>
					<li class="social-global-menu"><a class="link-social" href="https://<?php echo esc_html( $linkedin_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $linkedin_icon ); ?>"></i></a></li>
					<?php
				}
				if ( $instagram_url ) { ?>
					<li class="social-global-menu"><a class="link-social" href="https://<?php echo esc_html( $instagram_url ); ?>" target="_blank"><i class="fab <?php echo esc_html( $instagram_icon ); ?>"></i></a></li>
					<?php
				} ?>
				</ul>
			</div>
			</div>
		</div>
      </div>
      	<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'portfolio_hl' ),
				'after'  => '</div>',
			) );
		?>
	</div>

</div>
