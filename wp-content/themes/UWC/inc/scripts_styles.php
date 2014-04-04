	<?php

//Making jQuery Google API
add_action('init', 'modify_jquery');
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        // wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.10.1', true);
        wp_register_script( 'jquery' , get_stylesheet_directory_uri() . '/js/jquery-1.10.1.min.js', '' , '1.10.2', true );
        wp_enqueue_script('jquery');
    }
}

/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 * This will enqueue stylesheets and scripts to be used on various templates for the hs Theme.
 */
add_action( 'wp_enqueue_scripts', 'add_uwc_stylesheets' );

function add_uwc_stylesheets(){

	if(!is_admin()){
		wp_register_style( 'open-sans-font' , '//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' , '' , array() , $media = 'all' );
		wp_register_style( 'flexslider-css' , get_stylesheet_directory_uri() . '/css/flexslider.css' , '' , array() , $media = 'all' );
		wp_register_style( 'font-awesome-css' , get_stylesheet_directory_uri() . '/css/font-awesome.min.css' , '' , array() , $media = 'all' );
		wp_register_style( 'animate-css' , get_stylesheet_directory_uri() . '/css/animate.css' , '' , array() , $media = 'all' );
		wp_register_style( 'bootstrap-css' , get_stylesheet_directory_uri() . '/css/bootstrap.min.css' , '' , array() , $media = 'all' );
		wp_register_style( 'main-css' , get_stylesheet_directory_uri() . '/style.css' , '' , array() , $media = 'all' );
		wp_register_style( 'custom-css' , get_stylesheet_directory_uri() . '/css/custom-styles.css' , '' , array() , $media = 'all' );

		wp_enqueue_style( 'open-sans-font' );
		wp_enqueue_style( 'flexslider-css' );
		wp_enqueue_style( 'font-awesome-css' );
		wp_enqueue_style( 'animate-css' );
		wp_enqueue_style( 'bootstrap-css' );
		wp_enqueue_style( 'main-css' );
		wp_enqueue_style( 'custom-css' );

		if(is_singular('services') || is_singular('facilities_amenities')){
			wp_register_style( 'colorbox-css' , get_stylesheet_directory_uri() . '/css/colorbox.css' , '' , array() , $media = 'all' );
			wp_enqueue_style( 'colorbox-css' );
		}
	}

}

add_action( 'wp_enqueue_scripts', 'add_uwc_scripts' );

function add_uwc_scripts(){

	if(!is_admin()){
		wp_register_script( 'modernizr-js' , get_stylesheet_directory_uri() . '/js/modernizr-2.6.2-respond-1.1.0.min.js','', '', false );
		wp_register_script( 'bootstrap-js' , get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' )  , '', true );
		wp_register_script( 'flexslider-min-js' , get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array( 'jquery' )  , '', true );
		wp_register_script( 'main-js' , get_stylesheet_directory_uri() . '/js/main.js', array( 'jquery' )  , '', true );
		wp_register_script( 'front-js' , get_stylesheet_directory_uri() . '/js/front.js', array( 'jquery' )  , '', true );

		wp_enqueue_script( 'modernizr-js' );
		wp_enqueue_script( 'bootstrap-js' );
		wp_enqueue_script( 'flexslider-min-js' );
		wp_enqueue_script( 'main-js' );

		if(is_singular('services') || is_singular('facilities_amenities')){
			wp_register_script( 'colorbox-js' , get_stylesheet_directory_uri() . '/js/jquery.colorbox.js', array( 'jquery' ),'',true);
			wp_register_script( 'photosetgrid-js' , get_stylesheet_directory_uri() . '/js/jquery.photoset-grid.js', array( 'jquery' ),'',true);
			wp_enqueue_script( 'colorbox-js' );
			wp_enqueue_script( 'photosetgrid-js' );
		}
	}

	if(is_front_page()){
		wp_register_script( 'front-js' , get_stylesheet_directory_uri() . '/js/front.js', array( 'jquery' )  , '', true );
		wp_enqueue_script( 'front-js' );
	}

}

add_action('wp_enqueue_script','remove_scripts_styles');

function remove_scripts_styles(){
	if(is_login_page()){
		wp_dequeue_style( 'flexslider-css' );
		wp_dequeue_style( 'font-awesome-css' );
		wp_dequeue_style( 'animate-css' );
		wp_dequeue_style( 'bootstrap-css' );
		wp_dequeue_style( 'main-css' );
		wp_dequeue_style( 'custom-css' );
		wp_dequeue_script( 'bootstrap-js' );
		wp_dequeue_script( 'flexslider-min-js' );
		wp_dequeue_script( 'main-js' );
	}
}

