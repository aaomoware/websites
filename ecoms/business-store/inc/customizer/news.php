<?php

/******************
*   News Section  *
******************/

		$wp_customize->add_section( 'news_section' , array(
			'title'      => __('News', 'business-store' ),			
			'description'=> __('Show your latest news. Please, create posts and add a category to posts. Select this category given below News Category list. Need News and Events widget Go Pro Version.', 'business-store' ),
		    'panel' => 'theme_options',
		) );


		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'business_store_option[news_section_background_color]',
			array(
				'default'     => '#ffffff',
				'type'        => 'option',			
				'transport'   => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		
		// background Alpha Color Picker control
		$wp_customize->add_control(
			new business_store_Alpha_Color_Control(
				$wp_customize,
				'business_store_option[news_section_background_color]',
				array(
					'label'         =>  __('News Section Background Color','business-store' ),
					'section'       => 'news_section',
					'settings'      => 'business_store_option[news_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> business_store_color_codes(),
				)
			)
		);			
			
		// news section title
		$wp_customize->add_setting( 'business_store_option[news_section_title]' , array(
		'default'    => __('News ~ Events','business-store' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[news_section_title]' , array(
		'label' => __('Section Title','business-store' ),
		'section' => 'news_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[news_section_title]', array(
			'selector' => '#news .section-title',
		) );
		
		// news section description
		$wp_customize->add_setting( 'business_store_option[news_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[news_section_description]' , array(
		'label' => __('Section Subtitle','business-store' ),
		'section' => 'news_section',
		'type'=>'text',
		) );
		
		// Max no of news 
		$wp_customize->add_setting( 'business_store_option[news_no_of_show]' , array(
		'default'    => 4,
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[news_no_of_show]' , array(
		'label' => __('Max no of news to show','business-store' ),
		'section' => 'news_section',
		'type'=>'number',
		) );
		
		global $business_store_categories;
		
		// news category show
		$wp_customize->add_setting( 'business_store_option[news_category_show]' , array(
		'default'    => "",
		'sanitize_callback' => 'business_store_sanitize_select',		 
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[news_category_show]' , array(
		'label' => __('News Category Show','business-store' ),
		'section' => 'news_section',
		'type'=>'select',
		'choices'=> $business_store_categories, 
		) );
		
		// News section image
		$wp_customize->add_setting( 'business_store_option[news_section_image]' , array(
		'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=>'option'
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'business_store_option[news_section_image]' ,
		array(
		'label'          => __( 'News Section Image', 'business-store' ),
		'description'=> __('Upload your background image. Important! Uncompressed images will increase your site loading time.','business-store'),
		'section'        => 'news_section',
		) )	);
		
		$wp_customize->add_setting( 'business_store_option[news_section_image_repeat]', array(
			'default'        => 'no-repeat',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		) );
		$wp_customize->add_control(
			'business_store_option[news_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'business-store' ),
				'section'  => 'news_section',
				'settings' => 'business_store_option[news_section_image_repeat]',
				'type'     => 'select',
				'choices'  => business_store_background_style(),
			)
		);
		
