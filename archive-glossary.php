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
            <h1>用語集</h1>
        </div>
        <!-- section -->

        <div class="sec_mb40">
            <h2 class="h2_bg mb_40">用語質問箱</h2>
            <div class="contents_width">
                <p class="big_cap">
                            見かけるけど良く知らないおへんろの言葉を集めました。
                        </p>

                <!-- 以下、Q&A開始 -->

                <section class="section_line mb_40 js-fadeUp">
                    <?php if (have_posts()):?>
                    <?php while (have_posts()) : the_post();?>
                    <?php $args = array(
        'post_type' => 'qanda',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="rowLine flex">
                        <span class="circle_mark1">Q</span>
                        <p><?php the_title();?></p>
                    </div>
                    <div class="rowLine flex">
                        <span class="circle_mark2">A</span>
                        <p><?php the_field('answer');?></p>
                    </div>
                    <?php endwhile;?>
                    <?php endif;?>
                </section>

            </div>

            <?php endwhile;?>
            <?php endif;?>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>