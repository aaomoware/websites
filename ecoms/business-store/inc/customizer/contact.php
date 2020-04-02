<?php

/********************
*  contact Settings *
*********************/

		$wp_customize->add_section( 'contact_section' , array(
			'title'      => __('Contact', 'business-store' ),			
			'description'=>  __('Add all your contact details. Create a page from contact page template. Add contact details, contact form shortcode to page content.', 'business-store' ),
			'panel' => 'theme_options',
		) );
		
		// contact section title
		$wp_customize->add_setting( 'business_store_option[contact_section_title]' , array(
		'default'    => __('Contact Us','business-store' ),
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));
		
		$wp_customize->selective_refresh->add_partial( 'business_store_option[contact_section_title]', array(
			'selector' => '#contact .section-title',
		) );
		
		$wp_customize->add_control('business_store_option[contact_section_title]' , array(
		'label' => __('Section Title','business-store' ),
		'section' => 'contact_section',
		'type'=>'text',
		) );
		
		// contact section description
		$wp_customize->add_setting( 'business_store_option[contact_section_description]' , array(
		'default'    => '',
		'sanitize_callback' => 'sanitize_text_field',
		'type'=>'option'
		));

		$wp_customize->add_control('business_store_option[contact_section_description]' , array(
		'label' => __('Section Subtitle','business-store' ),
		'section' => 'contact_section',
		'type'=>'text',
		) );
		
