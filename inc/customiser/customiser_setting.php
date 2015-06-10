<?php

/**
 * ThemeMaple Customizer
 *
 * @package ThemeMaple
 */

//////////////////////////////////////////////////////////////////
// Customizer - Add Custom Styling
//////////////////////////////////////////////////////////////////
function thememaple_customizer_style()
{
	wp_enqueue_style('customiser', get_stylesheet_directory_uri() . '/inc/customiser/customiserCSS/customiser.css');
}
add_action('customize_controls_print_styles', 'thememaple_customizer_style');

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
function thememaple_register_theme_customizer( $wp_customize ) {
 	
	// Add Sections
	$wp_customize->add_section( 'thememaple_new_section_custom_css' , array(
   		'title'      => 'Custom CSS',
   		'description'=> 'Add your custom CSS which will overwrite the theme CSS',
   		'priority'   => 102,
	) );
	$wp_customize->add_section( 'thememaple_new_section_color_general' , array(
   		'title'      => 'Colors: General',
   		'description'=> '',
   		'priority'   => 101,
	) );
	$wp_customize->add_section( 'thememaple_new_section_color_sidebar' , array(
   		'title'      => 'Colors: Sidebar',
   		'description'=> '',
   		'priority'   => 100,
	) );
	$wp_customize->add_section( 'thememaple_new_section_color_footer' , array(
   		'title'      => 'Colors: Footer',
   		'description'=> '',
   		'priority'   => 99,
	) );

	$wp_customize->add_section( 'thememaple_new_section_color_topbar' , array(
   		'title'      => 'Colors: Top Bar',
   		'description'=> '',
   		'priority'   => 98,
	) );

	$wp_customize->add_section( 'thememaple_new_section_footer' , array(
   		'title'      => 'Footer Settings',
   		'description'=> '',
   		'priority'   => 97,
	) );
	$wp_customize->add_section( 'thememaple_new_section_social' , array(
   		'title'      => 'Social Media Settings',
   		'description'=> 'Enter your social media usernames. Icons will not show if left blank.',
   		'priority'   => 96,
	) );
	$wp_customize->add_section( 'thememaple_new_section_page' , array(
   		'title'      => 'Page Settings',
   		'description'=> '',
   		'priority'   => 95,
	) );
	$wp_customize->add_section( 'thememaple_new_section_post' , array(
   		'title'      => 'Post Settings',
   		'description'=> '',
   		'priority'   => 94,
	) );
	$wp_customize->add_section( 'thememaple_new_section_featured' , array(
		'title'      => 'Featured Area Settings',
		'description'=> '',
		'priority'   => 93,
	) );

	$wp_customize->add_section( 'thememaple_new_section_logo_header' , array(
   		'title'      => 'Logo and Header Settings',
   		'description'=> '',
   		'priority'   => 91,
	) );
	$wp_customize->add_section( 'thememaple_new_section_general' , array(
   		'title'      => 'General Settings',
   		'description'=> '',
   		'priority'   => 90,
	) );
	
	
	
	// Add Setting
		
		// General
		$wp_customize->add_setting(
	        'tm_favicon',
	        array(
	        'sanitize_callback' => 'esc_url_raw'
	    	)
	    );
		$wp_customize->add_setting(
	        'tm_home_layout',
	        array(
	            'default'     => 'full',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_grid_title',
	        array(
	            'default'     => 'Latest Posts',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_grid_sub',
	        array(
	            'default'     => 'Lorem ipsum dolor sit amet sed do eiusmod.',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_archive_layout',
	        array(
	            'default'     => 'full',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		$wp_customize->add_setting(
	        'tm_sidebar_home',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		$wp_customize->add_setting(
	        'tm_sidebar_posts',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		$wp_customize->add_setting(
	        'tm_sidebar_archive',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		// Header and logo
		$wp_customize->add_setting(
	        'tm_logo',
	        array(
	        	'sanitize_callback' => 'esc_url_raw'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_logo_retina',
	        array(
	        	'sanitize_callback' => 'esc_url_raw'
	        )
	    );
		
		$wp_customize->add_setting(
	        'tm_header_padding',
	        array(
	        	'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		
		// Featured area
		$wp_customize->add_setting(
	        'tm_featured_slider',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_featured_cat',
	        array(
	        	'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_featured_cat_hide',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_featured_slider_slides',
	        array(
	            'default'     => '1',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		// Post Settings
		$wp_customize->add_setting(
	        'tm_post_tags',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_author',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_related',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_share',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_thumb',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_nav',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_date',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_cat',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_post_title_lowercase',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		// Page Settings
		$wp_customize->add_setting(
	        'tm_page_comments',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_page_share',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		// Social Media

		$wp_customize->add_setting(
	        'tm_topbar_social_check',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );

	    $wp_customize->add_setting(
	        'tm_footer_social_check',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		$wp_customize->add_setting(
	        'tm_facebook',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_twitter',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_instagram',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_pinterest',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_tumblr',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_bloglovin',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_google',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		$wp_customize->add_setting(
	        'tm_youtube',
	        array(
	            'default'     => 'envatomarket',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		// Footer Options

		$wp_customize->add_setting(
	        'tm_footer_widget_area',
	        array(
	            'default'     => false,
	            'sanitize_callback' => 'esc_attr'
	        )
	    );

		$wp_customize->add_setting(
	        'tm_footer_copyright',
	        array(
	            'default'     => '',
	            'sanitize_callback' => 'esc_attr'
	        )
	    );
		
		// Color Options
			
			// Top bar
			$wp_customize->add_setting(
				'tm_topbar_bg',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_topbar_nav_color',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_topbar_nav_color_active',
				array(
					'default'     => '#cda993',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			$wp_customize->add_setting(
				'tm_drop_bg',
				array(
					'default'     => '#fff',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_drop_border',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_drop_text_color',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_drop_text_hover_bg',
				array(
					'default'     => '#cda993',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_drop_text_hover_color',
				array(
					'default'     => '#ffffff',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			$wp_customize->add_setting(
				'tm_topbar_social_color',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_topbar_social_color_hover',
				array(
					'default'     => '#cda993',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			$wp_customize->add_setting(
				'tm_topbar_search_bg',
				array(
					'default'     => '#fff',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_topbar_search_magnify',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_topbar_search_bg_hover',
				array(
					'default'     => '#cda993',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_topbar_search_magnify_hover',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			// Footer
			$wp_customize->add_setting(
				'tm_footer_widget_color',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);

			$wp_customize->add_setting(
				'tm_footer_copyright_color',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			// Sidebar color
			$wp_customize->add_setting(
				'tm_sidebar_bg',
				array(
					'default'     => '',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			$wp_customize->add_setting(
				'tm_sidebar_color',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			
			// Color general
			$wp_customize->add_setting(
				'tm_color_accent',
				array(
					'default'     => '#424b52',
					'sanitize_callback' => 'sanitize_hex_color'
				)
			);
			
			// Custom CSS
			$wp_customize->add_setting(
				'tm_custom_css',
				array(
	        		'sanitize_callback' => 'esc_textarea'
	        	)
			);


    // Add Control
		
		// General
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_favicon',
				array(
					'label'      => 'Upload Favicon',
					'section'    => 'thememaple_new_section_general',
					'settings'   => 'tm_favicon',
					'priority'	 => 1
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'home_layout',
				array(
					'label'          => 'Homepage Layout',
					'section'        => 'thememaple_new_section_general',
					'settings'       => 'tm_home_layout',
					'type'           => 'radio',
					'priority'	 => 2,
					'choices'        => array(
						'full'   => 'Full Posts',
						'grid'  => 'Grid Posts'
					)
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'grid_title',
				array(
					'label'      => 'Grid Layout: Heading',
					'section'    => 'thememaple_new_section_general',
					'settings'   => 'tm_grid_title',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'grid_sub',
				array(
					'label'      => 'Grid Layout: Sub heading',
					'section'    => 'thememaple_new_section_general',
					'settings'   => 'tm_grid_sub',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'archive_layout',
				array(
					'label'          => 'Archive Layout',
					'section'        => 'thememaple_new_section_general',
					'settings'       => 'tm_archive_layout',
					'type'           => 'radio',
					'priority'	 => 5,
					'choices'        => array(
						'full'   => 'Full Posts',
						'grid'  => 'Grid Posts'
					)
				)
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_home',
				array(
					'label'      => 'Enable Sidebar on Homepage',
					'section'    => 'thememaple_new_section_general',
					'settings'   => 'tm_sidebar_home',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_posts',
				array(
					'label'      => 'Enable Sidebar on Posts',
					'section'    => 'thememaple_new_section_general',
					'settings'   => 'tm_sidebar_posts',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'sidebar_archive',
				array(
					'label'      => 'Enable Sidebar on Archives',
					'section'    => 'thememaple_new_section_general',
					'settings'   => 'tm_sidebar_archive',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
		
		// Header and Logo
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo',
				array(
					'label'      => 'Upload Logo',
					'section'    => 'thememaple_new_section_logo_header',
					'settings'   => 'tm_logo',
					'priority'	 => 20
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'upload_logo_retina',
				array(
					'label'      => 'Upload Logo (Retina Version)',
					'section'    => 'thememaple_new_section_logo_header',
					'settings'   => 'tm_logo_retina',
					'priority'	 => 21
				)
			)
		);

		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'header_padding',
				array(
					'label'      => 'Top & Bottom Header Padding',
					'section'    => 'thememaple_new_section_logo_header',
					'settings'   => 'tm_header_padding',
					'type'		 => 'number',
					'priority'	 => 22
				)
			)
		);

		
		
		
		// Featured area
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_slider',
				array(
					'label'      => 'Enable Featured Slider',
					'section'    => 'thememaple_new_section_featured',
					'settings'   => 'tm_featured_slider',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Category_Control(
				$wp_customize,
				'featured_cat',
				array(
					'label'    => 'Select Featured Category',
					'settings' => 'tm_featured_cat',
					'section'  => 'thememaple_new_section_featured',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'featured_cat_hide',
				array(
					'label'      => 'Hide Featured Category',
					'section'    => 'thememaple_new_section_featured',
					'settings'   => 'tm_featured_cat_hide',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		
		
		$wp_customize->add_control(
			new Customize_Number_Control(
				$wp_customize,
				'featured_slider_slides',
				array(
					'label'      => 'Amount of Slides',
					'section'    => 'thememaple_new_section_featured',
					'settings'   => 'tm_featured_slider_slides',
					'type'		 => 'number',
					'priority'	 => 5
				)
			)
		);
		
		// Post Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_cat',
				array(
					'label'      => 'Hide Category',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_cat',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_date',
				array(
					'label'      => 'Hide Date',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_date',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_tags',
				array(
					'label'      => 'Hide Tags',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_tags',
					'type'		 => 'checkbox',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_share',
					'type'		 => 'checkbox',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_author',
				array(
					'label'      => 'Hide Author Box',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_author',
					'type'		 => 'checkbox',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_related',
				array(
					'label'      => 'Hide Related Posts Box',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_related',
					'type'		 => 'checkbox',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_thumb',
				array(
					'label'      => 'Hide Featured Image from top of Post',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_thumb',
					'type'		 => 'checkbox',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_nav',
				array(
					'label'      => 'Hide Next/Prev Post Navigation',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_nav',
					'type'		 => 'checkbox',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'post_title_lowercase',
				array(
					'label'      => 'Turn off uppercase in post title',
					'section'    => 'thememaple_new_section_post',
					'settings'   => 'tm_post_title_lowercase',
					'type'		 => 'checkbox',
					'priority'	 => 9
				)
			)
		);
		
		// Page settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_comments',
				array(
					'label'      => 'Hide Comments',
					'section'    => 'thememaple_new_section_page',
					'settings'   => 'tm_page_comments',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'page_share',
				array(
					'label'      => 'Hide Share Buttons',
					'section'    => 'thememaple_new_section_page',
					'settings'   => 'tm_page_share',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);
		
		// Social Media

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'topbar_social_check',
				array(
					'label'      => 'Disable Top Bar Social Icons',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_topbar_social_check',
					'type'		 => 'checkbox',
					'priority'	 => 1
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_social_check',
				array(
					'label'      => 'Disable Footer Social Icons',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_footer_social_check',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'facebook',
				array(
					'label'      => 'Facebook',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_facebook',
					'type'		 => 'text',
					'priority'	 => 3
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'twitter',
				array(
					'label'      => 'Twitter',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_twitter',
					'type'		 => 'text',
					'priority'	 => 4
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'instagram',
				array(
					'label'      => 'Instagram',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_instagram',
					'type'		 => 'text',
					'priority'	 => 5
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'pinterest',
				array(
					'label'      => 'Pinterest',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_pinterest',
					'type'		 => 'text',
					'priority'	 => 6
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'bloglovin',
				array(
					'label'      => 'Bloglovin',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_bloglovin',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'google',
				array(
					'label'      => 'Google Plus',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_google',
					'type'		 => 'text',
					'priority'	 => 8
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'tumblr',
				array(
					'label'      => 'Tumblr',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_tumblr',
					'type'		 => 'text',
					'priority'	 => 9
				)
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'youtube',
				array(
					'label'      => 'Youtube',
					'section'    => 'thememaple_new_section_social',
					'settings'   => 'tm_youtube',
					'type'		 => 'text',
					'priority'	 => 10
				)
			)
		);
		
		// Footer Settings
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_widget_area',
				array(
					'label'      => 'Disable Footer Widget Area',
					'section'    => 'thememaple_new_section_footer',
					'settings'   => 'tm_footer_widget_area',
					'type'		 => 'checkbox',
					'priority'	 => 2
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'footer_copyright',
				array(
					'label'      => 'Footer Copyright Text',
					'section'    => 'thememaple_new_section_footer',
					'settings'   => 'tm_footer_copyright',
					'type'		 => 'text',
					'priority'	 => 7
				)
			)
		);
		
		// Color Settings

			// Top Bar Color
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_bg',
					array(
						'label'      => 'Top Bar BG',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_bg',
						'priority'	 => 1
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color',
					array(
						'label'      => 'Top Bar Menu Text Color',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_nav_color',
						'priority'	 => 2
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_nav_color_active',
					array(
						'label'      => 'Top Bar Menu Text Hover Color',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_nav_color_active',
						'priority'	 => 3
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_bg',
					array(
						'label'      => 'Dropdown BG',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_drop_bg',
						'priority'	 => 4
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_border',
					array(
						'label'      => 'Dropdown Border Color',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_drop_border',
						'priority'	 => 5
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_color',
					array(
						'label'      => 'Dropdown Text Color',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_drop_text_color',
						'priority'	 => 6
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_bg',
					array(
						'label'      => 'Dropdown Text Hover BG',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_drop_text_hover_bg',
						'priority'	 => 7
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'drop_text_hover_color',
					array(
						'label'      => 'Dropdown Text Hover Color',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_drop_text_hover_color',
						'priority'	 => 8
					)
				)
			);
			
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color',
					array(
						'label'      => 'Top Bar Social Icons',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_social_color',
						'priority'	 => 9
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_social_color_hover',
					array(
						'label'      => 'Top Bar Social Icons Hover',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_social_color_hover',
						'priority'	 => 11
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_bg',
					array(
						'label'      => 'Top Bar Search BG',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_search_bg',
						'priority'	 => 12
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_magnify',
					array(
						'label'      => 'Top Bar Search Magnify Color',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_search_magnify',
						'priority'	 => 13
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_bg_hover',
					array(
						'label'      => 'Top Bar Search BG Hover',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_search_bg_hover',
						'priority'	 => 14
					)
				)
			);
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'topbar_search_magnify_hover',
					array(
						'label'      => 'Top Bar Search Magnify Hover Color',
						'section'    => 'thememaple_new_section_color_topbar',
						'settings'   => 'tm_topbar_search_magnify_hover',
						'priority'	 => 15
					)
				)
			);			

			// Footer colors

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_widget_color',
					array(
						'label'      => 'Footer Widget Title Text Color',
						'section'    => 'thememaple_new_section_color_footer',
						'settings'   => 'tm_footer_widget_color',
						'priority'	 => 2
					)
				)
			);


			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'footer_copyright_color',
					array(
						'label'      => 'Footer Copyright Section Text Color',
						'section'    => 'thememaple_new_section_color_footer',
						'settings'   => 'tm_footer_copyright_color',
						'priority'	 => 7
					)
				)
			);
			
			// Sidebar Color
			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'sidebar_color',
					array(
						'label'      => 'Sidebar Widget Heading Text Color',
						'section'    => 'thememaple_new_section_color_sidebar',
						'settings'   => 'tm_sidebar_color',
						'priority'	 => 2
					)
				)
			);
			
			// Colors general

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize,
					'color_accent',
					array(
						'label'      => 'Accent',
						'section'    => 'thememaple_new_section_color_general',
						'settings'   => 'tm_color_accent',
						'priority'	 => 2
					)
				)
			);

			
			$wp_customize->add_control(
			new Customize_CustomCss_Control(
				$wp_customize,
				'custom_css',
				array(
					'label'      => 'Custom CSS',
					'section'    => 'thememaple_new_section_custom_css',
					'settings'   => 'tm_custom_css',
					'type'		 => 'custom_css',
					'priority'	 => 2
				)
			)
		);
		
	

	// Remove Sections
	$wp_customize->remove_section( 'title_tagline');
	$wp_customize->remove_section( 'nav');
	$wp_customize->remove_section( 'static_front_page');
	$wp_customize->remove_section( 'colors');
	$wp_customize->remove_section( 'background_image');
	
 
}
add_action( 'customize_register', 'thememaple_register_theme_customizer' );
?>