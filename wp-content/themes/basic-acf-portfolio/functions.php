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


add_action( 'wp_enqueue_scripts', 'custom_styles');

function custom_styles(){
	wp_register_style('boostrap', '/wp-content/themes/basic-acf-portfolio/vendor/bootstrap/css/bootstrap.min.css', [], 1.1, false);
	wp_register_style('modern-business', '/wp-content/themes/basic-acf-portfolio/css/modern-business.css', ['boostrap'], 1.0, false);

	wp_enqueue_style('boostrap');
	wp_enqueue_style('modern-business');
}

//$name, $width, $hight, $crop
// add_image_size('Porfolio Featured', 700, 450, true);


