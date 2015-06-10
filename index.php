<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeMaple
 */
?>

<?php get_header(); ?>
	
	<?php if(get_theme_mod( 'tm_featured_slider' ) == true) : ?>
		<?php get_template_part('inc/featured_area/featured'); ?>
	<?php endif; ?>
	
	<div class="container <?php if(get_theme_mod( 'tm_sidebar_home' )) : ?>tm_sidebar<?php endif; ?>">
	
	<div id="main">
	
	<?php if(get_theme_mod( 'tm_home_layout' ) == 'grid') : ?>
	
	<?php if(get_theme_mod( 'tm_grid_title' )) : ?>
	<div class="tm-grid-title">
		
		<h3><?php echo get_theme_mod( 'tm_grid_title' ); ?></h3>
		<span class="sub-title"><?php echo get_theme_mod( 'tm_grid_sub' ); ?></span>
		
	</div>
	<?php endif; ?>
	
	<ul class="tm-grid">
	<?php endif; ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
		<?php get_template_part('content', get_theme_mod('tm_home_layout')); ?>
			
	<?php endwhile; ?>
	
	<?php if(get_theme_mod( 'tm_home_layout' ) == 'grid') : ?></ul><?php endif; ?>
	
	<?php thememaple_pagination(); ?>
	
	<?php endif; ?>
	
	</div>

<?php if(get_theme_mod( 'tm_sidebar_home' )) : ?><?php get_sidebar(); ?><?php endif; ?>
	
<?php get_footer(); ?>