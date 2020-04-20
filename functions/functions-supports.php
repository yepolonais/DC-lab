<?php
/* Support Logo */
function sc_theme_prefix_setup(){
	add_theme_support('custom-logo');
}
add_action('after_setup_theme','sc_theme_prefix_setup');


/* MENU */
register_nav_menus(['menu-principal'  => 'Menu Principal']);
register_nav_menus(['header-top' => 'Menu Header Top']);
register_nav_menus(['footer-top' => 'Menu Footer Top']);


/* Support Thumbnails */
add_theme_support('post-thumbnails');
