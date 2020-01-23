<?php

function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/style/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('onepage', get_template_directory_uri() . '/style/onepage.css', array(), 1, 'all');
    wp_enqueue_style('onepage');

    wp_register_style('dark', get_template_directory_uri() . '/style/dark.css', array(), 1, 'all');
    wp_enqueue_style('dark');

    wp_register_style('animate', get_template_directory_uri() . '/style/animate.css', array(), 1, 'all');
    wp_enqueue_style('animate');
    
    wp_register_style('magnific', get_template_directory_uri() . '/style/magnific-popup.css', array(), 1, 'all');
    wp_enqueue_style('magnific');
    
    wp_register_style('fonts', get_template_directory_uri() . '/style/fonts.css', array(), 1, 'all');
    wp_enqueue_style('fonts');
    
    wp_register_style('responsive', get_template_directory_uri() . '/style/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('custom', get_template_directory_uri() . '/style/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

//Scripts

function addjs() {
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(), 1, 1, 1);
    wp_enqueue_script('plugins');

    wp_register_script('functions', get_template_directory_uri() . '/js/functions.js', array(), 1, 1, 1);
    wp_enqueue_script('functions');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), 1, 1, 1);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'addjs');