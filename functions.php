<?php
add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1366, 300, true);

add_action( 'after_setup_theme', 'mytheme_setup' ); 
function mytheme_setup() {
        add_theme_support( 'menus' );
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'topmenu', 'Верхнее меню' );
    register_nav_menu('footermenunavigation', 'футер меню навигации');
    register_nav_menu('footer_links_master', 'выбор мастера');
}

function style_theme (){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('my_style', get_template_directory_uri().'/assets/css/style.css');
}
function scripts_theme(){
    wp_enqueue_script('jquery123' , get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    wp_enqueue_script('init' , get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js');
    wp_enqueue_script('myjs' , get_template_directory_uri() . '/assets/js/main.js');
    
}