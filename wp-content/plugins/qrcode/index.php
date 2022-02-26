<?php
/*
Plugin Name: qrpage
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.0
*/

add_action( 'wp_enqueue_scripts', 'scripts_qrcode');
function scripts_qrcode() {
    $dir = plugin_dir_url(__FILE__);
    wp_enqueue_script('qrcode',$dir . 'qrcode/qrcode.min.js');
    wp_enqueue_script('qrcode_script',$dir . 'qrcode/script.js');
}

add_shortcode('qrpage', 'renderQrcode');
function renderQrcode() {
    return "
<div id='qrcode' style='width:100px; height:100px; margin-top:15px;'></div>";
}
