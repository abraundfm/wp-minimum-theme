<?php
    // On ajoute la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );

    /**
     * Charge les fichiers CSS
     *
     * @return void
     */
    function loadcss()
    {
        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap');
    }
    add_action('wp_enqueue_scripts', 'loadcss');

    /**
     * On ajoute les js
     *
     * @return void
     */
    function loadjs()
    {
        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    }
    add_action('wp_enqueue_scripts', 'loadjs');

    /**
     * Remplace la version de jquery
     *
     * @return void
     */
    function replace_core_jquery_version() {
        wp_deregister_script( 'jquery-core' );
        wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1' );
        wp_deregister_script( 'jquery-migrate' );
        wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0' );
    }