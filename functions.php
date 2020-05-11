<?php
define('__THEME_DIR__',__DIR__);

include __THEME_DIR__.'/functions/functions-init.php';
include __THEME_DIR__.'/functions/functions-supports.php';
include __THEME_DIR__.'/functions/functions-css-js.php';
include __THEME_DIR__.'/functions/functions-acf.php';
include __THEME_DIR__.'/functions/functions-admin.php';
include __THEME_DIR__.'/functions/functions-annexes.php';
include __THEME_DIR__.'/functions/functions-ariane.php';
include __THEME_DIR__.'/functions/functions-bbpress.php';
include __THEME_DIR__.'/functions/functions-excerpt.php';
include __THEME_DIR__.'/functions/functions-html-functions.php';
include __THEME_DIR__.'/functions/functions-menu.php';
include __THEME_DIR__.'/functions/functions-pagination.php';
include __THEME_DIR__.'/functions/functions-post-get.php';
include __THEME_DIR__.'/functions/functions-removes.php';
include __THEME_DIR__.'/functions/functions-rewrite.php';
include __THEME_DIR__.'/functions/functions-search.php';
include __THEME_DIR__.'/functions/functions-sessions.php';
include __THEME_DIR__.'/functions/functions-ajax.php';




function call_scripts() {
	
	
    
    
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    

    
    
   
}
add_action( 'wp_enqueue_scripts', 'call_scripts' );