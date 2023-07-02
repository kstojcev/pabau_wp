$(function () {
    const swiper = new Swiper('.swiper--locations', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 1,
        speed: 500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },

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
})