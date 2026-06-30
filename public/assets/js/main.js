// Landing page Hero Slider
var swiper = new Swiper("#heroSlider", {
    speed: 600,
    parallax: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Featured Products Slider
var swiper = new Swiper("#featuredProducts", {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
