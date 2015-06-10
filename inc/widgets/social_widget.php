<?php
/**
 * Plugin Name: Social Widget
 */

add_action( 'widgets_init', 'thememaple_social_load_widget' );

function thememaple_social_load_widget() {
	register_widget( 'thememaple_social_widget' );
}

class thememaple_social_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function thememaple_social_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'thememaple_social_widget', 'description' => __('A widget that displays your social icons', 'thememaple_social_widget') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'thememaple_social_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'thememaple_social_widget', __('ThemeMaple: Social Icons', 'thememaple_social_widget'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$facebook = $instance['facebook'];
		$twitter = $instance['twitter'];
		$googleplus = $instance['googleplus'];
		$instagram = $instance['instagram'];
		$bloglovin = $instance['bloglovin'];
		$youtube = $instance['youtube'];
		$tumblr = $instance['tumblr'];
		$pinterest = $instance['pinterest'];
		
		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;

		?>
		
			<div class="widget-social">
				<?php if($facebook) : ?><a href="http://facebook.com/<?php echo get_theme_mod('tm_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
				<?php if($twitter) : ?><a href="http://twitter.com/<?php echo get_theme_mod('tm_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
				<?php if($instagram) : ?><a href="http://instagram.com/<?php echo get_theme_mod('tm_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
				<?php if($pinterest) : ?><a href="http://pinterest.com/<?php echo get_theme_mod('tm_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
				<?php if($bloglovin) : ?><a href="http://bloglovin.com/<?php echo get_theme_mod('tm_bloglovin'); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
				<?php if($googleplus) : ?><a href="http://plus.google.com/<?php echo get_theme_mod('tm_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
				<?php if($tumblr) : ?><a href="http://<?php echo get_theme_mod('tm_tumblr'); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
				<?php if($youtube) : ?><a href="http://youtube.com/<?php echo get_theme_mod('tm_youtube'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
			</div>
			
			
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['googleplus'] = strip_tags( $new_instance['googleplus'] );
		$instance['instagram'] = strip_tags( $new_instance['instagram'] );
		$instance['bloglovin'] = strip_tags( $new_instance['bloglovin'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		$instance['tumblr'] = strip_tags( $new_instance['tumblr'] );
		$instance['pinterest'] = strip_tags( $new_instance['pinterest'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Subscribe & Follow', 'facebook' => 'on', 'twitter' => 'on', 'instagram' => 'on', );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:90%;" />
		</p>
		
		<p>Note: Set your social links in the Customizer</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>">Show Facebook:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" <?php checked( (bool) $instance['facebook'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>">Show Twitter:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" <?php checked( (bool) $instance['twitter'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'instagram' ); ?>">Show Instagram:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'instagram' ); ?>" name="<?php echo $this->get_field_name( 'instagram' ); ?>" <?php checked( (bool) $instance['instagram'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'pinterest' ); ?>">Show Pinterest:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'pinterest' ); ?>" name="<?php echo $this->get_field_name( 'pinterest' ); ?>" <?php checked( (bool) $instance['pinterest'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'bloglovin' ); ?>">Show Bloglovin:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'bloglovin' ); ?>" name="<?php echo $this->get_field_name( 'bloglovin' ); ?>" <?php checked( (bool) $instance['bloglovin'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'googleplus' ); ?>">Show Google Plus:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'googleplus' ); ?>" name="<?php echo $this->get_field_name( 'googleplus' ); ?>" <?php checked( (bool) $instance['googleplus'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'tumblr' ); ?>">Show Tumblr:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'tumblr' ); ?>" name="<?php echo $this->get_field_name( 'tumblr' ); ?>" <?php checked( (bool) $instance['tumblr'], true ); ?> />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>">Show Youtube:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" <?php checked( (bool) $instance['youtube'], true ); ?> />
		</p>


	<?php
	}
}

?>