<?php

/**************** 
* Staff Settings *
****************/

		$wp_customize->add_section( 'team_section' , array(
			'title'      => __('Team', 'business-store'),
			'description'=> __('Display team members. First, create a page from home-page template, From Home page settings select the created page as static home page. Select the post from post dropdown below. Team widget and more options Go Pro version.','business-store'),
			'panel'  => 'theme_options'
		) );			
		
		// background Alpha Color Picker setting
		$wp_customize->add_setting(
			'business_store_option[team_section_background_color]',
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
				'business_store_option[team_section_background_color]',
				array(
					'label'         =>  __('Staff Section Background Color','business-store' ),
					'section'       => 'team_section',
					'settings'      => 'business_store_option[team_section_background_color]',
					'show_opacity'  => true, // Optional.
					'palette'	=> business_store_color_codes(),
				)
			)
		);				
		
		$wp_customize->add_setting( 'business_store_option[team_section_title]' , array(
			'default'    => __('Our Staff','business-store' ),
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		));
		$wp_customize->add_control('business_store_option[team_section_title]' , array(
			'label' => __('Section Title','business-store'),
			'section' => 'team_section',
			'type'=>'text',
		) );
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[team_section_title]', array(
			'selector' => '#team .section-title',
		) );		
		
		$wp_customize->add_setting( 'business_store_option[team_section_description]' , array(
			'default'    => '',
			'sanitize_callback' => 'sanitize_text_field',
			'type'=>'option'
		));
		$wp_customize->add_control('business_store_option[team_section_description]' , array(
			'label' => __('Section Subtitle','business-store'),
			'section' => 'team_section',
			'type'=>'text',
		) );
	
        $wp_customize->add_setting( 'team_label2', array(
			'sanitize_callback' => 'sanitize_text_field',
        ) );

        $wp_customize->add_control( new business_store_Label_Custom_control( $wp_customize, 'team_label2', array(
            'label'   => __('Create team page using Gutenburg blocks or page builder content such as Elementor Icon box, Image Box widgets and select the created page below.', 'business-store' ),
            'section' => 'team_section',
        ) ) );
		
		
		// team page
		$wp_customize->add_setting( 'business_store_option[team_page]' , array(
		'default'    => '',
		'sanitize_callback' => 'business_store_sanitize_select',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[team_page]' , array(
		'label' => __('Select Team Page','business-store' ),
		'section' => 'team_section',
		'type'=>'select',
		'choices'=>  business_store_get_all_pages(),  
		) );		

		$wp_customize->add_setting( 'business_store_option[team_section_image]' , array(
			'default' => '',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'type'=>'option'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'business_store_option[team_section_image]' ,
			array(
				'label'          => __( 'Background Image', 'business-store' ),
				'section'        => 'team_section',
			) )	);

        $wp_customize->add_setting( 'business_store_option[team_section_image_repeat]', array(
            'default'        => 'no-repeat',
            'sanitize_callback' => 'sanitize_text_field',
            'type'=>'option'
        ) );
		
        $wp_customize->add_control(
            'business_store_option[team_section_image_repeat]',
            array(
                'label'    => __( 'Background Repeat', 'business-store' ),
                'section'  => 'team_section',
                'settings' => 'business_store_option[team_section_image_repeat]',
                'type'     => 'select',
                'choices'  => business_store_background_style(),
            )
        );
