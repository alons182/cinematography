<?php
/**
 * The template for displaying Category products
 *
 * 
 *
 * @package cinematography
 */

get_header(); ?>

<div class="section section-page" >
	
	       <?php  $term = get_query_var( 'term' );
            $category_slug = $term; ?>
       
			 <div class="slide-banner">
                <video data-autoplay loop id="video-page-<?php echo $key + 1 ; ?>">
                    <source src="<?php echo get_template_directory_uri();  ?>/img/<?php echo $category_slug ?>.mp4" type="video/mp4" />                    
                </video>
            </div>
            <?php 

           

             include( locate_template( 'template-parts/films.php', false, false ) ); ?>
            
            <div class="contact">

                Want us to create your film? <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn contact-link">Contact Us</a>

            </div>
           
       

</div>




<?php get_footer(); ?>
