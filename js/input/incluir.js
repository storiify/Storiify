$(document).ready(function () {
//Botão Adicionar
    $('.input-incluir').on("click", "button.incluir-btn-adicionar", function () {
        InputIncluir.Adicionar($(this));
    });
    //Botão Remover
    $('.input-incluir').on("click", "button.incluir-btn-remover", function () {
        InputIncluir.Remover($(this), "removerUltimo");
    });
    $('.input-incluir').on("click", ".remover-filho", function () {
        InputIncluir.Remover($(this), "removerClicado");
    });
    $('.incluir-btn-remover').attr('disabled', true);
});
InputIncluir = {
    qtdMaxima: 5,
    Adicionar: function (btnOrigem) {

        var idPai = $(btnOrigem).parent().parent().parent().attr("id");
        var qtdAtualDeFilhos = $(btnOrigem).parent().parent().siblings().children().length,
                idASerAtribuido = new Number(qtdAtualDeFilhos + 1),
                novoElemento = InputIncluir.Gerar(idASerAtribuido, idPai, $("#" + idPai + "").data("inputs-internos").split("&"));

        $(btnOrigem).parent().parent().siblings('.incluir-filhos-area').append(novoElemento);

        //Ativa o MinMax criado
        $(btnOrigem).closest(".input-incluir").children(".incluir-filhos-area").children().last().children().children(".input-minmax").each(function () {
            trazerMinMax(this);
        });

        InputIncluir.Atualizar($(btnOrigem).closest(".input-incluir"));
    },
    Remover: function (btnOrigem, metodo) {
        var inputIncr = $(btnOrigem).closest(".input-incluir");
        var alvoDeletar = (metodo === "removerUltimo") ? $(btnOrigem).parent().parent().siblings().children().last() : $(btnOrigem).parent();

        var alvoValorPrimeiroFilho = (alvoDeletar.children().children().eq(1).val() === "") ? "" : " " + alvoDeletar.children().children().eq(1).val();
        if (confirm("Deseja mesmo excluir" + alvoValorPrimeiroFilho + "?")) {
            $(alvoDeletar).remove();
            InputIncluir.Atualizar(inputIncr);
        }
    },
    Atualizar: function (inputIncr) {
        //Contagem
        var qtdAtual = $(inputIncr).children(".incluir-filhos-area").children().length;
        //Atualizando o incluir-status
        $(inputIncr).children().children(".incluir-status").val(qtdAtual);

        //Ativando/desativando os botões de adicionar/remover
        if (qtdAtual === InputIncluir.qtdMaxima) {
            $(inputIncr).children(".input-group").children(".incluir-adicionar").children("button").attr('disabled', true);
        } else if (qtdAtual === 0) {
            $(inputIncr).children(".input-group").children(".incluir-remover").children("button").attr('disabled', true);
        } else {
            $(inputIncr).find('.incluir-btn-remover').attr('disabled', false);
            $(inputIncr).find('.incluir-btn-adicionar').attr('disabled', false);
        }
    },
    Gerar: function (id, idDoPai, dataIncluir) {
        var idDeFilho = idDoPai + "-filho-" + id;
        //Abrindo instância
        var moldeInputIncluirAbertura = [
            "<div class='incluir-filho row' id='" + idDeFilho + "'>",
            "<div class='col-md-11 mx-auto incluir-filho-corpo'>"
        ].join("\n");
        //Molde Texto
        var moldeTx = [
            "<label for='" + idDeFilho + "-tx-{nomeTrim}'>{nome}</label>",
            "<input type='text' class='form-control' id='" + idDeFilho + "-tx-{nomeTrim}'>"
        ].join("\n");
        //Molde TextoArea
        var moldeTxArea = [
            "<label for='" + idDeFilho + "-txarea-{nomeTrim}'>{nome}</label>",
            "<textarea class='form-control' id='" + idDeFilho + "-txarea-{nomeTrim}'></textarea>"
        ].join("\n");
        //Molde MinMax
        var moldeMinMax = [
            "<label for='" + idDeFilho + "-minmax-{nomeTrim}'>{nome}</label>",
            "<div data-minmax-valores='{0}, {1}, {2}, {3}, {4}' class='input-minmax' id='" + idDeFilho + "-minmax-{nomeTrim}'></div>"
        ].join("\n");
        //Fechando Instância
        var moldeInputIncluirFechamento = [
            "</div>",
            "<button type='button' class='btn btn-icl-controle remover-filho'>",
            "<i class='fa fa-times'></i>",
            "</button>",
            "</div>"
        ].join("\n");

        var inputFilhoRetorno = moldeInputIncluirAbertura;

        for (var i = 0; i < dataIncluir.length; i++) {
            var funcao = dataIncluir[i].substring(0, dataIncluir[i].indexOf("["));
            var nome = dataIncluir[i].substring(dataIncluir[i].indexOf("[") + 1, dataIncluir[i].indexOf("]"));
            var parametros = dataIncluir[i].substring(dataIncluir[i].indexOf("(") + 1, dataIncluir[i].indexOf(")")).split(",");
            if (funcao === "tx") {
                inputFilhoRetorno += substituirTodos(moldeTx, nome, parametros);
            } else if (funcao === "txarea") {
                inputFilhoRetorno += substituirTodos(moldeTxArea, nome, parametros);
            } else if (funcao === "minmax") {
                inputFilhoRetorno += substituirTodos(moldeMinMax, nome, parametros);
            }
        }

        inputFilhoRetorno += moldeInputIncluirFechamento;

        return inputFilhoRetorno;
    }
};

