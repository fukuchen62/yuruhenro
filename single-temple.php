<?php
/*Template Name: single-temple
*/ ?>
<?php get_header(); ?>
<main>
    <h1 class="h1_bg">お寺紹介</h1>
    <?php get_template_part('template-parts/breadcrumb'); ?>

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
            <div class="temple_img mb_80">
                <img src="<?php the_field('t_eyecatch') ?>" alt="お寺の写真" />
            </div>
        </section>

        <!-- お寺について -->
        <section class="contents_width mb_80">
            <h2 class="h3_bg mb_40"><ruby><?php the_field('t_name') ?><rt><?php the_field('t_kana') ?></rt></ruby>について</h2>

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
                <?php the_field('t_map'); ?>
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
                        <a href="<?php the_permalink(); ?>">
                            <div class="shop_info_card">
                                <div class="shop_info_caption">
                                    <img src="<?php the_field('f_pic1'); ?>" alt="施設の画像" />
                                </div>

                                <!-- ブックマークボタン -->
                                <div class="shop_info_fav">
                                    <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                                </div>

                                <div class="shop_info_title">
                                    <p><?php the_field('f_name'); ?></p>
                                </div>

                                <div class="shop_info_text">
                                    <p>営業時間：<?php the_field('f_hours'); ?></p>
                                    <p>定休日：<?php the_field('f_holiday'); ?></p>
                                    <p>TEL：<?php the_field('f_tell'); ?></p>
                                    <p>住所：<?php the_field('f_address'); ?></p>
                                    <p>公式HP：
                                        <?php if (get_field('f_url') != '-') { ?>
                                            <a href="<?php the_field('f_url'); ?>" target=_blank class="link">ここをクリック</a>
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

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                        </a>
                        <?php wp_reset_postdata(); ?>
            </div>
        </section>

        <!-- コース一覧 -->
        <section class="contents_width mb_150">
            <h2 class="h3_bg mb_40">コース一覧</h2>
            <div class="course_flex">
                <a href="<?php echo home_url('course/easy'); ?>">
                    <p class="course_btn btn1">
                        ゆるへんろ　入門コース<br />一番札所～三番札所
                    </p>
                </a>
                <a href="<?php echo home_url('course/north'); ?>">
                    <p class="course_btn btn2">
                        県北　車コース<br>一番札所～六番札所
                    </p>
                </a>
                <a href="<?php echo home_url('course/west'); ?>">
                    <p class="course_btn btn3">
                        県西　車コース<br />七番札所～十二番札所
                    </p>
                </a>
                <a href="<?php echo home_url('course/south'); ?>">
                    <p class="course_btn btn4">
                        県南　車コース<br />十八番札所～二十三番札所</p>
                </a>
                <a href="<?php echo home_url('course/city'); ?>">
                    <p class="course_btn btn5">
                        市内　徒歩コース<br />十三番札所～十七番札所
                    </p>
                </a>
            </div>
        </section>
    </article>
</main>
<!-- wrap -->
<?php get_footer(); ?>
