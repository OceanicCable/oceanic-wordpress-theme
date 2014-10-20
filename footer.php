<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		<div class="cb"></div>
		</div><!-- #main .wrapper -->
	</div><!-- #main-container .container -->
	<div class="cb"></div>
	<div id="oceanic-updates-container" class="container">
		<div id="oceanic-updates" class="row">
			<div id="around-hawaii" class="col_4 column">
				<h3>From AroundHawaii</h3>
				<?php from_around_hawaii(); ?>
			</div>
			<?php get_sidebar( 'special-offer' ); ?>
		</div>
	</div>
	<div class="cb"></div>
	<div id="footer-container" class="container">
		<footer id="colophon" class="row" role="contentinfo">
			<div id="footer-widgets" class="col_7 column">
				<?php get_sidebar( 'footer' ); ?>
			</div>
			<div class="col_5 column">
				<div id="connect-with-us" class="col_12 column">
					<h3 class="widget-title">Connect With Us</h3>
					<div id="footer-social">
						<a href="https://www.facebook.com/OceanicCable" title="Like Us on Facebook" id="social-facebook" target="_blank"></a>
						<a href="http://instagram.com/oceaniccable" title="Follow Us on Instagram" id="social-instagram" target="_blank"></a>
						<a href="http://www.youtube.com/OceanicCable" title="Subscribe to Our Channel" id="social-youtube" target="_blank"></a>
						<a href="https://twitter.com/OceanicCable" title="Follow Us on Twitter" id="social-twitter" target="_blank"></a>
					</div>
					<?php wp_nav_menu( array( 'menu' => 'footer', 'sort_column' => 'menu_order', 'container_class' => 'nav-footer' ) ); ?>
					<div id="site-info"><span>&copy; 1997 - <?php echo date('Y'); ?> Oceanic Time Warner Cable. </span><span>All rights reserved.</span></div>
				</div>

			</div>
		</footer><!-- #colophon -->
		<div class="cb"></div>
	</div><!-- #footer-container .container -->
</div><!-- #page -->

<!-- Pop up -->

<div class="modal fade" role="dialog" aria-labelledby="shoppingLabel" aria-hidden="true" id="start-shopping">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
				<h4 id='shoppingLabel'>Start Shopping</h4>
				<div class='shopping-cta'>
					<div class="col_6 column">
						<h5>New Customer</h5>
						<a href="http://order.timewarnercable.com/" title="Get Started" class="rm" target="_blank">Get Started<span class="icon"></span></a>
					</div>
					<div class="col_6 column">
						<h5>Already A Customer?</h5>
						<a href="http://order.oceanic.com/" title="Add Services" class="rm" target="_blank">Add Services<span class="icon"></span></a>
					</div>
					<button class="md-close" data-dismiss="modal">Close me!</button>
				</div>
			</div><!--/.shopping-cta-->

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	// this is important for IEs
  	// var polyfilter_scriptpath = '/wp-content/themes/oceanic/js/';
</script>

<?php wp_footer(); ?>

<script>
// var bname = $.browser.name;
// var bvers = $.browser.versionNumber;

// if(bname =='msie'){
// 	if(bvers < 9){
// 		document.write($.browser.name + ' browser ' + $.browser.versionX + 'x' + '.');
// 		document.write(window.location.hostname);
// 	}
// }

</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.backgroundSize.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function(){
    	jQuery('#header-container').css({backgroundSize:"cover"});
	});

</script>


<?php include('scripts.php'); ?>

<?php if(!is_front_page()) : ?>
<span id="toTop"></span>
<?php endif; ?>

<a href="http://www.oceanicsurvey.com/WEB/" target="_blank" title="" class="feedback-callout"></a>

</body>
</html>