<!-- コピペしただけ！！！！！！！使うなら要編集！！！！！！！ -->


<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">寺社一覧</h1>
    <article class="main_inner">
        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">寺社一覧</h2>
            <!-- 寺社結果一覧 -->
            <!-- <div class="searchresult_inner"> -->
            <div class="searchresult_content">
                <!--カードここから-->
                <!-- 記事を表示するループ -->
                <?php
                $facility_args = array(
                    'post_type' => 'temple',
                    'posts_per_page' => -1,
                    'order' => 'asc'
                );
                $facility_query = new WP_Query($facility_args);
                if ($facility_query->have_posts()) :
                    while ($facility_query->have_posts()) : $facility_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="searchresultList">
                                <div class="searchresultList_thumb">
                                    <img src="<?php the_field('t_eyecatch'); ?>" alt="寺社のアイキャッチ画像" />
                                </div>
                                <div class="searchresultList_data">
                                    <h4 class="h4_bg text_c"><?php the_field('t_numbername'); ?></h4>
                                    <!-- <p>拝観時間：10時～17時</p> -->
                                    <!-- <p>定休日：火曜日</p> -->
                                    <p>駐車場：<?php the_field('t_parking'); ?></p>
                                    <p>TEL：<?php the_field('t_tell'); ?></p>
                                    <p>公式HP：
                                        <?php if (get_field('t_url') != '-') {
                                            echo 'あり';
                                        } else {
                                            echo 'なし';
                                        } ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                        <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div>
                        <p>条件に合う検索結果はありませんでした。</p>
                    </div>
                <?php endif; ?>
                <!--カードここまで-->
            </div>
        </section>
    </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
