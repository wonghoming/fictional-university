<?php 

function loadResource() {
  wp_enqueue_style('robotoFont', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('fontAwesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('mainCSS', get_stylesheet_uri());
  wp_enqueue_script('mainJs', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts','loadResource');

function themeFeatures(){
  register_nav_menu('mainNav', 'Main Header Nav');
  register_nav_menu('footerMain', 'Footer Main Nav');
  register_nav_menu('footerSec', 'Footer Secondary Nav');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'themeFeatures');

?>
