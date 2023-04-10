<?php get_header(); ?>


<!-- mainここから -->
<main>
    <article class="main_inner">

        <!-- 後ほど調整！ -->
        <h1 class="catch_phrase">
            どこ行くん?<br />
            　ゆるっとへんろ<br />
            　　＃ゆるへんろ
        </h1>

        <!-- kv画像 -->
        <section>
            <!-- 大きなサイズの画像 -->
            <div class="slider">
                <div class="slick-img1">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv01.jpg" alt="" />
                </div>
                <div class="slick-img1">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv02.jpg" alt="" />
                </div>
                <div class="slick-img1">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv03.jpg" alt="" />
                </div>
                <div class="slick-img1">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv04.jpg" alt="" />
                </div>
                <div class="slick-img1">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv05.jpg" alt="" />
                </div>
            </div>


            <!-- kv下画像 -->
            <div class="thumbnail mb_80">
                <div class="thumbnail-img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv01.jpg" alt="" />
                </div>
                <div class="thumbnail-img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv02.jpg" alt="" />
                </div>
                <div class="thumbnail-img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv03.jpg" alt="" />
                </div>
                <div class="thumbnail-img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv04.jpg" alt="" />
                </div>
                <div class="thumbnail-img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv05.jpg" alt="" />
                </div>
            </div>
        </section>
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
                        <a href="<?php echo home_url('about'); ?>">
                            <p>もっと知る</p>
                        </a>
                    </div>
                </div>

                <!-- イメージ画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about_yuruhenro.png" alt="参拝のイメージ" />
            </div>

            <!-- おへんろの作法について -->
            <div>
                <h3 class="h3_bg">おへんろの作法について</h3>
                <div class="top_flexset flex">
                    <!-- 参拝の画像 -->
                    <div class="top_sanpai_bg1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hana.png" alt="花の飾り" />
                    </div>
                    <div class="sec_mb40">
                        <!-- キャプション文 -->
                        <div class="mb_20">
                            おへんろの作法ってどんなことをするんだろう？<br />
                            知っておきたい作法のあれこれを紹介！<br />
                        </div>
                        <!-- 矢印つきボタン -->
                        <div class="button18">
                            <a href="<?php echo esc_url(home_url('/')); ?>about#jump_to_about">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hana.png" alt="花の飾り" />
                    </div>
                    <div class="sec_mb40">
                        <!-- キャプション文 -->
                        <div class="mb_20">
                            服装は基本的に自由。<br />
                            お遍路の服装や持ち物の押さえておきたいポイントをチェック！
                        </div>
                        <!-- 矢印つきボタン -->
                        <div class="button18">
                            <a href="<?php echo home_url('checkpoint'); ?>">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/beginner_yuruhenro.png" alt="入門コースイメージ画像" class="mb_40" />

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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/challenge_yuruhenro.png" alt="チャレンジコースイメージ画像" class="mb_40" />

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
            <h2 class="h3_bg">Instagram</h2>
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </section>
    </article>
</main>
<!-- mainここまで-->
<?php get_footer(); ?>
