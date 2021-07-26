<?php

    /**
     * Add title page
     */
    function gem_theme_support() {
        add_theme_support('title-tag');
    }
    add_action('after_theme_setup', 'gem_theme_support');

    /**
     * Add styles
     */
    function gem_register_styles() {
        $version = wp_get_theme()->get( 'Version' );

        wp_enqueue_style('gem-style', get_template_directory_uri() . '/assets/css/style.css', array('gem-tailwind-css', 'gem-bootstrap-css'), $version, 'all');
        wp_enqueue_style('gem-tailwind-css', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('gem-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css', array(), '5.0.1', 'all');
        
    }
    add_action('wp_enqueue_scripts', 'gem_register_styles');

    /**
     * Add js code
     */
    function gem_register_scripts() {
        $version = wp_get_theme()->get('Version');

        wp_enqueue_script('gem-js', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
        wp_enqueue_script('gem-jquery-js', 'https://code.jquery.com/jquery-3.6.0.slim.min.js', array(), '3.6.0', true);
        wp_enqueue_script('gem-popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array(), '2.9.2', true);
        wp_enqueue_script('gem-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js', array(), '5.0.1', true);
    }
    add_action('wp_enqueue_scripts', 'gem_register_scripts');

?>