"use strict";

//お寺情報のimgの切り替え//
//参考サイトhttps://black-flag.net/jquery/20110525-3120.html//
//--------------------------------------------------//

// $(function () {
//     //変数setImgに.temple_about_sliderを代入
//     let setImg = ".temple_about_slider";
//     //フェードは1.5秒
//     const fadeSpeed = 1500;
//     //kv画像切り替えは5秒
//     const switchDelay = 5000;

//     //temple_about_sliderの子要素imgのcssを変更(透明にする）
//     $(setImg).children("img").css({ opacity: "0" });
//     //temple_about_sliderの一番最初のimg要素に
//     $(setImg + " img:first")
//         //アニメーション停止
//         .stop()
//         //フェードさせながら不透明にして前面にあげる
//         .animate({ opacity: "1", zIndex: "1" }, fadeSpeed);
//     //一定の遅延間隔を置いて関数を繰り返し呼び出し
//     setInterval(function () {
//         //temple_about_sliderの最初の子要素に
//         $(setImg + " :first-child")
//             //フェードさせながら透明にする
//             .animate({ opacity: "0" }, fadeSpeed)
//             //その次のimg要素に
//             .next("img")
//             //フェードさせながら不透明にする
//             .animate({ opacity: "1" }, fadeSpeed)
//             //現在の選択状態を破棄して1つ前の状態に戻す
//             .end()
//             // 要素の中身をsetImgに追加
//             .appendTo(setImg);
//     }, switchDelay);
// });
//--------------------------------------------------//



// ****************
// slick用
// ****************

$(function () {
    $(".slider").slick({
    autoplay: true,
    arrows: false,
    prevArrow:false,
    nextArrow:false,
    autoplaySpeed: 4000,//次のスライドに切り替わる待ち時間
    speed:2000,//スライドの動きのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスで一時停止を無効
    pauseOnHover: false,//マウスホバーで一時停止を無効
    pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
    fade: true,
    asNavFor: ".thumbnail",
    });

    $(".thumbnail").slick({
    slidesToShow: 4,
    asNavFor: ".slider",
    focusOnSelect: true,
    prevArrow:false,
    nextArrow:false,

    });


});


$(function () {
    $(".slider2").slick({
    autoplay: true,
    arrows: false,
    prevArrow:false,
    nextArrow:false,
    autoplaySpeed: 4000,//次のスライドに切り替わる待ち時間
    speed:2000,//スライドの動きのスピード。初期値は300。
    infinite: true,//スライドをループさせるかどうか。初期値はtrue。
    pauseOnFocus: false,//フォーカスで一時停止を無効
    pauseOnHover: false,//マウスホバーで一時停止を無効
    pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
    fade: true,
    });

});

