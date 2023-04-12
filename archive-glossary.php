<?php get_header(); ?>
<!-- mainここから -->
<main>
    <!-- h1 -->
    <h1 class="h1_bg">用語集</h1>

    <div class="main_inner">

        <article class="main_inner">
            <section class="contents_width">
                <div>
                    <h2 class="h2_bg mb_40">用語質問箱</h2>
                </div>
                <div>
                    <p class="big_cap">
                    見かけるけど良く知らないおへんろの言葉を集めました。</p>
                    <!-- 以下、Q&A開始 -->
                    <div class=" mb_40 js-fadeUp">
                        <?php $args = array(
                        'post_type' => 'glossary',
                        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="section_line">
                            <div class="rowLine flex">
                                <span class="circle_mark1">用語</span>
                                <p><ruby><?php the_title(); ?><rt><?php the_field('g_kana'); ?></rt></ruby></p>
                            </div>
                            <div class="rowLine flex">
                                <span class="circle_mark2">意味</span>
                                <p><?php the_field('mean'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
            </section>
        </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
