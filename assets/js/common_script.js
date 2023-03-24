"use strict";

///////////////////////////
/////     header      /////
///////////////////////////

//--------------------------------------------------//
//ハンバーガーメニューが押されたら//
$(".header_hamburger").on("click", function () {
    //.header_hamburgerと.header_gnav.activeを付与
    $(".header_hamburger").toggleClass("active");
    $(".header_gnav").toggleClass("active");
});
//リンク先が押されたら//
$(".nav_menu a").click(function () {
    //.header_hamburgerと.header_gnavから.activeを削除してメニューを閉じる
    $(".header_hamburger").removeClass("active");
    $(".header_gnav").removeClass("active");
});
//--------------------------------------------------//
