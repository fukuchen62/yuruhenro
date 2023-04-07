<?php
/*Template Name: 404
*/
?>
<?php get_header(); ?>

<!-- headerここまで -->
<!-- mainここから -->

<main>
    <h1 class="h1_bg">404 NOT FOUND</h1>
    <article class="main_inner">
        <section class="contents_width">
            <div>
                <p class="h1_cap mb_100">
                            お探しのページが見つかりませんでした。<br />
                            申し訳ございませんが<a href="<?php echo home_url(); ?>" class="link"
                                >こちらのリンク</a
                            >からトップページへお戻りください。
                        </p>
            </div>
        </section>
    </article>
</main>
<!-- mainここまで -->

<!-- footerここから -->
<?php get_footer(); ?>