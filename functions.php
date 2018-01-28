<?php

if ( ! function_exists( 'droptical_setup' ) ) :
function droptical_setup() {

	// Register menus
	register_nav_menus( array(
	'header-nav' => 'Header Menu',
	) );

	
		add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
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
?>