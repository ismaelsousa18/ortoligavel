$(document).ready(function () {
    $("input[name='telefone']").mask("(00) 90000-0000")
});

$(document).on("keyup", ".contact-form .input" , function(){
    var icon = $(this).closest(".desc-input").find(".icon");

    if($(this).val() != "" && !$(icon).hasClass("color")){        
        var source = icon.attr("src").split(".")[0];
        var ext = icon.attr("src").split(".")[1];
        $(icon).attr('src', source + "-color." + ext);
        $(icon).addClass("color");
    }
    else if($(this).val() == "" && $(icon).hasClass("color")){
        var source = icon.attr("src").split("-color.")[0];
        var ext = icon.attr("src").split("-color.")[1];
        $(icon).attr('src', source + "." + ext);
        $(icon).removeClass("color");
    }
})

var inputs

$(".form").submit(function(e){
    $(this).addClass("was-validated")
    inputs = $(this).find(".input")
    
    $(inputs).each(function(){
        verifInput($(this))
    })

    var valid = false;

    var hasInvalid = $(this).find(".invalid")

    if(hasInvalid.length == 0)
        valid = true

    if(!valid)
        e.preventDefault()
})

$(document).on("keyup", "form.was-validated .input" , function(){
    verifInput($(this))
})

function verifInput(input){
    var valid = true;
    var feedback = $(input).closest('.desc-input').find('.invalid-feedback')

    if($(input).val() == "" && $(input).attr("required") != undefined)
        valid = false

    if(valid){
        $(feedback).css("display", "none")
        $(input).removeClass("invalid")
    }
    else{
        $(feedback).css("display", "block")
        $(input).addClass("invalid")
    }
}