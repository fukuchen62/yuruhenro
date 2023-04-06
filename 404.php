<?php
/*Template Name: 404
*/
?>
<?php get_header(); ?>
<!-- headerここから -->
<!-- mainここから -->

<main>
    <div class="main_inner">
        <h1 class="h1_bg">404 NOT FOUND</h1>
        <div class="contents_width">
            <p class="h1_cap">
                            お探しのページが見つかりませんでした。<br />
                            申し訳ございませんが<a href="<?php echo home_url(); ?>" class="link"
                                >こちらのリンク</a
                            >からトップページへお戻りください。
                        </p>
        </div>
    </div>
</main>
<!-- mainここまで -->

<!-- footerここから -->
<?php get_footer(); ?>
