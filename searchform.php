    <section class="contents_width">
        <h2 class="h2_bg">検索条件</h2>
        <div class="big_cap mb_40">
            <p>該当する条件で検索することができます。<br>
                条件を選択後、「検索」ボタンを押してください。</p>
        </div>
    </section>

    <section class="contents_width search_form mb_80">
        <h3 class="h3_bg mb_40">検索条件選択</h3>
        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="search-form_checkarea">
                <p class="search-form_headline">エリア</p>
                <div class="searchkinds  mb_40">
                    <div class="checkbox"><input type="checkbox" name="area[]" value="north"> 県北</div>
                    <div class="checkbox"><input type="checkbox" name="area[]" value="west"> 県西</div>
                    <div class="checkbox"><input type="checkbox" name="area[]" value="south"> 県南</div>
                    <div class="checkbox"><input type="checkbox" name="area[]" value="east"> 市街地</div>
                </div>

                <p class="search-form_headline">寺院内設備</p>
                <div class="searchkinds">
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="parking"> 無料駐車場</div>
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="eatin"> 食事</div>
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="bell"> 鐘撞き可</div>
                    <div class="checkbox"><input type="checkbox" name="searchh[]" value="shop"> 売店</div>
                </div>
                <p class="searchBtnsArea">
                    <input type="hidden" name="s" value="<?php the_search_query(); ?>">

                    <input class="searchBtns" type="submit" value="検索">
                    <input class="searchBtns" type="reset" name="reset" value="リセット">
                </p>
        </form>
    </section>
