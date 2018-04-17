$(document).ready(function () {
    var imgAlvo;
    var imgUploader = $("#imgUploader");
    var imgAntiga;

    $('.input-imagem').click(function () {
        imgAlvo = this;
        var inp = $(this).attr("data-inputFileId");
        console.log(inp);
        if(inp){
            imgUploader = $('#'+inp);
        }
        
        imgUploader.trigger('click');
    });

    imgUploader.change(function () {
        if (imgUploader.val.length) {
            var tempImg = URL.createObjectURL(event.target.files[0]);
            $(imgAlvo).fadeIn("fast").attr("style","background-image:url("+tempImg+")");
        }
    });

    //Resetando ao apertar no botão de resetar imagem
    $(".input-imagem-reset").on("click",function () {
        $(this).siblings(".input-imagem").attr("style", "background-image:url(../imagens/sem-foto.png)");
    });
});