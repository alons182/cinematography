<?php
/*
    Template Name: Page Home
     */

get_header(); ?>

	<div class="section section-page section-page-home" >
        <div class="section-bg">
            <video autoplay loop>
                <source src="<?php echo get_template_directory_uri();  ?>/img/home.mp4" type="video/mp4" />                    
            </video>
        </div>          
        <div class="slide slide-home" >
             <div class="slide-container">
                <article class="wow swing">
                	 
                	<div class="slide-title">
                     <?php rewind_posts(); ?>
                    <?php query_posts( 'post_type=page&page_id=2' ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            
                                <?php the_content(); ?>
                           
            
                        <?php endwhile; ?>
                        <!-- post navigation -->
                      
                    <?php endif; ?>

                    </div>

                	
					<!--<nav class="menu-home"> 
						<ul>
			                
			                <li> <a href="#" data-goto="1" data-gotoslide="1" title="About Us">About Us</a></li>
			                <li> <a href="#" data-goto="1" data-gotoslide="2" title="Social Responsability">Social Responsability</a></li>
			                <li> <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="contact-link" title="Contact Us">Contact Us</a></li>
			            </ul>
		            </nav>-->
                     <div class="scroller">
                        <i class="fa fa-angle-down"></i>
                        Scroll down to meet ours <b>Services</b>
                    </div>
                    
                </article>

            </div>

        </div>
        <div class="slide slide-detail" >
                <article class="film">
                    <?php rewind_posts(); ?>
                    <?php query_posts( 'post_type=page&page_id=19' ); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                
                         <div class="film">
                            <?php if ( has_post_thumbnail() ) :

                                    $id = get_post_thumbnail_id($post->ID);
                                    $thumb_url = wp_get_attachment_image_src($id,'full', true);
                                    ?>
                                    
                                  <div class="film-content-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
                                        
                                <?php endif; ?>
                                <div class="film-container">
                            
                                    <div class="film-content">
                                         <h2 class="film-title"><?php the_title(); ?></h2>
                                         <?php the_content(); ?>
                           
                                      
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

                               
            
                        <?php endwhile; ?>
                        
                      
                    <?php endif; ?>
                </article>
                
               
             
        </div>
                        
    </div>
            
   <?php $categories = get_terms( array(
            'taxonomy' => 'film-category',
            'hide_empty' => false
            
        ) );
  
     foreach ($categories as $key => $category) { ?>
        
        <div class="section section-page page-<?php echo $key + 1 ; ?>" >
           
            <div class="section-bg">
                <video autoplay loop>
                    <source src="<?php echo get_template_directory_uri();  ?>/img/<?php echo $category->slug ?>.mp4" type="video/mp4" />                    
                </video>
            </div>
            <div class="slide slide-home" >
                 <div class="inner">
                    <article class="wow swing">
                       
                    </article>
                   

                </div>
                 <div class="slide-bottom">
                    <div class="slide-bottom-text">
                        <?php echo $category->name; ?>
                    </div>
                </div>

            </div>
       
            <div class="slide slide-detail" >
                  
                <div class="slide-banner">
                    <video data-autoplay loop id="video-page-<?php echo $key + 1 ; ?>">
                         <source src="<?php echo get_template_directory_uri();  ?>/img/<?php echo $category->slug ?>.mp4" type="video/mp4" />                    
                    </video>
                </div>
                <?php 
                  $category_slug = $category->slug;
                 include( locate_template( 'template-parts/films.php', false, false ) ); ?>
                
                <div class="contact">

                    Want us to create your film? <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn contact-link">Contact Us</a>

                </div>
               


                 

            </div>
             
           
           
        </div>


    <?php   
    }
    ?>
            
             

	
<?php
get_footer();
