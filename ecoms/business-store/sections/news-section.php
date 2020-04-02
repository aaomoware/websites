<?php
// $business_store_option array declared in functions.php

business_store_news();
function business_store_news(){
global $business_store_option;
if ( class_exists( 'WP_Customize_Control' ) ) {
   $business_store_default_settings = new business_store_settings();
   $business_store_option = wp_parse_args(  get_option( 'business_store_option', array() ) , $business_store_default_settings->default_data());  
}

$class = '';
if($business_store_option['news_section_image']!=''){
	$class = 'sectionoverlay';
}

$business_store_content = 'col-sm-8 col-lg-8';
$business_store_sidebar = '';
$business_store_news_sidebar = 'col-sm-6 col-md-6 col-xs-12';
if ( ! is_active_sidebar( 'home-blog-1' ) ) {
	$business_store_content = 'col-sm-12 col-lg-12';
	$business_store_sidebar = 'hide-content';
	$business_store_news_sidebar = 'col-sm-4 col-md-4 col-xs-12';	
}

?>  
	<section id="news" style="background:url('<?php echo esc_url( $business_store_option['news_section_image'] ); ?>') fixed center <?php echo esc_attr( $business_store_option['news_section_image_repeat'] ); ?> <?php echo esc_attr( $business_store_option['news_section_background_color'] ); ?>;">
		<div class="svc-section-body section-padding  <?php echo esc_attr( $class );?>" > 
			<div class="container">
			
				<div class="row">
					<?php if($business_store_option['news_section_title']!=''): ?>
					<h1 class="section-title wow animated fadeInUp"><?php echo esc_html( $business_store_option['news_section_title'] ); ?></h1>
					<?php endif; ?>
					<?php if($business_store_option['news_section_description']!=''): ?>
					<p class="section-desc wow animated fadeInUp"><?php echo esc_html( $business_store_option['news_section_description'] ); ?></p>
					<?php endif; ?>
				</div>
				
				<div class="row">
				<div class="<?php echo $business_store_content; ?>   multi-columns-row">
					<?php 
					$business_store_cat_id = $business_store_option['news_category_show'];
					$news_no_of_show = $business_store_option['news_no_of_show'];
					
					$args = array( 'post_type' => 'post','ignore_sticky_posts' => 1 , 'posts_per_page' => absint( $news_no_of_show ) );
					
					if( $business_store_option['news_category_show'] != "" ) {
						$args['cat'] = $business_store_cat_id;
					}
					
					$news_query = new WP_Query($args);
					while($news_query->have_posts() ) : $news_query->the_post();
					?>
					<div class="<?php echo $business_store_news_sidebar; ?>">
						<div class="featured-news">
							<?php if( has_post_thumbnail() ): ?>
						    <div class="image-area">
								<a href="<?php the_permalink(); ?>">
									<?php 
									$thumb_id = get_post_thumbnail_id(get_the_ID());
									the_post_thumbnail('full'); 
									?>
								</a>							
							</div>
							<?php endif; ?>
							
							<div class="news-featured">
								<h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<span><?php echo esc_attr(  get_the_date( get_option('date_format') ) ); ?></span>
								<p>
								<?php
								$business_store_more = '...<p><a class="more-link" href="'. esc_url( get_the_permalink() ).'">'.esc_html__('Read More','business-store').'</a></p>';
								echo apply_filters( 'the_content', wp_trim_words( get_the_content(), 14, $business_store_more ) ); ?>
								</p>
							</div>
						</div>
					</div>
				
					<?php 
					endwhile;					
					wp_reset_postdata();
					?>
				</div> <!--end of news column-->
				
				<div class="col-sm-4  col-xs-12  <?php echo $business_store_sidebar; ?>">
					<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Home Blog', 'business-store' ); ?>">
						<?php 
						if (is_active_sidebar('home-blog-1') ) {
							dynamic_sidebar( 'home-blog-1' );					
						} 
						?>
					</aside><!-- #secondary -->					
				</div> <!--end of sidebar column-->
				
			</div>	
		</div>
	</div>
</section><!-- #svc-home-news -->

<?php
}