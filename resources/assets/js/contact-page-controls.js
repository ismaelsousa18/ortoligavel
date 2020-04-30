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