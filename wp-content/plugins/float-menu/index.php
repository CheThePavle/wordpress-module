<?php
    /*
        Plugin Name: Float Menu
        Description: Выводит плавающее меню для текущей страницы с шорткодом [floatmenu]
        Author: Pavel Chikurov
     */

    add_action('wp_enqueue_scripts','_styleFM');

    function _styleFM() {
        wp_enqueue_style( 'styleFM', plugin_dir_url(__FILE__) . '/style.css');
    }

    add_shortcode('floatmenu','renderFM');

    function renderFM() {
        $items = '';
        foreach (wp_get_nav_menu_items(3) as $item) {
            $url = $item->url;
            $title= $item->title;
            $items = $items . "<li><a href='$url'>$title</a></li>";
        }
        return "<div class='float_menu'>
                    <ul>
                        $items
                    </ul>
                </div>";
    }
