<?php
/**
 * The template for displaying all single posts.
 *
 * @package ThemeMaple
 */
?>


<?php get_header(); ?>
	
	<div class="container <?php if(get_theme_mod( 'tm_sidebar_posts' )) : ?>tm_sidebar<?php endif; ?>">
	
	<div id="main">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
		<?php get_template_part('content'); ?>
							
	<?php endwhile; endif; ?>
	
	</div>
	
<?php if(get_theme_mod( 'tm_sidebar_posts' )) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>
