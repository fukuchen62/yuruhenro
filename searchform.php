    <section class="m0auto">
        <!-- <h2 class="h2_bg">検索条件</h2> -->
        <div class="mb_40">
            <div class="course_pcW1">
                <p>該当する条件でお寺と周辺施設を検索することができます。<br>
                    条件を選択後、「検索」ボタンを押してください。<br>
                    ブックマーク<i class="fa-regular fa-bookmark"></i>を押すと<a href="<?php echo home_url('bookmark'); ?>" class="link">マイブックマーク</a>ページに登録出来ます。<br>
                    なお寺院内設備に関する情報や周辺施設情報は変更されている可能性がありますのでご注意ください。</p>
            </div>
        </div>
    </section>


    <section class="contents_width search_form mb_40">
        <h2 class="h3_bg mb_40">検索条件選択</h2>
        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="hidden" name="s" value="<?php the_search_query(); ?>">
            <?php


            // 「エリアタイプ」のチェックを保持
            $select_area = filter_input(INPUT_GET, "area", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
            $checked["area"] = ["east" => "", "west" => "", "south" => "", "north" => ""];
            foreach ($select_area as $val) {
                $checked["area"][$val] = " checked";
            }
            // 「体験タイプ」のチェックを保持
            $select_searchh = filter_input(INPUT_GET, "searchh", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
            $checked["searchh"] = ["parking" => "", "eatin" => "", "bell" => "", "shop" => ""];
            foreach ($select_searchh as $val) {
                $checked["searchh"][$val] = " checked";
            } ?>



            <div class="search-form_checkarea">
                <p class="search-form_headline h4_bg">エリア</p>
                <div class="searchkinds">
                    <div class="checkbox"><label><input type="checkbox" name="area[]" value="north" id="north" <?= $checked["area"]["north"] ?>> 県北</label></div>
                    <div class="checkbox"><label><input type="checkbox" name="area[]" value="west" id="west" <?= $checked["area"]["west"] ?>> 県西</label></div>
                    <div class="checkbox"><label><input type="checkbox" name="area[]" value="south" id="south" <?= $checked["area"]["south"] ?>> 県南</label></div>
                    <div class="checkbox"><label><input type="checkbox" name="area[]" value="east" id="east" <?= $checked["area"]["east"] ?>> 市街地</label></div>
                </div>

                <p class="search-form_headline h4_bg">寺院内設備</p>
                <div class="searchkinds">
                    <div class="checkbox"><label><input type="checkbox" name="searchh[]" value="parking" <?= $checked["searchh"]["parking"] ?>> 無料駐車場</label></div>
                    <div class="checkbox"><label><input type="checkbox" name="searchh[]" value="eatin" <?= $checked["searchh"]["eatin"] ?>> 食事</label></div>
                    <div class="checkbox"><label><input type="checkbox" name="searchh[]" value="bell" <?= $checked["searchh"]["bell"] ?>> 鐘撞き可</label></div>
                    <div class="checkbox"><label><input type="checkbox" name="searchh[]" value="shop" <?= $checked["searchh"]["shop"] ?>> 売店</label></div>
                </div>
                <p class="searchBtnsArea">
                    <input type="hidden" name="s" value="<?php the_search_query(); ?>">

                    <input class="searchBtns" type="submit" value="検索">
                    <input class="searchBtns" type="reset" name="reset" value="リセット">
                </p>
            </div>
        </form>
    </section>
