$(".btn-input-controle.minimizar").on("click", function () {
    $(this).parent().siblings(".input-corpo").toggle();
    if ($(this).children().hasClass("fa-minus")) {
        $(this).children().addClass("fa-plus").removeClass("fa-minus");
    } else if ($(this).children().hasClass("fa-plus")){
        $(this).children().addClass("fa-minus").removeClass("fa-plus");
    }

});

$(".detalhes-link").on("click", function () {
    if ($(this).html() !== "Remover Detalhes") {
        $(this).after('<div class="detalhes-conteudo">' +
                '           <textarea placeholder="Detalhe o Nome do Input" title="Detalhes do Nome do Input"></textarea>' +
                '     </div>');
        $(this).siblings().children().focus();
        $(this).html("Remover Detalhes");
        //TextArea autosize
        autosize(document.querySelectorAll('textarea'));  //Otimizar essa chamada do Texto Auto-expansível
    } else {
        $(this).siblings().remove();
        $(this).html("Adicionar Detalhes");
    }
});
