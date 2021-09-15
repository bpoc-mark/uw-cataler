$(function () {

  $(window).on("load scroll", function () {
    var t = $(this).scrollTop();
    if (t > 100) {
      $('#pageTop').addClass('active');
      $('header').addClass('scroll');
    } else {
      $('#pageTop').removeClass('active');
      $('header').removeClass('scroll');
    };
  });

  $('#menu-toggle').click(function () {
    $('header').toggleClass('open');
    $(this).find('.line').toggleClass('show');
    $('header nav').slideToggle();
    $('html').toggleClass('no_move');
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

});

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
setTimeout( function () {
  spinner.classList.add('loaded');
}, 2000);


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
  rootMargin: '-10%',
  threshold: [0, .1, .2, .3, .4, .5, .6, .7, .8, .9, 1]
});
items.forEach(function (item) {
  return observer.observe(item);
});


// [画面に入る前に画像を遅延読み込み]
// タグの記述例 classに[lazy-load]をつけ[data-src]に画像のパスを指定する
// <img class="lazy-load" src="" data-src="images/example.jpg" alt="">
document.addEventListener("DOMContentLoaded", function () {
  let lazyImages = [].slice.call(document.querySelectorAll(".lazy-load"));
  var imgObserver = new IntersectionObserver(callback, {
    rootMargin: '100%',
  });
  let lazyImageObserver = new IntersectionObserver(function (entries, imgObserver) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        let lazyImage = entry.target;
        if (lazyImage.dataset.hasOwnProperty('src')) {
          lazyImage.src = lazyImage.dataset.src;
          lazyImage.dataset.src = '';
          delete lazyImage.dataset.src;
        }
        if (lazyImage.dataset.hasOwnProperty('srcset')) {
          lazyImage.srcset = lazyImage.dataset.srcset;
          lazyImage.dataset.srcset = '';
          delete lazyImage.dataset.srcset;
        }
        lazyImage.classList.remove("lazy-load");
        lazyImageObserver.unobserve(lazyImage);
      }
    });
  });
  lazyImages.forEach(function (lazyImage) {
    lazyImageObserver.observe(lazyImage);
  });
});


// Webfont読込
window.WebFontConfig = {
  google: {
    families: ['Barlow+Condensed:500','Oswald:400,600', 'Barlow+Semi+Condensed:300,400,500','Noto+Sans+JP:300,400,500&subset=japanese']
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
