<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ThemeMaple
 */
?>

<?php get_header(); ?>

	<div class="archive-box">
		
		<h1><?php the_title(); ?></h1>
	</div>
	
	<div class="container page-wrap">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
		<?php get_template_part('content', 'page'); ?>
							
	<?php endwhile; endif; ?>
	
	
<?php get_footer(); ?>
