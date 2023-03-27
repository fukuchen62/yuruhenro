<!--headerとfooterのベース作成用-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タイトル</title>
    <!-- CSS読み込み -->
    <!-- リセットCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css" />
    <!-- Googleフォント Kosugi Maru,Kiwi Maru -->
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&family=Kosugi+Maru&display=swap" rel="stylesheet">
    <!-- Instagramアイコンフォント(font awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- js用CSS -->

    <!-- オリジナルCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <!-- jQuery読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.3.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <div class="wrap">
        <!-- headerここから -->
        <header>
            <div class="header_inner flex">
                <div class="header_logo">
                    <a href="#">
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
                            <li><a href="<?php echo get_template_directory_uri(); ?>/single-temple">tstゆるへんろって？</a></li>
                            <li><a href="#">参拝スタイル</a></li>
                            <li><a href="#">コース紹介</a></li>
                            <li><a href="#">マイブックマーク</a></li>
                            <li><a href="#">検索</a></li>
                            <li><a href="#">Q&A</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>
        <!-- headerここまで -->
