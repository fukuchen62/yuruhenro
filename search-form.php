<?php
/*Template Name:search-form
*/
?>
<?php get_header(); ?>
<div class="search_inner">
    <h1 class="search_h1">寺院検索</h1>
    <p>下の条件で検索することができます</p>
    <section class="searchBox">
        <form method="post" action="qlip.php">
            <p class="checkarea"><h2 class="search_h2">エリア</h2><br>
            <div class="searchkinds">
            <div class="checkbox"><input type="checkbox" name="q1" value="初心者"> 初心者</div>
            <div class="checkbox"><input type="checkbox" name="q1" value="県北"> 県北</div>
            <div class="checkbox"><input type="checkbox" name="q1" value="県西"> 県西</div>
            <div class="checkbox"><input type="checkbox" name="q1" value="県南"> 県南</div>
            <div class="checkbox"><input type="checkbox" name="q1" value="市街地"> 市街地</div>
        </div>
        </p>
            <p class="checkarea"><h2 class="search_h2">寺院内設備</h2><br>
                        <div class="searchkinds">
            <div class="checkbox"><input type="checkbox" name="q2" value="無料駐車場"> 無料駐車場</div>
            <div class="checkbox"><input type="checkbox" name="q2" value="食事"> 食事</div>
            <div class="checkbox"><input type="checkbox" name="q2" value="宿坊"> 宿坊</div>
            <div class="checkbox"><input type="checkbox" name="q2" value="売店"> 売店</div>
            <div class="checkbox"><input type="checkbox" name="q2" value="鐘撞き可"> 鐘撞き可</div>
            </div>
        </p>
            <p><input class="searchBtns" type="submit" value="検索"></p>
        </form>
    </section>
    <!-- サービス紹介 -->
    <section class="searchresult">
        <div class="searchresult_inner">
            <div class="searchresult_title_area">
                <h2 class="search_h2">検索結果</h2>
            </div>
            <div class="searchresult_content">
                <!--カードここから-->
                <div class="searchresultList">
                    <div class="searchresultList_thumb">
                        <img src="./img/IMG_0712.jpg" alt="安楽寺" />
                    </div>
                    <div class="searchresultList_data">
                        <h3 class="search_h3">安楽寺1</h3>
                        <p>
            寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1
            </p>
                    </div>
                    <a href="#">
                        <div class="searchresultList_btn">詳しく見る
                        </div>
                    </a>
                </div>
                <!--カードここまで-->
                <!--カードここから-->
                <div class="searchresultList">
                    <div class="searchresultList_thumb">
                        <img src="./img/IMG_0712.jpg" alt="安楽寺" />
                    </div>
                    <div class="searchresultList_data">
                        <h3 class="search_h3">安楽寺1</h3>
                        <p>
            寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1
        </p>
                    </div>
                    <a href="#">
                        <div class="searchresultList_btn">詳しく見る
                        </div>
                    </a>
                </div>
                <!--カードここまで-->
                <!--カードここから-->
                <div class="searchresultList">
                    <div class="searchresultList_thumb">
                        <img src="./img/IMG_0712.jpg" alt="安楽寺" />
                    </div>
                    <div class="searchresultList_data">
                        <h3 class="search_h3">安楽寺1</h3>
                        <p>
            寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1寺の説明1
        </p>
                    </div>
                    <a href="#">
                        <div class="searchresultList_btn">詳しく見る
                        </div>
                    </a>
                </div>
                <!--カードここまで-->
            </div>
    </section>
</div>
<?php get_footer(); ?>