<?php
/*Template Name: page-checkpoint
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main class="wrap">

    <h1 class="h1_bg">参拝スタイル</h1>
    <?php get_template_part('template-parts/breadcrumb'); ?>


    <article class="main_inner">

        <!-- 参拝スタイル -->
        <section class="contents_width">
            <div class="h2_box">
                <h2 class="h2_bg">服装</h2>
            </div>
            <div class="course_pcW1">
                <p class="big_cap mb_40 text_c">
                    服装は基本的に自由。普段着でお遍路する人も増えています。自分に合うのはどんなスタイル？
                </p>
            </div>
        </section>
        <!-- 服装一覧 -->
        <section class="cp_area1 flex js-fadeUp">
            <div class="cp_area1_in">
                <h3 class="h3_bg mb_20">カジュアル</h3>
                <div class="small_cap">
                    <p class="small_cap mb_20">ラフなスタイルで<br>リラックス参拝！</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/henrofuku1.png" alt="カジュアルな服装" class="mb_20">
                    <div>
                        <p class="mb_20">
                            金剛杖は必ず、菅笠、白衣、輪袈裟、のどれかを身に着けるといいでしょう。<br />
                            周囲にお遍路さんだとわかってもらえ受け入れられやすいです。
                        </p>
                    </div>
                </div>
            </div>

            <div class="cp_area1_in">
                <h3 class="h3_bg mb_20">袖なし白衣</h3>
                <div class="small_cap">
                    <p class="small_cap mb_20">おへんろアイテムを<br>ほどよくミックス！</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/henrofuku2.png" alt="袖なし白衣の服装" class="mb_20">

                    <div>
                        <p>白衣・輪袈裟・金剛杖が基本の三点です。</p>
                    </div>
                </div>
            </div>

            <div class="cp_area1_in">
                <h3 class="h3_bg mb_20">正統派</h3>
                <div class="small_cap">
                    <p class="small_cap mb_20">おへんろさんを<br>服でも満喫！</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/henrofuku3.png" alt="しっかりお遍路の服装" class="mb_20">

                    <div>
                        <p>
                            伝統的なスタイルです。<br />
                            白衣を着ると気持ちが引き締まります。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 服装解説 -->
        <section class="cp_area2 js-fadeUp">
            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ①金剛杖（こんごうづえ）
                </p>
                <p>
                    弘法大師の分身といわれていますので大切に扱いましょう。<br />
                    杖に「同行二人」を書かれているのは大師と二人連れという意味です。<br />
                    かつては生き倒れたお遍路の墓標の代わりに立てられたそうです。
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ②輪袈裟（わげさ）
                </p>
                <p>
                    首からかける略式の袈裟。
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ③白衣（びゃくえ）
                </p>
                <p>
                    清浄無垢な姿を現し、昔はどこで死んでも構わないという覚悟の死装束を意味したといわれます。<br />
                    ・道中衣（どうちゅうえ）：個々人が着る白装束<br />
                    ・判衣（はんえ）：ご宝印用の白衣<br />
                    ・笈摺（おいずる）：袖のついていない白衣
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ④山谷袋（さんやぶくろ）、頭陀袋（ずだぶくろ）
                </p>
                <p>
                    経本や納経帳のほか、線香、ロウソクなど、お遍路に必要なものを入れる袋。
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ⑤菅笠（すげがさ）
                </p>
                <p>
                    日よけや雨具に最適です。弘法大師を表す梵字が正面になるようにかぶります。
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">⑥持鈴（じれい）</p>
                <p>
                    正式な読経では持鈴を振ります。魔除けのために杖やカバンにつけます。
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ⑦数珠（じゅず）、念珠（ねんじゅ）
                </p>
                <p>
                    煩悩の数１０８個の球が連なる真言宗用の数珠が一般的ですが、家庭の宗派のものでも大丈夫です。<br />
                    数珠を持って仏様に手を合わせれば、煩悩が消滅し、功徳を得られるといわれています。
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ⑧手甲（てっこう）
                </p>
                <p>
                    手の甲や手首を覆う布や皮のこと。
                </p>
            </div>

            <div class="mb_40">
                <p class="cp_minittl mb_20">
                    ⑨脚絆（きゃはん）
                </p>
                <p>
                    すねの部分に巻く布。
                </p>
            </div>

        </section>

        <!-- 飾り -->
        <div class="cp_deco1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hanaline.png" alt="区切り飾り">
        </div>

        <!-- 豆知識 -->
        <section class="cp_area2 js-fadeUp">
            <div class="mb_40">
                <h3 class="h3_bg mb_40">その他巡礼用品の豆知識</h3>

                <div class="mb_40">
                    <p class="cp_minittl mb_20">
                        納札（おさめふだ）
                    </p>
                    <p>
                        参拝の証に本堂と大師堂の二ヶ所で納めます。１枚ずつ表に住所、名前、参拝年月日、裏に願い事を書いておきます。<br />
                        お接待を受けたときは名刺代わりに納札を渡しましょう。<br />
                        巡礼回数によって色分けされています。<br />
                        白（１～４回）、緑（５～７回）、赤（８～２４回）、銀（２５～４９回）、金（５０～９９回）、錦（１００回以上）
                    </p>
                </div>

                <div class="mb_40">
                    <p class="cp_minittl mb_20">
                        経本（きょうほん）
                    </p>
                    <p>
                        般若心経や各札所御本尊の真言などが書かれた、四国霊場巡拝用のものがあります。お経を覚えていても経本を手に持って読経するのが正しい作法です。
                    </p>
                </div>

                <div class="mb_40">
                    <p class="cp_minittl mb_20">
                        納経帳（のうきょうちょう）
                    </p>
                    <p>
                        参拝した証として各寺の納経所で墨書と御朱印をいただくための帳面。<br>
                        回るたびに同じ納経帳を使って重ねて印をしていきます。何度も回っているお遍路さんの納経帳は御朱印で真っ赤になっています。
                    </p>
                </div>

                <div class="mb_40">
                    <p class="cp_minittl mb_20">
                        ライター、マッチ（着火具）
                    </p>
                    <p>
                        線香やロウソクの火は必ず自分で点けましょう。もらい火はその方の業や厄ももらってしまう恐れがあります。
                    </p>
                </div>

                <div class="mb_40">
                    <p class="cp_minittl mb_20">小銭</p>
                    <p>
                        お賽銭、御朱印用に用意しておきましょう。
                    </p>
                </div>
            </div>
        </section>

        <!-- 気を付けること -->
        <section class="cp_area2">
            <h3 class="h3_bg mb_40">服装で気を付けること</h3>
            <div class="cp_deco2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hana.png" alt="花の飾り" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hana.png" alt="花の飾り" />
                <div class="js-fadeUp">
                    <div class="mb_20">
                        <p>
                            ・菅笠はお参りのとき、お堂の中、僧の前でもかぶったままで構いません。靴を脱ぐ場所では笠も脱ぎましょう。
                        </p>
                    </div>
                    <div class="mb_20">
                        <p>
                            ・和袈裟は食事やトイレのときは首から外sしましょう。
                        </p>
                    </div>
                    <div>
                        <p>
                            ・金剛杖は大師が修行中に橋の下で一夜を明かしたことから、橋の上で杖を突くのは禁忌とされています。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- </section> -->

        <!-- 持ち物リスト -->
        <section class="contents_width mb_100">
            <div class="h2_box">
                <h2 class="h2_bg">持ち物リスト</h2>
            </div>

            <div class="course_pcW1">
                <p class="big_cap mb_40 text_c">
                    参拝の時に必要なものなどをまとめました！
                </p>
            </div>
            <!-- 持ち物リスト一覧 -->
            <div class="cp_area3_in flex">
                <!-- 必要なもの -->
                <div class="cp_area3">
                    <h3 class="h3_bg mb_20">参拝の時に必要なもの</h3>
                    <div class="mb_20 js-fadeUp">
                        <p>
                            ・数珠<br />
                            ・経本<br />
                            ・納経帳<br />
                            ・納札<br />
                            ・線香<br />
                            ・ロウソク<br />
                            ・ライター・マッチ(着火具)<br />
                            ・小銭<br />
                            ・クリアファイル<br>
                            (パンフレットなどを入れるのに便利)
                        </p>
                    </div>
                </div>

                <!-- 持っていると便利なもの -->
                <div class="cp_area3">
                    <h3 class="h3_bg mb_20">
                        歩くときに持っていると<br>便利なもの
                    </h3>
                    <div class="mb_20 js-fadeUp">
                        <p>
                            ・コンパス<br />
                            ・笛<br />
                            ・虫よけ<br />
                            ・テーピングテープ<br>
                            (まめができそうなところにあらかじめ貼っておく)<br />
                            ・着替え<br />
                            ・タオル<br />
                            ・薬(湿布や絆創膏も)<br />
                            ・ビニール袋<br />
                            ・スポーツドリンク<br />
                            ・塩(熱中症対策)<br />
                            ・歩きやすい靴<br />
                            ・５本指ソックス
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
