<?php 

function add_scripts() {
  wp_enqueue_script('jquery');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/index.js');
  wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
}
add_action('wp_enqueue_scripts', 'add_scripts');
