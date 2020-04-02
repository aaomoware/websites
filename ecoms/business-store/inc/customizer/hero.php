<?php

/************************
*    Hero Settings      *
*************************/
	
		$wp_customize->add_section( 'hero_section' , array(
			'title'      => __('Hero Section', 'business-store' ),			 
			'description'=> __('Add hero contents and add a button with a Navigation link.', 'business-store' ),
			'panel' => 'theme_options',
		) );
			
	
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'business_store_option[hero_section_background_color]',
			array(
				'default'     => '#fff',
				'type'        => 'option',				
				'transport'   => 'refresh',
				'sanitize_callback' => 'sanitize_text_field',
				
			)
		);
		
		// background Alpha Color Picker control
		$wp_customize->add_control(
			new business_store_Alpha_Color_Control(
				$wp_customize,
				'business_store_option[hero_section_background_color]',
				array(
					'label'         =>  __('Section Background Color','business-store' ),
					'section'       => 'hero_section',
					'settings'      => 'business_store_option[hero_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> business_store_color_codes(),
				)
			)
		);				
		
		// page section title
		$wp_customize->add_setting( 'business_store_option[hero_section_title]' , array(
		'default'    => __('Hero Section','business-store' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('business_store_option[hero_section_title]' , array(
		'label' => __('Section Title','business-store' ),
		'section' => 'hero_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[hero_section_title]', array(
			'selector' => '#custom-page .section-title',
		) );		
	
		//description
		$wp_customize->add_setting( 'business_store_option[hero_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->add_control('business_store_option[hero_section_description]' , array(
		'label' => __('Section Subtitle','business-store' ),
		'section' => 'hero_section',
		'type'=>'text',
		) );
		
		// page
		$wp_customize->add_setting( 'business_store_option[hero_section_page]' , array(
		'default'    => '',
		'sanitize_callback' => 'business_store_sanitize_select',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[hero_section_page]' , array(
		'label' => __('Select a Page to Display','business-store' ),
		'section' => 'hero_section',
		'type'=>'select',
		'choices'=> business_store_get_all_pages(), 
		) );
				
		// read more button text
		$wp_customize->add_setting( 'business_store_option[hero_section_button_text]' , array(
		'default'    => __('View More','business-store' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[hero_section_button_text]' , array(
		'label' => __('View More Button Text','business-store' ),
		'section' => 'hero_section',
		'type'=>'text',
		) );
					
		// read more button url
		$wp_customize->add_setting( 'business_store_option[hero_section_url]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[hero_section_url]' , array(
		'label' => __('Button URL','business-store' ),
		'description' => __('(Hide button - keep the URL balnk)','business-store' ),
		'section' => 'hero_section',
		'type'=>'url',
		) );
		
		$wp_customize->add_control(
			'business_store_option[hero_section_image_repeat]', 
			array(
				'label'    => __( 'Background Repeat', 'business-store' ),
				'section'  => 'hero_section',
				'settings' => 'business_store_option[hero_section_image_repeat]',
				'type'     => 'select',
				'choices'  => business_store_background_style(),
			)
		);		
					