<?php

/************************
*     Page Settings     *
*************************/

$wp_customize->add_panel( 'pages_section', array(
  'title' => __( 'Manage Pages*','business-store' ),
  'description' => __('Settings related to Home, About, Contact, Portfolio templates. 15+ Features sections Go Pro version.', 'business-store' ), 
  'priority' => 3, // Mixed with top-level-section hierarchy.
) );	
	
$wp_customize->add_section( 'home_area' , array(
		'title'      => __('Home Page', 'business-store' ),			 
		'description'=> __('Display featured areas related to Home template. Before selecting Featured Area, enter details related to each Featured Area listed in Theme Options. One page Home template and 15+ Featured section  Go Pro Version.','business-store' ),
		'panel' => 'pages_section',
) );

// featured area 0
$wp_customize->add_setting( 'business_store_option[home_featured_area_0]' , array(
	'default'    => 'slider',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[home_featured_area_0]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );

// featured area 1
$wp_customize->add_setting( 'business_store_option[home_featured_area_1]' , array(
	'default'    => 'onsale-product',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[home_featured_area_1]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );

// featured area 2
$wp_customize->add_setting( 'business_store_option[home_featured_area_2]' , array(
	'default'    => 'bestselling-product',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[home_featured_area_2]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );

// featured area 3
$wp_customize->add_setting( 'business_store_option[home_featured_area_3]' , array(
	'default'    => 'featured-product',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[home_featured_area_3]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );


// featured area 4
$wp_customize->add_setting( 'business_store_option[home_featured_area_4]' , array(
	'default'    => 'toprated-product',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[home_featured_area_4]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );


// featured area 5
$wp_customize->add_setting( 'business_store_option[home_featured_area_5]' , array(
	'default'    => 'shop',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[home_featured_area_5]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );

// featured area 6
$wp_customize->add_setting( 'business_store_option[home_featured_area_6]' , array(
	'default'    => 'service',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[home_featured_area_6]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'home_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );


/******************************************* end of home section settings *******************************************************/
$wp_customize->add_section( 'about_area' , array(
		'title'      => __('About Page', 'business-store' ),			 
		'description'=> __('Display featured areas related to About Page Template. Before selecting Featured Area, enter details related to each Featured Area listed in Theme Options','business-store' ),
		'panel' => 'pages_section',
) );

// featured area 1
$wp_customize->add_setting( 'business_store_option[about_featured_area_1]' , array(
	'default'    => 'team',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[about_featured_area_1]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'about_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );


/******************************************* end of section settings *******************************************************/
$wp_customize->add_section( 'service_area' , array(
		'title'      => __('Service Page', 'business-store' ),			 
		'description'=> __('Display featured areas related to Service Page Template. Before selecting Featured Area, enter details related to each Featured Area listed in Theme Options','business-store' ),
		'panel' => 'pages_section',
) );

// featured area 1
$wp_customize->add_setting( 'business_store_option[service_featured_area_1]' , array(
	'default'    => 'service',
	'sanitize_callback' => 'business_store_sanitize_select',
	'type'=>'option'
));


$wp_customize->add_control('business_store_option[service_featured_area_1]' , array(
	'label' => __('Select Featured Area','business-store' ),
	'section' => 'service_area',
	'type'=>'select',
	'choices'=> business_store_featured_areas(),
) );

/******************************************* end of section settings *******************************************************/					

