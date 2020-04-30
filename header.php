<?php

/**

 * The template for displaying the header

 *

 * @package WordPress

 * @subpackage Dynasty3

 * @since Dynasty3 1.0

 */

?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">


<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','no entry');?>">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />

<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!--filter.....-->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/filter/css/style.css"> <!-- Resource style -->
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/filter/js/modernizr.js"></script> <!-- Modernizr -->

<!-- uikit  -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/uikit.css" type="text/css" />

<!--accordion.....-->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">

<!--slider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />

<?php wp_head(); ?>

</head>

<body>
	<div class="p" id="logo7">
    </div>
	<header> 
    		<div class="header-top">
            	<h2>Call Now! <strong><a href="tel:4698503805">469.850.3805</a></strong></h2>
            </div>
            <!--header-top ends......-->
            <div class="container">
            	<div class="logo-area" >
                	<a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo','no entry');?>" alt="<?php echo of_get_option('sitename','no entry');?>"></a>
                    <i class="fa fa-bars" aria-hidden="true"></i>	
                </div>
                <!--logo-area ends....-->
                
                <div class="menu-area">
                	<div class="logo-area2">
                        <a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo1','no entry');?>" alt="<?php echo of_get_option('sitename','no entry');?>"></a>
                        <i class="fa fa-bars" aria-hidden="true"></i>		
                    </div>
                    <!--logo-area for sticky menu ends....-->
                    
                    <?php
							  $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?>
                    
                	<ul>
                		<li>
                        	<a href="<?php bloginfo('url'); ?>#telephone" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">Business Telephone Systems</a>
                        </li>
                        <li>
                        	<a href="<?php bloginfo('url'); ?>#feature" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">Features</a>
                        </li>
                        
                        <li>
                        	<a href="<?php bloginfo('url'); ?>#plans" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">Plans</a>
                        </li>
                        
                        <li>
                        	<a href="<?php bloginfo('url'); ?>#phones" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">Phones</a>
                        </li>
                        
                        <li>
                        	<a href="<?php bloginfo('url'); ?>#virtual" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">Virtual Phone System</a>
                        </li>
                        <li>
                        	<a href="<?php bloginfo('url'); ?>#efax" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">EFAX Services</a>
                        </li>
                        <li>
                        	<a href="<?php bloginfo('url'); ?>#faq" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">FAQ</a>
                        </li>
                        <li>
                        	<a href="#" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">Support</a>
                        </li>
                        <li>
                        	<a href="<?php bloginfo('url'); ?>#contact" class="hvr-underline-from-center" data-uk-smooth-scroll="{offset:120}">Contact Us</a>
                        </li>
                	</ul>	
                </div>
                <!--menu-area ends.....-->
            </div>
            <!--container ends.....-->
    </header>
    <!--header ends......-->
    
