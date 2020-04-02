<?php 	

business_store_testimonial();
function business_store_testimonial(){

global $business_store_option;	
if ( class_exists( 'WP_Customize_Control' ) ) {
   $business_store_default_settings = new business_store_settings();
   $business_store_option = wp_parse_args(  get_option( 'business_store_option', array() ) , $business_store_default_settings->default_data());  
}

$class = '';
if($business_store_option['testimonial_section_image']!=''){
	$class = 'sectionoverlay';
}

?>
<section id="testimonilas" style="background:url('<?php echo esc_url( $business_store_option['testimonial_section_image'] ); ?>') fixed center  <?php echo esc_attr( $business_store_option['testimonial_section_image_repeat'] ); ?> <?php echo esc_attr( $business_store_option['testimonial_section_background_color'] ); ?>;">
<div class="svc-section-body section-padding  <?php echo esc_attr( $class );?>" >  
  <div class="container">
  
  <div class="row">
	  <?php if($business_store_option['testimonial_section_title']!=''): ?>  
	  <h1 class="section-title wow animated fadeInUp"><?php echo esc_html( $business_store_option['testimonial_section_title'] ); ?></h1>
	  <?php endif; ?>
	  <?php if($business_store_option['testimonial_section_description'] !='' ): ?>
	  <p class="section-desc wow animated fadeInUp"><?php echo esc_html( $business_store_option['testimonial_section_description'] ); ?></p>
	  <?php endif; ?>
  </div>

  <div class="row">
	<?php if($business_store_option['testimonial_page'] !=='' ): ?>
	  <?php
		$my_page = absint($business_store_option['testimonial_page']);
		$args = array( 'post_type' => 'page','ignore_sticky_posts' => 1 , 'post__in' => array($my_page));
		$result = new WP_Query($args);
		while ( $result->have_posts() ) :
			$result->the_post();
			the_content();
		endwhile;
		wp_reset_postdata();
	  ?>
	 <?php endif; ?>  
  </div>

  </div> <!--container-->
 </div> 
</section>

<?php
}