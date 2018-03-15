$(document).ready(function () {
    //Botão Adicionar
    $('.inputIncluir').on("click", "button.incluirAdicionar", function () { InputIncluir.Adicionar($(this)) });
    //Botão Remover
    $('.inputIncluir').on("click", "button.incluirRemover", function () { InputIncluir.Remover($(this), "removerUltimo") });
    $('.inputIncluir').on("click", ".incluirRemoverIndividual", function () { InputIncluir.Remover($(this), "removerClicado") });

    $('.incluirRemover').attr('disabled', true);

});

InputIncluir = {
    qtdMaxima: 5,

    Adicionar: function (btnOrigem) {

        var nomeIncluir = InputIncluir.DefinirNome(btnOrigem);

        var qtdAtual = $('.Incluir' + nomeIncluir).length,
            idASerAtribuido = new Number(qtdAtual + 1),
            novoElemento = InputIncluir.Gerar(idASerAtribuido, nomeIncluir);

        $(btnOrigem).parent().parent().siblings('.incluirWrapper').append(novoElemento);

        //Ativa o MinMax criado - dá pra melhorar
        trazerMinMax(document.getElementById('minMaxIncluir' + idASerAtribuido + nomeIncluir));

        InputIncluir.Atualizar()
    },

    Remover: function (btnOrigem, metodo) {
        var nomeIncluir = InputIncluir.DefinirNome(btnOrigem);

        if (confirm("Deseja mesmo excluir?")) {
            if (metodo == "removerUltimo") {
                $('.Incluir' + nomeIncluir + ':last').remove();
            } else {
                btnOrigem.parent().parent().remove();
            }

            InputIncluir.Atualizar();
        }
    },

    Atualizar: function () {
        //Contagem
        qtdAtual = $('.Incluir' + nomeIncluir).length;
        $('.icl' + nomeIncluir).find('.incluirStatus').val(qtdAtual);

        if (qtdAtual == InputIncluir.qtdMaxima) {
            $('.icl' + nomeIncluir).find('.incluirAdicionar').attr('disabled', true);
        }
        else if (qtdAtual == 0) {
            $('.icl' + nomeIncluir).find('.incluirRemover').attr('disabled', true);
        }
        else {
            $('.icl' + nomeIncluir).find('.incluirRemover').attr('disabled', false);
            $('.icl' + nomeIncluir).find('.incluirAdicionar').attr('disabled', false);
        }
    },

    Gerar: function (id, nomeIncluir) {
        //Abrindo instância
        var moldeInputIncluirAbertura = [
            "<div id='inputIncluir" + id + "' class='form-group col-md-12 Incluir" + nomeIncluir + "' style='display:block;'>"
        ].join("\n");
        //Molde Texto
        var moldeTexto = [
            "<div class='col-sm-11 inputWrapper'>",
            "   <label for='txtIncluir" + id + "' class=col-sm-2 control-label'>Nome</label>",
            "   <div class='inputCorpo col-sm-10'>",
            "       <div class='col-sm-12'>",
            "           <input type='text' class='form-control' id='txtIncluir" + id + "' placeholder='Digite o atributo aqui' />",
            "       </div>",
            "   </div>",
            "</div>",
            "<div class='col-sm-1'>",
            "   <span class='button-icon has-bg incluirRemoverIndividual'><i class='fa fa-times'></i></span>",
            "</div>"
        ].join("\n");
        //Molde TextoArea
        var moldeTextoArea = [
            "<div class='col-sm-11 inputWrapper'>",
            "   <label for='txtAreaIncluir" + id + "' class='col-sm-2 control-label'>Descrição</label>",
            "   <div class='inputCorpo col-sm-10'>",
            "       <div class='col-sm-12'>",
            "           <textarea id='txtAreaIncluir" + id + "' placeholder='Campo de texto autoexpansível' title='Digite seu texto aqui'></textarea>",
            "       </div>",
            "   </div>",
            "</div>"
        ].join("\n");
        //Molde MinMax
        var moldeMinMax = [
            "<div class='col-sm-11 inputWrapper'>",
            "   <label for='minMaxIncluir" + id + "' class='col-sm-2 control-label'>Hostilidade</label>",
            "   <div class='inputCorpo col-sm-10'>",
            "       <div class='col-sm-12'>",
            "           <div id='minMaxIncluir" + id + nomeIncluir +"' class='minMaxInput mmHosti'></div>",
            "       </div>",
            "   </div>",
            "</div>"
        ].join("\n");

        //Fechando Instância
        var moldeInputIncluirFechamento = [
            "</div>"
        ].join("\n");

        return [moldeInputIncluirAbertura, moldeTexto, moldeTextoArea, moldeMinMax, moldeInputIncluirFechamento].join("\n");
    },

    DefinirNome: function (btnOrigem) {
        if (btnOrigem.parent().parent().parent().hasClass("icl-raca")) {
            nomeIncluir = "-raca";
        }
        if (btnOrigem.parent().parent().parent().hasClass("icl-criatura")) {
            nomeIncluir = "-criatura";
        }
        if (btnOrigem.parent().parent().parent().hasClass("icl-flora")) {
            nomeIncluir = "-flora";
        }
        if (btnOrigem.parent().parent().parent().hasClass("icl-recurso")) {
            nomeIncluir = "-recurso";
        }
        if (btnOrigem.parent().parent().parent().hasClass("icl-bioma")) {
            nomeIncluir = "-bioma";
        }
        if (btnOrigem.parent().parent().parent().hasClass("icl-religiao")) {
            nomeIncluir = "-religiao";
        }
        if (btnOrigem.parent().parent().parent().hasClass("icl-lingua")) {
            nomeIncluir = "-lingua";
        }
        if (btnOrigem.parent().parent().parent().hasClass("icl-mito")) {
            nomeIncluir = "-mito";
        }
        return nomeIncluir;
    }
}