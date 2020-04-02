<?php

/****************************
*   Onsale Product Section  *
*****************************/

		$wp_customize->add_section( 'all_product_section' , array(
			'title'      => __('Home Shop', 'business-store' ),			
			'description'=> __('Show your Products or Products based on selected category ', 'business-store' ),
		    'panel' => 'theme_options',
		) );

	
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'business_store_option[all_product_bgcolor]',
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
				'business_store_option[all_product_bgcolor]',
				array(
					'label'         =>  __('Section Background Color','business-store' ),
					'section'       => 'all_product_section',
					'settings'      => 'business_store_option[all_product_bgcolor]',
					'show_opacity'  => true, // Optional.
					'palette'	=> business_store_color_codes(),
				)
			)
		);			
			
		// Featured products section title
		$wp_customize->add_setting( 'business_store_option[all_product_title]' , array(
		'default'    => 'Shop',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[all_product_title]' , array(
		'label' => __('Section Title','business-store' ),
		'section' => 'all_product_section',
		'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[all_product_title]', array(
			'selector' => '#shop-section .section-title',
		) );
		
		// Featured products section description
		$wp_customize->add_setting( 'business_store_option[all_product_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[all_product_description]' , array(
		'label' => __('Section Subtitle','business-store' ),
		'section' => 'all_product_section',
		'type'=>'text',
		) );
		
		
		// all category show
		$wp_customize->add_setting( 'business_store_option[all_category_show]' , array(
		'default'    => "",
		'sanitize_callback' => 'business_store_sanitize_product_category_list',		 
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[all_category_show]' , array(
		'label' => __('Product Category Show','business-store' ),
		'section' => 'all_product_section',
		'type'=>'select',
		'choices'=> business_store_get_product_categories(), 
		) );
		
		// Max no of products 
		$wp_customize->add_setting( 'business_store_option[all_product_no_of_show]' , array(
		'default'    => 12,
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[all_product_no_of_show]' , array(
		'label' => __('Max no of products to show','business-store' ),
		'section' => 'all_product_section',
		'type'=>'number',
		) );
		
