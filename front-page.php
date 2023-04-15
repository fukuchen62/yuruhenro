<?php get_header(); ?>


<!-- mainここから -->
<main class="wrap">
    <article class="main_inner">

        <h1 class="glowAnime">
            どこ行くん？
            ㅤゆるっとへんろ
            ㅤㅤ井ゆるへんろ
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
                <div class="thumbnail_img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv01.jpg" alt="" />
                </div>
                <div class="thumbnail_img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv02.jpg" alt="" />
                </div>
                <div class="thumbnail_img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv03.jpg" alt="" />
                </div>
                <div class="thumbnail_img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv04.jpg" alt="" />
                </div>
                <div class="thumbnail_img">
                    <img src="<?php echo get_template_directory_uri();
                                ?>/assets/img/top_kv05.jpg" alt="" />
                </div>
            </div>
        </section>

        <!-- ＃ゆるへんろって？ -->
        <section class="contents_width mb_100">
            <!-- ＃ゆるへんろって？ -->
            <div id="luxy" class="content_width luxy_posi">
                <img src="<?php echo get_template_directory_uri();
                            ?>/assets/img/asiraikumo_waku.png" alt="背景画像1" class=" luxy-el luxy_pic1" data-speed-x="-5" data-offset="-10" data-horizontal="1">
                <img src="<?php echo get_template_directory_uri();
                            ?>/assets/img/asiraikumo.png" alt="背景画像2" class="luxy-el luxy_pic2" data-speed-x="-10" data-offset="-20" data-horizontal="1">

                <img src="<?php echo get_template_directory_uri();
                            ?>/assets/img/asiraikuno_waku2.png" alt="背景画像3" class=" luxy-el luxy_pic3" data-speed-x="-5" data-offset="-10" data-horizontal="1">

                <img src="<?php echo get_template_directory_uri();
                            ?>/assets/img/asiraikuno2.png" alt="背景画像4" class="luxy-el luxy_pic4" data-speed-x="-10" data-offset="-20" data-horizontal="1">
            </div>
            <div class="h2_box">
                <h2 class="h2_bg mb_40">＃ゆるへんろって？</h2>
            </div>

            <div class="top_flex_dc flex">
                <div class="top_bc mb_20">
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
            <div class="mb_80">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_illust01.png" alt="参拝のイメージ" />
            </div>


            <!-- おへんろの作法について -->
            <div>
                <h3 class="h3_bg mb_40">おへんろの作法について</h3>
                <div class="top_flexset1 flex">
                    <!-- 参拝の画像 -->
                    <div class="top_patern">
                        <div class="top_patern1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_sanpai.jpg" alt="参拝する女性" class="top_patern1Img">
                            <div class="top_patern2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hana.png" alt="花の飾り">
                            </div>
                        </div>
                    </div>

                    <div class="js-fadeUp sec_mb40">
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
                <div class="h2_box">
                    <h2 class="h2_bg mb_40">参拝スタイル</h2>
                </div>
                <div class="top_flexset2 flex">
                    <!-- 参拝スタイルの画像 -->
                    <div class="top_patern">
                        <div class="top_patern1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_style.jpg" alt="参拝する女性">
                            <div class="top_patern2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hana.png" alt="花の飾り">
                            </div>
                        </div>
                    </div>

                    <div class="js-fadeUp sec_mb40">
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
            <div class="h2_box">
                <h2 class="h2_bg">コース紹介</h2>
            </div>

            <!-- コース紹介の紹介文 -->
            <div class="text_c mb_40">
                徳島二十三ヶ所をゆったり1日で巡れる<br />
                5コースのご案内
            </div>

            <!-- 入門コース -->
            <div class="mb_80">
                <!-- イメージ画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_illust02.png" alt="入門コースイメージ画像" class="mb_40" />

                <!-- ボタンと紹介文 -->
                <div class="btn_and_description_area mb_80 flex">
                    <a href="<?php echo home_url('course/easy'); ?>">
                        <p class="course_btn btn1">
                            ゆるへんろ　入門コース<br />第一番札所～第三番札所&gt;&gt;&gt;
                        </p>
                    </a>
                    <div class="js-fadeUp small_cap">
                        ３つのお寺を巡る入門コース<br />
                        おへんろを始めるならまずはここから！<br />
                        歩き遍路の雰囲気を味わってみたい方におすすめ！
                    </div>
                </div>
            </div>

            <!-- チャレンジコース -->
            <div>
                <!-- イメージ画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_illust03.png" alt="チャレンジコースイメージ画像" class="mb_40" />

                <!-- チャレンジコース紹介文 -->
                <div class="btn_description">
                    「入門歩きへんろコース」で自信がついたら<br />
                    もう少し遠くのお寺の参拝にも挑戦してみませんか？
                </div>

                <!-- ボタンと紹介文 -->
                <!-- 県北　車コース -->
                <div class="btn_and_description_area flex">
                    <a href="<?php echo home_url('course/north'); ?>">
                        <p class="course_btn btn2">
                            県北　車コース<br>第一番札所～第六番札所 &gt;&gt;&gt;
                        </p>
                    </a>
                    <p class="js-fadeUp small_cap">
                        お寺メインでお遍路を体験したい方におすすめ！<br />
                        スタート地点から区切りのいいところまで半日で回れます。
                    </p>
                </div>

                <!-- 県西　車コース -->
                <div class="btn_and_description_area flex">
                    <a href="<?php echo home_url('course/west'); ?>">
                        <p class="course_btn btn3">
                            県西　車コース<br />第七番札所～第十二番札所
                            &gt;&gt;&gt;
                        </p>
                    </a>
                    <div class="js-fadeUp small_cap">
                        チャレンジ精神のある方におすすめ！<br />少し歩かなければいけない難所があります。
                    </div>
                </div>

                <!-- 県南　車コース -->
                <div class="btn_and_description_area flex">
                    <a href="<?php echo home_url('course/south'); ?>">
                        <p class="course_btn btn4">
                            県南　車コース<br />第十八番札所～第二十三番札所
                            &gt;&gt;&gt;
                        </p>
                    </a>
                    <div class="js-fadeUp small_cap">
                        自然に親しみたい方におすすめ！<br />山に海、車窓からの景色も楽しめます。
                    </div>
                </div>
                <!-- 市内　徒歩コース -->
                <div class="btn_and_description_area flex">
                    <a href="<?php echo home_url('course/city'); ?>">
                        <p class="course_btn btn5">
                            市内　徒歩コース<br />第十三番札所～第十七番札所
                            &gt;&gt;&gt;
                        </p>
                    </a>
                    <div class="js-fadeUp small_cap">
                        短い距離で多くのお寺を巡りたい方におすすめ！<br />すべてのお寺が徳島市内にあるため、アクセスがよいです。<br />徳島市内五ヶ所まいりとも呼ばれています。
                    </div>
                </div>
            </div>
        </section>

        <!-- instagram -->
        <section class="contents_width">
            <div>
                <p class="text_c">＼コースを巡ったら「＃ゆるへんろ」を付けてつぶやこう！／</p>
            </div>
            <h2 class="h3_bg">Instagram</h2>

            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </section>
    </article>
</main>
<!-- mainここまで-->
<?php get_footer(); ?>
