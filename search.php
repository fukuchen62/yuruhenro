<?php get_header(); ?>
<!-- mainここから -->
<main>
    <div class="main_inner">
        <!-- h1 -->
        <div class="h1_bg">
            <h1>寺院検索</h1>
        </div>

        <!-- 検索フォームを読み込む -->
        <?php
        get_template_part('search-form');
        ?>

        <section class="sec_mb40">
            <h2 class="h2_bg">条件検索結果</h2>

            <!-- サービス紹介 -->
            <section class="sec_mb40">
                <div class="searchresult_inner">
                    <!-- <div class="searchresult_title_area">
                        <h3 class="h3_bg">検索結果</h3><br>
                    </div> -->
                    <div class="searchresult_content">
                        <!--カードここから-->
                        <div class="searchresultList">
                            <div class="searchresultList_thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01ryozenji.jpg" alt="安楽寺" />
                            </div>
                            <div class="searchresultList_data">
                                <h4 class="h4_bg">安楽寺1</h4>
                                <p>営業時間：10時～17時</p>
                                <p>定休日：火曜日</p>
                                <p>駐車場：あり</p>
                                <p>TEL：000-000-0000</p>
                                <p>公式HP：example.site</p>
                            </div>
                            <!-- <a href="#">
            <div class="searchresultList_btn">詳しく見る
            </div>
            </a> -->
                        </div>
                        <!--カードここまで-->
                        <!--カードここから-->
                        <div class="searchresultList">
                            <div class="searchresultList_thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01ryozenji.jpg" alt="安楽寺" />
                            </div>
                            <div class="searchresultList_data">
                                <h4 class="h4_bg">安楽寺1</h4>
                                <p>営業時間：10時～17時</p>
                                <p>定休日：火曜日</p>
                                <p>駐車場：あり</p>
                                <p>TEL：000-000-0000</p>
                                <p>公式HP：example.site</p>
                            </div>
                            <!-- <a href="#">
<div class="searchresultList_btn">詳しく見る
</div>
</a> -->
                        </div>
                        <!--カードここまで-->
                        <!--カードここから-->
                        <div class="searchresultList">
                            <div class="searchresultList_thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/01ryozenji.jpg" alt="安楽寺" />
                            </div>
                            <div class="searchresultList_data">
                                <h4 class="h4_bg">安楽寺1</h4>
                                <p>営業時間：10時～17時</p>
                                <p>定休日：火曜日</p>
                                <p>駐車場：あり</p>
                                <p>TEL：000-000-0000</p>
                                <p>公式HP：example.site</p>
                            </div>
                            <!-- <a href="#">
<div class="searchresultList_btn">詳しく見る
</div>
</a> -->
                        </div>
                        <!--カードここまで-->
                    </div>
            </section>
    </div>
    </section>
    </div>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
