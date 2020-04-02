<?php

/* Slider Settings */

		$wp_customize->add_section( 'slider_section' , array(
			'title'      => __('Product Slider & Navigation', 'business-store' ),			
			'description'=> __('Display a product slider and product categories in front page template. Slider, navigation widget and more options, Go Pro version.', 'business-store' ),
			'panel' => 'theme_options',
		) );
	
		// slider animation type
		$wp_customize->add_setting( 'business_store_option[slider_animation_type]' , array(
		'default'    => 'fade',
		'sanitize_callback' => 'business_store_sanitize_select',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[slider_animation_type]' , array(
		'label' => __('Slider Effects','business-store' ),
		'section' => 'slider_section',
		'type'=>'select',
		'choices'=>array(
			'slide'=> __('Slide', 'business-store' ),
			'fade'=> __('Fade', 'business-store' ),
		),
		) );
		
		// slider speed
		$wp_customize->add_setting( 'business_store_option[slider_speed]' , array(
		'default'    => 3000,
		'sanitize_callback' => 'business_store_sanitize_select',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[slider_speed]' , array(
		'label' => __('Slider animation speed(ms)','business-store' ),
		'section' => 'slider_section',
		'type'=>'select',
		'choices'=>array(
			500 => 500,
			1000 => 1000,
			2000 => 2000,
			3000 => 3000,
			4000 => 4000,
			5000 => 5000,
			6000 => 6000,
			7000 => 7000,
			8000 => 8000,
			9000 => 9000,
			10000 => 10000,
			20000 => 20000,
			40000 => 40000,
			80000 => 80000,
			120000 => 120000,
		),
		) );
	
	
		// service button title
		$wp_customize->add_setting( 'business_store_option[slider_button_text]' , array(
		'default'    => __('More details','business-store' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[slider_button_text]' , array(
		'label' => __('Featured Button text','business-store' ),
		'section' => 'slider_section',
		'type'=>'text',
		) );		
		
	
        $wp_customize->add_setting( 'slider_label1', array(
            'default'        => __('Select Posts with featured image','business-store' ),
			'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( new business_store_Label_Custom_control( $wp_customize, 'slider_label1', array(
            'label'   => __('Select Products with featured image','business-store' ),
            'section' => 'slider_section',
        ) ) );		
	
		//posts  object
		global $business_store_all_posts;
	
		// post 1
		$wp_customize->add_setting( 'business_store_option[slider_cat]' , array(
		'default'    => '',
		'sanitize_callback' => 'business_store_sanitize_select',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[slider_cat]' , array(
		'label' => __('Select Product Category','business-store' ),
		'section' => 'slider_section',
		'type'=>'select',
		'choices'=> business_store_get_product_categories(),
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[slider_cat]', array(
			'selector' => '#main_Carousel .carousel-caption',
		) );
		
					
		// height
		$wp_customize->add_setting( 'business_store_option[slider_image_height]' , array(
		'default'    => 450,
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[slider_image_height]' , array(
		'label' => __('Slider Height (Max)','business-store' ),
		'section' => 'slider_section',
		'type'=>'number',
		) );		
