<?php
/**
 * This file adds the Widget template to the Malcolm Theme.
 *
 * @author WPCanada
 * @package Malcolm
 * @subpackage Customizations
 */

/*
Template Name: Widget
*/

//* Add custom body class to widget page
add_filter( 'body_class', 'malcolm_wp_add_body_class' );
function malcolm_wp_add_body_class( $classes ) {
	$classes[] = 'malcolm-widget-page';
	return $classes;
}

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'malcolm_page_loop_helper' );
/**
 * Add widget support for this page.
 * If no widgets active, display the default loop.
 *
 */
function malcolm_page_loop_helper() {

	if ( is_active_sidebar( 'widget-page' ) ) {

		dynamic_sidebar( 'widget-page' );

	}
	else {
		genesis_standard_loop();
	}

}

genesis();