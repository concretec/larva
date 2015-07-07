<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package larva
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function larva_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'larva_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function larva_jetpack_setup
add_action( 'after_setup_theme', 'larva_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function larva_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function larva_infinite_scroll_render
