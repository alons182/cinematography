<?php
/*
    Template Name: Page Home
     */

get_header(); ?>

	<div class="section page-home" >
                
                
                <div class="section-bg">
                    <video autoplay loop>
                        <source src="<?php echo get_template_directory_uri();  ?>/img/home.mp4" type="video/mp4" />                    
                    </video>
                </div>
                <div class="slide slide-home" >
                     <div class="inner">
                        <article class="wow swing">
                        	 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-home" data-goto="1"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Logo" /></a>
                        	<h1 class="section-title"></h1>

                        	<?php rewind_posts(); ?>
	                        <?php query_posts( 'post_type=page&page_id=2' ); ?>
	                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	             					
		                            	<?php the_content(); ?>
		                           
	                
	                            <?php endwhile; ?>
	                            <!-- post navigation -->
	                          
	                        <?php endif; ?>
							<nav class="menu-home"> 
								<ul>
					                
					                <li> <a href="#" data-goto="1" data-gotoslide="1" title="About Us">About Us</a></li>
					                <li> <a href="#" data-goto="1" data-gotoslide="2" title="Social Responsability">Social Responsability</a></li>
					                <li> <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="contact-link" title="Contact Us">Contact Us</a></li>
					            </ul>
				            </nav>
                             <div class="scroller">
	                            <i class="fa fa-angle-down"></i>
	                            Scroll down to meet ours <b>Services</b>
	                        </div>
                            
                        </article>

                    </div>

                </div>
                <div class="slide slide-2" >
                     <div class="inner">
                        <article>
                            <?php rewind_posts(); ?>
	                        <?php query_posts( 'post_type=page&page_id=19' ); ?>
	                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	             						<h2><?php the_title(); ?></h2>
		                            	<?php the_content(); ?>
		                           
	                
	                            <?php endwhile; ?>
	                            <!-- post navigation -->
	                          
	                        <?php endif; ?>
                            
                        </article>
                    </div>
                </div>
                <div class="slide slide-3" >
                     <div class="inner">
                        <article>
                            <?php rewind_posts(); ?>
	                        <?php query_posts( 'post_type=page&page_id=26' ); ?>
	                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	             						<h2><?php the_title(); ?></h2>
		                            	<?php the_content(); ?>
		                           
	                
	                            <?php endwhile; ?>
	                            <!-- post navigation -->
	                          
	                        <?php endif; ?>
                            
                        </article>
                    </div>
                </div>

                
            </div>
            <div class="section page-1" >
                <a href="#" class="logo" data-goto="1"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="Logo" /></a>
                <div class="section-bg">
                    <video autoplay loop>
                        <source src="<?php echo get_template_directory_uri();  ?>/img/wedding.mp4" type="video/mp4" />                    
                    </video>
                </div>
                <div class="slide slide-home" >
                     <div class="inner">
                        <article class="wow swing">
                        	<?php rewind_posts(); ?>
	                        <?php query_posts( 'post_type=page&page_id=6' ); ?>
	                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             						<h2><?php the_title(); ?></h2>
	                            	<?php the_content(); ?>
		                          
	                
	                            <?php endwhile; ?>
	                            <!-- post navigation -->
	                          
	                        <?php endif; ?>
                            
                            
                        </article>

                    </div>

                </div>
                <div class="slide slide-2" >
                     <div class="inner">
                        <article>
                            <div class="slide-imageContainer">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p1.jpg" alt="" class="p1">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p2.jpg" alt="" class="p2">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p3.jpg" alt="" class="p3">
                            </div>
                            <div class="slide-box">
                                <h2> Asperiores aliquam</h2>
                                 <p><strong>Lorem ipsum</strong>  dolor sit amet, consectetur adipisicing elit. Placeat aut consequuntur architecto impedit autem, libero mollitia amet totam nobis quibusdam deleniti, dicta ipsam doloribus aliquam! Fuga voluptatibus culpa eveniet accusantium.</p>
                                
                            </div>
                            
                        </article>
                    </div>
                </div>
                 <div class="slide slide-3" >
                     <div class="inner">
                        <article>
                           <div class="slide-imageContainer">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p1.jpg" alt="" class="p1">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p2.jpg" alt="" class="p2">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p3.jpg" alt="" class="p3">
                            </div>
                            <div class="slide-box">
                                <h2> Asperiores aliquam</h2>
                                 <p><strong>Lorem ipsum</strong>  dolor sit amet, consectetur adipisicing elit. Placeat aut consequuntur architecto impedit autem, libero mollitia amet totam nobis quibusdam deleniti, dicta ipsam doloribus aliquam! Fuga voluptatibus culpa eveniet accusantium.</p>
                                
                            </div>
                            
                        </article>
                    </div>
                </div>
                 <div class="slide slide-4" >
                     <div class="inner">
                        <article>
                            <div class="slide-imageContainer">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p1.jpg" alt="" class="p1">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p2.jpg" alt="" class="p2">
                                <img src="<?php echo get_template_directory_uri();  ?>/img/p3.jpg" alt="" class="p3">
                            </div>
                            <div class="slide-box">
                                <h2> Asperiores aliquam</h2>
                                 <p><strong>Lorem ipsum</strong>  dolor sit amet, consectetur adipisicing elit. Placeat aut consequuntur architecto impedit autem, libero mollitia amet totam nobis quibusdam deleniti, dicta ipsam doloribus aliquam! Fuga voluptatibus culpa eveniet accusantium.</p>
                                
                            </div>
                        </article>
                    </div>
                </div>
               
               
            </div>
             <div class="section page-2" >
                <a href="#" class="logo" data-goto="1"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="Logo" /></a>
                <div class="section-bg">
                    <video autoplay loop>
                        <source src="<?php echo get_template_directory_uri();  ?>/img/residencial.mp4" type="video/mp4" />                    
                    </video>
                </div>
                <div class="slide slide-home" >
                     <div class="inner">
                        <article>
                            <?php rewind_posts(); ?>
	                        <?php query_posts( 'post_type=page&page_id=9' ); ?>
	                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             						<h2><?php the_title(); ?></h2>
	                            	<?php the_content(); ?>
		                          
	                
	                            <?php endwhile; ?>
	                            <!-- post navigation -->
	                          
	                        <?php endif; ?>
                            
                        </article>
                    </div>
                </div>
                <div class="slide slide-2" >
                     <div class="inner">
                        <article>
                            <h2> Asperiores aliquam</h2>

                             <p><strong>Lorem ipsum</strong>  dolor sit amet, consectetur adipisicing elit. Placeat aut consequuntur architecto impedit autem, libero mollitia amet totam nobis quibusdam deleniti, dicta ipsam doloribus aliquam! Fuga voluptatibus culpa eveniet accusantium.</p>
                            
                        </article>
                    </div>
                </div>
               
               
            </div>
             <div class="section page-3" >
                <a href="#" class="logo" data-goto="1"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="Logo" /></a>
                <div class="section-bg">
                     <video autoplay loop>
                        <source src="<?php echo get_template_directory_uri();  ?>/img/home.mp4" type="video/mp4" />                    
                    </video>
                </div>
                <div class="slide slide-home" >
                     <div class="inner">
                        <article>
                            <?php rewind_posts(); ?>
	                        <?php query_posts( 'post_type=page&page_id=11' ); ?>
	                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             						<h2><?php the_title(); ?></h2>
	                            	<?php the_content(); ?>
		                          
	                
	                            <?php endwhile; ?>
	                            <!-- post navigation -->
	                          
	                        <?php endif; ?>
                            
                        </article>
                    </div>
                </div>
                <div class="slide slide-2" >
                     <div class="inner">
                        <article>
                            <h2> Asperiores aliquam</h2>
                            <p><strong>Lorem ipsum</strong>  dolor sit amet, consectetur adipisicing elit. Placeat aut consequuntur architecto impedit autem, libero mollitia amet totam nobis quibusdam deleniti, dicta ipsam doloribus aliquam! Fuga voluptatibus culpa eveniet accusantium.</p>
                        </article>
                        
                    </div>
                </div>
               
               
            </div>
             <div class="section page-4" >
                <a href="#" class="logo" data-goto="1"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="Logo" /></a>
                <div class="section-bg">
                     <video autoplay loop>
                        <source src="<?php echo get_template_directory_uri();  ?>/img/home.mp4" type="video/mp4" />                    
                    </video>
                </div>
                <div class="slide slide-home" >
                     <div class="inner">
                        <article>
                            <?php rewind_posts(); ?>
	                        <?php query_posts( 'post_type=page&page_id=13' ); ?>
	                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             						<h2><?php the_title(); ?></h2>
	                            	<?php the_content(); ?>
		                          
	                
	                            <?php endwhile; ?>
	                            <!-- post navigation -->
	                          
	                        <?php endif; ?>
                            
                        </article>
                    </div>
                </div>
                <div class="slide slide-2" >
                     <div class="inner">
                        <article>
                            <h2> Asperiores aliquam</h2>
                            <p><strong>Lorem ipsum</strong>  dolor sit amet, consectetur adipisicing elit. Placeat aut consequuntur architecto impedit autem, libero mollitia amet totam nobis quibusdam deleniti, dicta ipsam doloribus aliquam! Fuga voluptatibus culpa eveniet accusantium.</p>
                        </article>
                        
                    </div>
                </div>
               
               
            </div>

	
<?php
get_footer();
