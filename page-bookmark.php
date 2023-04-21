<?php
/*Template Name:page-bookmark
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="h1_bg">マイブックマーク</h1>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <article class="main_inner">
        <section class="big_cap mb_100">
            <div class="course_pcW1">
                <p>
                    ・本マイブックマークページはお寺紹介または検索ページでブックマークした情報が表示されます。<br>
                    ・ブックマークにはcookieを使用しています。<br>
                    ・cookieの削除に伴いブックマークした情報も削除されます。
                </p>
            </div>
        </section>

        <!-- 寺社ブックマーク -->
        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">お寺ブックマーク</h2>

            <!-- 寺社ブックマークカードが並ぶ -->
            <div class="shop_info_list flex">
                <?php
                $temple_favorites = get_user_favorites();
                if ($temple_favorites) :
                    $temple_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $temple_favorites_query = new WP_Query(array(
                        'post_type' => 'temple',
                        'posts_per_page' => -1,
                        'ignore_sticky_posts' => true,
                        'post__in' => $temple_favorites,
                        'paged' => $temple_paged,
                    ));
                    if ($temple_favorites_query->have_posts()) : while ($temple_favorites_query->have_posts()) : $temple_favorites_query->the_post();
                ?>

                            <!-- 寺社カードのデザイン -->
                            <a href="<?php the_permalink(); ?>">
                                <div class="shop_info_card">
                                    <div class="shop_info_caption">
                                        <img src="<?php the_field('t_eyecatch'); ?>" alt="寺社の画像" />
                                    </div>

                                    <!-- お気に入りボタン -->
                                    <div class="shop_info_fav">
                                        <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                                    </div>

                                    <div class="shop_info_title">
                                        <p><?php the_field('t_numbername'); ?></p>
                                    </div>
                                    <div class="shop_info_text">
                                        <p>本尊：<?php the_field('honzon'); ?></p>
                                        <p>所在地：<?php the_field('t_area'); ?></p>
                                        <p>TEL：<?php the_field('t_tell'); ?></p>

                                    </div>
                                </div>
                            </a>
                            <!-- 寺社カードのデザイン -->

                        <?php endwhile ?>
                    <?php endif;
                    wp_reset_postdata(); ?>
                <?php else : ?>
                    <p class="text-center">ブックマーク登録がありません。</p>
                <?php endif ?>
            </div>
            <!-- 寺社ブックマークカードが並ぶエリア -->
        </section>

        <!-- 周辺施設ブックマーク -->
        <section class="mb_100 contents_width">
            <h2 class="h3_bg mb_40">周辺施設ブックマーク</h2>

            <!-- 周辺施設ブックマークカードが並ぶエリア -->
            <div class="shop_info_list flex">
                <?php
                $favorites = get_user_favorites();
                if ($favorites) :
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $favorites_query = new WP_Query(array(
                        'post_type' => 'facility',
                        'posts_per_page' => -1,
                        'ignore_sticky_posts' => true,
                        'post__in' => $favorites,
                        'paged' => $paged,
                    ));
                    if ($favorites_query->have_posts()) : while ($favorites_query->have_posts()) : $favorites_query->the_post();
                ?>

                            <!-- 周辺施設カードのデザイン -->
                            <a href="<?php the_permalink(); ?>">
                                <div class="shop_info_card">
                                    <div class="shop_info_caption">
                                        <img src="<?php the_field('f_pic1'); ?>" alt="施設の画像" />
                                    </div>

                                    <!-- お気に入りボタン -->
                                    <div class="shop_info_fav">
                                        <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                                    </div>

                                    <div class="shop_info_title">
                                        <p><?php the_field('f_name'); ?></p>
                                    </div>
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
                                    <div class="shop_info_article">
                                        <p>
                                            <?php the_field('f_message'); ?>
                                        </p>
                                    </div>

                                </div>
                                <!-- 周辺施設カードのデザイン -->

                            <?php endwhile ?>
                        <?php endif; ?>
                            </a>
                            wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>ブックマーク登録がありません。</p>
                        <?php endif; ?>
            </div>
            <!-- 周辺施設ブックマークカードが並ぶエリア -->
        </section>

    </article>
</main>

<?php get_footer(); ?>
