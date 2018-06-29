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