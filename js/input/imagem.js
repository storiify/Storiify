$(document).ready(function () {
    var imgAlvo;

    $('.imgClicavel').click(function () {
        imgAlvo = this;
        $('#imgUploader').trigger('click');
    });

    function readURL() {
        $(imgAlvo).attr('src', '').hide();

        if (this.files && this.files[0]) {
            var reader = new FileReader();

            $(reader).load(function (e) {
                $(imgAlvo).attr('src', e.target.result)
            });

            reader.readAsDataURL(this.files[0]);

            //Recarrega a imagem -- Antes estava dentro de document.ready, mas eu perdia minhas configurações da imagem placeholder
            $(imgAlvo).load(function () {
                $(this).css({ width: '100px', opacity: '1' }).show();
            }).hide();
        }
    }

    $("#imgUploader").change(readURL);
});