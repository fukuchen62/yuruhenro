<?php
/*Template Name: 404
*/
?>
<?php //get_header(); ?>

<!-- 以下、最後に削除 -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>タイトル</title>
    <!-- CSS読み込み -->
    <!-- リセットCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css" />
    <!-- Googleフォント Kosugi Maru,Kiwi Maru -->
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&family=Kosugi+Maru&display=swap" rel="stylesheet" />
    <!-- Instagramアイコンフォント(font awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- 全ページ読み込みCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />

    <!-- front-page.phpのみ読み込みCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/top.css" />

    <!-- page-about.phpのみ読み込みCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/independent.css" />

    <!-- single-temple.phpのみ読み込みCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/temple.css" />

    <!-- about-us.phpのみ読み込みCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about-us.css" />

    <!-- search-form.phpのみ読み込みCSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/search-form.css" />
</head>
<body>
    <header></header>
    <!-- 以上、最後に削除 -->

    <!-- headerここから -->
    <!-- mainここから -->

    <main>
        <h1 class="h1_bg">404 NOT FOUND</h1>
        <article class="main_inner">
            <section class="contents_width">
                <div>
                    <p class="h1_cap mb_100">
                            お探しのページが見つかりませんでした。<br />
                            申し訳ございませんが<a href="<?php echo home_url(); ?>" class="link"
                                >こちらのリンク</a
                            >からトップページへお戻りください。
                        </p>
                </div>
            </section>
        </article>
    </main>
    <!-- mainここまで -->

    <!-- footerここから -->
    <?php //get_footer(); ?>

    <!-- 以下、削除 -->
    <!-- footerここから -->
    <footer>
        <!-- <div class="footer_wrap"> -->
        <div class="footer_inner">
            <!-- TOPへ戻るボタン -->
            <p class="page-top">
                        <a href="#"
                            ><img src="<?php echo get_template_directory_uri(); ?>/assets/img/flower01.png" alt=""
                        /></a>
                    </p>

            <!-- instagramマーク -->
            <div class="footer_insta flex">
                <a href="https://www.instagram.com/yuru_henro/" target="_blank" class="flex">
                    <i class="fa-brands fa-instagram"></i>
                    <p>@yuru_henro</p>
                </a>
            </div>

            <div class="footer_links">
                <ul class="flex">
                    <li><a href="#" target="_blank">バナー1</a></li>
                    <li><a href="#" target="_blank">バナー2</a></li>
                    <li><a href="#" target="_blank">バナー3</a></li>
                    <li><a href="#" target="_blank">バナー4</a></li>
                    <li><a href="#" target="_blank">バナー5</a></li>
                </ul>
            </div>

            <nav class="footer_nav">
                <ul>
                    <li>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo_02.png" alt="とくしま１日＃ゆるへんろロゴ" class="footer_logo" />
                        </a>
                    </li>
                    <li>
                        <ul class="sp_none">
                            <li class="footer_nav_b">
                                <a href="#">＃ゆるへんろとは</a>
                            </li>
                            <li><a href="#">＃ゆるへんろとは</a></li>
                            <li><a href="#">おへんろのお作法</a></li>
                            <li><a href="#">参拝スタイル</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="sp_none">
                            <li class="footer_nav_b">
                                <a href="#">コース紹介</a>
                            </li>
                            <li><a href="#">コース名1</a></li>
                            <li><a href="#">コース名2</a></li>
                            <li><a href="#">コース名3</a></li>
                            <li><a href="#">コース名4</a></li>
                            <li><a href="#">コース名5</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="footer_nav_b">
                            <li>
                                <a href="#" class="sp_none">マイブックマーク</a>
                            </li>
                            <li>
                                <a href="#" class="sp_none">条件検索</a>
                            </li>
                            <li><a href="#" class="sp_none">Q&A</a></li>
                            <li>
                                <a href="#" class="sp_none">用語集</a>
                            </li>
                            <li><a href="#">このサイトについて</a></li>
                            <li>
                                <a href="#">プライバシーポリシー</a>
                            </li>
                            <li>
                                <a href="#">サイト制作にあたって</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <small>Copyright©とくしま１日＃ゆるへんろ</small>
        </div>
        <!-- </div> -->
    </footer>
    <!-- footerここまで -->
    </div>

    <!-- jQuery読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.3.min.js"></script>

    <!-- slick.js読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

    <!-- inview.js読み込み(フェードイン) -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.inview.min.js"></script>

    <!-- オリジナルjs読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common_script.js"></script>
</body>
</html>