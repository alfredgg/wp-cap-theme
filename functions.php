<?php

function use_style($style) {
	wp_register_style($style, get_template_directory_uri() . '/css/' . $style . '.css' );
	wp_enqueue_style($style);
}

function use_script($script) {
	wp_register_script($script, get_template_directory_uri() . '/js/' . $script . '.js' );
	wp_enqueue_script($script);
}

function add_scripts_and_styles() {
	$styles = array(
		"skel", 
		"style-xlarge",
		"style"
		);

	$scripts = array(
		"jquery.min",
		"skel.min",
		"skel-layers.min",
		"init",
		);

	foreach ($styles as &$style) {
	    use_style($style);
	}

	foreach ($scripts as &$script) {
	    use_script($script);
	}
}

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );

add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 250, 300, true );

$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	'default-image' => get_template_directory_uri() . '/images/def_header.jpg',
);
add_theme_support( 'custom-header', $defaults );

?>