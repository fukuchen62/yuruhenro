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
/////     footer      /////
///////////////////////////

//--------------------------------------------------//
$(function () {
    var pagetop = $(".page-top");
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
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
