<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Minimal-Artistic-Portfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function minimal_artistic_portfolio_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'minimal_artistic_portfolio_body_classes' );


add_filter( 'image_send_to_editor', 'fluidbox_capable', 10, 7);

function fluidbox_capable($html, $id, $alt, $title, $align, $url, $size ) {
    $classes_to_add = 'fluidbox';
    if (preg_match('/<a.? class=".?">/', $html))
        $html = preg_replace('/(<a.? class=".?)(".\?>)/', '$1 ' . $classes_to_add . '$2', $html);
    else
        $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes_to_add . '">', $html);
    return $html;
}
?>
