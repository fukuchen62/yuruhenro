<?php
//after_setup_themeアクションフックを使用する関数をまとめる
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
    add_theme_support( 'title-tag' );//<title>タグを出力する
    add_theme_support( 'post-thumbnails' );//アイキャッチ画像を使用可能にする
    add_theme_support('menus');//カスタムメニュー機能を使用可能にする
}
// functions.phpでスタイルシートとJavaScriptファイルを読み込む
add_action('wp_enqueue_scripts', 'add_my_files');
function add_my_files() {
    //jquery読み込み
    wp_enqueue_script('jquery');
    //以下はheaderに出力
    wp_enqueue_style(
        'google-fonts-kosugi',
        'https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&family=Kosugi+Maru&display=swap'
    );
    wp_enqueue_style(
        'instagram-icon-photo-font-awesome',
        'https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&family=Kosugi+Maru&display=swap'
    );
    wp_enqueue_style(
        'my-destyle',
        get_template_directory_uri() . '/assets/css/destyle.css'
    );
    wp_enqueue_style(
        'my-common',
        get_template_directory_uri() . '/assets/css/common.css'
    );
    wp_enqueue_style(
        'my-course',
        get_template_directory_uri() . '/assets/css/course.css'
    );
    wp_enqueue_style(
        'my-temple',
        get_template_directory_uri() . '/assets/css/temple.css'
    );
        wp_enqueue_style(
        'my-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );

        wp_enqueue_style(
        'my-search-form',
        get_template_directory_uri() . '/assets/css/search-form.css'
        );
                wp_enqueue_style(
        'my-search-form',
        get_template_directory_uri() . '/assets/css/top.css'
        );
                wp_enqueue_style(
        'my-style',
        get_template_directory_uri() . '/assets/css/monzen.css'
    );
    wp_enqueue_script(
        'jquery-3.6.3',
        get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js'
    );
        wp_enqueue_script(
        'jqueryinviewmin',
        get_template_directory_uri() . '/assets/js/jquery.inview.min.js'
    );
    wp_enqueue_script(
        'common_script',
        get_template_directory_uri() . '/assets/js/common_script.js',
        array(),
        false,
        true
    );
    wp_enqueue_script(
        'course_script',
        get_template_directory_uri() . '/assets/js/course_script.js',
        array(),
        false,
        true
    );
        wp_enqueue_script(
        'course_sc',
        get_template_directory_uri() . '/assets/js/script.js',
        array(),
        false,
        true
    );
}
