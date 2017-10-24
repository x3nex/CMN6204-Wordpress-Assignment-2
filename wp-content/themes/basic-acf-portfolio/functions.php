<?php

function custome_title(){
	return wp_title('|', true, 'right').''.get_bloginfo('name').' ~ '.get_bloginfo('description');
}

function excerpt($content, $length = 180) {
	$content = wp_strip_all_tags($content);

	$content = substr($content, 0, $length);
	echo $content;
}


add_action('init', 'register_menus');
function register_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu for top of the page',
		
]);

}

add_action('wp_enqueue_scripts', 'custom_style');
function custom_style () {
	wp_register_style(
		'bootstrap',
		get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',
		[],
		1.0
	);
	wp_register_style(
		'modern-business',
		get_template_directory_uri().'/css/modern-business.css',
		['bootstrap'],
		1.0
	);
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('modern-business');
}
add_action('wp_enqueue_scripts', 'custom_scripts');
function custom_scripts () {
	wp_register_script(
		'jquery',
		get_template_directory_uri().'/vendor/jquery/jquery.min.js',
		[],
		1.0,
		false
	);
	wp_register_script(
		'popper',
		get_template_directory_uri().'/vendor/popper/popper.min.js',
		[],
		1.0,
		false
	);
	wp_register_script(
		'bootstrap-js',
		get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js',
		[],
		1.0,
		false
	);
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrap-js');
}


// $name, $width, $height, $crop
add_image_size('Portfolio Featured', 700, 500, true)

?>