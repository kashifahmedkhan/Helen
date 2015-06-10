<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeMaple
 */
?>

<?php get_header(); ?>

	<?php if(get_theme_mod( 'tm_featured_slider' ) == true) : ?>
		<?php get_template_part('inc/featured_area/featured'); ?>
	<?php endif; ?>
	
	<?php if (have_posts()) : ?>
	
	<!--div class="archive-box"-->
		
		<?php
			if ( is_day() ) :
				echo _e( '<span>Daily Archives</span>', 'thememaple' );
				printf( __( '<h1>%s</h1>', 'thememaple' ), get_the_date() );

			elseif ( is_month() ) :
				echo _e( '<span>Monthly Archives</span>', 'thememaple' );
				printf( __( '<h1>%s</h1>', 'thememaple' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'thememaple' ) ) );

			elseif ( is_year() ) :
				echo _e( '<span>Yearly Archives</span>', 'thememaple' );
				printf( __( '<h1>%s</h1>', 'thememaple' ), get_the_date( _x( 'Y', 'yearly archives date format', 'thememaple' ) ) );

			endif;
		?>
		
	<!--/div-->
	
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