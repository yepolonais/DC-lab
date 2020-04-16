

<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function wpbootstrap_styles_scripts(){


    wp_enqueue_style('style', get_stylesheet_uri());


    wp_enqueue_script( 'bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);

    
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');









?>