//Deletar
$(".btn-deletar-instancia").on("click", function () {
    var nome = $(this).closest(".instancia-card").attr("data-nome");
    if (confirm("Deseja mesmo excluir " + (nome === "" ? "essa instância" : nome) + "?")) {
        document.location = $(this).siblings().attr("href");
    }
});
//Editar
$(".instancia-corpo").on("click", function () {
    document.location = $(this).siblings().attr("href");
});
//Minimizar
$(".btn-minimizar-instancia").on("click", function () {
    if ($(this).children().hasClass("fa-minus")) {
        minimizarInstancia($(this));
    } else {
        maximizarInstancia($(this));
    }
});
//Editar categorias relacionadas
$(".btn-listar-select").on("click", function (e) {
    e.stopPropagation();
    document.location = $(this).attr("href");
});

$(".minimizar-todos").on("click", function () {
    if ($(this).children("a").children().hasClass("fa-minus")) {
        $(this).children("a").children().attr("class", "fa fa-plus");
        $(this).prop("title", "Clique para maximizar todas as instâncias");
        $(".instancia-card").each(function () {
            minimizarInstancia($(this).children(".instancia-controle").children(".btn-minimizar-instancia"));
        });
    } else {
        $(this).children("a").children().attr("class", "fa fa-minus");
        $(this).prop("title", "Clique para minimizar todas as instâncias");
        $(".instancia-card").each(function () {
            maximizarInstancia($(this).children(".instancia-controle").children(".btn-minimizar-instancia"));
        });
    }

});

function maximizarInstancia(instancia) {
    if ($(instancia).children().hasClass("fa fa-minus")) {
        return;
    }
    $(instancia).children().attr("class", "fa fa-minus");
    $(instancia).prop("title", "Clique para minimizar");
    $(instancia)
            .parent()
            .siblings(".instancia-corpo")
            .children(".instancia-conteudo")
            .children(".instancia-detalhes").slideToggle("fast");
    $(instancia)
            .parent()
            .siblings(".instancia-corpo")
            .children(".instancia-imagem").css({"width": "200px", "height": "200px"});
    $(instancia)
            .parent()
            .siblings(".instancia-corpo")
            .children(".instancia-conteudo")
            .children(".instancia-cabecalho").css({"line-height": ""});
}
function minimizarInstancia(instancia) {
    if ($(instancia).children().hasClass("fa fa-plus")) {
        return;
    }
    $(instancia).children().attr("class", "fa fa-plus");
    $(instancia).prop("title", "Clique para maximizar");
    $(instancia)
            .parent()
            .siblings(".instancia-corpo")
            .children(".instancia-conteudo")
            .children(".instancia-detalhes").slideToggle("fast");
    $(instancia)
            .parent()
            .siblings(".instancia-corpo")
            .children(".instancia-imagem").css({"width": "80px", "height": "80px"});
    $(instancia)
            .parent()
            .siblings(".instancia-corpo")
            .children(".instancia-conteudo")
            .children(".instancia-cabecalho").css({"line-height": "5.5rem"});
}