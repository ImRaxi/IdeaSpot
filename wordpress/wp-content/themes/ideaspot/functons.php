<?php

function load_stylesheets() {

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.css', array(), 1, 'all');
    wp_enqueue_style('swiper');    

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('style');  

    wp_register_style('dark', get_template_directory_uri() . '/css/dark.css', array(), 1, 'all');
    wp_enqueue_style('dark'); 

    wp_register_style('icons', get_template_directory_uri() . '/css/font-icons.css', array(), 1, 'all');
    wp_enqueue_style('icons'); 

    wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all');
    wp_enqueue_style('animate'); 

    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), 1, 'all');
    wp_enqueue_style('popup'); 

    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responive'); 

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom'); 

    
}

add_action('wp_enqueue_scripts', 'load_stylesheets');