<?php
/*Template Name:contact-form
*/
?>
<?php get_header(); ?>
<main class="main_inner">
    <!-- h1 -->
    <div class="h1_bg">
        <h1>お問い合わせ</h1>

    </div>
    <?php get_template_part('template-parts/breadcrumb'); ?>


    <div class="contents_width">
        <div class="h2_box">
            <h2 class="h2_bg">お問い合わせフォーム</h2>
        </div>
        <div class="mb_40">
            当サイトへのお問い合わせは、下記の入力フォームへご入力の上、お問い合わせください。
            また、お寺および周辺施設に関するお問い合わせにつきましては、各お寺や各施設に直接お問い合わせください。
        </div>
        <?php echo do_shortcode('[mwform_formkey key="548"]') ?>

        <!-- 以下mwformのショートコードの内容物 -->

        <!-- <div class="form">
            <div class="form_row">
                <label class="form_label" for="fullname">お名前<span> 必須</span></label>
                <div class="form_content" style=backgroundcolor="white">
                    [mwform_text name="fullname" id="fullname" placeholder="名前を入力" ]
                </div>
            </div>

            <div class="form_row">
                <label class="form_label" for="email">email<span> 必須</span></label>
                <div class="form_content">
                    [mwform_email name="email" id="email"　placeholder="メールアドレスを入力" ]
                </div>
            </div>

            <div class="form_row">
                <label class="form_label" for="email">メッセージ</label>
                <div class="form_content">
                    [mwform_textarea name="message" id="message"　placeholder="メッセージを入力"　]
                </div>
            </div>

            <div class="form_row form_row-center">
                [mwform_submitButton name="send" class="btn btn-send" confirm_value="確認画面へ" submit_value="送信する"]
            </div>

            <div class="form_row form_row-center">
                [mwform_backButton class="btn btn-back" value="戻る"]
            </div>


        </div> -->
        <!-- 以上mwformのショートコードの内容物 -->

    </div>
</main>
<?php get_footer(); ?>
