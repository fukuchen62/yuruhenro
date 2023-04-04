<?php
/*Template Name: single-course
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main>
    <div class="main_inner">
        <h1 class="h1_bg">コース紹介</h1>
        <section class="sec_mb40">
            <p class="big_cap">
                            コース紹介全体の簡単なキャプション
                            <br />
                            コース紹介全体の簡単なキャプション
                            <br />
                            コース紹介全体の簡単なキャプション
                        </p>
        </section>

        <div class="course_tab">
            <!-- タブ -->
            <ul class="course_tabWrap flex">
                <li><a href="#course_cont1">入門コース</a></li>
                <li><a href="#course_cont2">車入門コース</a></li>
                <li><a href="#course_cont3">県西コース</a></li>
                <li><a href="#course_cont4">県南コース</a></li>
                <li><a href="#course_cont5">市街地コース</a></li>
            </ul>

            <!-- タブ内容 -->
            <div class="course_mainWrap">
                <div id="course_cont1" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="middle_cap mb_100">入門コースです</p>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div><iframe src="https://www.google.com/maps/d/embed?mid=1awTWw_Rmy7f7-diCtXpjjlw7uJ_HljE&ehbc=2E312F&z=14"> </iframe><br>
                        </div>
                    </section>

                    <section class="sec_mb mb_40">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>

                        <?php $args = array(
        'post_type' => 'course1',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <p class="mb_20"><?php the_field('c_time')?></p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php the_field('a_thumbnail')?>" alt="" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                    <?php the_field('a_description')?>
                                            </p>
                                <div class=" button18">
                                    <?php $more = get_field('more');
                                    if($more): ?>
                                    <a href="<?php the_field('link')?>" target="_blank">
                                        <p>もっと知る
                                        </p>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                <img src="<?php the_field('c_icon')?>" alt="">
                            </div>
                            <div class="course_contTime">
                                <?php the_field('a_time')?>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <?php wp_reset_postdata(); ?>
                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>



                        <div class="shop_info_list">
                            <?php
                            $facility_args = array(
    'post_type' => 'facility',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'area',
        'terms' => array('north'),
        'field' => 'slug'
    ),
    ),
);
$facility_query = new WP_Query( $facility_args );
        if ( $facility_query->have_posts() ) :
        while ( $facility_query->have_posts() ) : $facility_query->the_post(); ?>
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="<?php the_field('f_pic1'); ?>" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p><?php the_field('f_name'); ?></p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：<?php the_field('hours'); ?></p>
                                    <p>休業日：<?php the_field('holiday'); ?></p>
                                    <p>駐車場：<?php the_field('f_parking'); ?></p>
                                    <p>TEL：<?php the_field('f_tell'); ?></p>
                                    <p>公式HP：<?php the_field('f_url'); ?></p>
                                </div>
                                <p class="shop_info_article">
                                                <?php the_field('f_message'); ?>
                                            </p>
                                <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </section>
                </div>
                <div id="course_cont2" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">車で入門</p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div><iframe src="https://www.google.com/maps/d/embed?mid=16EQSfjdmR0tUiP38IZAEaG6rGZd5RB0&ehbc=2E312F&z=14"></iframe></div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>
                        <?php $args = array(
        'post_type' => 'course2',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <p class="mb_20"><?php the_field('c_time')?></p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php the_field('a_thumbnail')?>" alt="" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                <?php the_field('a_description')?>
                                            </p>
                                <div class=" button18">
                                    <?php $more = get_field('more');
                                    if($more): ?>
                                    <a href="<?php the_field('link')?>" target="_blank">
                                        <p>もっと知る
                                        </p>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                <img src="<?php the_field('c_icon')?>" alt="">
                            </div>
                            <div class="course_contTime">
                                <?php the_field('a_time')?>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <div class="course_flag">GOAL</div>
                    </section>


                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <?php
                            $facility_args = array(
    'post_type' => 'facility',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'area',
        'terms' => array('north'),
        'field' => 'slug'
    ),
    ),
);
$facility_query = new WP_Query( $facility_args );
        if ( $facility_query->have_posts() ) :
        while ( $facility_query->have_posts() ) : $facility_query->the_post(); ?>
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="<?php the_field('f_pic1'); ?>" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p><?php the_field('f_name'); ?></p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                                <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </section>
                </div>
                <div id="course_cont3" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                    course3県西コース
                                </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div><iframe src="https://www.google.com/maps/d/embed?mid=17lJy3EtPN0uLeuncncd49c1LpHBjOgk&ehbc=2E312F&z=14"></iframe></div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>
                        <?php $args = array(
        'post_type' => 'course3',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <p class="mb_20"><?php the_field('c_time')?></p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php the_field('a_thumbnail')?>" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                <?php the_field('a_description')?>
                                            </p>
                                <div class=" button18">
                                    <?php $more = get_field('more');
                                    if($more): ?>
                                    <a href="<?php the_field('link')?>" target="_blank">
                                        <p>もっと知る
                                        </p>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                <img src="<?php the_field('c_icon')?>" alt="">
                            </div>
                            <div class="course_contTime">
                                <?php the_field('a_time')?>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <?php
                            $facility_args = array(
    'post_type' => 'facility',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'area',
        'terms' => array('west'),
        'field' => 'slug'
    ),
    ),
);
$facility_query = new WP_Query( $facility_args );
        if ( $facility_query->have_posts() ) :
        while ( $facility_query->have_posts() ) : $facility_query->the_post(); ?>
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="<?php the_field('f_pic1'); ?>" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p><?php the_field('f_name'); ?></p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                                <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </section>
                </div>
                <div id="course_cont4" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                    県南コース
                                </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div><iframe src="https://www.google.com/maps/d/embed?mid=1wjQctymWrek52V2VZTwZWdqep4L1gNA&ehbc=2E312F&z=14"></iframe></div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>
                        <?php $args = array(
        'post_type' => 'course4',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <p class="mb_20"><?php the_field('c_time')?></p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php the_field('a_thumbnail')?>" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                <?php the_field('a_descripiton')?>
                                            </p>
                                <div class=" button18">
                                    <?php $more = get_field('more');
                                    if($more): ?>
                                    <a href="<?php the_field('link')?>" target="_blank">
                                        <p>もっと知る
                                        </p>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                <img src="<?php the_field('c_icon')?>" alt="">
                            </div>
                            <div class="course_contTime">
                                <?php the_field('a_time')?>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <?php
                            $facility_args = array(
    'post_type' => 'facility',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'area',
        'terms' => array('south'),
        'field' => 'slug'
    ),
    ),
);
$facility_query = new WP_Query( $facility_args );
        if ( $facility_query->have_posts() ) :
        while ( $facility_query->have_posts() ) : $facility_query->the_post(); ?>
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="<?php the_field('f_pic1'); ?>" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p><?php the_field('f_name'); ?></p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                                <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </section>
                </div>
                <div id="course_cont5" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                        市街地コースです</p>
                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div><iframe src="https://www.google.com/maps/d/embed?mid=1EFrYJGULMVx8D1dEwsJii9egcGCTs9s&ehbc=2E312F&z=14"></iframe></div>
                    </section>

                    <section class="sec_mb">
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像</div>

                        <div class="course_flag mb_20">START</div>
                        <?php $args = array(
        'post_type' => 'course5',
        'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
        );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <p class="mb_20"><?php the_field('c_time')?></p>

                        <div class="course_contWrap">
                            <div class="course_contPhoto mb_20">
                                <img src="<?php the_field('a_thumbnail')?>" alt="お寺の名前" />
                            </div>
                            <div class="course_col">
                                <p class="small_cap mb_40 js-fadeUp">
                                                <?php the_field('a_description')?>
                                            </p>
                                <div class=" button18">
                                    <?php $more = get_field('more');
                                    if($more): ?>
                                    <a href="<?php the_field('link')?>" target="_blank">
                                        <p>もっと知る
                                        </p>
                                    </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                <img src="<?php the_field('c_icon')?>" alt="">
                            </div>
                            <div class="course_contTime">
                                <?php the_field('a_time')?>
                            </div>
                        </div>
                        <?php endwhile;?>
                        <?php endif;?>
                        <div class="course_flag">GOAL</div>
                    </section>

                    <section class="shop_info contents_width">
                        <h2 class="h3_bg">周辺施設</h2>
                        <div class="shop_info_list">
                            <?php
                            $facility_args = array(
    'post_type' => 'facility',
    'posts_per_page' => 3,
    'order' => 'DESC',
    'tax_query' => array(
        array(
        'taxonomy' => 'area',
        'terms' => array('east'),
        'field' => 'slug'
    ),
    ),
);
$facility_query = new WP_Query( $facility_args );
        if ( $facility_query->have_posts() ) :
        while ( $facility_query->have_posts() ) : $facility_query->the_post(); ?>
                            <div class="shop_info_card mb_40">
                                <div class="shop_info_caption">
                                    <img src="<?php the_field('f_pic1'); ?>" alt="各施設の画像" />
                                </div>
                                <div class="shop_info_title">
                                    <p><?php the_field('f_name'); ?></p>
                                </div>
                                <div class="shop_info_text">
                                    <p>営業時間：10時～17時</p>
                                    <p>休業日：火曜日</p>
                                    <p>駐車場：あり</p>
                                    <p>TEL：000-000-0000</p>
                                    <p>公式HP：example.site</p>
                                </div>
                                <p class="shop_info_article">
                                                １２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０１２３４５６７８９０
                                            </p>
                                <?php echo do_shortcode('[favorite_button post_id="" site_id=""]'); ?>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
