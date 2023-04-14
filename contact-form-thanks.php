<?php
/*Template Name:contact-form-thanks
*/
?>
<?php get_header(); ?>
<main class="main_inner">
    <h1>お問い合わせありがとうございました。</h1>
    <?php get_template_part('template-parts/breadcrumb');?>


    <?php echo do_shortcode('[mwform_formkey key="548"]')?>
</main>
<?php get_footer(); ?>
