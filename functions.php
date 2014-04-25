<?php

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'test-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'test-theme' ),
		'id'            => 'footer-1',
		'description'   => 'First footer section.',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'test-theme' ),
		'id'            => 'footer-2',
		'description'   => 'Second footer section.',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'test-theme' ),
		'id'            => 'footer-3',
		'description'   => 'Third footer section.',
	) );


}
add_action( 'widgets_init', 'theme_widgets_init' );

?>