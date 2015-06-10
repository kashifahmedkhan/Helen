<?php
/**
 * The template for displaying all specific tags related posts.
 *
 * @package ThemeMaple
 */
?>

<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
	
	<div class="archive-box">
		
		<span><?php _e( 'Browsing Tag', 'ThemeMaple' ); ?></span>
		<h1><?php printf( __( '%s', 'ThemeMaple' ), single_tag_title( '', false ) ); ?></h1>
		
	</div>
	
	<div class="container <?php if(get_theme_mod( 'tm_sidebar_archive' )) : ?>tm_sidebar<?php endif; ?>">
	
	<div id="main">
	
		<?php if(get_theme_mod( 'tm_archive_layout' ) == 'grid') : ?><ul class="tm-grid"><?php endif; ?>
	
		<?php while (have_posts()) : the_post(); ?>
							
			<?php get_template_part('content', get_theme_mod('tm_archive_layout')); ?>
				
		<?php endwhile; ?>
		
		<?php if(get_theme_mod( 'tm_archive_layout' ) == 'grid') : ?></ul><?php endif; ?>
		
		<?php thememapl_pagination(); ?>
		
		<?php endif; ?>
		
	</div>

<?php if(get_theme_mod( 'tm_sidebar_archive' )) : ?><?php get_sidebar(); ?><?php endif; ?>
<?php get_footer(); ?>