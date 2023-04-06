<?php
/*Template Name: page-checkpoint
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main>
    <div class="main_inner">
        <!-- h1 -->
        <div class="h1_bg">
            <h1>参拝スタイル</h1>
        </div>

        <!-- 参拝スタイル -->
        <h2 class="h2_bg">参拝スタイル</h2>
        <div class="big_cap mb_40">
            服装は基本的に自由<br />
            普段着でお遍路する人も増えています。<br />
            自分に合うのはどんなスタイル？
        </div>

        <section class="mb_100">
            <!-- 服装一覧 -->
            <section class="cp_area1 mb_40 flex">
                <div class="cp_area1_in">
                    <h3 class="h3_bg">カジュアル</h3>
                    <div class="small_cap">
                        <p>ラフなスタイルでリラックス参拝！</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/henrofuku1.png"
                            alt="カジュアルな服装" />

                        <div>
                            金剛杖は必ず、菅笠、白衣、輪袈裟、のどれかを身に着けるといいでしょう。<br />
                            周囲にお遍路さんだとわかってもらえ受け入れられやすいです。
                        </div>
                    </div>
                </div>

                <div class="cp_area1_in">
                    <h3 class="h3_bg">袖なし白衣</h3>
                    <div class="small_cap">
                        <p>おへんろアイテムをほどよくミックス！</p>
                        <img src="" alt="" />
                        <div>白衣・輪袈裟・金剛杖が基本の三点</div>
                    </div>
                </div>

                <div class="cp_area1_in">
                    <h3 class="h3_bg">正統派</h3>
                    <div class="small_cap">
                        <p>おへんろさんを服でも満喫！</p>
                        <img src="" alt="" />
                        <div>
                            伝統的なスタイル<br />
                            白衣を着ると気持ちが引き締まります
                        </div>
                    </div>
                </div>
            </section>
            <!-- 服装解説 -->
            <section class="cp_area2 mb_40 flex flex_d_c">
                <div class="cp_area2_in">
                    <p class="cp_minittl mb_20">
                        ①金剛杖（こんごうづえ）
                    </p>
                    <div class="mb_40">
                        弘法大師の分身といわれていますので大切に扱いましょう。<br />
                        杖に「同行二人」を書かれているのは大師と二人連れという意味です。<br />
                        かつては生き倒れたお遍路の墓標の代わりに立てられたそうです。
                    </div>

                    <p class="cp_minittl mb_20">
                        ②輪袈裟（わげさ）
                    </p>
                    <div class="mb_40">
                        首からかける略式の袈裟。
                    </div>

                    <p class="cp_minittl mb_20">
                        ③白衣（びゃくえ）
                    </p>
                    <div class="mb_40">
                        清浄無垢な姿を現し、昔はどこで死んでも構わないという覚悟の死装束を意味したといわれます。<br />
                        ・道中衣（どうちゅうえ）：個々人が着る白装束<br />
                        ・判衣（はんえ）：ご宝印用の白衣<br />
                        ・笈摺（おいずる）：袖のついていない白衣
                    </div>

                    <p class="cp_minittl mb_20">
                        ④山谷袋（さんやぶくろ）、頭陀袋（ずだぶくろ）
                    </p>
                    <div class="mb_40">
                        経本や納経帳のほか、線香ロウソクなど、お遍路に必要なものを入れる袋。
                    </div>

                    <p class="cp_minittl mb_20">
                        ⑤菅笠（すげがさ）
                    </p>
                    <div class="mb_40">
                        日よけや雨具に最適です。<br />
                        弘法大師を表す梵字が正面になるようにかぶります。
                    </div>
                </div>

                <div class="cp_area2_in">
                    <p class="cp_minittl mb_20">⑥持鈴（じれい）</p>
                    <div class="mb_40">
                        正式な読経では持鈴を振ります。<br />
                        魔除けのために杖やカバンにつけます。
                    </div>

                    <p class="cp_minittl mb_20">
                        ⑦数珠（じゅず）、念珠（ねんじゅ）
                    </p>
                    <div class="mb_40">
                        煩悩の数１０８個の球が連なる真言宗用の数珠が一般的ですが、家庭の宗派のものでも大丈夫です。<br />
                        数珠を持って仏様に手を合わせれば、煩悩が消滅し、功徳を得られるといわれています。
                    </div>

                    <p class="cp_minittl mb_20">
                        ⑧手甲（てっこう）
                    </p>
                    <div class="mb_40">
                        手の甲や手首を覆う布や皮のこと。
                    </div>

                    <p class="cp_minittl mb_20">
                        ⑨脚絆（きゃはん）
                    </p>
                    <div class="mb_40">すねの部分に巻く布。</div>
                </div>
            </section>
            <!-- 豆知識 -->
            <h3 class="h3_bg">その他巡礼用品の豆知識</h3>
            <section class="cp_area2">
                <div class="cp_area2_in">
                    <p class="cp_minittl mb_20">
                        納札（おさめふだ）
                    </p>
                    <div class="mb_40">
                        参拝の証に本堂と大師堂の二カ所で納めます。<br />
                        １枚づず表に住所、名前、参拝年月日、裏に願い事を書いておきます。<br />
                        お接待を受けたときは名刺代わりに納札を渡しましょう。<br />
                        巡礼回数によって色分けされています。<br />
                        白（１～４回）、緑（５～７回）、赤（８～２４回）、銀（２５～４９回）、金（５０～９９回）、錦（１００回以上）
                    </div>
                </div>

                <div class="flex flex_d_c">
                    <div class="cp_area2_in">
                        <p class="cp_minittl mb_20">
                            経本（きょうほん）
                        </p>
                        <div class="mb_40">
                            般若心経や各札所御本尊の真言などが書かれた、四国霊場巡拝用のものがあります。<br />
                            お経を覚えていても経本を手に持って読経するのが正しい作法です。
                        </div>

                        <p class="cp_minittl mb_20">
                            納経帳（のうきょうちょう）
                        </p>
                        <div class="mb_40">
                            参拝した証として各寺の納経所で墨書と御朱印をいただくための帳面。<br />
                            回るたびに同じ納経帳を使って重ねて印をしていきます。<br />
                            何度も回っているお遍路さんの納経帳は御朱印で真っ赤になっています。
                        </div>
                    </div>

                    <div class="cp_area2_in">
                        <p class="cp_minittl mb_20">
                            ライター、マッチ（着火具）
                        </p>
                        <div class="mb_40">
                            線香やロウソクの火は必ず自分で点けましょう。<br />
                            もらい火はその方の業や厄ももらってしまう恐れがあります。
                        </div>

                        <p class="cp_minittl mb_20">小銭</p>
                        <div class="mb_40">
                            お賽銭、御朱印用に用意しておきましょう。
                        </div>
                    </div>
                </div>
            </section>
            <!-- 気を付けること -->
            <section class="cp_area2">
                <h3 class="h3_bg">服装で気を付けること</h3>
                <div class="cp_deco">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/hana.png" alt="花の飾り" />
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/hana.png" alt="花の飾り" />
                    <div class="mb_20">
                        ・菅笠はお参りのとき、お堂の中、僧の前でもかぶったままで構いません。靴を脱ぐ場所では笠も脱ぎましょう。
                    </div>
                    <div class="mb_20">
                        ・和袈裟は食事やトイレのときは首から外しましょう。
                    </div>
                    <div>
                        ・金銅杖は大師が修行中に橋の下で一夜を明かしたことから、橋の上で杖を突くのは禁忌とされています。
                    </div>
                </div>
            </section>
        </section>

        <!-- 持ち物リスト -->
        <h2 class="h2_bg">持ち物リスト</h2>
        <div class="big_cap mb_40">
            参拝の時に必要なものなどをまとめました！
        </div>
        <!-- 持ち物リスト一覧 -->
        <section class="cp_area3_in mb_100 flex">
            <!-- 必要なもの -->
            <section class="cp_area3">
                <h3 class="h3_bg">参拝の時に必要なもの</h3>
                <div class="mb_20">
                    ・念珠<br />
                    ・経本<br />
                    ・納経帳<br />
                    ・納札<br />
                    ・お線香<br />
                    ・ろうそく<br />
                    ・ライター・マッチ(着火具)<br />
                    ・小銭<br />
                    ・クリアファイル
                    (パンフレットなどを入れるのに便利)
                </div>
            </section>

            <!-- 持っていると便利なもの -->
            <section class="cp_area3">
                <h3 class="h3_bg">
                    歩くときに持っていると便利なもの
                </h3>
                <div class="mb_20">
                    ・コンパス<br />
                    ・笛<br />
                    ・虫よけ<br />
                    ・テーピングテープ
                    (まめができそうなところにあらかじめ貼っておく)<br />
                    ・着替え<br />
                    ・タオル<br />
                    ・薬(湿布や絆創膏も)<br />
                    ・ビニール袋<br />
                    ・スポーツドリンク<br />
                    ・塩(熱中症対策)<br />
                    ・歩きやすい靴<br />
                    ・５本指ソックス
                </div>
            </section>
        </section>
    </div>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>