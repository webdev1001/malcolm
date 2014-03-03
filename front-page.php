<?php
/**
 * This file adds the Front Page to the Malcolm Theme.
 *
 * @author WPCanada
 * @package Malcolm
 * @subpackage Customizations
 */

/*
Template Name: Front
*/

add_action( 'genesis_meta', 'malcolm_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function malcolm_home_genesis_meta() {

	if ( is_active_sidebar( 'slider' ) || is_active_sidebar( 'home-top-message' ) || is_active_sidebar( 'home-action' ) || is_active_sidebar( 'home-bottom-1' ) || is_active_sidebar( 'home-bottom-2' ) || is_active_sidebar( 'home-bottom-3' ) || is_active_sidebar( 'pre-footer-1' ) || is_active_sidebar( 'pre-footer-2' ) ) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_after_header', 'malcolm_home_loop_helper_top' );
		add_action( 'genesis_after_header', 'malcolm_home_loop_helper_bottom' );
		add_action( 'genesis_after_header', 'malcolm_home_loop_helper_prefooter' );
		add_filter( 'body_class', 'malcolm_body_class' );
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	}
}

/**
 * Add custom body class to front page
 *
 */
function malcolm_body_class( $classes ) {

	$classes[] = 'malcolm-frontpage';
	return $classes;
	
}

/**
 * Display widget content for "slider", "home top message"  and "home action" sections.
 *
 */
function malcolm_home_loop_helper_top() {

		genesis_widget_area( 'slider', array(
			'before' => '<div class="slider"><div class="wrap">',
			'after' => '</div></div>',
		) );

		genesis_widget_area( 'home-top-message', array(
			'before' => '<div class="home-top-message"><div class="wrap">',
			'after' => '</div></div>',
		) );

		genesis_widget_area( 'home-action', array(
			'before' => '<div class="home-action"><div class="wrap">',
			'after' => '</div></div>',
		) );
}

/**
 * Display widget content for "home bottom #1", "home bottom #2" and "home bottom #3" sections.
 *
 */
function malcolm_home_loop_helper_bottom() {

	 if ( is_active_sidebar( 'home-bottom-1' ) || is_active_sidebar( 'home-bottom-2' ) || is_active_sidebar( 'home-bottom-3' ) ) {

			echo '<div class="home-bottom"><div class="wrap">';

			genesis_widget_area( 'home-bottom-1', array(
				'before' => '<div class="home-bottom-1">',
				'after' => '</div>',
			) );

			genesis_widget_area( 'home-bottom-2', array(
				'before' => '<div class="home-bottom-2">',
				'after' => '</div>',
			) );

			genesis_widget_area( 'home-bottom-3', array(
				'before' => '<div class="home-bottom-3">',
				'after' => '</div>',
			) );

			echo '</div><!-- end .wrap --></div><!-- end .home-bottom -->';

	}
}

/**
 * Display widget content for "pre footer # 1" and "pre footer #2" sections.
 *
 */
function malcolm_home_loop_helper_prefooter() {

	 if ( is_active_sidebar( 'pre-footer-1' ) || is_active_sidebar( 'pre-footer-2' ) ) {

			echo '<div class="pre-footer"><div class="wrap">';

			genesis_widget_area( 'pre-footer-1', array(
				'before' => '<div class="pre-footer-1">',
				'after' => '</div>',
			) );

			genesis_widget_area( 'pre-footer-2', array(
				'before' => '<div class="pre-footer-2">',
				'after' => '</div>',
			) );

			echo '</div><!-- end .wrap --></div><!-- end .pre-footer -->';


	}
}


genesis();