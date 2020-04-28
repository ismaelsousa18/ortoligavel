$(document).on("keyup", ".contact-form .input", function () {
    var icon = $(this).closest(".desc-input").find(".icon");

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
})

var inputs

$(".form").submit(function (e) {
    $(this).addClass("was-validated")
    inputs = $(this).find(".input")

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

$(document).on("keyup", "form.was-validated .input", function () {
    verifInput($(this))
})

function verifInput(input) {
    var valid = true;
    var feedback = $(input).closest('.desc-input').find('.invalid-feedback')

    if ($(input).val() == "" && $(input).attr("required") != undefined)
        valid = false

    if (valid) {
        $(feedback).css("display", "none")
        $(input).removeClass("invalid")
    }
    else {
        $(feedback).css("display", "block")
        $(input).addClass("invalid")
    }
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