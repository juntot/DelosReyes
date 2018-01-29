<?php

if ( ! function_exists( 'droptical_setup' ) ) :
function droptical_setup() {

	// Register menus
	register_nav_menus( array(
	'header-nav' => 'Header Menu',
	) );

	//post formats 
		add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
	
	//LOGO
		add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );
	
}
endif; // droptical_setup
add_action( 'after_setup_theme', 'droptical_setup' );

// load javascript
function droptical_scripts() {
	wp_enqueue_style( 'droptical', get_stylesheet_uri() );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
        wp_enqueue_script( 'comment-reply' );
    	}
}
	add_action( 'wp_enqueue_scripts', 'droptical_scripts' );
/*
	class My_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth) {
	$indent = str_repeat("\t", $depth);
	$output .= "\n$indent<ul class=\"dropdown\">\n";
	}
	}
	

*/


//add_theme_support( 'post-thumbnails', array( 'page' ) );


remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>