<?php
/*Template Name:contact-form
*/
?>
<?php get_header(); ?>
<main class="main_inner">
    <!-- h1 -->
    <div class="h1_bg">
        <h1>お問い合わせ</h1>

    </div>
    <?php get_template_part('template-parts/breadcrumb'); ?>


    <div class="contents_width">
        <div class="h2_box">
            <h2 class="h2_bg">お問い合わせフォーム</h2>
        </div>
        <div class="mb_40">
            当サイトへのお問い合わせは、下記の入力フォームへご入力の上、お問い合わせください。
            また、お寺および周辺施設に関するお問い合わせにつきましては、各お寺や各施設に直接お問い合わせください。<br>
            個人情報の取り扱いについては、<a class="link" href=" <?php echo home_url('privacy'); ?> ">こちら</a>をご確認ください。
        </div>
        <?php echo do_shortcode('[mwform_formkey key="548"]') ?>
    </div>
</main>
<?php get_footer(); ?>
