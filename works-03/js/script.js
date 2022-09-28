
// Rellax
$(function(){
  var rellax = new Rellax('.js-rellax');
});

// ヘッダーメニュー
$(function() {
  $(".js-menu").click(function () {
    $(".header__menu").toggleClass('is-active');
    $(".header__nav").toggleClass('is-active');
  });

  $(".header__nav-link").click(function () {
    $(".header__menu").removeClass('is-active');
    $(".header__nav").removeClass('is-active');
  });
});

// ページ内リンクスムーズスクロール
$(function(){
	$('a[href^="#"]').click(function(){
		var adjust = $('.js-header').height();
		var speed = 400;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - adjust - 10;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});

// faq アコーディオン
$(function() {
  $('.js-faq:first-of-type').addClass("is-open");
  $('.js-faq:first-of-type .js-faq-inner').css("display", "block");

  $(".js-faq-header").click(function() {
    $(this).next('.js-faq-inner').slideToggle(200);
    $(this).parent('.js-faq').toggleClass('is-open');
    $(".js-faq-header").not($(this)).next('.js-faq-inner').slideUp(200);
    $(".js-faq-header").not($(this)).parent('.js-faq').removeClass('is-open');
  });
});

// お問い合わせ追従ボタン 表示切替
$(function() {
  var footer = $('.js-footer').innerHeight();
  
  window.onscroll = function () {
    var point = window.pageYOffset;
    var documentHeight = $(document).height();
    var displayHeight = $(window).height();
  
    if(point > documentHeight-displayHeight-footer){
      $('.js-btn-contact').addClass('is-hidden');
    }else{
      $('.js-btn-contact').removeClass('is-hidden');
    }
  };
});
