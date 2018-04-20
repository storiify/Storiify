$(".btn-deletar-instancia").on("click", function () {
    var nome = $(this).closest(".instancia-card").attr("data-nome");
    if (confirm("Deseja mesmo excluir " + (nome === ""? "a sua história" : nome) + "?")) {
        document.location = $(this).siblings().attr("href");
    }
});

$(".instancia-corpo").on("click", function (){
    document.location = $(this).siblings().attr("href");
});