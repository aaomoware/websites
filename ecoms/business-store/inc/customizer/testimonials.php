<?php

/********************** 
* Testimonial section *
**********************/

		/* Testimonial Settings */
		$wp_customize->add_section( 'testimonial_section' , array(
			'title'      => __('Testimonials', 'business-store' ),			
			'description'=> __('Create posts with featured image, text and assign it a category 
			and choose a category from given category settings below.', 'business-store' ),
			'panel' => 'theme_options',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[testimonial_section_title]', array(
			'selector' => '#testimonilas h1.section-title',
		) );
	
	
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'business_store_option[testimonial_section_background_color]',
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
				'business_store_option[testimonial_section_background_color]',
				array(
					'label'         =>  __('Background Color','business-store' ),
					'section'       => 'testimonial_section',
					'settings'      => 'business_store_option[testimonial_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> business_store_color_codes(),
				)
			)
		);			

	
		// testimonial section title
		$wp_customize->add_setting( 'business_store_option[testimonial_section_title]' , array(
		'default'    => __('Testimonials','business-store' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('business_store_option[testimonial_section_title]' , array(
		'label' => __('Section Title','business-store' ),
		'section' => 'testimonial_section',
		'type'=>'text',
		) );	
		
		// testimonial section description
		$wp_customize->add_setting( 'business_store_option[testimonial_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('business_store_option[testimonial_section_description]' , array(
		'label' => __('Section Subtitle','business-store' ),
		'section' => 'testimonial_section',
		'type'=>'text',
		) );			

        $wp_customize->add_setting( 'testimonial_label1', array(
			'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( new business_store_Label_Custom_control( $wp_customize, 'testimonial_label1', array(
            'label'   => __('Create testimonial page using Gutenburg blocks or using a page builder and select the created page below.','business-store' ),
            'section' => 'testimonial_section',
        ) ) );

		
		// team page
		$wp_customize->add_setting( 'business_store_option[testimonial_page]' , array(
		'default'    => '',
		'sanitize_callback' => 'business_store_sanitize_select',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[testimonial_page]' , array(
		'label' => __('Select Testimonial Page','business-store' ),
		'section' => 'testimonial_section',
		'type'=>'select',
		'choices'=>  business_store_get_all_pages(),
		) );		
		
		// section image
		$wp_customize->add_setting( 'business_store_option[testimonial_section_image]' , array(
		'default' => '',
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw',
		'type'=>'option'
		) );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'business_store_option[testimonial_section_image]' ,
		array(
		'label'          => __( 'Background Image', 'business-store' ),
		'description'=> __('Upload your background image. Important! Uncompressed images will increase your site loading time.','business-store'),
		'section'        => 'testimonial_section',
		) )	);
		
		$wp_customize->add_setting( 'business_store_option[testimonial_section_image_repeat]', array(
			'default'        => 'no-repeat',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		) );
		$wp_customize->add_control(
			'business_store_option[testimonial_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'business-store' ),
				'section'  => 'testimonial_section',
				'settings' => 'business_store_option[testimonial_section_image_repeat]',
				'type'     => 'select',
				'choices'  => business_store_background_style(),
			)
		);			
		
