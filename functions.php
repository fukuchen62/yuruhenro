<?php
function add_my_styles() {
if (is_single()) {
wp_enqueue_style( 'single-course', get_template_directory_uri() . '/assets/css/course.css' );
}
}
add_action( 'wp_enqueue_scripts', 'add_my_styles' );

function custom_print_scripts() {
if (!is_admin()) {
        //デフォルトjquery削除
    wp_deregister_script('jquery');

        //GoogleCDNから読み込む
    wp_enqueue_script('jquery-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js' );
        }
}
add_action('wp_print_scripts', 'custom_print_scripts');?>
