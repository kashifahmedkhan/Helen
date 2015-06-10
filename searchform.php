<?php
/**
 * The template for displaying search form pages.
 *
 * @package ThemeMaple
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
		<input type="text" placeholder="<?php _e('Search and hit enter...', 'thememaple'); ?>" name="s" id="s" />
	 </div>
</form>