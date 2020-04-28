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
    })

    $(".index-page .parceiros .parceiros-carousel").slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: false,
        dots: true,
        prevArrow: '<button class="slick-arrow slick-prev"><i data-feather="chevron-left" class="icon"></i></button>',
        nextArrow: '<button class="slick-arrow slick-next"><i data-feather="chevron-right" class="icon"></i></button>',

        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                dots: false
            }
        }]
    })

    $(".about-page .depoimentos .images-list").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<button class="slick-arrow slick-prev"><i data-feather="chevron-left" class="icon"></i></button>',
        nextArrow: '<button class="slick-arrow slick-next"><i data-feather="chevron-right" class="icon"></i></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })

    $(".about-page .depoimentos .depoimentos-list").slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        prevArrow: '<button class="slick-arrow slick-prev"><i data-feather="chevron-left" class="icon"></i></button>',
        nextArrow: '<button class="slick-arrow slick-next"><i data-feather="chevron-right" class="icon"></i></button>',
        arrows: false,
        dots: true,

        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true
                }
            }
        ]
    })

    $(".tratamentos-integra-page .photos-list").slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        prevArrow: '<button class="slick-arrow slick-prev"><i data-feather="chevron-left" class="icon"></i></button>',
        nextArrow: '<button class="slick-arrow slick-next"><i data-feather="chevron-right" class="icon"></i></button>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })

    feather.replace()
})