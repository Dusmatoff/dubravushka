<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Dubravushka
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function dubravushka_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'dubravushka_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dubravushka_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'dubravushka_pingback_header' );

/****************************************************
 * Theme Settings
 *****************************************************/
if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( [
        'page_title' => 'Настройки сайта',
        'menu_title' => 'Настройки сайта',
        'menu_slug'  => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ] );
}
/****************************************************
 * Theme Settings
 *****************************************************/

/****************************************************
 * Custom Post Types
 *****************************************************/
function dubravushka_register_my_cpts() {
    /**
     * Post Type: Отзывы.
     */

    $args = [
        'label' => 'Отзывы',
        'labels' => [
            'name' => 'Отзывы',
            'singular_name' => 'Отзыв',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => [ 'title' ],
    ];

    register_post_type( 'review', $args );

    /**
     * Post Type: Команда.
     */

    $args = [
        'label' => 'Команда',
        'labels' => [
            'name' => 'Команда',
            'singular_name' => 'Команда',
        ],
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => [ 'title', 'editor', 'thumbnail' ],
    ];

    register_post_type( 'team', $args );
}

add_action( 'init', 'dubravushka_register_my_cpts' );
/****************************************************
 * Custom Post Types
 *****************************************************/