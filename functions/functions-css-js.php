<?php

/* Ajouter dans les link CSS le style.css du theme */
add_action('wp_enqueue_scripts', 'sc_enqueue_styles' );
function sc_enqueue_styles(){
	wp_enqueue_style('mon-style',get_template_directory_uri().'/assets/css/style.css');

	wp_enqueue_script('mon-script',get_template_directory_uri().'/assets/js/script.js');
}
