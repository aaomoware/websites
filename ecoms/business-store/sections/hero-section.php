<?php
// $business_store_option array declared in functions.php
global $business_store_option;	
if ( class_exists( 'WP_Customize_Control' ) ) {
   $business_store_default_settings = new business_store_settings();
   $business_store_option = wp_parse_args(  get_option( 'business_store_option', array() ) , $business_store_default_settings->default_data());  
}

?>

<section id="custom-page" style="background: <?php echo esc_attr( $business_store_option['hero_section_background_color'] ); ?>;">
<div class="svc-section-body section-padding" >
<div class="container">

	 <div class="row">
		<?php if($business_store_option['hero_section_title']!=''): ?>
		<h1 class="section-title text-center"><?php echo esc_html( $business_store_option['hero_section_title'] ); ?></h1>
		<?php endif; ?>	
		<?php if($business_store_option['hero_section_description']!=''): ?>
		<div class="section-desc wow animated fadeInUp"><?php echo esc_html($business_store_option['hero_section_description']); ?></div>
		<?php endif; ?>

	 </div>
	 
	 <div class="row">
		  <div class="col-sm-12 col-xs-12"
		  <?php 
		  if($business_store_option['hero_section_page']!=''){
				// turn on the read more tags in pages	
				$business_store_page = absint($business_store_option['hero_section_page']);
				$business_store_args = array( 'post_type' => 'page','ignore_sticky_posts' => 1 , 'post__in' => array($business_store_page) );
				$business_store_result = new WP_Query($business_store_args);
				while ( $business_store_result->have_posts() ) :
					$business_store_result->the_post();
					the_content();
				endwhile; // End of the loop.
				wp_reset_postdata(); 
		   }
		  ?>
		  </div> 
	 </div>	  
		<div class="row text-center">
		<?php if($business_store_option['hero_section_url']!=''): ?>
		<a class="more-btn" href="<?php echo esc_url( $business_store_option['hero_section_url'] ); ?>"><?php echo esc_html($business_store_option['hero_section_button_text']); ?></a>
		<?php endif; ?>	
		</div>	 	  
    </div>
</div>
</section> 
<!-- #svc-home-skill -->

