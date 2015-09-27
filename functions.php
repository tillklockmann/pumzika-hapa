<?php 
function test_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'test_scripts' );

/**
 * Register Widget Area.
 *
 */
function till_widgets_init() {
 
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget-box">',
		'after_widget' => '</div>',
		'before_title' => '<h5 class="sidebar-title">',
		'after_title' => '</h5>',
	) );
}
add_action( 'widgets_init', 'till_widgets_init' );
