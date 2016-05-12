<?php
/*
 * The footer for displaying footer widgets and site-info.
 */
?>

<div id="footer">

	<?php if ( is_active_sidebar( 'footer-right' ) || is_active_sidebar( 'footer-left' ) ) { ?>
	<div id="footer-widgets">
		<div class="footer-right"> 
			<?php dynamic_sidebar( 'footer-right' ); ?>
		</div>
		
		<div class="footer-left"> 
			<?php dynamic_sidebar( 'footer-left' ); ?>
		</div>
	</div>
	<?php } ?> 

	<div class="site-info">
		<?php _e('Copyright', 'shipyard'); ?> <?php echo date('Y'); ?>  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php _e('Shipyard WordPress Theme', 'shipyard'); ?>  
	</div>

</div>
</div><!-- #container -->

<?php wp_footer(); ?>

</body>
</html>