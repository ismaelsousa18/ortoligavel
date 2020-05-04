var detailsList = $(".contato-page .maparea .details-list .detail")
var unitiesList = $(".contato-page .maparea .unidades-list .unidade")
var mapsList = $(".contato-page .maparea .map .map-frame")

function changeUnity(index) {
    $(".contato-page .maparea .details-list .detail.active").removeClass("active")
    $(detailsList[index]).addClass("active")

    $(".contato-page .maparea .unidades-list .unidade.active").removeClass("active")
    $(unitiesList[index]).addClass("active")

    $(".contato-page .maparea .map .map-frame.active").removeClass("active")
    $(mapsList[index]).addClass("active")
}

$(".contato-page .maparea .unidades-list .unidade").on('click', function () {
    if (window.innerWidth > 992) {
        var unities = $(this).closest(".unidades-list").find(".unidade")

        var clicked = this

        var clickedIndex

        $(unities).each(function (index, element) {
            if (element == clicked)
                clickedIndex = index
        })

        changeUnity(clickedIndex)
    }
})

$('.contato-page .maparea .unidades-list').on('afterChange', function (event, slick, currentSlide, nextSlide) {
    changeUnity(currentSlide)
});
$(document).on("keyup", ".input", function () {
    var icon = $(this).closest(".desc-input").find(".icon");

    if (icon.length > 0) {
        if ($(this).val() != "" && !$(icon).hasClass("color")) {
            var source = icon.attr("src").split(".")[0];
            var ext = icon.attr("src").split(".")[1];
            $(icon).attr('src', source + "-color." + ext);
            $(icon).addClass("color");
        }
        else if ($(this).val() == "" && $(icon).hasClass("color")) {
            var source = icon.attr("src").split("-color.")[0];
            var ext = icon.attr("src").split("-color.")[1];
            $(icon).attr('src', source + "." + ext);
            $(icon).removeClass("color");
        }
    }
})

var inputs

$(".needs-validation").submit(function (e) {
    $(this).addClass("was-validated")
    inputs = $(this).find("[required]")

    $(inputs).each(function () {
        verifInput($(this))
    })

    var valid = false;

    var hasInvalid = $(this).find(".invalid")

    if (hasInvalid.length == 0)
        valid = true

    if (!valid)
        e.preventDefault()
})

$(document).on("keyup change", ".was-validated [required]", function () {
    verifInput($(this))
})

function verifInput(input) {

    if ($(input).val() == "")
        $(input).closest('.desc-input').addClass("invalid")
    else
        $(input).closest('.desc-input').removeClass("invalid")

}
$(document).ready(function () {
    $("input[name='telefone']").mask("(00) 90000-0000")
});
$(document).on('click', '.header .mobile-button', function () {
    $(".header .list").toggleClass('open')
})
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

    $(".about-page .depoimentos .photos-list").slick({
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

    $(".contato-page .maparea .unidades-list").slick({
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    prevArrow: '<button class="slick-arrow slick-prev"><i data-feather="chevron-left" class="icon"></i></button>',
                    nextArrow: '<button class="slick-arrow slick-next"><i data-feather="chevron-right" class="icon"></i></button>',
                }
            },
            {
                breakpoint: 9999,
                settings: "unslick"
            }
        ]
    })

    $(".unidades-integra-page .photos-area .photos-list").slick({
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

    $(".unidades-integra-page .depoimentos .depoimentos-list").slick({
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

    feather.replace()
})