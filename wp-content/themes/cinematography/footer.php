<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cinematography
 */

?>



</div><!-- #page -->
 <div class="contact-us">
        <a href="#" class="close"><i class="fa fa-times"></i></a>
        <div class="contact-us-content">
          
                <?php get_template_part( 'template-parts/float', 'contact' ); ?>
                
            
        </div>
    </div>
<?php 
//get_sidebar('menu');
wp_footer(); 
?>

</body>
</html>
