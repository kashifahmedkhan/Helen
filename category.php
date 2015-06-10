<?php
/**
 * The template for displaying categories.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeMaple
 */
?>

<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
	
	<div class="archive-box">
		
		<span><?php _e( 'Browsing Category', 'thememaple' ); ?></span>
		<h1><?php printf( __( '%s', 'thememaple' ), single_cat_title( '', false ) ); ?></h1>
		
	</div>
	
	<div class="container <?php if(get_theme_mod( 'tm_sidebar_archive' )) : ?>tm_sidebar<?php endif; ?>">
	
	<div id="main">
	
		<?php if(get_theme_mod( 'tm_archive_layout' ) == 'grid') : ?><ul class="tm-grid"><?php endif; ?>
	
		<?php while (have_posts()) : the_post(); ?>
							
			<?php get_template_part('content', get_theme_mod('tm_archive_layout')); ?>
				
		<?php endwhile; ?>
		
		<?php if(get_theme_mod( 'tm_archive_layout' ) == 'grid') : ?></ul><?php endif; ?>
		
		<?php thememaple_pagination(); ?>
		
		<?php endif; ?>
		
	</div>
	
<?php if(get_theme_mod( 'tm_sidebar_archive' )) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>