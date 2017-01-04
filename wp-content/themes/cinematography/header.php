<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cinematography
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300|Lato:300,400' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<div class="inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="cinematography"  /></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo-small"><img src="<?php echo get_template_directory_uri();?>/img/logo-small.png" alt="cinematography" /></a>
                    
                    <?php wp_nav_menu( array(
		                     'theme_location' => 'primary',
		                     'menu_id' => 'primary-menu',
		                     'container'       => 'nav',
			                'container_class' => 'header-menu',
			                'container_id'    => '',
			                'menu_class'      => 'header-menu-ul',
		                      ) 
	                      ); 
	                      ?>
				 <button id="btn-menu" class="header-btn-menu">
		            <i class="fa fa-bars"></i>
		        </button>
	</div>
	<div class="header-social">
		<a href="#" class="header-social-item"><i class="fa fa-facebook"></i></a>
		<a href="#" class="header-social-item"><i class="fa fa-instagram"></i></a>
		<a href="#" class="header-social-item"><i class="fa fa-pinterest"></i></a>
		<a href="#" class="header-social-item"><i class="fa fa-vimeo"></i></a>
	</div>
	 
</header>
<div id="fullpage">



