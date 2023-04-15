<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">条件検索</h1>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <article class="main_inner">

        <!-- 検索フォームを読み込む -->
        <?php get_search_form(); ?>

        <?php
        $area_slug = get_query_var('area');
        $search_slug = get_query_var('searchh');

        // クエリ作成
        $args = [
            'post_type' => 'temple',             //寺社を検索
            'posts_per_page' => -1,             //全件表示
            'order' => 'ASC',                //ASC
        ];
        $taxquerysp = ['relation' => 'AND'];

        // 選択していない場合も考慮して条件で絞り込む。
        if (!empty($area_slug)) {
            $taxquerysp[] = [
                'taxonomy' => 'area',           //タクソノミー：『エリア』
                'terms' => $area_slug,          //スラッグ名
                'field' => 'slug',              //スラッグ指定
                'operator' => 'IN'
            ];
        }

        // 選択していない場合も考慮して条件で絞り込む。
        if (!empty($search_slug)) {
            $taxquerysp[] = [
                'taxonomy' => 'searchh',           //タクソノミー：『寺院内設備』
                'terms' => $search_slug,          //スラッグ名
                'field' => 'slug',              //スラッグ指定
                'operator' => 'AND'
            ];
        }

        $args['tax_query'] = $taxquerysp;       // 絞り込んだ情報を $args に代入する。
        $the_query = new WP_Query($args);       // wpループ（$the_query）作成する。
        $count = $the_query->post_count; //検索結果件数表示

        ?>





        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">お寺の条件検索結果(<?php echo $count ?>件)</h2>

            <!-- 寺社結果一覧 -->
            <!-- <div class="searchresult_inner"> -->
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

                        <!-- お気に入りボタン -->
                        <div class="shop_info_fav">
                            <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                        </div>

                        <div class="searchresultList_data">
                            <h3 class="h4_bg text_c"><?php the_field('t_numbername'); ?></h3>
                            <!-- <p>拝観時間：10時～17時</p> -->
                            <!-- <p>定休日：火曜日</p> -->
                            <p>本尊：<?php the_field('honzon'); ?></p>
                            <p>所在地：<?php the_field('t_area'); ?></p>
                            <p>TEL：<?php the_field('t_tell'); ?></p>

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

        <!-- 周辺施設の検索結果表示テスト -->
        <?php
        $area_slug = get_query_var('area');
        $search_slug = get_query_var('searchh');
        // クエリ作成
        $args = [
            'post_type' => 'facility',             //周辺施設を検索
            'posts_per_page' => -1,             //全件表示
            'orderby' => 'rand',                //ランダムで表示する
        ];
        $taxquerysp = ['relation' => 'AND'];
        // 選択していない場合も考慮して条件で絞り込む。
        if (!empty($area_slug)) {
            $taxquerysp[] = [
                'taxonomy' => 'area',           //タクソノミー：『エリア』
                'terms' => $area_slug,          //スラッグ名
                'field' => 'slug',              //スラッグ指定
                'operator' => 'IN'
            ];
        }
        // // 選択していない場合も考慮して条件で絞り込む。
        // if (!empty($search_slug)) {
        //     $taxquerysp[] = [
        //         'taxonomy' => 'searchh',           //タクソノミー：『寺院内設備』
        //         'terms' => $search_slug,          //スラッグ名
        //         'field' => 'slug',              //スラッグ指定
        //         'operator' => 'AND'
        //     ];
        // }
        $args['tax_query'] = $taxquerysp;       // 絞り込んだ情報を $args に代入する。
        $the_query = new WP_Query($args);       // wpループ（$the_query）作成する。
        $count = $the_query->post_count; //検索結果件数表示
        ?>
        <!-- エリアを使った周辺施設の検索結果 -->
        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">周辺施設の条件検索結果(<?php echo $count ?>件)</h2>
            <!-- 周辺施設結果一覧 -->
            <!-- <div class="searchresult_inner"> -->
            <div class="searchresult_content">
                <!--カードここから-->
                <!-- 記事を表示するループ -->
                <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>
                <div class="searchresultList">
                    <div class="searchresultList_thumb">
                        <img src="<?php the_field('f_pic1'); ?>" alt="施設の画像" />
                    </div>

                    <!-- お気に入りボタン -->
                    <div class="shop_info_fav">
                        <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                    </div>

                    <div class="searchresultList_data">
                        <h3 class="h4_bg text_c"><?php the_field('f_name'); ?></h3>
                        <p>営業時間：<?php the_field('f_hours'); ?></p>
                        <p>定休日：<?php the_field('f_holiday'); ?></p>
                        <p>駐車場：<?php the_field('f_parking'); ?></p>
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
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
                <?php else : ?>
                <div>
                    <p>条件に合う検索結果はありませんでした。</p>
                </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- エリアを使った周辺施設の検索結果ここまで -->
    </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
