<?php

    add_theme_support('menus');

    add_action( 'wp_enqueue_scripts', '_styles' );
    function _styles() {
        wp_enqueue_style( 'style', get_stylesheet_uri());
        wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css');
        wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');
        wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
    }

    add_action( 'wp_footer', '_scripts' );
    function _scripts() {
        wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js');
        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
        wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js');
        wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js');
        wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js');
        wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
    }

    add_shortcode('posts','renderPosts');
    function renderPosts($attr) {
        ob_start();
        if(isset($attr['int']) && $attr['int'] == 1) {
            get_template_part('/templates/posts','int');
        } else {
            get_template_part('/templates/posts');
        }
        return ob_get_clean();
    }
