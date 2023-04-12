<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">寺社一覧</h1>
    <article class="main_inner">
        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">寺社一覧</h2>
            <!-- 寺社カード一覧が並ぶ -->
            <div class="shop_info_list flex">
                <?php
                $temple_args = array(
                'post_type' => 'temple', // 投稿タイプ名
                'posts_per_page' => -1, // 表示件数
                'order' => 'ASC', // ランダム表示
                );
                $temple_query = new WP_Query($temple_args);
                if ($temple_query->have_posts()) :
                while ($temple_query->have_posts()) : $temple_query->the_post(); ?>
                <div class="shop_info_card">
                    <!-- 寺社カードのデザイン -->
                    <div class="shop_info_caption">
                        <img src="<?php the_field('t_eyecatch'); ?>" alt="施設の画像" />
                    </div>
                    <!-- 寺社名 -->
                    <div class="shop_info_title">
                        <p><?php the_field('t_numbername'); ?></p>
                    </div>
                    <!-- 周辺施設詳細 -->
                    <div class="shop_info_text">
                        <p>駐車場：<?php the_field('t_parking'); ?></p>
                        <p>TEL：<?php the_field('t_tell'); ?></p>
                        <p>公式HP：<?php the_field('t_url'); ?></p>
                        <p>公式HP：
                                            <?php if (get_field('t_url') != '-') {
                                                echo 'あり';
                                            } else {
                                                echo 'なし';
                                            } ?>
                                        </p>
                    </div>
                    <!-- お気に入りボタン -->
                    <div>
                        <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                    </div>
                </div>
                <?php endwhile ?>
                <?php endif;?>
            </div>
        </section>
    </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
