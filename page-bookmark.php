<?php
/*Template Name:page-bookmark
*/
?>

<?php get_header(); ?>
<main>
    <div class="main_inner">
        <h1 class="h1_bg">マイブックマーク</h1>
        <h2 class="h2_bg">寺社お気に入り</h2>

        <div class="shop_info_list">
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
            <a href="<?php the_permalink(); ?>">
                <div class="shop_info_card mb_40">
                    <div class="shop_info_caption">
                        <img src="<?php the_field('t_eyecatch'); ?>" alt="各寺社の画像" />
                    </div>
                    <div class="shop_info_title">
                        <p><?php the_field('t_name'); ?></p>
                    </div>
                    <div class="shop_info_text">
                        <p>駐車場：<?php the_field('t_parking'); ?></p>
                        <p>TEL：<?php the_field('t_tell'); ?></p>
                        <p>公式HP：<?php the_field('t_url'); ?></p>
                    </div>
            </a>

        </div>
        <?php endwhile ?>
        <?php endif;wp_reset_postdata(); ?>
        <?php else : ?>
        <p class="text-center">お気に入りがありません。</p>
        <?php endif ?>
    </div>

    <h2 class="h2_bg">周辺施設お気に入り</h2>
    <div class="shop_info_list">
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

        <div class="shop_info_card mb_40">
            <div class="shop_info_caption">
                <img src="<?php the_field('f_pic1'); ?>" alt="各施設の画像" />
            </div>
            <div class="shop_info_title">
                <p><?php the_field('f_name'); ?></p>
            </div>
            <div class="shop_info_text">
                <p>営業時間：<?php the_field('hours'); ?></p>
                <p>休業日：<?php the_field('holiday'); ?></p>
                <p>駐車場：<?php the_field('f_parking'); ?></p>
                <p>TEL：<?php the_field('f_tell'); ?></p>
                <p>公式HP：<?php the_field('f_url'); ?></p>
            </div>
            <p class="shop_info_article">
                                                <?php the_field('f_message'); ?>
                                            </p>

        </div>
        <?php endwhile ?>
        <?php endif;
        wp_reset_postdata(); ?>
        <?php else : ?>
        <p>お気に入りがありません。</p>
        <?php endif ?>


    </div>



</main>
<?php get_footer(); ?>
