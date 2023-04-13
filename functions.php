<?php
//after_setup_themeアクションフックを使用する関数をまとめる
add_action('after_setup_theme', 'my_theme_setup');
function my_theme_setup()
{
    add_theme_support('title-tag'); //<title>タグを出力する
    add_theme_support('post-thumbnails'); //アイキャッチ画像を使用可能にする
    add_theme_support('menus'); //カスタムメニュー機能を使用可能にする
}
// functions.phpでスタイルシートとJavaScriptファイルを読み込む
add_action('wp_enqueue_scripts', 'add_my_files');
function add_my_files()
{
    //WordPress本体のJQueryを登録解除
    wp_deregister_script('jquery');

    //jquery読み込み
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js', array(), '3.6.3', true);
    wp_enqueue_script(
        'jqueryinviewmin',
        get_template_directory_uri() . '/assets/js/jquery.inview.min.js'
    );

    //共通のJavascript読み込み
    wp_enqueue_script(
        'common_script',
        get_template_directory_uri() . '/assets/js/common_script.js',
        array('jquery'),
        'false',
        true
    );


    //luxy.js読み込み
if (is_home()) {
    wp_enqueue_script(
        'luxy',
        get_template_directory_uri() . '/assets/js/luxy.min.js',
        array('jquery'),
        '1.8.0',
        true
    );
}

    //個別slick.js読み込み
    if (is_page('monzen')) {
        wp_enqueue_script(
            'slick',
            get_template_directory_uri() . '/assets/js/slick.js',
            array('jquery'),
            '1.8.0',
            true
        );
    }
    if (is_singular('temple')) {
        wp_enqueue_script(
            'slick',
            get_template_directory_uri() . '/assets/js/slick.js',
            array('jquery'),
            '1.8.0',
            true
        );
    }

    //個別slick.js読み込み
    if (is_home()) {
        wp_enqueue_script(
            'slick',
            get_template_directory_uri() . '/assets/js/slick.js',
            array('jquery'),
            '1.8.0',
            true
        );
    }



    //以下はheaderに出力
    // Googleフォント読み込み
    wp_enqueue_style('google-fonts-kosugimaru', 'https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap');
    wp_enqueue_style('google-fonts-kiwimaru', 'https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap');

    //fontawesome読み込み
    wp_enqueue_style(
        'instagram-icon-photo-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    );

    //共通のCSS読み込み
    wp_enqueue_style(
        'my-destyle',
        get_template_directory_uri() . '/assets/css/destyle.css'
    );
    wp_enqueue_style(
        'my-slick',
        get_template_directory_uri() . '/assets/css/slick.css'
    );
    wp_enqueue_style(
        'my-common',
        get_template_directory_uri() . '/assets/css/common.css'
    );
    wp_enqueue_style(
        'my-style',
        get_template_directory_uri() . '/assets/css/style.css'
    );

    //個別CSS読み込み

    //top CSS
    if (is_front_page()) {
        wp_enqueue_style(
            'top',
            get_template_directory_uri() . '/assets/css/top.css'
        );
    };

    //temple css
    if (is_singular(array('temple', 'course'))) {
        wp_enqueue_style(
            'my-temples',
            get_template_directory_uri() . '/assets/css/temple.css'
        );
    };

    if (is_page(array('about', 'checkpoint', 'bookmark', 'monzen'))) {
        wp_enqueue_style(
            'my-templep',
            get_template_directory_uri() . '/assets/css/temple.css'
        );
    };

    //about-us css
    if (is_page('aboutus')) {
        wp_enqueue_style(
            'my-aboutus',
            get_template_directory_uri() . '/assets/css/about-us.css'
        );
    };

    //independent css
    if (is_page(array('about', 'sitemap', 'privacy'))) {
        wp_enqueue_style(
            'my-inde',
            get_template_directory_uri() . '/assets/css/independent.css'
        );
    };

    //contact css
    if (is_page('contact')) {
        wp_enqueue_style(
            'contact',
            get_template_directory_uri() . '/assets/css/contact.css'
        );
    };


    // 検索ページ
    if (is_search()) {
        wp_enqueue_style(
            'my-search',
            get_template_directory_uri() . '/assets/css/search-form.css',
        );
    };
    //寺社一覧ページ
    if (is_post_type_archive('temple')) {
        wp_enqueue_style(
            'tempstyle',
            get_template_directory_uri() . '/assets/css/temple.css'
        );
    }

    /*MW WP Formの</p>自動挿入をストップする*/
    function mvwpform_autop_filter()
    {
        if (class_exists('MW_WP_Form_Admin')) {
            $mw_wp_form_admin = new MW_WP_Form_Admin();
            $forms = $mw_wp_form_admin->get_forms();
            foreach ($forms as $form) {
                add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
            }
        }
    }
    mvwpform_autop_filter();


    // wp_enqueue_style(
    // 'my-search-form',
    // get_template_directory_uri() . '/assets/css/search-form.css'
    // );

    //             wp_enqueue_style(
    //     'my-style',
    //     get_template_directory_uri() . '/assets/css/monzen.css'
    // );
    // wp_enqueue_style(
    //     'my-course',
    //     get_template_directory_uri() . '/assets/css/course.css'
    // );


    // wp_enqueue_script(
    //     'jquery-3.6.3',
    //     get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js'
    // );


    // wp_enqueue_script(
    //     'course_script',
    //     get_template_directory_uri() . '/assets/js/course_script.js',
    //     array(),
    //     false,
    //     true
    // );
    //     wp_enqueue_script(
    //     'course_sc',
    //     get_template_directory_uri() . '/assets/js/script.js',
    //     array(),
    //     false,
    //     true
    // );
};
