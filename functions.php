<?php 

    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    function load_stylesheet()
    {

        wp_register_style('style', get_template_directory_uri() . '/style.css', [], 0, 'all');
        wp_enqueue_style('style');
    }
    
    add_action('wp_enqueue_scripts', 'load_stylesheet');
