<?php

/********************
* Service Settings  *
********************/

		$wp_customize->add_section( 'service_section' , array(
			'title'      => __('Services', 'business-store' ),			 
			'description'=> __('First, create a page from home-page template, From Home page settings select the created page as static home page. Service widget and more options Go Pro Version.', 'business-store' ),
			'panel' => 'theme_options',
		) );
			

		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'business_store_option[service_section_background_color]',
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
				'business_store_option[service_section_background_color]',
				array(
					'label'         =>  __('Section Background Color','business-store' ),
					'section'       => 'service_section',
					'settings'      => 'business_store_option[service_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> business_store_color_codes(),
				)
			)
		);			
		
		// service section title
		$wp_customize->add_setting( 'business_store_option[service_section_title]' , array(
		'default'    => __('Services', 'business-store' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('business_store_option[service_section_title]' , array(
		'label' => __('Section Title','business-store' ),
		'section' => 'service_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[service_section_title]', array(
			'selector' => '#service .section-title',
		) );
		
		// service section description
		$wp_customize->add_setting( 'business_store_option[service_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('business_store_option[service_section_description]' , array(
		'label' => __('Section Subtitle','business-store' ),
		'section' => 'service_section',
		'type'=>'text',
		) );
				
        $wp_customize->add_setting( 'service_label2', array(
			'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( new business_store_Label_Custom_control( $wp_customize, 'service_label2', array(
            'label'   => __('Create service page using Gutenburg blocks or page builder content Elementor such as Icon box, Image Box widgets and select the created page below.', 'business-store' ),
            'section' => 'service_section',
        ) ) );

		
		// service page
		$wp_customize->add_setting( 'business_store_option[service_page]' , array(
		'default'    => '',
		'sanitize_callback' => 'business_store_sanitize_select',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[service_page]' , array(
		'label' => __('Select Service Page','business-store' ),
		'section' => 'service_section',
		'type'=>'select',
		'choices'=>  business_store_get_all_pages(), 
		) );
	

		// service section image
		$wp_customize->add_setting( 'business_store_option[service_section_image]' , array(
		'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=>'option'
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'business_store_option[service_section_image]' ,
		array(
		'label'          => __( 'Service Section Image', 'business-store' ),
		'description'=> __('Upload your background image. Important! Uncompressed images will increase your site loading time.','business-store'),
		'section'        => 'service_section',
		) )	);
		
		// service section repeater
		$wp_customize->add_setting( 'business_store_option[service_section_image_repeat]', array(
			'default'        => 'no-repeat',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		) );
		
		$wp_customize->add_control(
			'business_store_option[service_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'business-store' ),
				'section'  => 'service_section',
				'settings' => 'business_store_option[service_section_image_repeat]',
				'type'     => 'select',
				'choices'  => business_store_background_style(),
			)
		);
