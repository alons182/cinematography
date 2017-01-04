<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cinematography
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="film">
		<?php if ( has_post_thumbnail() ) :

	            $id = get_post_thumbnail_id($post->ID);
	            $thumb_url = wp_get_attachment_image_src($id,'full', true);
	            ?>
	            
	          <div class="film-content-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
	                
	        <?php endif; ?>
	        <div class="film-container">
		
				<div class="film-content">
					

					<?php the_title( '<h1 class="film-title">', '</h1>' ); ?>
					
					<?php
						the_content();	
					?>
				</div><!-- .entry-content -->
				<div class="film-video">

					<?php echo rwmb_meta( 'rw_video') ?>
					<!-- <iframe src="https://player.vimeo.com/video/135850270" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

				</div>
			</div>
	</div>
	<div class="feedback">
	
		<h2 class="feedback-title">Testimonials</h2>	
		<div id="testimonials" class="owl-carousel">
			<?php $testimonials = rwmb_meta( 'rw_testimonials'); 
				foreach ($testimonials as $testimonial) { ?>
					<div class="feedback-item">
						<img src="<?php echo get_template_directory_uri();  ?>/img/left_quotation.png" alt="feedback" class="quote">
						
						
						<div class="feedback-item-text">
							<?php echo $testimonial ?>
						</div> 
						
					</div>
			<?php	
				}
			?>

		</div>
		<!--<div class="feedback-item">
			<img src="<?php echo get_template_directory_uri();  ?>/img/left_quotation.png" alt="feedback" class="quote">
			
			
			<div class="feedback-item-text">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet rutrum magna. Fusce quis blandit nisl. Proin ut imperdiet orci. Vivamus a urna eleifend, sagittis risus nec, hendrerit ligula. Fusce ornare mauris vel risus dictum maximus nec eu est. Phasellus neque dui, mollis vitae est ut, aliquam imperdiet turpis. Donec fermentum augue egestas risus tincidunt interdum. <b>Carlos</b>	
			</div> 
			
		</div>-->
	</div>
	<div class="more-films">
		  
		 <?php 
		  $categories = get_the_terms($post, 'film-category' );//get_the_category();
 		  $film_title = "Portfolio";
 		   
		if ( ! empty( $categories ) ) {

		    foreach ($categories as $category) {
		    	 $category_slug[] = $category->slug;
		    }
		   
		  

		}else{
			  $category_slug = '';	
			}
		  include( locate_template( 'template-parts/films.php', false, false ) ); ?>
	</div>
	<div class="contact">

		Want us to create your film? <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn contact-link">Contact Us</a>

	</div>
	

	
</article><!-- #post-## -->
