<!--headerとfooterのベース作成用-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS読み込み -->
    <!-- リセットCSS -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css" /> -->
    <!-- Googleフォント Kosugi Maru,Kiwi Maru -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&family=Kosugi+Maru&display=swap" rel="stylesheet"> -->
    <!-- Instagramアイコンフォント(font awesome) -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- js用CSS -->

    <!-- オリジナルCSS -->

    <!-- コース用CSS -->

    <!-- jQuery読み込み -->


    <!-- ファビコン設定 -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

    <?php wp_head(); ?>
</head>

<body>
    <div class="wrap">
        <!-- headerここから -->
        <header>
            <div class="header_inner flex">
                <div class="header_logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo_01.png" alt="とくしま１日＃ゆるへんろロゴ">
                    </a>
                </div>

                <div class="header_menu">
                    <!-- ハンバーガーボタン -->
                    <div class="header_hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <!-- ナビゲーションメニュー -->
                    <nav class="header_nav flex">
                        <ul>
                            <li>
                                <a href="<?php echo home_url('about'); ?>">
                                    <label>
                                        ＃ゆるへんろって？
                                    </label>
                                </a>
                            </li>
                            <li><a href="<?php echo home_url('checkpoint'); ?>"><label>参拝スタイル</label></a></li>
                            <li><a href="<?php echo home_url('course/easy'); ?>"><label>コース紹介</label></a></li>
                            <li><a href="<?php echo home_url('bookmark'); ?>"><label>マイブックマーク</label></a></li>
                            <li><a href="<?php echo home_url('?s='); ?>"><label>検索</label></a></li>
                            <li><a href="<?php echo home_url('qanda'); ?>"><label>Q&A</label></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>
        <!-- headerここまで -->
