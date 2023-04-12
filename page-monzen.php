<?php /*
Template Name:page-monzen
*/ ?>
<?php get_header(); ?>
<main>
    <h1 class="h1_bg">施設紹介</h1>
    <article class="main_inner">
        <section class="contents_width">
            <div class="h2_box">
                <h2 class="h2_bg">霊山寺　門前一番街</h2>
            </div>

            <!-- ブックマークボタン -->

            <!-- 門前一番街アイキャッチ画像 -->
            <div class="temple_img mb_80">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/monzen_03.jpg" alt="門前一番街" />
            </div>

            <!-- 門前一番街詳細1 -->
            <section class="contents_width mb_80">
                <div class="h2_box">
                    <h2 class="h3_bg mb_40">門前一番街について</h2>
                </div>

                <div class="temple_about">
                    <!-- おすすめ画像 -->
                    <ul class="slider2">
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/monzen_01.jpg" alt="門前一番街" />
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/monzen_02.jpg" alt="門前一番街" />
                        </li>
                        <li>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/monzen_03.jpg" alt="門前一番街" />
                        </li>
                    </ul>
                    <!-- 説明文 -->
                    <div class="temple_about_text">
                        <p class="small_cap">
                            四国霊場八十八ヶ所一番札所「霊山寺」の門前にある門前一番街
                            初めてのお遍路初心者にとても心強い場所です。<br>
                            ここでお遍路に必要なものを全てそろえることができます。<br>
                            （事前にネットで注文もできます（配送・当日受取））<br>
                            遍路用品のこと、お遍路のこと、公認先達さんの深い知識と経験を活かしてのアドバイスがいただけます。
                            まずはこちらに立ち寄って、服装、用具、気持ちの準備を整えてお遍路にスタートしましょう。<br>
                            門前名物　焼き餅「あわくった」もおすすめです。<br>
                            粟とよもぎの2種類があります。<br>
                            「お遍路衣装でお参り体験」もできます。<br>
                            レンタル衣装で1時間散策できるので、1番札所や2番札所に参拝できます。
                        </p>
                    </div>
                </div>
            </section>

            <!-- 門前一番街詳細2 -->
            <section class="contents_width mb_80">
                <h2 class="h3_bg mb_40">施設情報</h2>
                <div class="temple_info flex">

                    <!-- google My map -->
                    <iframe class="temple_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.5041875051647!2d134.5021121!3d34.1590249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553716e3402961b%3A0x3fb966db45223c88!2z44CSNzc5LTAyMzYg5b6z5bO255yM6bO06ZaA5biC5aSn6bq755S65p2_5p2x6KW_5bGx55SwMjniiJLvvJY!5e0!3m2!1sja!2sjp!4v1680237341024!5m2!1sja!2sjp">

                    </iframe>
                    <!-- google My map -->

                    <div>
                        <table class="temple_info_table">
                            <tr>
                                <th>名称</th>
                            </tr>
                            <tr>
                                <td>門前一番街</td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                            </tr>
                            <tr>
                                <td>鳴門市大麻町板東字西山田29-6</td>
                            </tr>
                            <tr>
                                <th>電話</th>
                            </tr>
                            <tr>
                                <td>088-689-4388</td>
                            </tr>
                            <tr>
                                <th>営業時間</th>
                            </tr>
                            <tr>
                                <td>7:00～17:00</td>
                            </tr>
                            <tr>
                                <th>定休日</th>
                            </tr>
                            <tr>
                                <td>無休</td>
                            </tr>
                            <tr>
                                <th>公式HP</th>
                            </tr>
                            <tr>
                                <td><a href="https://monzen-ichibangai.com/">https://monzen-ichibangai.com/</a></td>
                            </tr>
                            <tr>
                                <th>駐車場</th>
                            </tr>
                            <tr>
                                <td>あり</td>
                            </tr>
                            <tr>
                                <th>お遍路衣装レンタル料金（1時間）</th>
                            </tr>
                            <tr>
                                <td>
                                    <div>
                                        <p>大人　1,650円（18歳以上）</p>
                                        <p>小人　1,100円（3〜11歳）</p>
                                        <p>学生　1,320円（12〜22歳）</p>
                                        <p>※学割ご利用の方は当日学生証をご提示下さい</p>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </section>

            <!-- 周辺施設 -->
            <section class="mb_80">
                <h2 class="h3_bg mb_40">周辺施設</h2>
                <!-- 周辺施設カードが並ぶエリア -->
                <div class="shop_info_list flex">
                    <?php
                    $facility_args = array(
                        'post_type' => 'facility',
                        'posts_per_page' => 3,
                        'orderby' => 'rand',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'area',
                                'terms' => array('north'),
                                'field' => 'slug'
                            ),
                        ),
                    );
                    $facility_query = new WP_Query($facility_args);
                    if ($facility_query->have_posts()) :
                        while ($facility_query->have_posts()) : $facility_query->the_post(); ?>

                    <!-- 周辺施設カードのデザイン -->
                    <div class="shop_info_card">
                        <div class="shop_info_caption">
                            <img src="<?php the_field('f_pic1'); ?>" alt="施設の画像" />
                        </div>
                        <div class="shop_info_title">
                            <p><?php the_field('f_name'); ?></p>
                        </div>
                        <div class="shop_info_text">
                            <p>営業時間：<?php the_field('hours'); ?></p>
                            <p>定休日：<?php the_field('holiday'); ?></p>
                            <p>駐車場：<?php the_field('f_parking'); ?></p>
                            <p>TEL：<?php the_field('f_tell'); ?></p>
                            <p>公式HP：
                                        <?php if (get_field('f_url') != '-') { ?>
                                            <a href="<?php the_field('f_url'); ?>" target=_blank class="link"><?php the_field('f_name'); ?></a>
                                        <?php } else {
                                            echo 'なし';
                                        } ?>
                                    </p>
                        </div>
                        <div class="shop_info_article">
                            <p>
                                        <?php the_field('f_message'); ?>
                                    </p>
                        </div>
                        <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>

            <!-- コース一覧 -->
            <section class="contents_width mb_150">
                <h2 class="h3_bg mb_40">コース一覧</h2>
                <div class="course_flex">
                    <a href="<?php echo home_url('course/easy'); ?>">
                        <button class="course_btn btn1">
                            ＃ゆるへんろ　入門コース<br />第1番札所～第3番札所 >>>
                        </button>
                    </a>
                    <a href="<?php echo home_url('course/north'); ?>">
                        <button class="course_btn btn2">
                            県北　車コース<br />第1番札所～第6番札所>>>
                        </button>
                    </a>
                    <a href="<?php echo home_url('course/west'); ?>">
                        <button class="course_btn btn3">
                            県西　車コース<br />第7番札所～第12番札所>>>
                        </button>
                    </a>
                    <a href="<?php echo home_url('course/south'); ?>">
                        <button class="course_btn btn4">
                            県南　車コース<br />第18番札所～第23番札所>>> </button>
                    </a>
                    <a href="<?php echo home_url('course/city'); ?>">
                        <button class="course_btn btn5">
                            市内　徒歩コース<br />第13番札所～第17番札所>>>
                        </button>
                    </a>
                </div>
            </section>
    </article>
</main>
<!-- wrap -->
<!-- footerここから -->
<?php get_footer(); ?>
