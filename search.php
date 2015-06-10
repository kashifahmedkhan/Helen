<?php
/**
 * The template for displaying search results pages.
 *
 * @package ThemeMaple
 */
?>

<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
	
	<div class="archive-box">
		
		<span><?php _e( 'Search results for', 'thememaple' ); ?></span>
		<h1><?php printf( __( '%s', 'thememaple' ), get_search_query() ); ?></h1>
		
	</div>
	
	<div class="container">
	
		<?php while (have_posts()) : the_post(); ?>
							
			<?php get_template_part('content'); ?>
				
		<?php endwhile; ?>
		
			<?php thememaple_pagination(); ?>
		
	<?php else : ?>
		
		<div class="archive-box">
	
			<span><?php _e( 'Search results for', 'thememaple' ); ?></span>
			<h1><?php printf( __( '%s', 'thememaple' ), get_search_query() ); ?></h1>
			
		</div>
		
		<div class="container">
		
			<p class="nothing"><?php _e( 'Sorry, no posts were found. Try searching for something else.', 'thememaple' ); ?></p>
		
	<?php endif; ?>
	
<?php get_footer(); ?>