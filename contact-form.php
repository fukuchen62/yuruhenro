<?php
/*Template Name:contact-form
*/
?>
<?php get_header(); ?>
<main class="main_inner">
    <!-- h1 -->
    <div class="h1_bg">
        <h1>お問い合わせ</h1>
        <?php get_template_part('template-parts/breadcrumb');?>

    </div>

    <div class="contents_width">
        <div class="h2_box">
            <h2 class="h2_bg">お問い合わせフォーム</h2>
        </div>
        <?php echo do_shortcode('[mwform_formkey key="548"]') ?>
    </div>
</main>
<?php get_footer(); ?>
