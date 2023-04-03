<?php
/*Template Name: single-course
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main>
    <div class="main_inner">
        <h1 class="h1_bg">コース紹介</h1>
        <section class="sec_mb40">
            <p class="big_cap">
                            コース紹介全体の簡単なキャプション
                            <br />
                            コース紹介全体の簡単なキャプション
                            <br />
                            コース紹介全体の簡単なキャプション
                        </p>
        </section>

        <div class="course_tab">
            <!-- タブ -->
            <ul class="course_tabWrap flex">
                <li><a href="#course_cont1">入門コース</a></li>
                <li><a href="#course_cont2">車入門コース</a></li>
                <li><a href="#course_cont3">県西コース</a></li>
                <li><a href="#course_cont4">県南コース</a></li>
                <li><a href="#course_cont5">市街地コース</a></li>
            </ul>

            <!-- タブ内容 -->
            <div class="course_mainWrap">
                <div id="course_cont1" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="middle_cap mb_100">
                                    <?php
                                ?>

                                </p>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ<br>
                            <?php
                                ?>
                        </div>
                    </section>

                    <section class="sec_mb mb_40">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>

                        <?php $args = array(
        'post_type' => 'course1',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <p class="mb_20"><?php the_field('c_time')?></p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php the_field('a_thumbnail')?>" alt="霊山寺の画像" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                            </p>
                                <div class=" button18">
                                    <?php $more = get_field('more');
                                    if($more): ?>
                                    <a href="<?php the_field('link')?>" target="_blank">
                                        <p>もっと知る
                                        </p>
                                    </a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                <img src="<?php the_field('c_icon')?>" alt="">
                            </div>
                            <div class="course_contTime">
                                <?php the_field('a_time')?>

                            </div>

                        </div>
                        <?php endwhile;?>
                        <?php endif;?>

                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="course_cont2" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ</div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>

                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="course_cont3" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ</div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>

                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="course_cont4" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ</div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>

                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>
                        </div>
                    </section>
                </div>
                <div id="course_cont5" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br />
                                    コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ</div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>

                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/kv.png" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            </p>
                                <div class="button18">
                                    <a href="#">
                                        <p>もっと知る</p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>

                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p>タイトル(施設名)</p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>