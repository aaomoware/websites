<?php

/*  
* Template Name:Home-Page
* Home page of the site   
*/

get_header();

//get options
global $business_store_option;	 
if ( class_exists( 'WP_Customize_Control' ) ) {
   $business_store_default_settings = new business_store_settings();
   $business_store_option = wp_parse_args(  get_option( 'business_store_option', array() ) , $business_store_default_settings->default_data());  
}

?>
<main id="main" class="site-main" role="main">
<?php

$business_store_featured = array();

if(($business_store_option['home_featured_area_0'])!='none'){
	business_store_featured_area($business_store_option['home_featured_area_0']);
	array_push($business_store_featured, $business_store_option['home_featured_area_0']);
}

if(($business_store_option['home_featured_area_1'])!='none'){
	/* check featured section already displayed, otherwise display */
	if(!in_array($business_store_option['home_featured_area_1'], $business_store_featured)){
		business_store_featured_area($business_store_option['home_featured_area_1']);
		array_push($business_store_featured, $business_store_option['home_featured_area_1']);
	}	
}

if(($business_store_option['home_featured_area_2'])!='none'){
	if(!in_array($business_store_option['home_featured_area_2'], $business_store_featured)){
		business_store_featured_area($business_store_option['home_featured_area_2']);
		array_push($business_store_featured, $business_store_option['home_featured_area_2']);
	}
}

if(($business_store_option['home_featured_area_3'])!='none'){
	if(!in_array($business_store_option['home_featured_area_3'], $business_store_featured)){
		business_store_featured_area($business_store_option['home_featured_area_3']);
		array_push($business_store_featured, $business_store_option['home_featured_area_3']);
	}
}

if(($business_store_option['home_featured_area_4'])!='none'){
	if(!in_array($business_store_option['home_featured_area_4'], $business_store_featured)){
		business_store_featured_area($business_store_option['home_featured_area_4']);
		array_push($business_store_featured, $business_store_option['home_featured_area_4']);
	}
}

if(($business_store_option['home_featured_area_5'])!='none'){
	if(!in_array($business_store_option['home_featured_area_5'], $business_store_featured)){
		business_store_featured_area($business_store_option['home_featured_area_5']);
		array_push($business_store_featured, $business_store_option['home_featured_area_5']);
	}
}

if(($business_store_option['home_featured_area_6'])!='none'){
	if(!in_array($business_store_option['home_featured_area_6'], $business_store_featured)){
		business_store_featured_area($business_store_option['home_featured_area_6']);
		array_push($business_store_featured, $business_store_option['home_featured_area_6']);
	}
}

?>

</main>
<!-- #main -->
<?php 
get_footer();
