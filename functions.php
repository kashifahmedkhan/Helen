<?php
/**
 * ThemeMaple functions and definitions
 *
 * @package ThemeMaple
 */



//////////////////////////////////////////////////////////////////
// Set Content Width
//////////////////////////////////////////////////////////////////
if ( ! isset( $content_width ) )
	$content_width = 960;

	
//////////////////////////////////////////////////////////////////
// Theme set up
//////////////////////////////////////////////////////////////////
add_action( 'after_setup_theme', 'thememaple_theme_setup' );

if ( !function_exists('thememaple_theme_setup') ) {

	function thememaple_theme_setup() {
	
		// Register navigation menu
		register_nav_menus(
			array(
				'main-menu' => 'Primary Menu',
			)
		);
		
		// Localization support
		load_theme_textdomain('thememaple', get_template_directory() . '/lang');
		
		// Feed Links
		add_theme_support( 'automatic-feed-links' );
		
		// Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );

		// Post thumbnails
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'full-thumb', 960, 0, true );
		add_image_size( 'slider-thumb', 650, 440, true );
		add_image_size( 'thumb', 440, 294, true );
	
	}

}

add_action( 'after_setup_theme', 'theme_functions' );
function theme_functions() {

    add_theme_support( 'title-tag' );

}

//////////////////////////////////////////////////////////////////
// Register & enqueue styles/scripts
//////////////////////////////////////////////////////////////////

add_action( 'wp_enqueue_scripts','thememaple_load_scripts' );

