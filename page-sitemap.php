<?php
/*Template Name:page-sitemap
*/
?>
<?php get_header(); ?>
<!-- mainここから -->
<main>
    <h1 class="h1_bg">このサイトについて</h1>
    <article class="main_inner">

        <section class="contents_width">
            <!-- <h2 class="h2_bg">このサイトについて</h2> -->
            <p class="big_cap_independent">
                当サイトのご利用にあたっては、以下の内容をご確認いただき、ご承諾いただいたものといたします。
                また、内容は予告なく変更する場合がありますので、あらかじめご了承ください。
            </p>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg_independent">掲載情報について</h3>
                <div>
                    <p class="mb_20">
                        当サイトの管理・運営は、QLIPプログラミングスクール　WEBプログラマー養成課第14期　藤班が行っています。
                        当サイトからリンクされたページが外部サイトである場合、当サイトはその内容について責任を負いません。
                        当サイトに関するお問い合わせ・ご意見は「お問い合わせフォーム」へお寄せください。
                    </p>

                    <a href="<?php echo home_url('contact'); ?>">
                        <p class="mb_20">
                            →お問い合わせフォームへ
                        </p>
                    </a>


                    <p class="mb_20">情報の掲載にあたっては、相当の注意をはらっていますが、機械等の誤操作やその他の事情によって、
                        情報に誤りが生ずる場合があります。また、掲載されている情報は、発表時点のものです。
                        閲覧時点で情報が異なる場合があります。あらかじめご了承ください。</p>
                </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg_independent">著作権について</h2>
            <div>
                <p class="mb_20">
                    当サイトの著作権は、当サイトにあります。
                    当サイトの情報・写真などのコンテンツを無断で複写・複製することは、著作権等、知的所有権の侵害となります。</p>
            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg_independent">リンクについて</h2>
            <div>
                <p class="mb_20">
                    当サイトに対するリンクは必要に応じてご自由に行ってください。
                    ただし画像などのページ構成要素に対してリンクを行う場合は、原典が明示される形で行ってください。</p>
            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg_independent">個人情報について</h2>
            <div>
                <p class="mb_20">
                    当サイトを通じてご提供いただく個人情報の取り扱いについては、当サイト個人情報保護基本方針および同規程に則り、
                    適正に管理を行い、当該の目的以外での使用はいたしません。</p>

                <a href="./page-privacy.html">
                    <p>→個人情報の取り扱い</p>
                </a>
            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg_independent">推奨ブラウザ</h2>
            <div>
                <p class="mb_20">レスポンシブWeb技術による対応とするため、CSS3 Media Queriesに対応したブラウザに限定します。</p>
            </div>
            <div class="mb_40">
                <ul class="ul_independent">
                    <li>Microsoft Edge 最新版</li>
                    <li>Google Chrome 最新版</li>
                    <li>Mozilla Firefox 最新版</li>
                    <li>Apple Safari 最新版</li>
                    <li>iOS、Androidの標準ブラウザ</li>
                </ul>
            </div>
            <div>
                <p class="mb_20">
                    レスポンシブWebデザインについて
                </p>
                <p class="mb_20">
                    一部ページを除き、画面サイズに応じてレイアウトを最適化する「レスポンシブWebデザイン」を導入しています。
                </p>
            </div>
        </section>

        <section class="contents_width mb_80">
            <h2 class="h3_bg_independent">JavaScript</h2>
            <div>
                <p class="mb_20">
                    当サイトでは一部のコンテンツにJavaScriptを使用しています。
                    JavaScriptを無効にして使用された場合、各ページが正常に動作しない、又は、表示されない場合がありますので、ご了承ください。
                </p>
            </div>
        </section>

        <section class="contents_width mb_100">
            <h2 class="h3_bg_independent">Cookie（クッキー）</h2>
            <div>
                <p>
                    当サイトは、サービスの利便性を高めるために一部Cookie（クッキー）という技術を利用しています。
                    Cookieを利用することにより、入力された情報を一時的に閲覧されたコンピューターに保存し、
                    他のページや次回アクセス時に再入力の手間を省くことができます。
                    またこのサイトでは、Cookieを使用して、ウェブサイトの利用状況に関するデータを集計しています。
                    このデータには、閲覧者の個人を特定する情報は含まれていません。
                    これにより得られた統計的データは、ウェブサイトの改善等の目的に利用させていただきます。
                </p>
            </div>
        </section>

    </article>
</main>
<!-- mainここまで -->
<?php get_footer(); ?>
