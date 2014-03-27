<?php

// Add scripts and styles to front-end
function limoxpress_scripts() {
	wp_enqueue_script( 'limoexpress', get_template_directory_uri() . '/js/limoxpress.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'limoxpress_scripts' );

// Hides Top Admin Bar
//add_filter( 'show_admin_bar', '__return_false' );

require_once('classes/wp_bootstrap_navwalker.php');

register_nav_menus( array(
	'main_nav' 		=> __('Main Navigation', 'Limo Express'),
	'footer_menu' 	=> 'Footer Menu'
) );

add_theme_support( 'post-thumbnails' ); 

register_sidebar( array(
    'id'          => 'home-right-sidebar',
    'name'        => 'Home Page Sidebar',
    'description' => 'Home Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
) );

register_sidebar( array(
    'id'          => 'post-sidebar',
    'name'        => 'Post Sidebar',
    'description' => 'Post Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
) );

register_sidebar( array(
    'id'          => 'page-sidebar',
    'name'        => 'Page Sidebar',
    'description' => 'Page Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
) );

register_sidebar( array(
    'id'          => 'footer-left-sidebar',
    'name'        => 'Footer Left Sidebar',
    'description' => 'Footer Left Sidebar',
) );

register_sidebar( array(
    'id'          => 'footer-middle-sidebar',
    'name'        => 'Footer Middle Sidebar',
    'description' => 'Footer Middle Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
) );

register_sidebar( array(
    'id'          => 'footer-right-sidebar',
    'name'        => 'Footer Right Sidebar',
    'description' => 'Footer Right Sidebar',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h5>',
    'after_title' => '</h5>'
) );

function excerpt_read_more_link($output) {
 global $post;
 return $output . ' ... <a href="'. get_permalink($post->ID) . '">READ MORE</a>';
}
//add_filter('the_excerpt', 'excerpt_read_more_link');
?>