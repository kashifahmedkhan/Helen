<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ThemeMaple
 */
?>

	
	<!-- END CONTAINER from Index.php -->
	</div>
	
	<?php if(!get_theme_mod('tm_footer_widget_area')) : ?>
	<div id="widget-area">
	
		<div class="container">
			
			<div class="footer-widget-wrapper">
				<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('ThemeMaple|Footer-1') ) ?>
			</div>
			
			<div class="footer-widget-wrapper">
				<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('ThemeMaple|Footer-2') ) ?>
			</div>
			
			<div class="footer-widget-wrapper last">
				<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('ThemeMaple|Footer-3') ) ?>
			</div>
			
		</div>
		
	</div>
	<?php endif; ?>
	
	
	
	<footer id="footer-copyright">
		
		<div class="container">
		
			<?php if(get_theme_mod('tm_footer_copyright')) : ?>
				<p><?php echo get_theme_mod('tm_footer_copyright');  ?></p>
			<?php endif; ?>
			<!-- <a href="#" class="to-top"><?php _e( 'Back to top', 'thememaple' ); ?> <i class="fa fa-angle-double-up"></i></a> -->
			
			<?php if(!get_theme_mod('tm_footer_social_check')) : ?>
			<div id="bottom-social">
				
				<?php if(get_theme_mod('tm_facebook')) : ?><a href="http://facebook.com/<?php echo get_theme_mod('tm_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_twitter')) : ?><a href="http://twitter.com/<?php echo get_theme_mod('tm_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_instagram')) : ?><a href="http://instagram.com/<?php echo get_theme_mod('tm_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_pinterest')) : ?><a href="http://pinterest.com/<?php echo get_theme_mod('tm_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo get_theme_mod('tm_bloglovin'); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_google')) : ?><a href="http://plus.google.com/<?php echo get_theme_mod('tm_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_tumblr')) : ?><a href="http://<?php echo get_theme_mod('tm_tumblr'); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_youtube')) : ?><a href="http://youtube.com/<?php echo get_theme_mod('tm_youtube'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
				
			</div>
		<?php endif; ?>
		</div>
		
	</footer>
	
	<?php wp_footer(); ?>
	
</body>

</html>
