<?php
business_store_bestselling();
function business_store_bestselling(){
// $business_store_option array declared in functions.php
global $business_store_option;
if ( class_exists( 'WP_Customize_Control' ) ) {
   $business_store_default_settings = new business_store_settings();
   $business_store_option = wp_parse_args(  get_option( 'business_store_option', array() ) , $business_store_default_settings->default_data());  
}

?>
<section id="bestselling-products" style="background:<?php echo esc_attr( $business_store_option['bestselling_product_bgcolor'] ); ?>;">
<div class="svc-section-body section-padding" > 
	<div class="container">
		
		<div class="row">
			<?php if($business_store_option['bestselling_product_title']!=''): ?>
			<h1 class="section-title wow animated fadeInUp"><?php echo esc_html( $business_store_option['bestselling_product_title'] ); ?></h1>
			<?php endif; ?>
			<?php if($business_store_option['bestselling_product_description']!=''): ?>
			<p class="section-desc wow animated fadeInUp"><?php echo esc_html( $business_store_option['bestselling_product_description'] ); ?></p>
			<?php endif; ?>
		</div>
		
		<div>
			<?php 
			$product_args = business_store_get_product_args($business_store_option['bestselling_product_no_of_show'], 'best-selling', 'IN', 'DESC');
			business_store_list_products($product_args , 'col-sm-2 col-md-2 col-lg-2');			
			?>
		</div>			
	</div>
	
  </div>
</section>

<?php
}