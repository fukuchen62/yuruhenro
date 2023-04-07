<?php get_header(); ?>
<!-- mainここから -->
<main>
    <div class="main_inner">
        <!-- h1 -->
        <div class="h1_bg">
            <h1>寺院検索</h1>
        </div>

        <!-- 検索フォームを読み込む -->
        <?php get_search_form(); ?>

        <?php
        $area_slug = get_query_var('area');
        $search_slug = get_query_var('searchh');

        // クエリ作成
        $args = [
            'post_type' => 'temple',             //農業体験を検索
            'posts_per_page' => -1,             //全件表示
            'orderby' => 'rand',                //ランダムで表示する    2022.10.15 大北
        ];
        $taxquerysp = ['relation' => 'AND'];    // area，event_type，season，vege_type，target をAND検索

        // 選択していない場合も考慮して条件で絞り込む。
        if (!empty($area_slug)) {
            $taxquerysp[] = [
                'taxonomy' => 'area',           //タクソノミー：『エリア』
                'terms' => $area_slug,          //スラッグ名
                'field' => 'slug',              //スラッグ指定
            ];
        }

        // 選択していない場合も考慮して条件で絞り込む。
        if (!empty($area_search)) {
            $taxquerysp[] = [
                'taxonomy' => 'searchh',           //タクソノミー：『』
                'terms' => $area_search,          //スラッグ名
                'field' => 'slug',              //スラッグ指定
            ];
        }

                $args['tax_query']= $taxquerysp;       // 絞り込んだ情報を $args に代入する。
        $the_query = new WP_Query($args);       // wpループ（$the_query）作成する。
        ?>





        <section class="sec_mb40">
            <h2 class="h2_bg">条件検索結果</h2>

            <!-- サービス紹介 -->
            <section class="sec_mb40">
                <div class="searchresult_inner">
                    <!-- <div class="searchresult_title_area">
                        <h3 class="h3_bg">検索結果</h3><br>
                    </div> -->
                    <div class="searchresult_content">
                        <!--カードここから-->

                        <!-- 記事を表示するループ -->
                        <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="searchresultList">
                                <div class="searchresultList_thumb">
                                    <img src="<?php the_field('t_eyecatch'); ?>" alt="寺社のアイキャッチ画像" />
                                </div>
                                <div class="searchresultList_data">
                                    <h4 class="h4_bg"><?php the_field('t_numbername'); ?></h4>
                                    <p>営業時間：10時～17時</p>
                                    <p>定休日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <!-- <a href="#">
            <div class="searchresultList_btn">詳しく見る
            </div>
            </a> -->
                            </div>
                        </a>
                        <?php wp_reset_postdata(); ?>

                        <?php endwhile; ?>
                        <?php else : ?>
                        <h4>
                    条件に合う検索結果はありませんでした。
                </h4>
                        <?php endif; ?>
                        <!--カードここまで-->



                    </div>
            </section>
    </div>
    </section>
    </div>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
