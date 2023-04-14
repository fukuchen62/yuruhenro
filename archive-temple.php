<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">寺社一覧</h1>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <article class="main_inner">
        <section class="sec_mb40">
            <div>
                <p class="big_cap">
                    本サイト「＃ゆるへんろ」で巡る徳島二十三ヶ所のお寺の一覧ページです。
                    クリックすると各お寺の詳細ページに飛びます。<br>
                    気になるお寺をブックマーク<i class="fa-regular fa-bookmark"></i>すると<a href="<?php echo home_url('bookmark'); ?>" class="link">マイブックマーク</a>ページに登録出来ます。
                </p>
            </div>
        </section>
        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">寺社一覧</h2>
            <!-- 寺社カード一覧が並ぶ -->
            <div class="shop_info_list flex">
                <?php
                $temple_args = array(
                    'post_type' => 'temple', // 投稿タイプ名
                    'posts_per_page' => -1, // 表示件数
                    'order' => 'ASC', // 昇順
                );
                $temple_query = new WP_Query($temple_args);
                if ($temple_query->have_posts()) :
                    while ($temple_query->have_posts()) : $temple_query->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="shop_info_card">
                        <!-- 寺社カードのデザイン -->
                        <div class="shop_info_caption">
                            <img src="<?php the_field('t_eyecatch'); ?>" alt="施設の画像" />
                        </div>
                        <!-- 寺社名 -->
                        <div class="shop_info_title">
                            <p><?php the_field('t_numbername'); ?></p>
                        </div>
                        <!-- 寺社詳細 -->
                        <div class="shop_info_text">
                            <p>本尊：<?php the_field('honzon'); ?></p>
                            <p>所在地：<?php the_field('t_area'); ?></p>

                            <p>TEL：<?php the_field('t_tell'); ?></p>
                        </div>
                        <!-- ブックマークボタン -->
                        <div>
                            <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
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
