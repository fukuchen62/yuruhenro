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
<!-- 以上、最後に削除 -->


<body>
    <div class="wrap">
        <!-- headerここから -->
        <header>
            <div class="header_inner flex">
                <div class="header_logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo_01.png" alt="とくしま１日＃ゆるへんろロゴ" />
                    </a>
                </div>

                <div class="header_menu">
                    <!-- ハンバーガーボタン -->
                    <div class="header_hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="flex">
                        <!-- ナビゲーションメニュー -->
                        <nav class="header_nav flex">
                            <ul>
                                <li><a href="#">＃ゆるへんろって？</a></li>
                                <li><a href="#">参拝スタイル</a></li>
                                <li><a href="#">コース紹介</a></li>
                                <li><a href="#">マイブックマーク</a></li>
                                <li><a href="#">検索</a></li>
                                <li><a href="#">Q&A</a></li>
                            </ul>
                        </nav>

                        <!-- ページ内検索 -->
                        <!-- <form action="" method="post">
                                <input type="text" name="input1" />
                                <input type="submit" value="送信" />
                            </form> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- headerここまで -->


        <!-- mainここから -->
        <main>
            <article class="main_inner">

                <!-- 後ほど調整！ -->
                <!-- <h1 class="catch_phrase">
                        どこ行くん?<br />
                        　ゆるっとへんろ<br />
                        　　＃ゆるへんろ
                    </h1> -->

                <!-- kv画像 -->
                <!-- <section> -->
                <!-- 大きなサイズの画像 -->
                <!-- <div class="slider">
                        <div class="slick-img1">
                            <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv01.jpg" alt="" />
                        </div>
                        <div class="slick-img1">
                            <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv02.jpg" alt="" />
                        </div>
                        <div class="slick-img1">
                            <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv03.jpg" alt="" />
                        </div>
                        <div class="slick-img1">
                            <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv04.jpg" alt="" />
                        </div>
                        <div class="slick-img1">
                            <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv05.jpg" alt="" />
                        </div>
                    </div> -->


                <!-- kv下画像 -->
                <!-- <div class="thumbnail mb_80">
                    <div class="thumbnail-img">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv01.jpg" alt="" />
                    </div>
                    <div class="thumbnail-img">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv02.jpg" alt="" />
                    </div>
                    <div class="thumbnail-img">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv03.jpg" alt="" />
                    </div>
                    <div class="thumbnail-img">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv04.jpg" alt="" />
                    </div>
                    <div class="thumbnail-img">
                        <img src="<?php //echo get_template_directory_uri();?>/assets/img/top_kv05.jpg" alt="" />
                    </div>
                </div> -->
                <!-- </section> -->
                <!-- 後ほど調整！ -->


                <!-- ＃ゆるへんろって？ -->
                <section class="contents_width mb_100">
                    <!-- ＃ゆるへんろって？ -->
                    <div class="mb_100">
                        <h2 class="h2_bg mb_40">＃ゆるへんろって？</h2>
                        <div class="flex flex_d_c">
                            <div class="small_cap mb_20">
                                「発心の地」徳島をゆったり1日で巡るコースをご提案！<br />
                                「おへんろ」ってどうやって始めたらいいの？<br />
                                やってみたいけど難しいんじゃない？<br />
                                あと一歩が踏み出せないあなたへのおへんろのススメ！
                            </div>
                            <!-- 矢印つきボタン -->
                            <div class="button18">
                                <a href="#">
                                    <p>もっと知る</p>
                                </a>
                            </div>
                        </div>

                        <!-- イメージ画像 -->
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/about_yuruhenro.png" alt="参拝のイメージ" />
                    </div>

                    <!-- おへんろの作法について -->
                    <div>
                        <h3 class="h3_bg">おへんろの作法について</h3>
                        <div class="top_flexset flex">
                            <!-- 参拝の画像 -->
                            <div class="top_sanpai_bg1">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/hana.png" alt="花の飾り" />
                            </div>
                            <div class="sec_mb40">
                                <!-- キャプション文 -->
                                <div class="mb_20">
                                    おへんろの作法ってどんなことをするんだろう？<br />
                                    知っておきたい作法のあれこれを紹介！<br />
                                </div>
                                <!-- 矢印つきボタン -->
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- 参拝スタイル -->
                <section class="contents_width mb_100">
                    <!-- 参拝スタイル -->
                    <div>
                        <h2 class="h2_bg mb_40">参拝スタイル</h2>
                        <div class="top_flexset flex">
                            <!-- 参拝の画像 -->
                            <div class="top_sanpai_bg2">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/hana.png" alt="花の飾り" />
                            </div>
                            <div class="sec_mb40">
                                <!-- キャプション文 -->
                                <div class="mb_20">
                                    服装は基本的に自由。<br />
                                    お遍路の服装や持ち物の押さえておきたいポイントをチェック！
                                </div>
                                <!-- 矢印つきボタン -->
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- コース紹介 -->
                <section class="contents_width mb_100">
                    <h2 class="h2_bg">コース紹介</h2>

                    <!-- コース紹介の紹介文 -->
                    <div class="text_c mb_40">
                        徳島23ヶ所をゆったり1日で巡れる<br />
                        5コースのご案内
                    </div>

                    <!-- 入門コース -->
                    <div class="mb_80">
                        <!-- イメージ画像 -->
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/beginner_yuruhenro.png" alt="入門コースイメージ画像" class="mb_40" />

                        <!-- ボタンと紹介文 -->
                        <div class="btn_and_description_area mb_80 flex">
                            <button class="course_btn btn1">
                                ＃ゆるへんろ　入門コース<br />第1番札所～第3番札所＞＞＞
                            </button>
                            <div class="small_cap">
                                ３つのお寺を巡る入門コース<br />
                                おへんろを始めるならまずはここから！<br />
                                歩き遍路の雰囲気を味わってみたい方におすすめ！
                            </div>
                        </div>
                    </div>

                    <!-- チャレンジコース -->
                    <div>
                        <!-- イメージ画像 -->
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/challenge_yuruhenro.png" alt="チャレンジコースイメージ画像" class="mb_40" />

                        <!-- チャレンジコース紹介文 -->
                        <div class="btn_description">
                            「＃入門歩きへんろコース」で自信がついたら<br />
                            もう少し遠くのお寺の参拝にも挑戦してみませんか？
                        </div>

                        <!-- ボタンと紹介文 -->
                        <!-- 県北　車コース -->
                        <div class="btn_and_description_area flex">
                            <button class="course_btn btn2">
                                県北　車コース<br />第1番札所～第6番札所 >>>
                            </button>
                            <div class="small_cap">
                                寺社メインでお遍路を体験したい方におすすめ！<br />
                                スタート地点から区切りのいいところまで半日で回れます。
                            </div>
                        </div>

                        <!-- 県西　車コース -->
                        <div class="btn_and_description_area flex">
                            <button class="course_btn btn3">
                                県西　車コース<br />第7番札所～第12番札所
                                >>>
                            </button>
                            <div class="small_cap">
                                チャレンジ精神のある方におすすめ！<br />少し歩かなければいけない難所があります。
                            </div>
                        </div>

                        <!-- 県南　車コース -->
                        <div class="btn_and_description_area flex">
                            <button class="course_btn btn4">
                                県南　車コース<br />第18番札所～第23番札所
                                >>>
                            </button>
                            <div class="small_cap">
                                自然に親しみたい方におすすめ！<br />山に海、車窓からの景色も楽しめます。
                            </div>
                        </div>

                        <!-- 市内　徒歩コース -->
                        <div class="btn_and_description_area flex">
                            <button class="course_btn btn5">
                                市内　徒歩コース<br />第13番札所～第17番札所
                                >>>
                            </button>
                            <div class="small_cap">
                                短い距離で多くの寺社を巡りたい方におすすめ！<br />すべての寺社が徳島市内にあるため、アクセスがよいです。<br />徳島市内五ヶ所まいりとも呼ばれています。
                            </div>
                        </div>
                    </div>
                </section>

                <!-- instagram -->
                <section class="mb_150">
                    <h2 class="h3_bg">Instagram</h2>\
                    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                </section>
            </article>
        </main>
        <!-- mainここまで-->
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