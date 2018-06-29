$(document).ready(function () {
    var imgAlvo;

    $('.input-imagem').click(function () {
        imgAlvo = this;
        var imgUploader = $(this).siblings('.imgUploader');
        
        imgUploader.trigger('click');
    });

    $(".imgUploader").change(function () {
        if ($(this).val.length) {
            var tempImg = URL.createObjectURL(event.target.files[0]);
            $(imgAlvo).fadeIn("fast").attr("style","background-image:url("+tempImg+")");
        }
    });

    //Resetando ao apertar no botão de resetar imagem
    $(".input-imagem-reset").on("click",function () {
        $(this).siblings(".input-imagem").attr("style", "background-image:url(./imagens/sem-foto.png)");
        $(this).siblings(".request-reset").attr("value", true);
    });
});