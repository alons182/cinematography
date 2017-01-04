<div class="films">
     <h2 class="films-title"><?php echo isset($film_title) ? $film_title : "Portfolio" ?> </h2>
      <div class="films-container owl-carousel owl-theme" >
          <?php
            $args = array(
              'post_type' => 'film',
             'tax_query' => array(
                array(
                  'taxonomy' => 'film-category',
                  'field' => 'slug',
                  'terms' => $category_slug
                )
              )
              
            );
            $films = new WP_Query( $args );
            if( $films->have_posts() ) {
              while( $films->have_posts() ) {
                 $films->the_post();
                ?>
                  <div class="films-item">
                      <?php if ( has_post_thumbnail() ) :

                          $id = get_post_thumbnail_id($post->ID);
                          $thumb_url = wp_get_attachment_image_src($id,'film-thumb', true);
                          ?>
                          
                        <div class="films-item-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"><a href="<?php the_permalink(); ?>" class="films-item-link"></a></div>
                              
                      <?php endif; ?>
                      <div class="films-item-title">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt() ?>
                      </div>
                  </div>
                   
               
                  
                <?php
              }
            }
          ?>
        
      </div>
  </div>