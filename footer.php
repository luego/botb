<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script type="text/javascript">
	$(function(){
		// $(document).foundation();
		$("#sub-menu-section").mouseover(function(){
			var el = $ ('.navigation__list--secondary');
			el.addClass( "js-dropdown-active" );
			var ele = new Foundation.DropdownMenu (el);
			//$(this).find("navigation__list--secondary.li")
		});

		$("#sub-menu-section").mouseout(function(){
			var el = $ ('.navigation__list--secondary');
			el.removeClass( "js-dropdown-active" );
			$ ('.navigation__list--secondary') .foundation ('destroy');
		});



	});
</script>
</body>
</html>
