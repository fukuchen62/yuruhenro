<?php
/*Template Name: single-course
*/
?>
<?php get_header(); ?>
<main>
    <div class="main_inner">
        <h1 class="h1_bg">コース紹介</h1>
        <p class="h1_cap">コース紹介全体の簡単なキャプション</p>

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
                    <p class="mb_100">

                                <?php //the_field('t_discription', 92); //ID指定で拾ってくる方法
                                $post_type ='course'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('easy', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('c_info', $post_id);
                                ?>

                            </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>
                            Googleマイマップはここ<br>

                            <?php

                                $post_type = 'course'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('easy', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('c_map', $post_id);
                                ?>
                        </div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="course_rootCap mb_40">画像？コーディング？</div>

                        <div class="course_btn mb_20">START</div>

                        <p class="mb_20">
                            <?php
                                $post_type = 'course'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('easy', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('c_time1', $post_id);
                                ?>
                        </p>

                        <div class="course_contWrap">
                            <div>
                                <img src="<?php
                                $post_type = 'temple'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('05-2', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('t_eyecatch', $post_id);
                                ?>" alt="お寺の名前" class="course_contPhoto mb_20">
                            </div>
                            <p class="course_contCap mb_40">
                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                        <?php
                                $post_type = 'temple'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('05-2', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('t_discription', $post_id);
                                ?>

                                        </p>
                            <a href="#">
                                <div class="more_btn"></div>
                            </a>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で<?php
                                $post_type = 'course'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('easy', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('c_movetime1', $post_id);
                                ?>（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20"><?php
                                $post_type = 'course'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('easy', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('c_time2', $post_id);
                                ?></p>

                        <div class="course_contWrap">
                            <div>
                                <img src="<?php
                                $post_type = 'temple'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('05-2', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('t_eyecatch', $post_id);
                                ?>" alt="お寺の名前" class="course_contPhoto mb_20">
                            </div>
                            <p class="course_contCap mb_40">
                                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                            <?php
                                $post_type = 'temple'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('05-2', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('t_discription', $post_id);
                                ?>
                                        </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で<?php
                                $post_type = 'course'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('easy', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('c_movetime2', $post_id);
                                ?>（約1.5km）
                            </div>
                        </div>

                        <p class="mb_20"><?php
                                $post_type = 'course'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('easy', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('c_time3', $post_id);
                                ?></p>

                        <div class="course_contWrap">
                            <div>
                                <img src="<?php
                                $post_type = 'temple'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('05-2', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('t_eyecatch', $post_id);
                                ?>" alt="お寺の名前" class="course_contPhoto mb_20">
                            </div>
                            <p class="course_contCap mb_40">
                                            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<?php
                                $post_type = 'temple'; //カスタム投稿タイプのスラッグ
                                $data      = get_page_by_path('05-2', OBJECT, $post_type);
                                $post_id   = $data->ID;
                                // var_dump($post_id);
                                the_field('t_discription', $post_id);
                                ?>
                                        </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_btn">GOAL</div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">周辺施設</h2>
                        ※お寺ページからもらう
                    </section>

                </div>
                <div id="course_cont2" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                                        </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ
                        </div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="mb_40">画像？コーディング？</div>

                        <div class="course_btn mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <a href="#">
                                <div class="more_btn"></div>
                            </a>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">

                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_btn">GOAL</div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">周辺施設</h2>
                        ※お寺ページからもらう
                    </section>
                </div>
                <div id="course_cont3" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                                        </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ
                        </div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="mb_40">画像？コーディング？</div>

                        <div class="course_btn mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <a href="#">
                                <div class="more_btn"></div>
                            </a>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">

                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_btn">GOAL</div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">周辺施設</h2>
                        ※お寺ページからもらう
                    </section>
                </div>
                <div id="course_cont4" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                                        </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ
                        </div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="mb_40">画像？コーディング？</div>

                        <div class="course_btn mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <a href="#">
                                <div class="more_btn"></div>
                            </a>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">

                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_btn">GOAL</div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">周辺施設</h2>
                        ※お寺ページからもらう
                    </section>
                </div>
                <div id="course_cont5" class="course_tabCont">
                    <!-- コースキャプション -->
                    <p class="mb_100">
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト<br>
                                                            コース概要説明文テキストテキストテキストテキストテキストテキストテキスト
                                                        </p>

                    <section>
                        <h2 class="h2_bg mb_40">参考マップ</h2>
                        <div>Googleマイマップはここ
                        </div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">モデルルート</h2>
                        <div class="mb_40">画像？コーディング？</div>

                        <div class="course_btn mb_20">START</div>

                        <p class="mb_20">AM 9:00</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <a href="#">
                                <div class="more_btn"></div>
                            </a>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 10:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">

                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_contInfo mb_40 flex">
                            <div class="course_contIcon">
                                アイコン
                            </div>
                            <div class="course_contTime">
                                徒歩で30分（約1.5km）
                            </div>
                            <div class="more_btn"></div>
                        </div>

                        <p class="mb_20">AM 11:30</p>

                        <div class="course_contWrap">
                            <img src="../assets/img/kv.png" alt="お寺の名前" class="course_contPhoto mb_20">
                            <p class="course_contCap mb_40">
                                                                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                                                    </p>
                            <div class="more_btn"></div>
                        </div>

                        <div class="course_btn">GOAL</div>
                    </section>

                    <section>
                        <h2 class="h2_bg mb_40">周辺施設</h2>
                        ※お寺ページからもらう
                    </section>
                </div>
            </div>

        </div>


    </div>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
