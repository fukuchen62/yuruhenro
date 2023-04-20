<?php
/*Template Name: 404
*/
?>
<?php get_header(); ?>

<main>
    <h1 class="h1_bg">404 NOT FOUND</h1>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <article class="main_inner">
        <section class="contents_width">
            <div class="p404">
                <p>
                    お探しのページが見つかりませんでした。<br />
                    申し訳ございませんが<a href="<?php echo home_url(); ?>" class="link">こちらのリンク</a>からトップページへお戻りください。
                </p>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>
