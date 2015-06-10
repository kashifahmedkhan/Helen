<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Micky
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="post-comments" id="comments">
	
	<?php 
		if ( comments_open() ) :
		echo '<div class="post-box"><h4 class="post-box-title">';
		comments_number(__('No Comments','thememaple'), __('1 Comment','thememaple'), '% ' . __('Comments','thememaple') );
		echo '</h4></div>';
		endif;

		echo "<div class='comments'>";
		
			wp_list_comments(array(
				'avatar_size'	=> 50,
				'max_depth'		=> 5,
				'style'			=> 'ul',
				'callback'		=> 'thememaple_comments',
				'type'			=> 'all'
			));

		echo "</div>";

		echo "<div id='comments_pagination'>";
			paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
		echo "</div>";

		$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';  //label removed for cleaner layout

		comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> __('Leave a Reply', 'thememaple'),
			'cancel_reply_link'		=> __('Cancel Reply', 'thememaple'),
			'label_submit'			=> __('Post Comment', 'thememaple')
		));
	 ?>


</div> <!-- end comments div -->
