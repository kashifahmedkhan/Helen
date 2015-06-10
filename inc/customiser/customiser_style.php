<?php
/**
 * ThemeFudge Customizer
 *
 * @package ThemeFudge
 */

function thememaple_customizer_css() {
    ?>
    <style type="text/css">
	
		#logo { padding:<?php echo get_theme_mod( 'tm_header_padding' ); ?>px 0; }

		#navigation, .slicknav_menu { background:<?php echo get_theme_mod( 'tm_topbar_bg' ); ?>; }
		.menu li a, .slicknav_nav a { color:<?php echo get_theme_mod( 'tm_topbar_nav_color' ); ?>; }
		.menu li a:hover {  color:<?php echo get_theme_mod( 'tm_topbar_nav_color_active' ); ?>; }
		.slicknav_nav a:hover { color:<?php echo get_theme_mod( 'tm_topbar_nav_color_active' ); ?>; background:none; }
		
		.menu .sub-menu, .menu .children { background: <?php echo get_theme_mod( 'tm_drop_bg' ); ?>; }
		ul.menu ul a, .menu ul ul a { /*border-top: 1px solid <?php echo get_theme_mod( 'tm_drop_border' ); ?>;*/ color:<?php echo get_theme_mod( 'tm_drop_text_color' ); ?>; }
		ul.menu ul a:hover, .menu ul ul a:hover { color: <?php echo get_theme_mod( 'tm_drop_text_hover_color' ); ?>; background:<?php echo get_theme_mod( 'tm_drop_text_hover_bg' ); ?>; }
		
		#top-social a i { color:<?php echo get_theme_mod( 'tm_topbar_social_color' ); ?>; }
		#top-social a:hover i { color:<?php echo get_theme_mod( 'tm_topbar_social_color_hover' ); ?> }
		
		#top-search a { background:<?php echo get_theme_mod( 'tm_topbar_search_bg' ); ?> }
		#top-search a { color:<?php echo get_theme_mod( 'tm_topbar_search_magnify' ); ?> }
		#top-search a:hover { background:<?php echo get_theme_mod( 'tm_topbar_search_bg_hover' ); ?>; }
		#top-search a:hover { color:<?php echo get_theme_mod( 'tm_topbar_search_magnify_hover' ); ?>; }
		
		.widget-title { color:<?php echo get_theme_mod( 'tm_footer_widget_color' ); ?>; }
		#sidebar .widget-title { color:<?php echo get_theme_mod( 'tm_sidebar_color' ); ?>; }
		
		#footer-social  { background:<?php echo get_theme_mod( 'tm_footer_social_bg' ); ?>; }
		
		
		#footer-copyright { background:<?php echo get_theme_mod( 'tm_footer_copyright_bg' ); ?>; }
		#footer-copyright p { color:<?php echo get_theme_mod( 'tm_footer_copyright_color' ); ?>; }
		
		a, #footer-logo p i { color:<?php echo get_theme_mod( 'tm_color_accent' ); ?>; }
		.post-entry blockquote p { border-left:3px solid <?php echo get_theme_mod( 'tm_color_accent' ); ?>; }
		
		<?php if(get_theme_mod( 'tm_post_title_lowercase' )) : ?>
		.post-header h1 a, .post-header h2 a, .post-header h1 {
			text-transform:none;
			letter-spacing:1px;
		}
		<?php endif; ?>
		
		<?php if(get_theme_mod( 'tm_custom_css' )) : ?>
		<?php echo get_theme_mod( 'tm_custom_css' ); ?>
		<?php endif; ?>
		
    </style>
    <?php
}
add_action( 'wp_head', 'thememaple_customizer_css' );

?>