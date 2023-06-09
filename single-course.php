<?php
/*Template Name: single-course
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">コース紹介</h1>
    <div id="junp_tab">
        <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>

    <article class="main_inner">
        <section class="mb_40">
            <div class="course_pcW1">
                <p class="big_cap">
                    入門歩きへんろコース・車コース（県北、県西、県南）、市内徒歩コースの５つのモデルコースです。<br>
                    自身を見つめ直したい方も、人や自然との触れ合いを求めている方も、健康志向の方も、立ち寄り施設やタイムスジュールなどもご参考に、ぜひお遍路の旅へお出かけください。
                </p>
            </div>
        </section>

        <!-- コースタブ -->
        <section class="course_tab">
            <!-- タブ -->
            <div>
                <ul class="course_tabWrap flex">
                    <li><a id="easy" href="<?php echo get_permalink(308); ?>#junp_tab">入門歩きへんろコース</a></li>
                    <li><a id="north" href="<?php echo get_permalink(310); ?>#junp_tab">県北　車コース</a></li>
                    <li><a id="west" href="<?php echo get_permalink(312); ?>#junp_tab">県西　車コース</a></li>
                    <li><a id="south" href="<?php echo get_permalink(314); ?>#junp_tab">県南　車コース</a></li>
                    <li><a id="city" href="<?php echo get_permalink(316); ?>#junp_tab">市内　徒歩コース</a></li>
                </ul>
            </div>

            <!-- タブ内容 -->
            <div class="course_mainWrap">
                <div id="course_cont1" class="course_tabCont">
                    <!-- コースキャプション -->
                    <div class="course_pcW2">
                        <p class="mb_100">
                            <?php the_field('course_info'); ?></p>
                    </div>

                    <!-- 参考マップ -->
                    <div class="course_pcW2 mb_100">
                        <h2 class="h3_bg mb_40">参考マップ</h2>
                        <div>
                            <?php the_field('iframeurl'); ?>
                        </div>
                    </div>

                    <!-- モデルルート -->
                    <div class="mb_20">
                        <h2 class="h3_bg mb_40">モデルルート</h2>

                        <div class="course_rootCap mb_40">
                            <img src="<?php the_field('eyecatch') ?>" alt="ルート画像">
                        </div>

                        <div class="course_flag mb_20">
                            <p>START</p>
                        </div>

                        <div class="course_pcW2">

                            <?php
                            //①get_pageを利用して情報を得る
                            $page = get_page(get_the_ID());
                            //②プロパティからスラッグ名を取得する

                            $slug = $page->post_name;
                            //echo $slug ;
                            ?>

                            <!-- JavaScriptのために、コースのSlugをinputに埋め込む -->
                            <input type="hidden" id="slug_name" value="<?php echo $slug; ?>">

                            <?php
                            $args = array(
                                'post_type' => 'course-schedule', //カスタム投稿タイプを指定
                                'posts_per_page' => -1, //表示する記事数
                                'orderby' => 'meta_value', //カスタムフィールドで並べ替える指定
                                'meta_key' => 'order-number', //カスタムフィールドのキーを指定
                                'order' => 'ASC',
                                'meta_key' => 'c-slug', //カスタムフィールドのキー
                                'meta_value' => $slug, //カスタムフィールドの値
                                'meta_compare' => 'LIKE' //'meta_value'のテスト演算子
                            );
                            $course_query = new WP_Query($args); //サブループを変数に格納

                            if ($course_query->have_posts()) :
                                while ($course_query->have_posts()) :
                                    $course_query->the_post();
                            ?>

                                    <!-- 時間 -->
                                    <div class="course_st mb_20">
                                        <p class="mb_20">
                                            【<?php the_field('c_time') ?>】
                                        </p>
                                        <p>
                                            <?php $hoge = get_field('link');
                                            if ($hoge) { ?>
                                                <a href="<?php echo home_url('/') . $hoge ?>">
                                                    <?php the_field('name') ?>
                                                </a>
                                            <?php } else {
                                                the_field('name');
                                            } ?>
                                        </p>
                                    </div>

                                    <!-- お寺・施設表示 -->
                                    <div class="course_contWrap">

                                        <!-- お寺・施設画像 -->
                                        <div class="course_contPhoto mb_20">
                                            <?php
                                            $hoge = get_field('link');
                                            if ($hoge) { ?>
                                                <a href="<?php echo home_url('/') . $hoge ?>">
                                                    <img src="<?php the_field('a_thumbnail') ?>" alt=""></a> <?php } else { ?><img src="<?php the_field('a_thumbnail') ?>" alt=""> <?php } ?>
                                        </div>

                                        <!-- お寺・施設説明文 -->
                                        <div class="course_col">
                                            <div>
                                                <p class="small_cap mb_40 js-fadeUp">
                                                    <?php the_field('a_description') ?>
                                                </p>
                                            </div>
                                            <!-- もっと読むボタン -->
                                            <div class="button18">
                                                <?php $more = get_field('more');
                                                if ($more) : ?>
                                                    <a href="<?php echo home_url('/'); ?><?php the_field('link') ?>">
                                                        <p>もっと知る</p>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- 移動情報 -->
                                    <?php $icon = get_field('c_icon');
                                    if ($icon) : ?>
                                        <div class="course_contInfo mb_40 flex">
                                            <!-- 移動情報アイコン -->
                                            <div class="course_contIcon">
                                                <img src="<?php the_field('c_icon') ?>" alt="移動アイコン">
                                            </div>
                                        <?php endif; ?>


                                        <!-- 移動情報詳細 -->
                                        <div class="course_contTime">
                                            <?php the_field('a_time') ?>
                                        </div>
                                        </div>

                                <?php endwhile;
                            endif;
                            wp_reset_postdata(); //サブループを抜ける
                                ?>

                                <div class="course_flag mb_20">
                                    <p>GOAL</p>
                                </div>
                        </div>
                    </div>

                    <!-- 周辺施設一覧 -->
                    <div class="contents_width">
                        <h2 class="h3_bg mb_40">周辺施設</h2>

                        <!-- 周辺施設お気に入りカードが並ぶエリア -->
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
                                            <!-- 周辺施設名 -->
                                            <div class="shop_info_title">
                                                <p><?php the_field('f_name'); ?></p>
                                            </div>

                                            <!-- 周辺施設詳細 -->
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
                                                <p class="shop_info_article">
                                                    <?php the_field('f_message'); ?>
                                                </p>
                                            </div>

                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                    </a>
                                    <?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>

        </section>
    </article>
</main>

<!-- mainここまで -->
<?php get_footer(); ?>
