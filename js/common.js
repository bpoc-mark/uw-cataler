$(function () {

  //ローディングの設定
  // var loadCount = 0,
  //   imgLength = $("img").length;
  // $("img").each(function () {
  //   var src = $(this).attr("src");
  //   $("<img>")
  //     .attr("src", src)
  //     .on('load', function () {
  //       loadCount++;
  //     });
  // });

  // var timer = setInterval(function () { //読み込みをスタイルに反映させる
  //   $("#loader .bar").css({
  //     "width": (loadCount / imgLength) * 100 + "%"
  //   });
  //   if ((loadCount / imgLength) * 100 == 100) { //100%読み込んだら
  //     clearInterval(timer);
  //     $("#loader").delay(500).fadeOut(800);
  //   }
  // }, 5);

  // setTimeout(function () { //ロードが終わらなくても5sで終了させる
  //   $("#loader").delay(500).fadeOut(300);
  // }, 5000);
  // ローディングの設定ここまで


  //スムーススクロール
  $('a[href^="#"]').click(function () {
    var speed = 1000;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({
      scrollTop: position
    }, speed, 'easeOutExpo');
    return false;
  });

  //ロード時
  $(window).on('load', function () {
    $(".c-anim-load").addClass('move');
    setTimeout(function () {
      $(".c-anim-load02").addClass('move');
    }, 300);
  });

  var w = $(window).width();
  if (w < 900) {
    $(".button_wrap").on("click", function () {
      $(this).children(".button").toggleClass("active");
      $(this).parent(".wrapper").next("ul").slideToggle();
    });
  }

});

$(function () {

  $('.menu-trigger').on('click', function () {
    $(this).toggleClass('active');
  });
  $('.openModalBtn').on('click', function () {
    $(this).toggleClass('on');
    $(this).prev('nav').slideToggle();
    $('header').toggleClass('open_nav')
  });

  $(".animation-row1").on("inview", function (
    event,
    isInView,
    visiblePartX,
    visiblePartY
  ) {
    if (isInView) {
      var $targets = $(".animation-row1 .col-md-h5");
      var delay = 200;
      $targets.each(function (i) {
        var $this = $(this);
        $this.delay(i * delay).queue(function (next) {
          $this.addClass("move");
          next();
        });
      });
    }
  });

  $(".animation-row2").on("inview", function (
    event,
    isInView,
    visiblePartX,
    visiblePartY
  ) {
    if (isInView) {
      var $targets = $(".animation-row2 .col-md-h5");
      var delay = 200;
      $targets.each(function (i) {
        var $this = $(this);
        $this.delay(i * delay).queue(function (next) {
          $this.addClass("move");
          next();
        });
      });
    }
  });
  $(".animation-row3").on("inview", function (
    event,
    isInView,
    visiblePartX,
    visiblePartY
  ) {
    if (isInView) {
      var $targets = $(".animation-row3 .col-md-h5");
      var delay = 200;
      $targets.each(function (i) {
        var $this = $(this);
        $this.delay(i * delay).queue(function (next) {
          $this.addClass("move");
          next();
        });
      });
    }
  });
});


var clickAllowed = true;
$(window).on('resize', function () {
  var w = $(window).width();
  if (w > 1130) {
    clickAllowed = true;
    $('.language_layer').removeClass('show');
    $('.sp_menu_cont').removeClass('active');
    $('.search_layer').removeClass('show');
    $('.menu').removeClass('active');
    $('.menu span').removeClass('show');
  }
  else{
    clickAllowed = false;
    
  }
})

$('.menu').click(function(){
  if($('.language_layer').hasClass('show')){
    $('.language_layer').toggleClass('show');
  }
  else if($('.search_layer').hasClass('show')){
    $('.search_layer').toggleClass('show');
    if($('.sp_menu_cont').hasClass('active')){
      
    }else{
      $('.menu span').toggleClass('show');
      $('.menu').toggleClass('active');
    }
  }else{
    $('.menu span').toggleClass('show');
    $('.menu').toggleClass('active');
    $('.sp_menu_cont').toggleClass('active');
  }
});

$('.sp_menu_cont .overlay').click(function(){
  $('.menu span').toggleClass('show');
  $('.menu').toggleClass('active');
  $('.sp_menu_cont').toggleClass('active');
});


$('.btn_lang').click(function(){
  $('.language_layer').toggleClass('show');
});

$('.language_layer .overlay').click(function(){
  $('.language_layer').toggleClass('show');
});

$('.language_layer .lang_close').click(function(){
  $('.language_layer').toggleClass('show');
});

$('.btn_search').click(function(){
  $('.search_layer').toggleClass('show');
  if($('.sp_menu_cont').hasClass('active')){
    
  }else{
    $('.menu span').toggleClass('show');
    $('.menu').toggleClass('active');
  }
});

$('.search_layer .overlay').click(function(){
  $('.search_layer').toggleClass('show');
  if($('.sp_menu_cont').hasClass('active')){
    
  }else{
    $('.menu span').toggleClass('show');
    $('.menu').toggleClass('active');
  }
});

$('.search_layer .lang_close').click(function(){
  $('.search_layer').toggleClass('show');
});


$("#searchbox").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  if(value){
    $(".search_list").addClass('show');
  }else{
    $(".search_list").removeClass('show');
  }
  $(".search_list li").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
  });
});

// シンプルローディング
const spinner = document.querySelector('#loading');
window.addEventListener('load', function() {
  spinner.classList.add('loaded');
});
//setTimeout( function () {
//  spinner.classList.add('loaded');
//}, 2000);
setTimeout( function () {
  spinner.classList.add('loaded');
}, 0);

// スクロールアニメーション
var callback = function callback(entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('move');
      observer.unobserve(entry.target);
    }
  });
};
var items_list = document.querySelectorAll('.c-anim-up');
var items = Array.prototype.slice.call(items_list, 0);
var observer = new IntersectionObserver(callback, {
  // 出現タイミングの調整はrootMarginを調整
  rootMargin: '0% 0% -20%',
  threshold: [0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1]
});
items.forEach(function (item) {
  return observer.observe(item);
});




// Webfont読込
window.WebFontConfig = {
  google: {
    families: ['Barlow+Semi+Condensed:500', 'Noto+Sans+JP:300,400,500&subset=japanese']
  },
  active: function () {
    sessionStorage.fonts = true;
  }
};

(function () {
  var wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();




// 画像の選択不可
$(function(){
  $('img').attr('onmousedown', 'return false');
  $('img').attr('onselectstart', 'return false');
  $('img').attr('oncontextmenu', 'return false');
});
