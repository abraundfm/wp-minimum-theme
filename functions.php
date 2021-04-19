<?php
    add_theme_support( 'post-thumbnails' );

    function loadcss()
    {
        wp_register_style('minimum', get_template_directory_uri() . '/dist/minumum.css');
        wp_enqueue_style('minimum');
    }
    add_action('wp_enqueue_scripts', 'loadcss');

    function loadjs()
    {
        wp_register_script('minimum', get_template_directory_uri() . '/dist/minimum.js');
    }
    add_action('wp_enqueue_scripts', 'loadjs');

    function replace_core_jquery_version() {
        wp_deregister_script( 'jquery-core' );
        wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
        wp_deregister_script( 'jquery-migrate' );
        wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
    }