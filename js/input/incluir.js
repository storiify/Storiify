$(document).ready(function () {

    var nomeIncluir = "Raca";
    var qtdMaxima = 5;
    atualizarStatus()

    //Botão Adicionar
    $('.incluirAdicionar').click(function () {

        var wrapperAlvo = document.getElementById('incluirWrapper');

        var qtdAtual = $('.Incluir' + nomeIncluir).length,
            idASerAtribuido = new Number(qtdAtual + 1),
            novoElemento = GerarInstancia(idASerAtribuido, nomeIncluir);

        wrapperAlvo.insertAdjacentHTML('beforeend', novoElemento);

        //Ativa o MinMax criado
        trazerMinMax(document.getElementById('minMaxIncluir' + idASerAtribuido));

        //Ativa botão de remover
        $('.incluirRemover').attr('disabled', false);
        //Desativa botão de adicionar
        if (idASerAtribuido == qtdMaxima) {
            $('.incluirAdicionar').attr('disabled', true).prop('value', "Limite!");
        }
        atualizarStatus()

        //Colocar as funções nos controles criados
        $('.incluirRemoverIndividual').click(function () {
            $(this).parent().parent().remove();
        });
    });

    //Botão Remover
    $('.incluirRemover').click(function () {
        //Caixa de dialogo de confirmação
        if (confirm("Deseja mesmo excluir?")) {
            var num = $('.Incluir' + nomeIncluir).length;
            $('#inputIncluir' + num).slideUp('slow', function () {
                $(this).remove();
                //Ativa botão de adicionar
                $('.incluirAdicionar').attr('disabled', false).prop('value', "Adicionar");
                //Desativa botão de remover
                if ((num - 1) == 0) {
                    $('.incluirRemover').attr('disabled', true);
                }

                atualizarStatus()
            });
        }
        return false;
    });

    //Botão remover Individual
    $('.incluirRemoverIndividual').click(function () {
        $(this).parent().parent().remove();
        atualizarStatus();
    });

    //Atualiza incluirStatus
    function atualizarStatus() {
        $('.incluirStatus').val($('.Incluir' + nomeIncluir).length);
    }

    // Enable the "add" button
    $('.incluirAdicionar').attr('disabled', false);
    // Disable the "remove" button
    $('.incluirRemover').attr('disabled', true);

    function GerarInstancia(id, nomeDoIncluir) {
        //Abrindo instância
        var moldeInputIncluirAbertura = [
            "<div id='inputIncluir" + id + "' class='form-group col-md-12 Incluir" + nomeDoIncluir + "' style='display:block;'>"
        ].join("\n");
        //Molde Texto
        var moldeTexto = [
            "<div class='col-sm-11 inputWrapper'>",
            "<label for='txtIncluir" + id + "' class=col-sm-2 control-label'>Nome</label>",
            "<div class='inputCorpo col-sm-10'>",
            "<div class='col-sm-12'>",
            "<input type='text' class='form-control' id='txtIncluir" + id + "' placeholder='Digite o atributo aqui' />",
            "</div>",
            "</div>",
            "</div>",
            "<div class='col-sm-1'>",
            "<span class='button-icon has-bg incluirRemoverIndividual'><i class='fa fa-times'></i></span>",
            "</div>"
        ].join("\n");
        //Molde TextoArea
        var moldeTextoArea = [
            "<div class='col-sm-11 inputWrapper'>",
            "<label for='txtAreaIncluir" + id + "' class='col-sm-2 control-label'>Descrição</label>",
            "<div class='inputCorpo col-sm-10'>",
            "<div class='col-sm-12'>",
            "<textarea id='txtAreaIncluir" + id + "' placeholder='Campo de texto autoexpansível' title='Digite seu texto aqui'></textarea>",
            "</div>",
            "</div>",
            "</div>"
        ].join("\n");
        //Molde MinMax
        var moldeMinMax = [
            "<div class='col-sm-11 inputWrapper'>",
            "<label for='minMaxIncluir" + id + "' class='col-sm-2 control-label'>Hostilidade</label>",
            "<div class='inputCorpo col-sm-10'>",
            "<div class='col-sm-12'>",
            "<div id='minMaxIncluir" + id + "' class='minMaxInput mmHosti'></div>",
            "</div>",
            "</div>",
            "</div>"
        ].join("\n");

        //Fechando Instância
        var moldeInputIncluirFechamento = [
            "</div>"
        ].join("\n");

        return [moldeInputIncluirAbertura, moldeTexto, moldeTextoArea, moldeMinMax, moldeInputIncluirFechamento].join("\n");
    }
});