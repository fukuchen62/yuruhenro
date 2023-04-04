<?php
/*Template Name:page-bookmark
*/
?>

<?php get_header(); ?>
<main>
    <div class="main_inner">

        <?php echo do_shortcode('[user_favorites
    include_buttons ="true"
    ]'); ?>
    </div>
</main>
<?php get_footer(); ?>