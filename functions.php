<?php

// Add scripts and styles to front-end
function limoxpress_scripts() {
	wp_enqueue_script( 'limoexpress', get_template_directory_uri() . '/js/limoxpress.js', array('jquery'), false, true );
}
add_action( 'wp_enqueue_scripts', 'limoxpress_scripts' );

// Hides Top Admin Bar
//add_filter( 'show_admin_bar', '__return_false' );

register_nav_menus( array(
	'main_nav' 		=> 'Main Navigation',
	'footer_menu' 	=> 'Footer Menu'
) );

add_theme_support( 'post-thumbnails' ); 

register_sidebar( array(
    'id'          => 'right-sidebar',
    'name'        => 'Right Page Sidebar',
    'description' => 'Right Sidebar of a normal page',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
) );


register_sidebar( array(
    'id'          => 'footer-sidebar',
    'name'        => 'Footer Page Sidebar',
    'description' => 'Footer Sidebar',
) );

function excerpt_read_more_link($output) {
 global $post;
 return $output . ' ... <a href="'. get_permalink($post->ID) . '">READ MORE</a>';
}
//add_filter('the_excerpt', 'excerpt_read_more_link');



?>