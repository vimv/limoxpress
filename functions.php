<?php

// Add scripts and styles to front-end
function limoxpress_scripts() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'limoexpress', get_template_directory_uri() . '/js/limoxpress.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'limoxpress_scripts' );

register_nav_menus( array(
	'main_nav' 		=> 'Main Navigation',
	'footer_menu' 	=> 'Footer Menu'
) );

add_theme_support( 'post-thumbnails' ); 

register_sidebar( array(
    'id'          => 'right-sidebar',
    'name'        => 'Right Page Sidebar',
    'description' => 'Right Sidebar of a normal page',
) );


register_sidebar( array(
    'id'          => 'footer-sidebar',
    'name'        => 'Footer Page Sidebar',
    'description' => 'Footer Sidebar',
) );


?>