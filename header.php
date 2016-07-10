<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>

  <body<?php body_class(); ?>>

  <?php
    	$defaults = array(
    		'container'=> false,
    		'theme_locaiton' => 'primary-menu',
    	); //container boolean determines whether wrapped in auto-generated div
    	//theme_location links to menu (from functions.php array)
    	//menu-class adds classes to ul (that wraps the nav)
    	wp_nav_menu($defaults);
   ?>