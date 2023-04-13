<?php
/*Template Name: single-temple
*/ ?>
<?php get_header(); ?>
<main>
    <h1 class="h1_bg">お寺紹介</h1>
    <article class="main_inner">
        <section class="contents_width">
            <!-- お寺名 -->
            <div class="h2_box">
                <h2 class="h2_bg"><?php the_field('t_numbername'); ?></h2>
            </div>

            <!-- ブックマークボタン -->
            <div class="bookmark">
                <p><?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?></p>
            </div>

            <!-- お寺メイン画像 -->
            <div class="temple_img">
                <img src="<?php the_field('t_eyecatch') ?>" alt="お寺の写真" />
            </div>
        </section>

        <!-- お寺について -->
        <section class="contents_width mb_80">
            <h2 class="h3_bg mb_40"><?php the_field('t_name') ?>について</h2>

            <div class="temple_about">
                <!-- おすすめ画像 -->
                <ul class="slider2">
                    <li>
                        <img src="<?php the_field('t_pic1') ?>" alt="寺社の風景1" />
                    </li>
                    <li>
                        <img src="<?php the_field('t_pic2') ?>" alt="寺社の風景2" />
                    </li>
                    <li>
                        <img src="<?php the_field('t_pic3') ?>" alt="寺社の風景3" />
                    </li>
                </ul>

                <!-- 説明文 -->
                <div class="temple_about_text">
                    <p class="small_cap">
                        <?php the_field('t_description') ?>
                    </p>
                </div>
            </div>
        </section>

        <!-- お寺情報 -->
        <section class="contents_width mb_80">
            <h2 class="h3_bg mb_40">お寺情報</h2>

            <div class="temple_info flex">

                <!-- google My map -->
                <?php the_field('t_map') ?>;
                <!-- google My map -->

                <div>
                    <table class="temple_info_table">
                        <tr>
                            <th>本尊</th>
                        </tr>
                        <tr>
                            <td><?php the_field('honzon') ?></td>
                        </tr>
                        <tr>
                            <th>真言</th>
                        </tr>
                        <tr>
                            <td>
                                <?php the_field('mantra') ?>
                            </td>
                        </tr>
                        <tr>
                            <th>宿坊</th>
                        </tr>
                        <tr>
                            <td><?php the_field('inn') ?></td>
                        </tr>
                        <tr>
                            <th>電話</th>
                        </tr>
                        <tr>
                            <td><?php the_field('t_tell') ?></td>
                        </tr>
                        <tr>
                            <th>所在地</th>
                        </tr>
                        <tr>
                            <td><?php the_field('t_area') ?></td>
                        </tr>
                        <tr>
                            <th>公式HP</th>
                        </tr>
                        <tr>
                            <td><?php if (get_field('t_url') != '-') { ?>
                                <a href="<?php the_field('t_url'); ?>" target=_blank class="link"><?php the_field('t_name'); ?></a>
                                <?php } else {
                                    echo 'なし';
                                } ?>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </section>

        <!-- 周辺施設 -->
        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">周辺施設</h2>
            <!-- 周辺施設カードが並ぶエリア -->
            <div class="shop_info_list flex">

                <?php
                $terms = get_the_terms($post->ID, 'area');
                foreach ($terms as $term) {
                    $term_slug = $term->slug; // 現在表示している投稿が所属しているタームを取得
                }

                $facility_args = array(
                    'post_type' => 'facility', // 投稿タイプ名
                    'post__not_in' => array($post->ID), // 現在表示している投稿を除外
                    'posts_per_page' => 3, // 表示件数
                    'orderby' => 'rand', // ランダム表示
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'area', // タクソノミー名
                            'field' => 'slug',
                            'terms' => $term_slug, // 取得したタームを指定
                        )
                    )
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
                    <p class="course_btn btn1">
                        ＃ゆるへんろ　入門コース<br />第1番札所～第3番札所 &gt;&gt;&gt;
                    </p>
                </a>
                <a href="<?php echo home_url('course/north'); ?>">
                    <p class="course_btn btn2">
                        県北　車コース<br />第1番札所～第6番札所&gt;&gt;&gt;
                    </p>
                </a>
                <a href="<?php echo home_url('course/west'); ?>">
                    <p class="course_btn btn3">
                        県西　車コース<br />第7番札所～第12番札所&gt;&gt;&gt;
                    </p>
                </a>
                <a href="<?php echo home_url('course/south'); ?>">
                    <p class="course_btn btn4">
                        県南　車コース<br />第18番札所～第23番札所&gt;&gt;&gt; </p>
                </a>
                <a href="<?php echo home_url('course/city'); ?>">
                    <p class="course_btn btn5">
                        市内　徒歩コース<br />第13番札所～第17番札所&gt;&gt;&gt;
                    </p>
                </a>
            </div>
        </section>
    </article>
</main>
<!-- wrap -->
<?php get_footer(); ?>
