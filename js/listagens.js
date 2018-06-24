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
    //Minimizar
    if ($(this).children().hasClass("fa-minus")) {
        $(this).children().attr("class", "fa fa-plus");
        $(this).prop("title", "Clique para maximizar");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-conteudo")
                .children(".instancia-detalhes").slideToggle("fast");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-imagem").css({"width": "80px", "height": "80px"});
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-conteudo")
                .children(".instancia-cabecalho").css({"line-height": "5.5rem"});
    }
    //Maximizar
    else {
        $(this).children().attr("class", "fa fa-minus");
        $(this).prop("title", "Clique para minimizar");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-conteudo")
                .children(".instancia-detalhes").slideToggle("fast");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-imagem").css({"width": "200px", "height": "200px"});
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-conteudo")
                .children(".instancia-cabecalho").css({"line-height": ""});
    }

});
//Editar categorias relacionadas
$(".btn-listar-select").on("click", function (e) {
    e.stopPropagation();
    document.location = $(this).attr("href");
});