function substituirTodos(stringAlvo, nome, parametros) {
    //substitui os {nome}
    stringAlvo = stringAlvo.replace("{nome}", nome);
    //substitui os {nomeTrim}
    while (stringAlvo.indexOf("{nomeTrim}") !== -1) {

        stringAlvo = stringAlvo.replace("{nomeTrim}", nome.replace(/ /g, ''));
    }
    //coloca os parâmetros
    for (var i = 0; i < parametros.length; i++) {
        while (stringAlvo.indexOf("{" + i + "}") !== -1) {
            stringAlvo = stringAlvo.replace("{" + i + "}", parametros[i]);
        }
    }
    return stringAlvo;
}

//﻿$(document).ready(function () {
//    //Botão Adicionar
//    $('.inputIncluir').on("click", "button.incluir-btn-adicionar", function () {
//        InputIncluir.Adicionar($(this))
//    });
//    //Botão Remover
//    $('.inputIncluir').on("click", "button.incluir-btn-remover", function () {
//        InputIncluir.Remover($(this), "removerUltimo")
//    });
//    $('.inputIncluir').on("click", ".incluirRemoverIndividual", function () {
//        InputIncluir.Remover($(this), "removerClicado")
//    });
//
//    $('.incluirRemover').attr('disabled', true);
//});
//
//InputIncluir = {
//    qtdMaxima: 5,
//
//    Adicionar: function (btnOrigem) {
//
//        var nomeIncluir = InputIncluir.DefinirNome(btnOrigem);
//
//        var qtdAtual = $('.Incluir' + nomeIncluir).length,
//                idASerAtribuido = new Number(qtdAtual + 1),
//                novoElemento = InputIncluir.Gerar(idASerAtribuido, nomeIncluir);
//
//        $(btnOrigem).parent().parent().siblings('.incluir-filhos-area').append(novoElemento);
//
//        //Ativa o MinMax criado - dá pra melhorar
//        trazerMinMax(document.getElementById('minMaxIncluir' + idASerAtribuido + nomeIncluir));
//
//        InputIncluir.Atualizar();
//    },
//
//    Remover: function (btnOrigem, metodo) {
//        var nomeIncluir = InputIncluir.DefinirNome(btnOrigem);
//
//        if (confirm("Deseja mesmo excluir?")) {
//            if (metodo == "removerUltimo") {
//                $('.Incluir' + nomeIncluir + ':last').remove();
//            } else {
//                btnOrigem.parent().parent().remove();
//            }
//
//            InputIncluir.Atualizar();
//        }
//    },
//
//    Atualizar: function () {
//        //Contagem
//        qtdAtual = $('.Incluir' + nomeIncluir).length;
//        $('.icl' + nomeIncluir).find('.incluir-status').val(qtdAtual);
//
//        if (qtdAtual == InputIncluir.qtdMaxima) {
//            $('.icl' + nomeIncluir).find('.incluir-btn-adicionar').attr('disabled', true);
//        } else if (qtdAtual == 0) {
//            $('.icl' + nomeIncluir).find('.incluir-btn-remover').attr('disabled', true);
//        } else {
//            $('.icl' + nomeIncluir).find('.incluir-btn-remover').attr('disabled', false);
//            $('.icl' + nomeIncluir).find('.incluir-btn-adicionar').attr('disabled', false);
//        }
//    },
//
//    Gerar: function (id, nomeIncluir) {
//        //Abrindo instância
//        var moldeInputIncluirAbertura = [
//            "<div id='inputIncluir" + id + "' class='form-group col-md-12 Incluir" + nomeIncluir + "' style='display:block;'>"
//        ].join("\n");
//        //Molde Texto
//        var moldeTexto = [
//            "<div class='col-sm-11 inputWrapper'>",
//            "   <label for='txtIncluir" + id + "' class=col-sm-2 control-label'>Nome</label>",
//            "   <div class='inputCorpo col-sm-10'>",
//            "       <div class='col-sm-12'>",
//            "           <input type='text' class='form-control' id='txtIncluir" + id + "' placeholder='Digite o atributo aqui' />",
//            "       </div>",
//            "   </div>",
//            "</div>",
//            "<div class='col-sm-1'>",
//            "   <span class='button-icon has-bg incluirRemoverIndividual'><i class='fa fa-times'></i></span>",
//            "</div>"
//        ].join("\n");
//        //Molde TextoArea
//        var moldeTextoArea = [
//            "<div class='col-sm-11 inputWrapper'>",
//            "   <label for='txtAreaIncluir" + id + "' class='col-sm-2 control-label'>Descrição</label>",
//            "   <div class='inputCorpo col-sm-10'>",
//            "       <div class='col-sm-12'>",
//            "           <textarea id='txtAreaIncluir" + id + "' placeholder='Campo de texto autoexpansível' title='Digite seu texto aqui'></textarea>",
//            "       </div>",
//            "   </div>",
//            "</div>"
//        ].join("\n");
//        //Molde MinMax
//        var moldeMinMax = [
//            "<div class='col-sm-11 inputWrapper'>",
//            "   <label for='minMaxIncluir" + id + "' class='col-sm-2 control-label'>Hostilidade</label>",
//            "   <div class='inputCorpo col-sm-10'>",
//            "       <div class='col-sm-12'>",
//            "           <div id='minMaxIncluir" + id + nomeIncluir + "' class='minMaxInput mmHosti'></div>",
//            "       </div>",
//            "   </div>",
//            "</div>"
//        ].join("\n");
//
//        //Fechando Instância
//        var moldeInputIncluirFechamento = [
//            "</div>"
//        ].join("\n");
//
//        return [moldeInputIncluirAbertura, moldeTexto, moldeTextoArea, moldeMinMax, moldeInputIncluirFechamento].join("\n");
//    },
//
//    DefinirNome: function (btnOrigem) {
//        if (btnOrigem.parent().parent().parent().hasClass("icl-raca")) {
//            nomeIncluir = "-raca";
//        }
//        if (btnOrigem.parent().parent().parent().hasClass("icl-criatura")) {
//            nomeIncluir = "-criatura";
//        }
//        if (btnOrigem.parent().parent().parent().hasClass("icl-flora")) {
//            nomeIncluir = "-flora";
//        }
//        if (btnOrigem.parent().parent().parent().hasClass("icl-recurso")) {
//            nomeIncluir = "-recurso";
//        }
//        if (btnOrigem.parent().parent().parent().hasClass("icl-bioma")) {
//            nomeIncluir = "-bioma";
//        }
//        if (btnOrigem.parent().parent().parent().hasClass("icl-religiao")) {
//            nomeIncluir = "-religiao";
//        }
//        if (btnOrigem.parent().parent().parent().hasClass("icl-lingua")) {
//            nomeIncluir = "-lingua";
//        }
//        if (btnOrigem.parent().parent().parent().hasClass("icl-mito")) {
//            nomeIncluir = "-mito";
//        }
//        return nomeIncluir;
//    }
//}