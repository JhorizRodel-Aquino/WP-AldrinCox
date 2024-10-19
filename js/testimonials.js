var swiper = new Swiper(".testimonials__slider", {
  loop: true,
  speed: 1000,
  centerSlide: true,
  fade: true,
  grabCursor: true,


  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".prev",
  },

  autoplay: {
    delay: 5000,
  },

  breakpoints: {
    // when window width is >= 320px
    0: {
      slidesPerView: 1,
      spaceBetween: 180,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 100,
    },
  },
});
