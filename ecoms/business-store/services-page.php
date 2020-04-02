<?php
/**
 * Template Name:Services-Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package business-store
 * @since 1.0

 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();
            ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php
							the_content();

						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

            <?php
			endwhile; // End of the loop.
			?>
			</div><!-- .container -->
			<?php
			//get options
			global $business_store_option;
			if ( class_exists( 'WP_Customize_Control' ) ) {
			   $business_store_default_settings = new business_store_settings();
			   $business_store_option = wp_parse_args(  get_option( 'business_store_option', array() ) , $business_store_default_settings->default_data());  
			} 
			//get featured areas
			if(($business_store_option['service_featured_area_1'])!='none'){
				business_store_featured_area($business_store_option['service_featured_area_1']);
			}
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();