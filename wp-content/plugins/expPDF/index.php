<?php
    /*
        Plugin Name: expPDF
        Description: Выводит ссылку для сохранения поста в pdf с шорткодом [exppdf]
        Author: Pavel Chikurov
     */

    add_action('wp_enqueue_scripts','_stylePDF');

    function _stylePDF() {
        wp_enqueue_style( 'stylePDF', plugin_dir_url(__FILE__) . '/style.css');
    }

    add_shortcode('exppdf','renderPDF');

    function renderPDF() {
        return "<a class='expPDF' href='javascript:(print());'>Экспорт в PDF</a>";
    }

//    <p>QR код: <?php do_shortcode('[qrpage]')