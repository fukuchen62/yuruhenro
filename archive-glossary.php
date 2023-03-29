<?php
/*Template Name:archive-glossary
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main>
    <div class="main_inner">
        <!-- h1 -->
        <div class="h1_bg">
            <h1>Q&A</h1>
        </div>
        <!-- section -->

        <div class="sec_mb40">
            <h2 class="h2_bg">よくあるご質問</h2>
            <p class="big_cap">
                            よくあるご質問をまとめています。<br />
                            おへんろ活動のご参考にどうぞ。
                        </p>
        </div>

        <!-- 以下、Q&A開始 -->
        <?php if (have_posts()):?>
        <?php while (have_posts()) : the_post();?>
        <?php $args = array(
        'post_type' => 'glossary',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <section class="mb_40">
            <div class="qa flex">
                <span class="q_mark">用語</span>
                <p class="qa_phrase"><?php the_title();?></p>
            </div>
            <div class="qa flex">
                <span class="a_mark">
                    <nobr>意味</nobr>
                </span>
                <p class="qa_phrase"><?php the_field('mean');?></p>
            </div>
            <hr>
            <?php endwhile;?>
            <?php endif;?>
        </section>

    </div>

    <?php endwhile;?>
    <?php endif;?>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
