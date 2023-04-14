"use strict";

///////////////////////////
/////     header      /////
///////////////////////////

//--------------------------------------------------//
//スクロールしたら上からheaderが出てくる//
$(function () {
    var pagetop = $(".home header");
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 700) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    // pagetop.click(function () {
    //     $("body, html").animate({ scrollTop: 0 }, 500);
    //     return false;
    // });
});

//--------------------------------------------------//
//ハンバーガーメニューが押されたら//
$(".header_hamburger").on("click", function () {
    //.header_hamburgerと.header_nav.activeを付与
    $(".header_hamburger").toggleClass("active");
    $(".header_nav").toggleClass("active");
    // $(this).toggleClass("active");
    // // メニューに「.active」class付け外し
    // $(".global-nav").toggleClass("active");
    // bodyに「.active」class付け外し
    $("body").toggleClass("active");
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
// luxy.js用の記述 //

window.onload = function () {
    if (matchMedia("(min-width: 1000px)").matches) {
        luxy.init({
            wrapper: "#luxy",
            targets: ".luxy-el",
            wrapperSpeed: 1,
        });
    }
};

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
                // var idName = $(this).attr("href"); //タブ内のaタグのリンク名
                var idName = $(this).attr("id"); //タブ内のaタグのリンク名

                if (idName == hashIDName) {
                    //リンク元の指定されたURLのハッシュタグと同じかをチェック
                    var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
                    // console.log('parentElm:'+parentElm);

                    $(".course_tabWrap li").removeClass("active"); //タブ内のliについているactiveクラスを取り除き
                    $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
                    //表示させるエリア設定
                    // $(".course_tabCont").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
                    $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
                }
            });
    }
}
//タブをクリックしたら
// $(".course_tabWrap a").on("click", function () {
//     // var idName = $(this).attr("href"); //タブ内のリンク名を取得
//     var slugName=$('#slug_name').val();
//     // console.log('hashName:'+slugName);
//     GethashID(idName); //設定したタブの読み込みと
//     return false; //aタグを無効にする
// });

// 上記の動きをページが読み込まれたらすぐに動かす

$(document).ready(function () {
    $(".course_tabWrap li:first-of-type").addClass("active"); //最初のliにactiveクラスを追加
    $(".course_tabCont:first-of-type").addClass("is-active"); //最初の.areaにis-activeクラスを追加
    // var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
    // var hashName = "west";
    var slugName = $("#slug_name").val();
    // var slugName = "easy";
    // console.log('hashName:'+slugName);
    GethashID(slugName); //設定したタブの読み込み
});

///////////////////////////
/////     footer      /////
///////////////////////////

//--------------------------------------------------//
//TOPへ戻るボタン//
$(function () {
    var pagetop = $(".page-top");
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
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

// ****************
// slick用
// ****************

$(function () {
    $(".slider").slick({
        autoplay: true,
        arrows: false,
        prevArrow: false,
        nextArrow: false,
        autoplaySpeed: 4000, //次のスライドに切り替わる待ち時間
        speed: 2000, //スライドの動きのスピード。初期値は300。
        infinite: true, //スライドをループさせるかどうか。初期値はtrue。
        pauseOnFocus: false, //フォーカスで一時停止を無効
        pauseOnHover: false, //マウスホバーで一時停止を無効
        pauseOnDotsHover: false, //ドットナビゲーションをマウスホバーで一時停止を無効
        fade: true,
        asNavFor: ".thumbnail",
    });

    $(".thumbnail").slick({
        slidesToShow: 4,
        slideToScroll: 4,
        swipe: true,
        swipeToSlide: true,
        touchMove: true,
        asNavFor: ".slider",
        focusOnSelect: true,
        prevArrow: false,
        nextArrow: false,
        responsive: [
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });
});

$(function () {
    $(".slider2").slick({
        autoplay: true,
        arrows: false,
        prevArrow: false,
        nextArrow: false,
        autoplaySpeed: 4000, //次のスライドに切り替わる待ち時間
        speed: 2000, //スライドの動きのスピード。初期値は300。
        infinite: true, //スライドをループさせるかどうか。初期値はtrue。
        pauseOnFocus: false, //フォーカスで一時停止を無効
        pauseOnHover: false, //マウスホバーで一時停止を無効
        pauseOnDotsHover: false, //ドットナビゲーションをマウスホバーで一時停止を無効
        fade: true,
    });
});


/*===========================================================*/
/* テキストが光りながら出現*/
/*===========================================================*/

function GlowAnimeControl() {
  $('.glowAnime').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("glow");

    } else {
      $(this).removeClass("glow");
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  GlowAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  //spanタグを追加する
    var element = $(".glowAnime");
  element.each(function () {
    var text = $(this).text();
    var textbox = "";
    text.split('').forEach(function (t, i) {
      if (t !== " ") {
        if (i < 10) {
          textbox += '<span style="animation-delay:.' + i + 's;">' + t + '</span>';
        } else {
        var n = i / 10;
          textbox += '<span style="animation-delay:' + n + 's;">' + t + '</span>';
        }

      } else {
        textbox += t;
      }
    });
    $(this).html(textbox);
  });

  GlowAnimeControl();/* アニメーション用の関数を呼ぶ*/
});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
