const roomSwiper = new Swiper('.swiper1', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      },
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
const roomSwiperDesktop = new Swiper('.swiper .swiper1--desktop', {
      // Optional parameters
      loop: true,
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },
    
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

const featureSwiper = new Swiper('.swiper--mobile', {
  // Optional parameters
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

const menuSwiper = new Swiper('.swiper--menu', {
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const foodSwiper = new Swiper('.swiper--food', {
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

});





