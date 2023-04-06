<?php
/*Template Name:archive-qanda
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

        <h2 class="h2_bg mb_40">よくあるご質問</h2>
        <div class="contents_width">
            <p class="big_cap">
                よくあるご質問をまとめています。おへんろ活動のご参考にどうぞ。
            </p>


            <!-- 以下、Q&A開始 -->
            <section class=" mb_40 js-fadeUp">
                <?php $args = array(
                    'post_type' => 'qanda',
                    'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
                );
                $post_counter = 1;

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="section_line">
                            <div class="rowLine flex">
                                <span class="circle_mark1">Q<?php print "$post_counter"; ?>
                                </span>
                                <p><?php the_title(); ?></p>
                            </div>
                            <div class="rowLine flex">
                                <span class=" circle_mark2">A</span>
                                <p><?php the_field('answer'); ?></p>
                            </div>
                        </div>
                        <?php $post_counter++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
        </div>
        </section>
    </div>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
