<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeMaple
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('|', true, 'right'); ?></title>

<?php if(get_theme_mod('tm_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo get_theme_mod('tm_favicon'); ?>" />
<?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<nav id="navigation">
			
			<?php if(!get_theme_mod('tm_topbar_social_check')) : ?>
			<div id="top-social">
				
				<?php if(get_theme_mod('tm_facebook')) : ?><a href="http://facebook.com/<?php echo get_theme_mod('tm_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_twitter')) : ?><a href="http://twitter.com/<?php echo get_theme_mod('tm_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_instagram')) : ?><a href="http://instagram.com/<?php echo get_theme_mod('tm_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_pinterest')) : ?><a href="http://pinterest.com/<?php echo get_theme_mod('tm_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_bloglovin')) : ?><a href="http://bloglovin.com/<?php echo get_theme_mod('tm_bloglovin'); ?>" target="_blank"><i class="fa fa-heart"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_google')) : ?><a href="http://plus.google.com/<?php echo get_theme_mod('tm_google'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_tumblr')) : ?><a href="http://<?php echo get_theme_mod('tm_tumblr'); ?>.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a><?php endif; ?>
				<?php if(get_theme_mod('tm_youtube')) : ?><a href="http://youtube.com/<?php echo get_theme_mod('tm_youtube'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a><?php endif; ?>
				
			</div>
			<?php endif; ?>

			<div id="navigation-wrapper">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
			</div>

				
			<div class="menu-mobile"></div>
			
			<div id="top-search">
					<a href="#"><i class="fa fa-search"></i></a>
			</div>
			<div class="show-search">
				<?php get_search_form(); ?>
			</div>
			
			
			
		
	</nav>	

	<!-- Declare tm_bg-banner in theme options -->
	<header id="header" role="banner"  >

		<div class="container">
				
				<div id="logo">
					
					<?php if(!get_theme_mod('tm_logo')) : ?>
					
						<?php if(is_front_page()) : ?>
							<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
						<?php else : ?>
							<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
						<?php endif; ?>
					
					<?php else : ?>
					
						<?php if(is_front_page()) : ?>
							<h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('tm_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
						<?php else : ?>
							<h2><a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('tm_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a></h2>
						<?php endif; ?>
					
					<?php endif; ?>
					
				</div>

			
		</div>

	</header><!-- #masthead -->

	

