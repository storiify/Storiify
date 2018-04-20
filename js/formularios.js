//minimizar input
$(".btn-input-controle.minimizar").on("click", function () {
    $(this).parent().siblings(".input-corpo").slideToggle("fast");
    if ($(this).children().hasClass("fa-minus")) {
        $(this).children().addClass("fa-plus").removeClass("fa-minus");
    } else if ($(this).children().hasClass("fa-plus")){
        $(this).children().addClass("fa-minus").removeClass("fa-plus");
    }

});

//adicionar/remover detalhes
$(".detalhes-link").on("click", function () {
    if ($(this).html() !== "Remover Detalhes") {
        $(this).siblings().toggle();
        $(this).siblings().children().focus();
        $(this).html("Remover Detalhes");
    } else {
        $(this).siblings().toggle();
        $(this).siblings().children().val("");
        $(this).html("Adicionar Detalhes");
    }
});

$(".detalhes-conteudo").each(function(){
    if ($(this).children().val()!=="" && $(this).children().css("visibility", "hidden")) {
        $(this).toggle();
        $(this).children().css('visibility', 'visible');
        $(this).siblings().html("Remover Detalhes");
    }
});