<?php

/*-----------------------------------------------------------------------------------*
/* = Enqueue scripts and styles
/*-----------------------------------------------------------------------------------*/
function call_scripts() {
	
	// Fonts
	wp_enqueue_style( 'google-font-OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700', false );
	
	//* Enqueue Font Awesome
	wp_enqueue_style( 'font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css' );
	
	//wp_enqueue_style( 'linearicons_css', get_template_directory_uri() . '/assets/linearicons/dist/web-font/style.css' );
	
	/*Bootstrap css */
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/librairies/bootstrap/css/bootstrap.min.css');
	
    wp_enqueue_style('mon-style', get_template_directory_uri() . '/assets/css/style.css' );
	
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/librairies/bootstrap/js/bootstrap.min.js');
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/librairies/jQuery/jQuery.min.js');
	
	wp_enqueue_script('mon-script',get_template_directory_uri().'/assets/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'call_scripts' );

/*-----------------------------------------------------------------------------------*
/* = Charger jQuery depuis le CDN de google
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'wpm_jquery' );

function wpm_jquery() {
if ( !is_admin() ) {
//La fonction supprime l'utilisation du fichier original de JQuery sur votre serveur
    wp_deregister_script( 'jquery' );
//Elle enregistre alors le nouvel emplacement de JQuery, chargé depuis le CDN de Google
//lien librairie => https://developers.google.com/speed/libraries/#jquery
    wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' ), false, null, true );
//La fonction charge JQuery
    wp_enqueue_script( 'jquery' );
   }
}

