<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cinematography
 */

get_header(); ?>
<div class="page-normal" >
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" ><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="Logo" /></a>
	<div class="inner">
       

        	<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
            
       

    </div>
</div>

	
<?php
/*get_sidebar();*/
get_footer();
