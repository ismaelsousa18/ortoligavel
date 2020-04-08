$(document).ready(function () {
    $(".header-slide .slider").slick({
        arrows: false,
        draggable: false,
        autoplay: false,
        autoplaySpeed: 4000,

        dots: true,
        appendDots: $(".header-slide .dots"),

        responsive: [{
            breakpoint: 992,
            settings: "unslick"
        }]

    });

    feather.replace();
})