function thememaple_load_scripts() {

	// Register scripts and styles
	wp_register_style('tm_style', get_stylesheet_directory_uri() . '/style.css');
	wp_register_style('tm_responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
	wp_register_style('bxslider-css', get_stylesheet_directory_uri() . '/css/jquery.bxslider.css');
	wp_register_style('slicknav-css', get_stylesheet_directory_uri() . '/css/slicknav.css');
	wp_register_style('owl-css', get_stylesheet_directory_uri() . '/css/owl.carousel.css');
	wp_register_style('owl-theme-css', get_stylesheet_directory_uri() . '/css/owl.theme.css');
	wp_register_style('font-awesome', get_stylesheet_directory_uri() .'/css/font-awesome/css/font-awesome.min.css');
	
	wp_register_script('tm_scripts', get_template_directory_uri() . '/js/tm.js', 'jquery', '', true);
	wp_register_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', 'jquery', '', true);
	wp_register_script('fitvids', get_template_directory_uri() . '/js/fitvids.js', 'jquery', '', true);
	wp_register_script('slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', 'jquery', '', true);
	wp_register_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', '', true);
	wp_register_script('tm_retina', get_template_directory_uri() . '/js/retina.min.js', 'jquery', '', true);

	
	// Enqueue scripts and styles

	wp_enqueue_style('tm_style');
	wp_enqueue_style('tm_responsive');
	wp_enqueue_style('bxslider-css');
	wp_enqueue_style('slicknav-css');
	wp_enqueue_style('owl-css');
	wp_enqueue_style('owl-theme-css');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('default_font', 'http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700');
	wp_enqueue_style('default_para_font', 'http://fonts.googleapis.com/css?family=Raleway:400,500,300');
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('bxslider');
	wp_enqueue_script('fitvids');
	wp_enqueue_script('slicknav');
	wp_enqueue_script('owl');
	wp_enqueue_script('tm_retina');
	wp_enqueue_script('tm_scripts');

	if (is_singular() && get_option('thread_comments'))	wp_enqueue_script('comment-reply');
	
}

//////////////////////////////////////////////////////////////////
// Include files
//////////////////////////////////////////////////////////////////

// Theme Options
include('inc/customiser/customizer.php');
include('inc/customiser/customiser_setting.php');
include('inc/customiser/customiser_style.php');

// Widgets
include("inc/widgets/about_widget.php");
include("inc/widgets/facebook_widget.php");
include("inc/widgets/post_widget.php");
include("inc/widgets/social_widget.php");


//////////////////////////////////////////////////////////////////
// Register footer widgets
//////////////////////////////////////////////////////////////////
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
		'name' => 'ThemeMaple|Sidebar',
		'id'	=> 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'ThemeMaple|Footer-1',
		'id'	=> 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget first %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => 'ThemeMaple|Footer-2',
		'id'	=> 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
	
	register_sidebar(array(
		'name' => 'ThemeMaple|Footer-3',
		'id'	=> 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="widget last %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));


}



//////////////////////////////////////////////////////////////////
// PAGINATION
//////////////////////////////////////////////////////////////////
function thememaple_pagination() {
	
	?>
	
	<div class="pagination">
						
		<div class="older"><?php next_posts_link( 'Older Posts <i class="fa fa-angle-double-right"></i>' ); ?></div>
		<div class="newer"><?php previous_posts_link( '<i class="fa fa-angle-double-left"></i> Newer Posts' ); ?></div>
		
	</div>
					
	<?php
	
}



//////////////////////////////////////////////////////////////////
// COMMENTS LAYOUT
//////////////////////////////////////////////////////////////////

	function thememaple_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
			
			<div class="thecomment">
						
				<div class="author-img">
					<?php echo get_avatar($comment,$args['avatar_size']); ?>
				</div>
				
				<div class="comment-text">
					<span class="reply">
						<?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'manna'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
						<?php edit_comment_link(__('Edit', 'manna')); ?>
					</span>
					<span class="author"><?php echo get_comment_author_link(); ?></span>
					<span class="date"><?php printf(__('%1$s at %2$s', 'manna'), get_comment_date(),  get_comment_time()) ?></span>
					<?php if ($comment->comment_approved == '0') : ?>
						<em><i class="icon-info-sign"></i> <?php _e('Comment awaiting approval', 'manna'); ?></em>
						<br />
					<?php endif; ?>
					<?php comment_text(); ?>
				</div>
						
			</div>
			
			
		</li>

		<?php 
	}


//////////////////////////////////////////////////////////////////
// AUTHOR SOCIAL LINKS
//////////////////////////////////////////////////////////////////
function thememaple_contactmethods( $contactmethods ) {

	$contactmethods['twitter']   = 'Twitter Username';
	$contactmethods['facebook']  = 'Facebook Username';
	$contactmethods['google']    = 'Google Plus Username';
	$contactmethods['tumblr']    = 'Tumblr Username';
	$contactmethods['instagram'] = 'Instagram Username';
	$contactmethods['pinterest'] = 'Pinterest Username';

	return $contactmethods;
}
add_filter('user_contactmethods','thememaple_contactmethods',10,1);


/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * 
 * @package   TGM-Plugin-Activation
 * @subpackage Example
 * @version   2.4.2
 * @author    Thomas Griffin <thomasgriffinmedia.com>
 * @author    Gary Jones <gamajo.com>
 * @copyright Copyright (c) 2012, Thomas Griffin
 * @license   http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link      https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin pre-packaged with a them

		array(
			'name'     				=> 'Zilla ShortCode', // The plugin name
			'slug'     				=> 'zilla-shortcodes', // The plugin slug (typically the folder name)
			'source'   				=> 'https://s3.amazonaws.com/themezilla-free-downloads/zilla-shortcodes-2.0.2.zip', // The plugin source
			'required' 				=> false, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     				=> 'Contact Form 7', // The plugin name
			'slug'     				=> 'contact-form-7', // The plugin slug (typically the folder name)
			'source'   				=> 'https://downloads.wordpress.org/plugin/contact-form-7.4.1.2.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),

		array(
			'name'     				=> 'Instgram Slider Widget', // The plugin name
			'slug'     				=> 'instagram-slider-widget', // The plugin slug (typically the folder name)
			'source'   				=> 'https://downloads.wordpress.org/plugin/instagram-slider-widget.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		)

	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}

//////////////////////////////////////////////////////////////////
// EXCLUDE FEATURED CATEGORY
//////////////////////////////////////////////////////////////////

function tm_category($separator) {
	
	if(get_theme_mod( 'tm_featured_cat_hide' ) == true) {
		
		$excluded_cat = get_theme_mod('tm_featured_cat');
		
		$first_time = 1;
		foreach((get_the_category()) as $category) {
			if ($category->cat_ID != $excluded_cat) {
				if ($first_time == 1) {
					echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s", "thememaple" ), $category->name ) . '" ' . '>'  . $category->name.'</a>';
					$first_time = 0;
				} else {
					echo $separator . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s", "thememaple" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
				}
			}
		}
	
	} else {
		
		$first_time = 1;
		foreach((get_the_category()) as $category) {
			if ($first_time == 1) {
				echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s", "thememaple" ), $category->name ) . '" ' . '>'  . $category->name.'</a>';
				$first_time = 0;
			} else {
				echo $separator . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s", "thememaple" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
			}
		}
	
	}
}

//////////////////////////////////////////////////////////////////
// THE EXCERPT
//////////////////////////////////////////////////////////////////
function custom_excerpt_length( $length ) {
	return 19;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


