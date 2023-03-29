"use strict";

//キービジュアルの切り替え//
//参考サイトhttps://black-flag.net/jquery/20110525-3120.html//
//--------------------------------------------------//

$(function () {
  //変数setImgに.kvを代入
  let setImg = ".temple_about_slider";
  //フェードは1.5秒
  const fadeSpeed = 1500;
  //kv画像切り替えは5秒
  const switchDelay = 5000;

  //kvの子要素imgのcssを変更(透明にする）
  $(setImg).children("img").css({ opacity: "0" });
  //kvの一番最初のimg要素に
  $(setImg + " img:first")
    //アニメーション停止
    .stop()
    //フェードさせながら不透明にして前面にあげる
    .animate({ opacity: "1", zIndex: "1" }, fadeSpeed);
  //一定の遅延間隔を置いて関数を繰り返し呼び出し
  setInterval(function () {
    //kvの最初の子要素に
    $(setImg + " :first-child")
      //フェードさせながら透明にする
      .animate({ opacity: "0" }, fadeSpeed)
      //その次のimg要素に
      .next("img")
      //フェードさせながら不透明にする
      .animate({ opacity: "1" }, fadeSpeed)
      //現在の選択状態を破棄して1つ前の状態に戻す
      .end()
      // 要素の中身をsetImgに追加
      .appendTo(setImg);
  }, switchDelay);
});
//--------------------------------------------------//
