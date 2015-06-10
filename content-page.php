<?php
/**
 * The template for displaying Content Page.
 *
 *
 * @package ThemeMaple
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<!-- <div class="post-header">
		
		<h1><?php the_title(); ?></h1>
		
	</div> -->
	
	<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) : ?>
	<div class="post-image">
		<a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('full-thumb'); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="post-entry blog-wrap">
	
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	
	</div>
	
	<?php if(!get_theme_mod('tm_page_share')) : ?>
	<div class="postBottom-share">
		<h3 class="share-heading">SHARE THIS</h3>
		<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><span class="postShare_icons"><i class="fa fa-facebook"></i></span></a>
		<a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php the_title(); ?>%20-%20<?php the_permalink(); ?>"><span class="postShare_icons"><i class="fa fa-twitter"></i></span></a>
		<?php $pin_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
		<a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo $pin_image; ?>&description=<?php the_title(); ?>"><span class="postShare_icons"><i class="fa fa-pinterest"></i></span></a>
		<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><span class="postShare_icons"><i class="fa fa-google-plus"></i></span></a>
		<?php comments_popup_link( '<span class="postShare_icons"><i class="fa fa-comment-o"></i></span>', '<span class="postShare_icons"><i class="fa fa-comment-o"></i></span>', '<span class="postShare_icons"><i class="fa fa-comment-o"></i></span>', '', ''); ?>
		
	</div>
	<?php endif; ?>
	
	<?php if(!get_theme_mod('tm_page_comments')) : ?>
		<?php comments_template( '', true );  ?>
	<?php endif; ?>
	
</article>
