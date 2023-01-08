var swiper = new Swiper(".karyaSwiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  slidesPerGroup: 1,
  loop: false,
  navigation: {
    nextEl: ".button_next",
    prevEl: ".button_prev",
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: "auto",
      spaceBetween: 20,
    },
    "@0.75": {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1564: {
      slidesPerView: 4,
      spaceBetween: 20,
    },

  },
});


var swiper = new Swiper(".testiSwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 15,
      },
      "@0.75": {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 20,
      },
    },
  });

  var swiper = new Swiper(".showcaseSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: ".btn_next",
      prevEl: ".btn_prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      "@0.00": {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 15,
      },
      "@0.75": {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 20,
      },
      "@1.00": {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 20,
      },
    },
  });

   // Berita pages
   var swiper = new Swiper(".newsSwiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
  });