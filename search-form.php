<section class="main_inner">
    <h2 class="h2_bg">検索条件</h2>
    <section class="sec_mb40">
        <p class="big_cap">該当する条件で検索することができます。条件を選択後、「検索」ボタンを押してください。</p>
    </section>

    <section class="sec_mb40 search_form">
        <form method="get" action="/">
            <!-- <h3 class="h3_bg_ex">検索条件選択</h3><br> -->
            <div class="search-form_checkarea">
                <p class="search-form_headline">エリア</p>
                <div class="searchkinds  mb_40">
                    <div class="checkbox"><input type="checkbox" name="area[]" value="初心者"> 初心者</div>
                    <div class="checkbox"><input type="checkbox" name="area[]" value="県北"> 県北</div>
                    <div class="checkbox"><input type="checkbox" name="area[]" value="県西"> 県西</div>
                    <div class="checkbox"><input type="checkbox" name="area[]" value="県南"> 県南</div>
                    <div class="checkbox"><input type="checkbox" name="area[]" value="市街地"> 市街地</div>
                </div>

                <p class="search-form_headline">寺院内設備</p>
                <div class="searchkinds">
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="無料駐車場"> 無料駐車場</div>
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="食事"> 食事</div>
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="宿坊"> 宿坊</div>
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="売店"> 売店</div>
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="鐘撞き可"> 鐘撞き可</div>
                </div>
                <p class="searchBtnsArea"><input class="searchBtns" type="submit" value="検索">
                    <input class="searchBtns" type="reset" name="reset" value="リセット">
                </p>
        </form>
    </section>
</section>
