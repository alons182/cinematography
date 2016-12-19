<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cinematography
 */

get_header(); ?>
<div class="section section-page" >

		
        	<?php
			while ( have_posts() ) : the_post();

				 if ( get_post_type( $post ) == 'film' ) {
					 get_template_part( 'template-parts/content', 'film' ); 
				
				 }else {
				   get_template_part( 'template-parts/content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					get_sidebar();
				 }

			endwhile; // End of the loop.
			?>
			
            

</div>
<?php
/*get_sidebar();*/
get_footer();
