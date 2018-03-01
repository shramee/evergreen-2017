<?php

add_action( 'wp_enqueue_scripts', 'evg_enqueue_styles' );
function evg_enqueue_styles() {
	wp_enqueue_style( 'sm-2017-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_script( 'skrollr', '//cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js' );
}

/**
 * Outputs theme url with path
 * @param string $path
 */
function evg_url( $path ) {
	echo evg_get_url( $path );
}

/**
/**
 * Return theme url with path
 * @param string $path
 * @return string Theme url with path
 */
function evg_get_url( $path ) {
	return get_stylesheet_directory_uri() . "/$path";
}