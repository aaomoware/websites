<?php

/******************************
*   Featured Product Section  *
*******************************/

		$wp_customize->add_section( 'featured_product_section' , array(
			'title'      => __('Featured Products', 'business-store' ),			
			'description'=> __('Show your featured products. First, create a page from home-page template, From Home page settings select the created page as static home page. Product and slider widgets Go Pro Version.', 'business-store' ),
		    'panel' => 'theme_options',
		) );

	
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'business_store_option[featured_product_bgcolor]',
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
				'business_store_option[featured_product_bgcolor]',
				array(
					'label'         =>  __('Section Background Color','business-store' ),
					'section'       => 'featured_product_section',
					'settings'      => 'business_store_option[featured_product_bgcolor]',
					'show_opacity'  => true, // Optional.
					'palette'	=> business_store_color_codes(),
				)
			)
		);			
			
		// Featured products section title
		$wp_customize->add_setting( 'business_store_option[featured_product_title]' , array(
		'default'    => 'Featured Products',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[featured_product_title]' , array(
		'label' => __('Section Title','business-store' ),
		'section' => 'featured_product_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[featured_product_title]', array(
			'selector' => '#featured-products .section-title',
		) );
		
		// Featured products section description
		$wp_customize->add_setting( 'business_store_option[featured_product_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[featured_product_description]' , array(
		'label' => __('Section Subtitle','business-store' ),
		'section' => 'featured_product_section',
		'type'=>'text',
		) );
		
		// Max no of products 
		$wp_customize->add_setting( 'business_store_option[featured_product_no_of_show]' , array(
		'default'    => 6,
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[featured_product_no_of_show]' , array(
		'label' => __('Max no of products to show','business-store' ),
		'section' => 'featured_product_section',
		'type'=>'number',
		) );
		
