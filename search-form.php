<?php
/*Template Name:search-form
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main>
    <div class="main_inner">
        <h2 class="h2_bg">寺院検索</h2>
        <section class="sec_mb40">
            <p class="big_cap">該当する条件で検索することができます。<br>条件を選択後、「検索」ボタンを押してください。</p>
        </section>
        <section class="sec_mb40 search_form">
            <form method="post" action="   ">
                <h3 class="h3_bg_ex">検索条件選択</h3><br>
                <div class="search-form_checkarea">
                    <p class="search-form_headline">エリア</p>
                    <div class="searchkinds  mb_40">
                        <div class="checkbox"><input type="checkbox" name="q1" value="初心者"> 初心者</div>
                        <div class="checkbox"><input type="checkbox" name="q1" value="県北"> 県北</div>
                        <div class="checkbox"><input type="checkbox" name="q1" value="県西"> 県西</div>
                        <div class="checkbox"><input type="checkbox" name="q1" value="県南"> 県南</div>
                        <div class="checkbox"><input type="checkbox" name="q1" value="市街地"> 市街地</div>
                    </div>

                    <p class="search-form_headline">寺院内設備</p>
                    <div class="searchkinds">
                        <div class="checkbox"><input type="checkbox" name="q2" value="無料駐車場"> 無料駐車場</div>
                        <div class="checkbox"><input type="checkbox" name="q2" value="食事"> 食事</div>
                        <div class="checkbox"><input type="checkbox" name="q2" value="宿坊"> 宿坊</div>
                        <div class="checkbox"><input type="checkbox" name="q2" value="売店"> 売店</div>
                        <div class="checkbox"><input type="checkbox" name="q2" value="鐘撞き可"> 鐘撞き可</div>
                    </div>
                    <p class="searchBtnsArea"><input class="searchBtns" type="submit" value="検索">
            <input  class="searchBtns" type="reset" name="reset" value="リセット"></p>
            </form>
        </section>
        <!-- サービス紹介 -->
        <section class="sec_mb40">
            <div class="searchresult_inner">
                <div class="searchresult_title_area">
                    <h3 class="h3_bg">検索結果</h3><br>
                </div>
                <div class="searchresult_content">
                    <!--カードここから-->
                    <div class="searchresultList">
                        <div class="searchresultList_thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/01ryozenji.jpg" alt="安楽寺" />
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
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/01ryozenji.jpg" alt="安楽寺" />
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
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/01ryozenji.jpg" alt="安楽寺" />
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
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
