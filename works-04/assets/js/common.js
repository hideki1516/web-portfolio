
// ハンバーガーメニュー
jQuery(function($){
	$('.js-header-burger').click(function(){
			$('.js-header-nav').toggleClass('is-openMenu');
			$('.js-header-burger').toggleClass('is-openMenu');
	});

	$('.js-header-navLink').click(function(){
			$('.js-header-nav').removeClass('is-openMenu');
			$('.js-header-burger').removeClass('is-openMenu');
	});
});

// ページ内アンカーリンク スムーズスクロール
jQuery(function($){
	$('a[href^="#"]').click(function(){
		var adjust = $('.js-header').height();
		var speed = 400;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top - adjust - 5;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});

// アンカーリンク先 スムーズスクロール
jQuery(function($) {
	$(window).on('load', function() {
		const url = $(location).attr('href');
		headerHeight = $('.js-header').outerHeight() + 30;
		if(url.indexOf("#") != -1) {
			const anchor = url.split("#");
			target = $('#' + anchor[anchor.length - 1]);
			position = Math.floor(target.offset().top) - headerHeight;
			$("html, body").animate({scrollTop:position}, 500);
		}
	});
});

// スクロールエフェクト
jQuery(function($) {
	$(window).scroll(function () {
		const wHeight = $(window).height();
		const scrollAmount = $(window).scrollTop();
		$('.effect').each(function () {
			const targetPosition = $(this).offset().top;
			if(scrollAmount > targetPosition - wHeight + 60) {
		$(this).addClass("is-animated");
			}
		});
	});
});

jQuery(function($) {
	$(window).on('load', function () {
		$('.effectOnLoad').addClass("is-animated");
	});
});

jQuery(function($) {
	$(window).on('load', function () {
		$('.js-leftAnime').each(function() {
			$(this).addClass("is-slide-LeftRight");
			$(this).children(".js-leftAnime-inner").addClass("is-slide-RightLeft");
		});
	});
});