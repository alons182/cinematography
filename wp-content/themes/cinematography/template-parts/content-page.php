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
	</div>
	
	<div class="contact">

		Want us to create your film? <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn contact-link">Contact Us</a>

	</div>
	

	
</article><!-- #post-## -->