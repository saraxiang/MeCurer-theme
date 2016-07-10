<?php

add_theme_support('menus');

//tell Wordpress that menu exists
function register_theme_menus() {
	(
		array(
			'primary-menu' => __('Primary Menu')
		)
	);
}

//tell Wordpress to run this function upon initialization
add_action('init', 'register_theme_menus');

function mc_theme_styles() { //mc stands for MeCurer...namespacing (to prevent conflicting names with future plugins etc)
	//this function allows us to link to style sheets
	//get_template_directory_uri() gets the path to the folder containing this file (functions.php)
	//the period concatenates the above ^^ to css/foundation.css
	//foundation_css is just a shorthand name
	wp_enqueue_style('materialize_css', get_template_directory_uri() . '/css/materialize.min.css');
	wp_enqueue_style('googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic');   
	wp_enqueue_style('googleicons_css', 'http://fonts.googleapis.com/icon?family=Material+Icons'); 
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');   
}

//needed to tell wordpress when to enqueue the styles
//wp_enqueue_scripts is a hook that tells Wordpress which CSS and JS files to load for a given page
add_action('wp_enqueue_scripts', 'mc_theme_styles');

function mc_theme_js() {
	//order here determines order of load on site
	//wp_enqueue_script takes additional arguments of [array of dependents], fourth is [version (if want to set)]
	//and [boolean: appear in footer]
	wp_enqueue_script('materialize_js', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'),'',true);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'materialize_js'), '', true);
}

add_action('wp_enqueue_scripts', 'mc_theme_js');

?>