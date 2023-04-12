<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">サイト制作にあたって</h1>
    <article class="main_inner">
        <section class="contents_width mb_80">
            <div class="small_cap">
                <p>
                    このサイトは国の求職者支援制度に基づく、株式会社ＱＬＩＰ クリッププログラミングスクール・ＷＥＢプログラマー養成科第14期生、『藤(ふじ)』班が、２０２３年に制作したウェブサイトです。（以下「本サイト」といいます）
                </p>
            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg mb_40">サイト制作の経緯</h2>
            <div class="mb_20 js-fadeUp">
                <p>
                    　最近はお遍路の目的も多様化されているといいますが、バスツアーで参加したり、何日もかけて歩いて回るという敷居の高いイメージがあります。
                    お遍路に興味があっても、本格的に始めるのはハードルが高い方や認知度の低い年齢層に、お遍路について知ってもらい、お遍路体験の最初の一歩を後押しをしたいという思いから、徳島県内の第１番霊山寺から第２３番薬王寺までと周辺施設を紹介する『とくしま１日#ゆるへんろ』を企画しました。
                </p>
            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg mb_40">ご協力いただいたお寺</h2>
            <div class="small_cap temple_list mb_20 js-fadeUp">
                <!-- <ul> -->
                <?php $args = array(
                    'post_type' => 'temple',
                    'posts_per_page' => -1 //表示件数（-1で全ての記事を表示
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <!-- <li> -->
                        <div class="each_temple">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <!-- </li> -->
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- </ul> -->
            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg mb_40">ご協力いただいた周辺施設</h2>
            <div class="flex shisetu js-fadeUp">

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg js">a～z</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="https://www.aoawo-naruto.com/">AoAwo Naruto Resort</a>
                            </li>
                            <li>
                                <a href="https://cocowapot.com/">herb&amp;aroma Cocowapot</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/aguriiitano_official/">JA板野郡 JAグリーン
                                    アグリ板野店</a>
                            </li>
                            <li>
                                <a href="https://lazycoffeebase.wixsite.com/lazycoffeebase">LAZY COFFEE BASE</a>
                            </li>
                            <li>
                                <a href="https://odori.kitchen/access">odori</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">あ行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="http://www.acaricafe.com/">あかりカフェ</a>
                            </li>
                            <li>
                                <a href="http://www.town.itano.tokushima.jp/asebi_onsen.html">あせび温泉 やすらぎの郷</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/awashanthi/about">アワシャンティ</a>
                            </li>
                            <li>
                                <a href="https://www.narutokanko.co.jp/eskahill/">エスカヒル・鳴門</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/okashinaomisemino/">お菓子なお店　MINO</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">か行</h3>
                    <div class="mb_40">
                        <ul>
                            <li><a href="">カフェクラブ</a></li>
                            <li>
                                <a href="http://kagyu.omiki.com/60shimai/shimai.html">ギャラリーカフェ ブリッサ</a>
                            </li>
                            <li>
                                <a href="https://higashinecoffee.site/">こはくの天使</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">た行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="http://www.ja-higashitks.com/assets/images/toretore.pdf">とれとれ市公方　(JA東とくしま)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">は行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="https://www.hinanosato.com/">ひなの里・かつうら</a>
                            </li>
                            <li>
                                <a href="https://tokushima-kamojima.cafe-pinokio.com/">ピノキオ　徳島鴨島店</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">ま行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="https://www.google.com/url?q=http://r.goope.jp/mameboncafe/contact&sa=D&source=editors&ust=1680350847874345&usg=AOvVaw01-q7Lcc9nUzayaTRi5wQr">まめぼんカフェ</a>
                            </li>
                            <li>
                                <a href="https://www.ja-higashitks.com/aisai/">みはらしの丘
                                    あいさい広場　(JA東とくしま産直市)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">や行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="https://tokuchu-ja.or.jp/store/detail.php?nm=higashitokushima_yottene">よってネ市　(JA東とくしま産直市)</a>
                            </li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">ら行</h3>
                    <div class="mb_40">
                        <ul>
                            <li><a href="">リーベンデール</a></li>
                            <li>
                                <a href="http://www.durum.jp/">リストランテデュラム</a>
                            </li>
                            <li>
                                <a href="https://azure-ishii.amebaownd.com/">レストラン　アジュール</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg mb_40">参考サイト</h2>
            <div class="ref_site mb_20 js-fadeUp">
                <div>
                    <div class="each_ref_site"><a href="https://www.photo-ac.com/">photoAC</a></div>
                    <div class="each_ref_site"><a href="https://www.awanavi.jp/">阿波ナビ</a></div>
                </div>
                <div>
                    <div class="each_ref_site"><a href="https://88shikokuhenro.jp/">四国遍路八十八ヶ所</a></div>
                    <div class="each_ref_site"><a href="https://www.seichijunrei-shikokuhenro.jp/">聖地巡礼　四国遍路</a></div>
                </div>
            </div>
        </section>

        <section class="contents_width mb_100">
            <h2 class="h3_bg mb_40">参考書籍</h2>
            <div class="small_cap mb_20 js-fadeUp reference">
                <ul>
                    <li>
                        <div class="emphasis">四国八十八か所めぐり　同行二人、お大師様とお遍路の旅へ</div>
                        <div>昭文社出版メディア編集部</div>
                    </li>
                    <li>
                        <div class="emphasis">気軽に行きたい四国遍路旅　鉄道で！バスで！観光も楽しむ「通い遍路」のススメ</div>
                        <div>後藤さおり著</div>
                    </li>
                    <li>
                        <div class="emphasis">はじめてのお遍路さん</div>
                        <div>株式会社ダン／土金哲夫</div>
                    </li>
                    <li>
                        <div class="emphasis">四国８８カ所　開運！おへんろ旅</div>
                        <div>株式会社あわわ</div>
                    </li>
                    <li>
                        <div class="emphasis">るるぶ　四国八十八カ所</div>
                        <div>ＪＴＢパブリッシング</div>
                    </li>
                    <li>
                        <div class="emphasis">四国八十八カ寺＆周辺ガイド</div>
                        <div>株式会社エス・ピー・シー</div>
                    </li>
                    <li>
                        <div class="emphasis">クルマでお遍路　四国八十八ヶ所　札所めぐり　ドライブ巡礼ガイド</div>
                        <div>四国おへんろ倶楽部</div>
                    </li>
                    <li>
                        <div class="emphasis">てくてく歩き　四国八十八ヶ所ゆとりの旅</div>
                        <div>ブルーガイド編集部</div>
                    </li>
                </ul>
            </div>
        </section>
    </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
