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
                    お遍路に興味があっても、本格的に始めるのはハードルが高い方や認知度の低い年齢層に、お遍路について知ってもらい、お遍路体験の最初の一歩を後押しをしたいという思いから、徳島県内の一番札所霊山寺から二十三番札所薬王寺までと周辺施設を紹介する『とくしま１日#ゆるへんろ』を企画しました。
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
                            <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a>
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
                                <a href="https://www.aoawo-naruto.com/" target="_blank">AoAwo Naruto Resort</a>
                            </li>
                            <li>
                                <a href="https://cocowapot.com/" target="_blank">herb&amp;aroma Cocowapot</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/aguriiitano_official/" target="_blank">JA板野郡 JAグリーン
                                    アグリ板野店</a>
                            </li>
                            <li>
                                <a href="https://lazycoffeebase.wixsite.com/lazycoffeebase" target="_blank">LAZY COFFEE BASE</a>
                            </li>
                            <li>
                                <a href="https://odori.kitchen/" target="_blank">odori</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">あ行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="http://www.acaricafe.com/" target="_blank">あかりカフェ</a>
                            </li>
                            <li>
                                <a href="https://awagibier-aoki.com/" target="_blank">阿波地美獲 あおき</a>
                            </li>
                            <li>
                                <a href="http://www.town.itano.tokushima.jp/asebi_onsen.html" target="_blank">あせび温泉 やすらぎの郷</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/awashanthi/about" target="_blank">アワシャンティ</a>
                            </li>
                            <li>
                                <a href="https://www.narutokanko.co.jp/eskahill/" target="_blank">エスカヒル・鳴門</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/okashinaomisemino/" target="_blank">お菓子なお店　MINO</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">か行</h3>
                    <div class="mb_40">
                        <ul>
                        <li>
                                <a href="https://marine.kaiyo-kankou.jp/index.php/en/" target="_blank">海洋自然博物館マリンジャム</a>
                            </li>
                            <li>
                                <p>カフェクラブ</p>
                            </li>
                            <li>
                                <a href="http://kagyu.omiki.com/60shimai/shimai.html" target="_blank">ギャラリーカフェ ブリッサ</a>
                            </li>
                            <li>
                                <a href="https://kohakunotenshi.com/" target="_blank">こはくの天使</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">さ行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="http://www.matsubaan.com/" target="_blank">茶房 松葉庵 麟角</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">た行</h3>
                    <div class="mb_40">
                        <ul>
                        <li>
                            <a href="http://www.shikoku-cable.co.jp/index.html" target="_blank">太龍寺ロープウェイ</a>
                        </li>
                        <li>
                            <a href="http://www.ja-higashitks.com/assets/images/toretore.pdf" target="_blank">とれとれ市公方　(JA東とくしま)</a>
                        </li>
                        <li>
                            <a href="https://jikishin-an.com/" target="_blank">手打ち二八蕎麦の店　直心庵</a>
                        </li>

                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">な行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="http://aratae.jp/naruto/" target="_blank">鳴門天然温泉　あらたえの湯</a>
                            </li>
                            <li>
                                <a href="https://www.uzusio.com/" target="_blank">鳴門の渦潮　うずしお観潮船</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">は行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="https://www.hinanosato.com/" target="_blank">ひなの里・かつうら</a>
                            </li>
                            <li>
                                <a href="https://tokushima-kamojima.cafe-pinokio.com/" target="_blank">ピノキオ　徳島鴨島店</a>
                            </li>
                            <li>
                                <a href="https://caretta.town.minami.lg.jp/" target="_blank">日和佐うみがめ博物館「カレッタ」</a>
                            </li>
                            <li>
                            <p>本格手打ちうどん　あおやま</p>
                </li>


                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">ま行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <a href="http://r.goope.jp/mameboncafe/" target="_blank">まめぼんカフェ</a>
                            </li>
                            <li>
                                <a href="https://www.michinoeki-itano.jp/" target="_blank">道の駅　いたの</a>
                            </li>
                            <li>
                                <a href="https://www.ja-higashitks.com/aisai/" target="_blank">みはらしの丘
                                    あいさい広場　(JA東とくしま産直市)</a>
                            </li>
                            <li>
                                <a href="https://monzen-ichibangai.com/" target="_blank">門前一番街</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">や行</h3>
                    <div class="mb_40">
                        <ul>
                        <li>
                                <a href="http://aratae.jp/komatsushima/" target="_blank">湯処あらたえ　小松島店</a>
                            </li>
                            <li>
                            <p>吉野川温泉</P>
                            </li>
                            <li>
                                <a href="https://tokuchu-ja.or.jp/store/detail.php?nm=higashitokushima_yottene" target="_blank">よってネ市　(JA東とくしま産直市)</a>
                            </li>
                            </ul>
                    </div>
                </div>

                <div class="shisetu_unit">
                    <h3 class="mt_10 h4_bg">ら行</h3>
                    <div class="mb_40">
                        <ul>
                            <li>
                                <p>リーベンデール</p>
                            </li>
                            <li>
                                <a href="http://www.durum.jp/" target="_blank">リストランテデュラム</a>
                            </li>
                            <li>
                                <a href="https://azure-ishii.amebaownd.com/" target="_blank">レストラン　アジュール</a>
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
                    <div class="each_ref_site"><a href="https://www.photo-ac.com/" target="_blank">photoAC</a></div>
                    <div class="each_ref_site"><a href="https://www.awanavi.jp/" target="_blank">阿波ナビ</a></div>
                </div>
                <div>
                    <div class="each_ref_site"><a href="https://88shikokuhenro.jp/" target="_blank">（一社）四国八十八ヶ所霊場会</a></div>
                    <div class="each_ref_site"><a href="https://www.seichijunrei-shikokuhenro.jp/" target="_blank">聖地巡礼　四国遍路</a></div>
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
