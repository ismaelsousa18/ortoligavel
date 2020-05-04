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