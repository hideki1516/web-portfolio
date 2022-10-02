$( function() {

  new Swiper('.swiper', {
    loop: true,
    centeredSlides: true,
    slidesPerView: 'auto',

    speed: 300,
    
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      waitForTransition: false,
    },
  });

  wow = new WOW(
    {
      animateClass: 'animate__animated' // v4のAnimate.cssを利用
    }
  )
  wow.init();

})