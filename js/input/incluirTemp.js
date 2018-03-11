$(document).ready(function () {

    var qtdMaxima = 5;
    atualizarStatus()

    //Botão Adicionar
    $('.incluirAdicionar').click(function () {

        var num = $('.moldeIncluir').length,
            newNum = new Number(num + 1),
            newElem = $('#inputIncluir' + num).clone().attr('id', 'inputIncluir' + newNum).fadeIn('slow');

        $('#inputIncluir' + num).after(newElem);

        //Ativa botão de remover
        $('.incluirRemover').attr('disabled', false);
        //Desativa botão de adicionar
        if (newNum == qtdMaxima) {
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
            var num = $('.moldeIncluir').length;

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
    });

    //Atualiza incluirStatus
    function atualizarStatus() {
        $('.incluirStatus').val($('.moldeIncluir').length);
    }

    // Enable the "add" button
    $('.incluirAdicionar').attr('disabled', false);
    // Disable the "remove" button
    $('.incluirRemover').attr('disabled', true);

    //var qtdMaxima = 5;
    //atualizarStatus()

    ////Botão Adicionar
    //$('.incluirAdicionar').click(function () {

    //    var num = $('.moldeIncluir').length,
    //        newNum = new Number(num + 1),
    //        newElem = $('#inputIncluir' + num).clone().attr('id', 'inputIncluir' + newNum).fadeIn('slow');

    //    $('#inputIncluir' + num).after(newElem);

    //    //Ativa botão de remover
    //    $('.incluirRemover').attr('disabled', false);
    //    //Desativa botão de adicionar
    //    if (newNum == qtdMaxima) {
    //        $('.incluirAdicionar').attr('disabled', true).prop('value', "Limite!");
    //    }
    //    atualizarStatus()
    //    //Colocar as funções nos controles criados
    //    $('.incluirRemoverIndividual').click(function () {
    //        $(this).parent().parent().remove();
    //    });
    //});

    ////Botão Remover
    //$('.incluirRemover').click(function () {
    //    //Caixa de dialogo de confirmação
    //    if (confirm("Deseja mesmo excluir?")) {
    //        var num = $('.moldeIncluir').length;

    //        $('#inputIncluir' + num).slideUp('slow', function () {
    //            $(this).remove();

    //            //Ativa botão de adicionar
    //            $('.incluirAdicionar').attr('disabled', false).prop('value', "Adicionar");
    //            //Desativa botão de remover
    //            if ((num - 1) == 0) {
    //                $('.incluirRemover').attr('disabled', true);
    //            }

    //            atualizarStatus()
    //        });
    //    }
    //    return false;
    //});

    ////Botão remover Individual
    //$('.incluirRemoverIndividual').click(function () {
    //    $(this).parent().parent().remove();
    //});

    ////Atualiza incluirStatus
    //function atualizarStatus() {
    //    $('.incluirStatus').val($('.moldeIncluir').length);
    //}

    //// Enable the "add" button
    //$('.incluirAdicionar').attr('disabled', false);
    //// Disable the "remove" button
    //$('.incluirRemover').attr('disabled', true);
});