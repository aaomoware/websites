<?php
// $business_store_option array declared in functions.php
global $business_store_option;	
if ( class_exists( 'WP_Customize_Control' ) ) {
   $business_store_default_settings = new business_store_settings();
   $business_store_option = wp_parse_args(get_option( 'business_store_option', array() ) , $business_store_default_settings->default_data());  
}
?>

<section id="contact" style="background:<?php echo esc_attr( $business_store_option['contact_section_background_color'] ); ?>;" >
  <div class="svc-section-body section-padding">
    <div class="container">

	<div class="row">
		<?php if($business_store_option['contact_section_title']!=''): ?>		
		<h1 class="section-title wow animated fadeInUp"><?php echo esc_html( $business_store_option['contact_section_title'] ); ?></h1>
		<?php endif; ?>      
		<?php if($business_store_option['contact_section_description']!=''): ?>
		<p class="section-desc wow animated fadeInUp"><?php echo esc_html( $business_store_option['contact_section_description'] ); ?></p>
		<?php endif; ?>
	</div>
	  
      <div class="row">
	  		
       <div class="col-md-12 col-lg-12">
		<?php if( $business_store_option['contact_section_shortcode'] != '' ): ?>
		 <div class="contact-list-form"> 		 
          <?php	echo do_shortcode( $business_store_option['contact_section_shortcode'] );?>
		 </div>
		 <?php endif; ?>
       </div>
		 		
	   </div>
	   				
	</div>	 
  </div>  
 
</section>
<!-- #svc-home-contact -->

