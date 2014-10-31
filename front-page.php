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

	if ( is_active_sidebar( 'slider' ) || is_active_sidebar( 'home-top-message' ) || is_active_sidebar( 'home-action' ) || is_active_sidebar( 'home-middle-1' ) || is_active_sidebar( 'home-middle-2' ) || is_active_sidebar( 'home-middle-3' ) || is_active_sidebar( 'home-signup' ) ||is_active_sidebar( 'pre-footer-1' ) || is_active_sidebar( 'pre-footer-2' ) ) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_after_header', 'malcolm_home_loop_helper_top' );
		add_action( 'genesis_after_header', 'malcolm_home_loop_helper_middle' );
		add_action( 'genesis_after_header', 'malcolm_home_loop_helper_signup' );
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
 * Display widget content for "home middle #1", "home middle #2" and "home middle #3" sections.
 *
 */
function malcolm_home_loop_helper_middle() {

	 if ( is_active_sidebar( 'home-middle-1' ) || is_active_sidebar( 'home-middle-2' ) || is_active_sidebar( 'home-middle-3' ) ) {

			echo '<div class="home-middle"><div class="wrap">';

			genesis_widget_area( 'home-middle-1', array(
				'before' => '<div class="home-middle-1 widget-area one-third first">',
				'after' => '</div>',
			) );

			genesis_widget_area( 'home-middle-2', array(
				'before' => '<div class="home-middle-2 widget-area one-third">',
				'after' => '</div>',
			) );

			genesis_widget_area( 'home-middle-3', array(
				'before' => '<div class="home-middle-3 widget-area one-third">',
				'after' => '</div>',
			) );

			echo '</div><!-- end .wrap --></div><!-- end .home-middle -->';

	}
}

/**
 * Display widget content for "home signup" section.
 *
 */
function malcolm_home_loop_helper_signup() {

		genesis_widget_area( 'home-signup', array(
			'before' => '<div class="home-signup"><div class="wrap">',
			'after' => '</div></div>',
		) );
}

/**
 * Display widget content for "pre footer # 1" and "pre footer #2" sections.
 *
 */
function malcolm_home_loop_helper_prefooter() {

	 if ( is_active_sidebar( 'pre-footer-1' ) || is_active_sidebar( 'pre-footer-2' ) ) {

			echo '<div class="pre-footer"><div class="wrap">';

			genesis_widget_area( 'pre-footer-1', array(
				'before' => '<div class="pre-footer-1 widget-area two-thirds first">',
				'after' => '</div>',
			) );

			genesis_widget_area( 'pre-footer-2', array(
				'before' => '<div class="pre-footer-2 widget-area one-third">',
				'after' => '</div>',
			) );

			echo '</div><!-- end .wrap --></div><!-- end .pre-footer -->';


	}
}


genesis();