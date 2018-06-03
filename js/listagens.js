//Deletar
$(".btn-deletar-instancia").on("click", function () {
    var nome = $(this).closest(".instancia-card").attr("data-nome");
    if (confirm("Deseja mesmo excluir " + (nome === "" ? "a sua história" : nome) + "?")) {
        document.location = $(this).siblings().attr("href");
    }
});
//Editar
$(".instancia-corpo").on("click", function () {
    document.location = $(this).siblings().attr("href");
});

$(".btn-minimizar-instancia").on("click", function () {
    if ($(this).children().hasClass("fa-minus")) {
        $(this).children().attr("class", "fa fa-plus");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-conteudo")
                .children(".instancia-detalhes").slideToggle("fast");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-imagem").css({"width": "80px", "height": "80px"});
    }
    else{
        $(this).children().attr("class", "fa fa-minus");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-conteudo")
                .children(".instancia-detalhes").slideToggle("fast");
        $(this)
                .parent()
                .siblings(".instancia-corpo")
                .children(".instancia-imagem").css({"width": "200px", "height": "200px"});
    }

});