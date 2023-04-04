<?php
/*Template Name: single-temple
*/ ?>
<?php get_header(); ?>
<main>
    <div class="main_inner">
        <h1 class="h1_bg">お寺紹介</h1>
        <div>
            <section class="contents_width">
                <h1 class="h2_bg"><?php the_title();?></h1>
                <div class="bookmark">
                    <p>☆</p>
                    <p>ブックマーク</p>
                </div>

                <div class="temple_img">
                    <img src="<?php the_field('t_eyecatch')?>" alt="お寺の写真(霊山寺)" />
                </div>

                <h2 class="h3_bg"><?php the_field('t_name')?>について</h2>

                <div class="temple_about">
                    <div class="temple_about_slider">
                        <img src="<?php the_field('t_pic1')?>" alt=" 1" />
                        <img src="<?php the_field('t_pic2')?>" alt="2" />
                        <img src="<?php the_field('t_pic3')?>" alt="3" />
                        <img src="<?php the_field('t_pic1')?>" alt="4" />
                    </div>

                    <div class="temple_about_text">
                        <p class="small_cap">
                            <?php the_field('t_discription')?>
                </p>
                    </div>
                </div>

                <h2 class="h3_bg">お寺情報</h2>
                <div class="temple_info">
                    <div class="temple_info_map">
                        <!-- google My map -->
                        <?php the_field('t_map')?>;
                    </div>
                    <!-- google My map -->

                    <table class="temple_info_table">
                        <tr>
                            <th>本尊</th>
                        </tr>
                        <tr>
                            <td><?php the_field('honzon')?></td>
                        </tr>
                        <tr>
                            <th>真言</th>
                        </tr>
                        <tr>
                            <td>
                                <?php the_field('mantra')?>
                            </td>
                        </tr>
                        <tr>
                            <th>宿坊</th>
                        </tr>
                        <tr>
                            <td><?php the_field('inn')?></td>
                        </tr>
                        <tr>
                            <th>電話</th>
                        </tr>
                        <tr>
                            <td><?php the_field('t_tell')?></td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                        </tr>
                        <tr>
                            <td><?php the_field('t_area')?></td>
                        </tr>
                        <tr>
                            <th>公式HP</th>
                        </tr>
                        <tr>
                            <td><a href="<?php echo get_field('t_url')?>"><?php the_field('t_url')?></a></td>
                        </tr>
                    </table>
                </div>
            </section>

            <section class="shop_info contents_width">
                <h2 class="h3_bg">周辺施設</h2>
                <div class="shop_info_list">
                    <?php
$taxonomy_slug = "area";
$taxonomy = get_the_terms($post->ID,$taxonomy_slug);
// print_r($taxonomy[0]->slug);
$facility_args = array(
'post_type' => 'facility',
'posts_per_page' => 3,
'taxonomy' => $taxonomy[0]->slug,
);
$facility_query = new WP_Query( $facility_args );
        if ( $facility_query->have_posts() ) :
        while ( $facility_query->have_posts() ) : $facility_query->the_post(); ?>

                    <div class="shop_info_card mb_40">
                        <div class="shop_info_caption">
                            <img src="<?php the_field('f_pic1'); ?>" alt="各施設の画像" />
                        </div>
                        <div class="shop_info_title">
                            <p><?php the_field('f_name'); ?></p>
                        </div>
                        <div class="shop_info_text">
                            <p>営業時間：<?php the_field('hours'); ?></p>
                            <p>休業日：<?php the_field('holiday'); ?></p>
                            <p>駐車場：<?php the_field('f_parking'); ?></p>
                            <p>TEL：<?php the_field('f_tell'); ?></p>
                            <p>公式HP：<?php the_field('f_url'); ?></p>
                        </div>


                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                    <?php wp_reset_postdata(); ?>


                    <!-- <div class="shop_info_card">
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
                    </div> -->
                </div>
            </section>

            <section class="course contents_width">
                <h2 class="h3_bg">コース一覧</h2>
                <button class="course_btn btn1">
                    ＃ゆるへんろ　入門コース<br />第１番札所～第3番札所＞＞＞
                </button>
                <button class="course_btn btn2">
                    ＃ゆるへんろ　入門コース<br />第１番札所～第3番札所＞＞＞
                </button>
                <button class="course_btn btn3">
                    ＃ゆるへんろ　入門コース<br />第１番札所～第3番札所＞＞＞
                </button>
                <button class="course_btn btn4">
                    ＃ゆるへんろ　入門コース<br />第１番札所～第3番札所＞＞＞
                </button>
                <button class="course_btn btn5">
                    ＃ゆるへんろ　入門コース<br />第１番札所～第3番札所＞＞＞
                </button>
            </section>
        </div>
    </div>
</main>
</div>
<!-- wrap -->
<?php get_footer(); ?>
