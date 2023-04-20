<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">周辺施設一覧</h1>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <article class="main_inner">
        <section class="mb_40">
            <div class="course_pcW1">
                <p class="big_cap">
                    本サイト「＃ゆるへんろ」で巡る徳島二十三ヶ所の周辺施設一覧ページです。
                    クリックすると各施設の詳細ページがご覧いただけます。<br>
                    気になる施設をブックマーク<i class="fa-regular fa-bookmark"></i>すると<a href="<?php echo home_url('bookmark'); ?>" class="link">マイブックマーク</a>ページに登録出来ます。
                </p>
            </div>
        </section>
        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">周辺施設一覧</h2>
            <!-- 寺社カード一覧が並ぶ -->
            <div class="shop_info_list flex">
                <?php
                $temple_args = array(
                    'post_type' => 'facility', // 投稿タイプ名
                    'posts_per_page' => -1, // 表示件数
                    'order' => 'ASC', // 昇順
                );
                $temple_query = new WP_Query($temple_args);
                if ($temple_query->have_posts()) :
                    while ($temple_query->have_posts()) : $temple_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="shop_info_card">
                                <!-- 施設カードのデザイン -->
                                <div class="shop_info_caption">
                                    <img src="<?php the_field('f_pic1'); ?>" alt="施設の画像" />
                                </div>
                                <!-- ブックマークボタン -->
                                <div class="shop_info_fav">
                                    <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                                </div>
                                <!-- 施設名 -->
                                <div class="shop_info_title">
                                    <p><?php the_field('f_name'); ?></p>
                                </div>
                                <!-- 寺社詳細 -->
                                <div class="shop_info_text">
                                    <p>営業時間：<?php the_field('f_hours'); ?></p>
                                    <p>定休日：<?php the_field('f_holiday'); ?></p>
                                    <p>住所：<?php the_field('f_address'); ?></p>
                                    <p>TEL：<?php the_field('f_tell'); ?></p>
                                    <p>公式HP：
                                        <?php if (get_field('f_url') != '-') { ?>
                                            <a href="<?php the_field('f_url'); ?>" target=_blank class="link">ここをクリック</a>
                                        <?php } else {
                                            echo 'なし';
                                        } ?>
                                    </p>
                                </div>

                            </div>
                        </a>
                    <?php endwhile ?>
                <?php endif; ?>
            </div>
        </section>
    </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
