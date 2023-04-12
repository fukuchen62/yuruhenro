<!--headerとfooterのベース作成用-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS読み込み -->
    <!-- リセットCSS -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/destyle.css" /> -->
    <!-- Googleフォント Kosugi Maru,Kiwi Maru -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&family=Kosugi+Maru&display=swap" rel="stylesheet"> -->
    <!-- Instagramアイコンフォント(font awesome) -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- js用CSS -->

    <!-- オリジナルCSS -->

    <!-- コース用CSS -->

    <!-- jQuery読み込み -->


    <!-- ファビコン設定 -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">

    <!-- meta description -->
    <?php /*トップページ*/
    if (is_home()) : ?>
    <meta name="description" content="「発心の地」徳島をゆったり1日で巡るコースをご提案しています。「おへんろ」ってどうやって始めたらいいの？やってみたいけど難しいんじゃない？あと一歩が踏み出せないあなたへのおへんろのススメ！休日を利用してゆるっとおへんろを始めてみませんか？" />
    <?php /*＃ゆるへんろって？*/
    elseif (is_page('about')) : ?>
    <meta name="description" content="「＃ゆるへんろ」とは、「発心の地」徳島をゆったりと1日で巡れるコースを紹介しています。おへんろについて知っておきたいことや、納札の書き方、お作法についての紹介です。
スマートフォンを片手に参拝手順などが確認できるので便利です！" />
    <?php /*参拝スタイル*/
    elseif (is_page('checkpoint')) : ?>
    <meta name="description" content="参拝スタイルについてのページです。服装の種類や服装で気を付けることや持ち物についてのご案内をしています。自分にあった参拝スタイルを選んでおへんろに出発してみませんか？" />
    <?php /*コース紹介*/
    elseif (is_singular('course')) : ?>
    <meta name="description" content="一日で巡るおへんろのモデルコースのページです。歩き遍路の雰囲気を味わってみたい方におすすめ！歩いて巡るウォーキングコース、寺社メインでお遍路を体験したい方におすすめ！車で巡れるドライブコースの５コースを紹介しています。" />
    <?php /*ブックマーク*/
    elseif (is_page('bookmark')) : ?>
    <meta name="description" content="入門歩きへんろコース・車コース（県北、県西、県南）、市内徒歩コースで表示した寺社お気に入り、周辺施設お気に入り、周辺スポット検索またはスポット詳細ページでブックマークした情報が表示されます。立ち寄り施設やタイムスケジュールなどもご参考に、ぜひお遍路の旅へお出かけください。" />
    <?php /*検索*/
    elseif (is_search()) : ?>
    <meta name="description" content="該当する条件で寺院の検索をすることができます。エリアの県北、県西、県南、市街地、寺院内設備の無料駐車場、食事、鐘撞き可、売店、から検索可能。お寺紹介のページへ行くこともできます。また、ブックマーク機能も利用可能。" />
    <?php /*用語集*/
    elseif (is_post_type_archive('glossary')) : ?>
    <meta name="description" content="お遍路で見かける用語と意味を説明しているページです。納札や、納経帳、本堂や、大師堂など紹介しています。持ち物の準備や、参拝の際にご活用ください。" />

    <?php /*プライバシーポリシー*/
    elseif (is_page('privacy')) : ?>
    <meta name="description" content="「とくしま1日＃ゆるへんろ」のサイト上で提供するサービスにおけるユーザーの個人情報の利用と取扱い、制作物の著作権や肖像権について説明しています。" />
    <?php /*このサイトについて*/
    elseif (is_page('sitemap')) : ?>
    <meta name="description" content="「とくしま1日＃ゆるへんろ」のお問い合わせフォームがあります。
サイトを利用頂く際の推奨環境や、著作権、リンクの使用、個人情報の取り扱いについて、JavaScript、クッキー（Cookie）の使用についてご案内しています。" />
    <?php /*サイト制作にあたって*/
    elseif (is_page('aboutus')) : ?>
    <meta name="description" content="「とくしま1日＃ゆるへんろ」を制作するにあたって、企画の動機、
協力していただいた寺社、周辺施設、参考サイト、参考書籍の紹介をしています。" />
    <?php /*門前一番街*/
    elseif (is_page('monzen')) : ?>
    <meta name="description" content="四国八十八ヶ所一番札所霊山寺の目の前にある門前一番街の紹介ページです。
遍路用品、お遍路のことなど公認先達さんからアドバイスがいただけるので初めてのお遍路初心者は立ち寄って準備万全でスタートしましょう！名物焼き餅「あわくった」もぜひ。" />
    <?php /*寺社*/
    elseif (is_post_type_archive('temple')) : ?>
    <meta name="description" content="四国八十八ヶ所の徳島県の第一番札所霊山寺から第二十三番札所薬王寺の一覧ページです。本尊、真言、宿坊、公式ＨＰ、近くの食事、体験、観光、カフェ、温泉などのスポットも紹介しています。お遍路、巡礼と共に徳島の観光スポットも行ってみてください。" />
    <!-- 未実装 -->
    <?php /*404*/
    elseif (is_404()) : ?>
    <meta name="description" content="アクセスしたページが削除されたかURLが変更になっています。" />
    <?php /*上記以外*/
    else : ?>
    <meta name="description" content="＃ゆるへんろのWebページです。" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open(); ?>
    <div class="wrap">
        <!-- headerここから -->
        <header>
            <div class="header_inner flex">
                <div class="header_logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.png" alt="とくしま１日＃ゆるへんろロゴ">
                    </a>
                </div>

                <div class="header_menu">
                    <!-- ハンバーガーボタン -->
                    <div class="header_hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <!-- ナビゲーションメニュー -->
                    <nav class="header_nav">
                        <ul class="flex">
                            <li>
                                <a href="<?php echo home_url('about'); ?>">
                                    <label>
                                        ＃ゆるへんろって？
                                    </label>
                                </a>
                            </li>
                            <li><a href="<?php echo home_url('checkpoint'); ?>"><label>参拝スタイル</label></a></li>
                            <li><a href="<?php echo home_url('course/easy'); ?>"><label>コース紹介</label></a></li>
                            <li><a href="<?php echo home_url('bookmark'); ?>"><label>マイブックマーク</label></a></li>
                            <li><a href="<?php echo home_url('?s='); ?>"><label>検索</label></a></li>
                            <li><a href="<?php echo home_url('qanda'); ?>"><label>Q&A</label></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </header>
        <!-- headerここまで -->
