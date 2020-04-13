<?php

// PHP FRANCAIS
setlocale(LC_ALL, 'fr_FR');

/* Activation des miniatures dans le theme */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}



/* Support Logo */
function sc_theme_prefix_setup(){
	add_theme_support('custom-logo');
}
add_action('after_setup_theme','sc_theme_prefix_setup');


/* MENU */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Menu principal', 'wptuts' ) );
            register_nav_menu( 'secondary', __( 'Menu header', 'wptuts' ) );
            register_nav_menu( 'third', __( 'Menu footer', 'wptuts' ) );
        } endif;



/*-----------------------------------------------------------------------------------*
/* = IMAGES
/*-----------------------------------------------------------------------------------*/
/* Taille des miniatures */
add_theme_support('post-formats');
if(function_exists('add_image_size')) {
    //Ajoutez ici vos tailles personnalisé
    //add_image_size( $name, $width, $height, true ); // Nom, Largeur, hauteur, Rognage
    //add_image_size('blog-home', 370, 230, true);
    //add_image_size( 'blog-home', 370, 274, array( 'center', 'top' ) ); // Hard crop left top
    add_image_size('col_6', 500, 500, true);
}
// Appel de la miniature -> if(has_post_thumbnail()){ the_post_thumbnail('projet-carre-petit'); }
// OU -> if(has_post_thumbnail()){ $url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'single', true); }
// PUIS -> $url[0];

// add custom size to editor image size options
function my_editor_image_sizes( $sizes ) {
    $sizes = array_merge( $sizes, array(
      'col_6' => __( 'Image 500px wide' ),
    ));
    return $sizes;
}
add_filter( 'col_6', 'my_editor_image_sizes' );


/* SideBar */
if(function_exists('register_sidebar')){
    register_sidebar(array(
        'id' => 'sidebar-blog',
        'name' => 'Sidebar blog',
        'before_widget' => '',
        'before_title' => '',
        'after_title' => '',
        'after_widget' => '',
    ));
    register_sidebar(array(
        'id' => 'sidebar-page',
        'name' => 'Sidebar Page',
        'before_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
        'after_widget' => '',
    ));
    register_sidebar(array(
        'id' => 'footer-widget-4',
        'name' => 'Footer widget 4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        'after_widget' => '</div>',
    ));
}

/*-----------------------------------------------------------------------------------*
/* = APPEL 404
/*-----------------------------------------------------------------------------------*/
function call_error(){
    status_header(404);
    nocache_headers();
    include(get_404_template());
    exit;
}