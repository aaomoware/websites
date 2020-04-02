<?php

/*
 * default settings 
 */
if( !class_exists('business_store_settings') ){
	
	class business_store_settings {
	
		function default_data(){
			return array(
			
			//values of all featured sections - not displayed to user			
			'home_featured_area_0' => 'slider',
			'home_featured_area_1' => 'onsale-product',
			'home_featured_area_2' => 'bestselling-product',
			'home_featured_area_3' => 'featured-product',
			'home_featured_area_4' => 'toprated-product',
			'home_featured_area_5' => 'shop',
			'home_featured_area_6' => 'service',
			
			'service_featured_area_1' => 'service',
			'service_featured_area_2' => '',						
			'about_featured_area_1' => 'hero',
			'about_featured_area_2' => '',			
			'contact_featured_area_1' => 'contact',	
			'about_featured_area_1' => 'team',
			'about_featured_area_2' => '',	
			
			'widget_posts' => 1,			
			'blog_sidebar_position' => 'right',		
			'home_header_section_disable' => 1,
			'woocommerce_header_cart_hide' => 0,
					
			
			'header_section_hide_header' => 0,
			'contact_section_address' => '',
			'contact_section_email' => '',
			'contact_section_phone' => '',
			'contact_section_hours' => '',		
			'header_myaccount_link' =>  site_url().'/my-account',
			
			'featured_product_title' => __('Featured Products','business-store'),
			'featured_product_bgcolor' => '#fff',
			'featured_product_no_of_show' => 6,			   
			'featured_product_description' => '',
			
			'onsale_product_title' => __('Onsale Products','business-store'),
			'onsale_product_bgcolor' => '#fff',
			'onsale_product_no_of_show' => 6,  
			'onsale_product_description' => '',
			
			'all_product_title' => __('Shop','business-store'),
			'all_product_bgcolor' => '#fff',
			'all_product_no_of_show' => 12,
			'all_product_description' => '',
			'all_category_show' => '',
			
			'bestselling_product_title' => __('Best Selling Products','business-store'),
			'bestselling_product_bgcolor' => '#fff',
			'bestselling_product_no_of_show' => 6,			   
			'bestselling_product_description' => '',
			
			'toprated_product_title' => __('Top Rated Products','business-store'),
			'toprated_product_bgcolor' => '#ffffff',
			'toprated_product_no_of_show' => 6,			   
			'toprated_product_description' => '',										

			'slider_animation_type' => 'fade', //value not displayed to user
			'slider_cat' => '',
			'slider_image_height' => 450,
			'slider_button_text' => __("More details",'business-store'),
			'slider_button_url' => "#service",
			'slider_speed' => 3000,			
			'slider_max_items' => 6,
					
			'hero_section_enable' => 1,
			'hero_section_background_color' => '#fff',
			'hero_section_title' => __('Hero Section','business-store'),
			'hero_section_description' => '',	
			'hero_section_url' => '',
			'hero_section_button_text' =>  __('Read More','business-store'),	
			'hero_section_page' => '',
			
			'banner_section_background_color' => '#fff',
			'banner_section_page' => '',			

			'layout_section_post_one_column' => 0 ,	
			'box_layout' => 0 ,	
	
			'booking_section_shortcode' => '',
			'booking_section_enable' => 1,

			'options_section_enable' => 1,
			'options_section_background_color' => '#fff',
			'options_section_option1' => '',	
			'options_section_option2' => '',	
			'options_section_option3' => '',	
			'options_section_option4' => '',
			
			'social_facebook_link' => '',
			'social_twitter_link' => '',
			'social_skype_link' => '',
			'social_pinterest_link' => '',
			'social_open_new_tab' => 1,
					
			'testimonial_section_enable' => 1,
			'testimonial_section_title' => __('Testimonials','business-store'),
			'testimonial_animation_type' => 'slide', //value not displayed to user
			'testimonial_speed' => '3000',
			'testimonial_section_background_color' => '#fff',
			'testimonial_section_image' => '',
			'testimonial_section_image_repeat' => 'no-repeat',
			'testimonial_section_description' => '',
			'testimonial_page' => '',
			
			'contact_section_enable' => 1,			
			'contact_section_description' => '',
			'contact_section_title' => __('Contact us','business-store'),
			'contact_section_background_color' => '#fff',   
			'contact_section_shortcode' => '',
			
			'service_section_enable' => 1,
			'service_section_description' => '',
			'service_section_title' => __('Services','business-store'),
			'service_section_background_color' => '#fff',    
			'service_section_image' => '',
			'service_section_image_repeat' => 'no-repeat',
			'service_section_style' => 'default',
			'service_page' => '',
			
			'team_section_enable' => 1,
			'team_section_description' => '',
			'team_section_title' => __('Our Staff','business-store'),
			'team_section_background_color' => '#fff',    
			'team_section_image' => '',
			'team_section_image_repeat' => 'no-repeat',
			'team_page' => '',	
			
			'news_section_enable' => 1, 			
			'news_section_title' => __('News ~ Blog','business-store'),
			'news_category_show' => "",
			'news_section_background_color' => '#fff',
			'news_section_image' => '',
			'news_section_image_repeat' => 'no-repeat',
			'news_no_of_show' => 4,			   
			'news_section_description' => '',
			
			'footer_section_background_color' => '#b42b2b',
			'footer_section_bottom_color' => '#fff',
			'footer_foreground_color' => '#fff',		
            'footer_section_bottom_text' =>  __('A Theme by Ceylon Themes','business-store'),			
					
			);
		}
	}	

}

