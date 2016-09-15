<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cinematography
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar">
    <div class="nav-slides">
       
            <a href="#" class="slide-item" data-goto="2" >
                <div class="slide-description">
                    <strong>Weddings</strong> <small>Cinematography.</small> 
                </div>
                <p class="slide-bg" style="background-image:url(<?php echo get_template_directory_uri();  ?>/img/bg-page1-thumb.jpg);"></p>
            </a>
            <a href="#" class="slide-item" data-goto="3">
                <div class="slide-description">
                    <strong>Corporate</strong> <small> & Comercial.</small> 
                </div>
                <p class="slide-bg" style="background-image:url(<?php echo get_template_directory_uri();  ?>/img/bg-page3-thumb.jpg);"></p>
            </a>
             <a href="#" class="slide-item" data-goto="4">
                <div class="slide-description">
                    <strong>Real Estate</strong> <small> & Tourism.</small> 
                </div>
                <p class="slide-bg" style="background-image:url(<?php echo get_template_directory_uri();  ?>/img/bg-page2-thumb.jpg);"></p>
            </a>
             <a href="#" class="slide-item" data-goto="5">
                <div class="slide-description">
                    <strong>Local Production</strong> <small> Services.</small> 
                </div>
                <p class="slide-bg" style="background-image:url(<?php echo get_template_directory_uri();  ?>/img/bg-page3-thumb.jpg);"></p>
            </a>
            

    </div>
    <div class="menu-container">
        <a href="#" class="toggle"><i class="fa fa-bars"></i></a>
        <a href="#" class="terms">Terms & conditions</a>
        <a href="https://www.avotz.com" class="avotz" title="Developed for Avotz Webworks" target="_blank"><i class="icon-avotz"></i></a>
        <nav class="menu">
            <ul>
                <li class="current"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home"><i class="fa fa-home"></i> </a> </li>
                <li> <a href="#" data-goto="1" data-gotoslide="1" title="About Us"><i class="fa fa-user" ></i></a></li>
                <li> <a href="#" class="contact-link" title="Contact Us"><i class="fa fa-phone" ></i></a></li>
            </ul>
        </nav>
    </div>
    
    <div class="contact-us">
        <a href="#" class="close"><i class="fa fa-times"></i></a>
        <div class="contact-us-content">
          
                <?php get_template_part( 'template-parts/float', 'contact' ); ?>
                
            
        </div>
    </div>

    <div class="terms-conditions">
        <a href="#" class="close"><i class="fa fa-times"></i></a>
        <div class="terms-conditions-content">
          
                <h4>Terms and conditions</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores, quam sint at libero, sit quisquam incidunt.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores, quam sint at libero, sit quisquam incidunt, quo quae odit earum impedit aperiam suscipit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque </li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores, quam sint at libero, sit quisquam incidunt,</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores, quam sint at libero, sit quisquam incidunt, quo quae odit earum impedit aperiam suscipit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores, quam sint at libero, sit quisquam incidunt, quo quae odit earum impedit aperiam suscipit. </li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat atque mollitia ab animi enim nisi dolores, quam sint at libero, sit quisquam incidunt, quo quae odit earum impedit aperiam suscipit.</li>

                </ul>
                
            
        </div>
    </div>



</aside>
