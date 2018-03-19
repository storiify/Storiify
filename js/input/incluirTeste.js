(function ($) {

    $.fn.inputIncluir = function (options) {

        var configuracoes = $.extend({color: "#556b2f", backgroundColor: "white", htmlInterno: this.html()}, options);

        var inicializar = function () {
            var novoElemento =
                    "<div class='form-group'>"
                    + "<div class='col-sm-10 inputWrapper'>"
                    + "    <label class='col-sm-2 control-label'>Incluir</label>"
                    + "    <div class='col-sm-10'>"
                    + "        <div class='inputIncluir icl-raca'>"
                    + "            <div class='input-group'>"
                    + "                <span class='input-group-btn'>"
                    + "                    <button class='btn btn-default incluirRemover' type='button'>Remover</button>"
                    + "                </span>"
                    + "                <input value='0' class='form-control incluirStatus' />"
                    + "                <span class='input-group-btn'>"
                    + "                    <button class='btn btn-default incluirAdicionar' type='button'>Adicionar</button>"
                    + "                </span>"
                    + "            </div>"
                    + "           <div class='incluirWrapper'>"
                    + "               <!--Aqui entrarão as instâncias-->"
                    + "           </div>"
                    + "       </div>"
                    + "       <!--/Parte que Importa-->"
                    + "   </div>"
                    + "</div>"
                    + "<div class='col-sm-2'>"
                    + "   <span class='button-icon has-bg inputToggle'><i class='fa fa-minus'></i></span>"
                    + "    <span class='button-icon has-bg inputDelet'><i class='fa fa-times'></i></span>"
                    + "</div>"
                    + "</div>";
            $(".input-incr").append(novoElemento);
            
        };
        inicializar();

        if (this.hasClass("incr-raca")) {
            configuracoes.htmlInterno = "é raçaaaaaaa";
        }

        return this.css({
            color: configuracoes.color,
            backgroundColor: configuracoes.backgroundColor
        }).html(configuracoes.htmlInterno);

    };
}(jQuery));



$(".input-incr").inputIncluir({
    color: "orange",
    htmlInterno: "Conseguimos trocar o html"
});