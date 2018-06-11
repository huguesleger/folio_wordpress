<?php
/**
 * @package portfolio_hl
 */

?>


	</div><!-- #content -->
	<footer id="footer" class="" role="contentinfo">
		<div class="container">
				<div class="wrap-copy">
					<div class="icon-logo">
				<img class="img-responsive logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logohl-white.png">
				</div>
				<p class="copy">&copy HL Developerz - <?php echo date('Y'); ?></p>
				</div>
				<?php do_action('portfolio_hl_footer'); ?>
		</div>
		<div class="gotop">
			<a class="btn-top"><i class="fas fa-angle-up"></i></a>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="border" id="Border">
    <div class="frame-top"></div>
    <div class="frame-right"></div>
    <div class="frame-left"></div>
    <div class="frame-bottom"></div>
</div>
</body>
</html>
