$(document).ready(function () {
    var imgAlvo;
    var imgUploader = $("#imgUploader");
    var imgAntiga;

    $('.imgClicavel').click(function () {
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

            var reader = new FileReader();

            $(reader).load(function (e) {
                $(imgAlvo).attr('src', e.target.result)
                imgAntiga = e.target.result;
            });
            reader.readAsDataURL(this.files[0]);

            aplicarEstilos(imgAlvo);
        }
    });

    function aplicarEstilos(img) {
        $(img).load(function () {
            $(this).css({ width: '100px', height: '100px'}).show();
        }).hide();
    }

    //Posicionando o botão de resetar a imagem
    $(".imgReset").each(function () {
        $(this).position({
            my: "left bottom",
            at: "left bottom",
            of: $(this).siblings('.imgClicavel'),
            collision: "flip"
        });
    });
    //Resetando ao apertar no botão de resetar imagem
    $(".imgReset").click(function () {
        $(this).siblings('.imgClicavel').attr('src', 'imagens/no_photo.png');
    });
});