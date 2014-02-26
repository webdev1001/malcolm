<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'malcolm', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/lib/languages', 'malcolm' ) );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( 'Malcolm Theme', 'malcolm' ) );
define( 'CHILD_THEME_URL', 'http://wpcanada.ca/our-themes/malcolm' );
define( 'CHILD_THEME_VERSION', '1.0.0' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue Google fonts
add_action( 'wp_enqueue_scripts', 'malcolm_google_fonts' );
function malcolm_google_fonts() {
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,700', array(), CHILD_THEME_VERSION );
}

//* Enqueue the Dashicons script
add_action( 'wp_enqueue_scripts', 'malcolm_enqueue_dashicons' );
function malcolm_enqueue_dashicons() {
	wp_enqueue_style( 'malcolm-dashicons-style', get_stylesheet_directory_uri(), array('dashicons'), '1.0' );
}

//* Register responsive menu script
add_action( 'wp_enqueue_scripts', 'malcolm_enqueue_scripts' );
/**
 * Enqueue responsive javascript
 * @author Ozzy Rodriguez
 * @todo Change 'prefix' to your theme's prefix
 */
function malcolm_enqueue_scripts() {

	wp_enqueue_script( 'malcolm-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true ); // Change 'prefix' to your theme's prefix

}

//* Add new image sizes
add_image_size( 'featured-page', 340, 160, TRUE );
add_image_size( 'featured-post', 100, 100, TRUE );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Reposition the primary navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_before_header', 'genesis_do_nav' );

//* Add custom body class to home page
add_filter( 'body_class', 'malcolm_hp_add_body_class' );
function malcolm_hp_add_body_class( $classes ) {
	if ( is_home())
	$classes[] = 'malcolm';
	return $classes;
}

//* Add before post block section to single post page
add_action( 'genesis_before_entry', 'malcolm_before_post_block'  ); 
function malcolm_before_post_block() {

    if ( ! is_singular( 'post' ) )
    	return;

    genesis_widget_area( 'before-post-block', array(
		'before' => '<div class="before-post-block widget-area"><div class="wrap">',
		'after'  => '</div></div>',
    ) );

}

//* Add after post block section to single post page
add_action( 'genesis_entry_footer', 'malcolm_after_post_block'  ); 
function malcolm_after_post_block() {

    if ( ! is_singular( 'post' ) )
    	return;

    genesis_widget_area( 'after-post-block', array(
		'before' => '<div class="after-post-block widget-area"><div class="wrap">',
		'after'  => '</div></div>',
    ) );

}

//* Reposition the breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );

//* Add wrapper to breadcrumbs
add_filter( 'genesis_breadcrumb_args', 'malcolm_breadcrumb_args' );
function malcolm_breadcrumb_args( $args ) {
	$args['prefix'] = '<div class="breadcrumbwrapper"><div class="breadcrumb">';
	$args['suffix'] = '</div></div>';
	$args['sep'] = ' &raquo; ';
    return $args;
}

//* Add single post navigation
add_action( 'genesis_before_comments', 'genesis_prev_next_post_nav' );

//* Customize the post info function
add_filter( 'genesis_post_info', 'post_info_filter' );
function post_info_filter( $post_info ) {
if ( !is_page() ) {
	$post_info = '[post_date] [post_author_link] [post_comments] [post_edit]';
	return $post_info;
}}

//* Register widget areas
genesis_register_sidebar( array(
	'id'		=> 'slider',
	'name'		=> __( 'Slider', 'malcolm' ),
	'description'	=> __( 'This is the Slider section of the homepage.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-top-message',
	'name'		=> __( 'Home Top Message', 'malcolm' ),
	'description'	=> __( 'This is the Home Top Message section of the homepage.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-action',
	'name'		=> __( 'Home Action', 'malcolm' ),
	'description'	=> __( 'This is the Home Action section of the homepage.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-bottom-1',
	'name'		=> __( 'Home Bottom 1', 'malcolm' ),
	'description'	=> __( 'This is the Home Bottom 1 section of the homepage.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-bottom-2',
	'name'		=> __( 'Home Bottom 2', 'malcolm' ),
	'description'	=> __( 'This is the Home Bottom 2 section of the homepage.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-bottom-3',
	'name'		=> __( 'Home Bottom 3', 'malcolm' ),
	'description'	=> __( 'This is the Home Bottom 3 section of the homepage.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-bottom-message',
	'name'		=> __( 'Home Bottom Message', 'malcolm' ),
	'description'	=> __( 'This is the Home Bottom Message section of the homepage.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'before-post-block',
	'name'		=> __( 'Before Post Block', 'malcolm' ),
	'description'	=> __( 'This is the Before Post block section.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'after-post-block',
	'name'		=> __( 'After Post Block', 'malcolm' ),
	'description'	=> __( 'This is the After Post block section.', 'malcolm' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'widget-page',
	'name'		=> __( 'Widget Page', 'malcolm' ),
	'description'	=> __( 'This is the Widget Page template.', 'malcolm' ),
) );