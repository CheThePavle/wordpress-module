<?php

    add_theme_support('menus');

    add_action( 'wp_enqueue_scripts', '_styles' );
    function _styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_style( 'print-style', get_template_directory_uri() . '/print.css');
    }

    add_action( 'wp_footer', '_scripts' );
    function _scripts() {
        wp_enqueue_script( 'twentytwenty-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, false );
    }

    add_shortcode('posts', 'renderPosts');
    function renderPosts($atrr) {
        ob_start();
        if (isset($atrr['intr']) && $atrr['intr'] == 1) {
            get_template_part('/templates/posts', 'intr');
        } else {
            get_template_part('/templates/posts');
        }
        return ob_get_clean();
    }
