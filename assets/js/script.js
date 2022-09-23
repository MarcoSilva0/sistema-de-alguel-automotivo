jQuery(document).ready(function($){

    const swiper = new Swiper('#banner-home', {
        speed: 400,
        spaceBetween: 100,
        navigation: {
            prevEl: "#swiper-button-prev-banner",
            nextEl: "#swiper-button-next-banner",
        }
      });
});