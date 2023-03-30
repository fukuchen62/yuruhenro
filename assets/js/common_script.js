"use strict";

///////////////////////////
/////     header      /////
///////////////////////////

//--------------------------------------------------//
//ハンバーガーメニューが押されたら//
$(".header_hamburger").on("click", function () {
    //.header_hamburgerと.header_nav.activeを付与
    $(".header_hamburger").toggleClass("active");
    $(".header_nav").toggleClass("active");
});
//リンク先が押されたら//
$(".nav_menu a").click(function () {
    //.header_hamburgerと.header_navから.activeを削除してメニューを閉じる
    $(".header_hamburger").removeClass("active");
    $(".header_nav").removeClass("active");
});
//--------------------------------------------------//

///////////////////////////
/////      main       /////
///////////////////////////
//--------------------------------------------------//
// スクロールして表示領域に入ったらclass付与
$(function () {
    $(".js-fadeUp").on("inview", function () {
        $(this).addClass("is-inview");
    });
});

//--------------------------------------------------//
// コースページのタブ表示用javascript //
//任意のタブにURLからリンクするための設定
function GethashID(hashIDName) {
    if (hashIDName) {
        //タブ設定
        $(".course_tabWrap li")
            .find("a")
            .each(function () {
                //タブ内のaタグ全てを取得
                var idName = $(this).attr("href"); //タブ内のaタグのリンク名
                if (idName == hashIDName) {
                    //リンク元の指定されたURLのハッシュタグと同じかをチェック
                    var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
                    $(".course_tabWrap li").removeClass("active"); //タブ内のliについているactiveクラスを取り除き
                    $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
                    //表示させるエリア設定
                    $(".course_tabCont").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
                    $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
                }
            });
    }
}
//タブをクリックしたら
$(".course_tabWrap a").on("click", function () {
    var idName = $(this).attr("href"); //タブ内のリンク名を取得
    GethashID(idName); //設定したタブの読み込みと
    return false; //aタグを無効にする
});
// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on("load", function () {
    $(".course_tabWrap li:first-of-type").addClass("active"); //最初のliにactiveクラスを追加
    $(".course_tabCont:first-of-type").addClass("is-active"); //最初の.areaにis-activeクラスを追加
    var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
    GethashID(hashName); //設定したタブの読み込み
});

//--------------------------------------------------//

///////////////////////////
/////     footer      /////
///////////////////////////

//--------------------------------------------------//
//TOPへ戻るボタン//
$(function () {
    var pagetop = $(".page-top");
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $("body, html").animate({ scrollTop: 0 }, 500);
        return false;
    });
});
//--------------------------------------------------//
