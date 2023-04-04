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

    <div class="contents_width">
        <section class="sec_mb40">
            <h2 class="h2_bg">お問い合わせフォーム</h2>
            <?php echo do_shortcode('[mwform_formkey key="548"]')?>
</main>
<?php get_footer(); ?>
