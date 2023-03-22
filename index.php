<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP:wght@300;400;700;900&family=PT+Serif:ital@1&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">

</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/ゆるへんろ ロゴ.png" alt=""></a>
        </div>
        <nav>
            <ul class="gnav">
                <li><a href="<?php echo get_template_directory_uri(); ?>/about.html">#ゆるへんろとは</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/course.html">入門コース</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/course.html">チャレンジコース</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/bookmark.html">マイブックマーク</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/qanda.html">Q&A</a></li>
            </ul>
        </nav>
    </header>
    <div class="kv">
        <img src="<?php echo get_template_directory_uri(); ?>/img/kv.png" alt="">
        <p>どこ行くん？<br>&nbsp;&nbsp;ゆるっと遍路<br>&nbsp;&nbsp;#ゆるへんろ</p>
    </div>
    <div class="insta">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ロゴ.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ロゴ.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ロゴ.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ロゴ.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ロゴ.png" alt="">
    </div>
    <main class="main">
        <section class="sec sec1">
            <div class="about1">
                <h2 class="title">#ゆるへんろって？</h2>
                <div class="abouttext">
                    「おへんろ」ってどうやって始めたらいいの？<br>
                    やってみたいけど難しいんじゃない？<br>
                    あと一歩が踏み出せないあなたへのおへんろのススメ！
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/tokushimamap.png" alt="">
            </div>
        </section>
        <section class="sec sec2">
            <div class="about2">
                <h2 class="title">おへんろ知っとこ！</h2>
                <div class="abouttext">
                    気軽におへんろに行ってほしい。<br>
                    だけどちゃんと押さえる所は押さえとこ！<br>
                    大丈夫、簡単だから！
                </div>
            </div>
        </section>
        <section class="sec sec3">
            <div class="about3">作法について&nbsp;&nbsp; <a href="checkpoint.html">参拝スタイル</a></span>
        </section>
        <section class="sec sec4">
            <div class="about1">
                <h2 class="title">コース紹介</h2>
                <div class="abouttext">
                    おすすめしたい入門コース<br>
                    ３つのお寺をめぐって<br>
                    おへんろの楽しさを感じてほしい！<br>
                    <p><a href="">#ゆるへんろ&nbsp;入門コース＞＞＞</a></p>
                    入門コースじゃものたりない！<br>
                    そんなあなたにはチャレンジコース<br>
                    徳島の地域ごとにコースをご提案します！<br>
                    <p><a href="">#ゆるへんろ&nbsp;チャレンジコース！</a></p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tokushimamap.png" alt="">
                </div>
            </div>
        </section>
        <div class="foot">
            <img src="<?php echo get_template_directory_uri(); ?>/img/footimg.png" alt="">
        </div>
    </main>
    <footer class="footer">
        <img src="<?php echo get_template_directory_uri(); ?>/img/ゆるへんろ ロゴ.png" alt="">
        <small>©とくしま1日#ゆるへんろtest</small>
    </footer>
</body>
</html>
