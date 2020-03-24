<?php

function theme_name_scripts() {
	//Bootstrap css
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.1.0', 'all' );
	
	//font-awesome
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/fonts/font-awesome/css/font-awesome.css', array(), '3.1.0', 'all' );
	//Owl Carousel 
	wp_register_style( 'owl-carousel', get_template_directory_uri() . '/js-plugins/owl/owl.carousel.css', array(), '3.1.0', 'all' );
	wp_register_style( 'owl-theme', get_template_directory_uri() . '/js-plugins/owl/owl.theme.css', array(), '3.1.0', 'all' );
	
	//Theme CSS 
	wp_register_style( 'main-theme', get_template_directory_uri() . '/css/style.css', array(), '3.1.0', 'all' );
	wp_register_style( 'theme-elements', get_template_directory_uri() . '/css/style-elements.css', array(), '3.1.0', 'all' );
	
	//Responsive CSS
	wp_register_style( 'theme-responsive', get_template_directory_uri() . '/css/theme-responsive.css', array(), '3.1.0', 'all' );
	
	//Custom CSS. You can add your custom css here
	wp_register_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '3.1.0', 'all' );
	
	//Full screen main slider
	wp_register_style( 'main-slider', get_template_directory_uri() . '/js-plugins/fullscreenslider/css/main-slider.css', array(), '3.1.0', 'all' );
	wp_register_style( 'main-slider-custom', get_template_directory_uri() . '/js-plugins/fullscreenslider/css/main-slider-custom.css', array(), '3.1.0', 'all' );

	
	//enqueue all css start
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('font-awesome');
	wp_enqueue_style('owl-carousel');
	wp_enqueue_style('owl-theme');
	wp_enqueue_style('main-theme');
	wp_enqueue_style('theme-elements');
	wp_enqueue_style('theme-responsive');
	wp_enqueue_style('main-slider');
	wp_enqueue_style('main-slider-custom');
	wp_enqueue_style('custom');
	//enqueue all css end	
	
	

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '1.0.0', false );	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true );	
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '1.0.0', true );	
	wp_enqueue_script( 'scrollup', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array(), '1.0.0', true );	
	wp_enqueue_script( 'scrollto', get_template_directory_uri() . '/js/jquery.scrollTo.min.js', array(), '1.0.0', true );	
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js-plugins/owl/owl.carousel.min.js', array(), '1.0.0', true );	
	wp_enqueue_script( 'main-slider-js1', get_template_directory_uri() . '/js-plugins/fullscreenslider/js/jquery.ba-cond.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'main-slider-js2', get_template_directory_uri() . '/js-plugins/fullscreenslider/js/jquery.slitslider.js', array(), '1.0.0', true );		
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0.0', true );		
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );	
	
	
	wp_enqueue_script('jquery');
	

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


?>