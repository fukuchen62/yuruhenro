<?php
/*Template Name:page-bookmark
*/
?>
<?php get_header(); ?>
<main>
    <div class="main_inner">
        <h1>マイブックマーク固定ページ</h1>
    </div>
    <?php echo do_shortcode('[user_favorites include_thumbnails ="true" include_buttons ="true"]') ?>






</main>


<?php get_footer(); ?>