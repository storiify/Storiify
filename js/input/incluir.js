$(document).ready(function () {

    var qtdMaxima = 5;
    $('.incluirStatusv').val($('.moldeIncluir').length.toString());

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
    });

    //Botão Remover
    $('.incluirRemover').click(function () {
        // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Deseja excluir?")) {
            var num = $('.moldeIncluir').length; // how many "duplicatable" input fields we currently have

            $('#inputIncluir' + num).slideUp('slow', function () {
                $(this).remove();

                //Ativa botão de adicionar
                $('.incluirAdicionar').attr('disabled', false).prop('value', "Adicionar");
                //Desativa botão de remover
                if ((num - 1) == 0) {
                    $('.incluirRemover').attr('disabled', true);
                }
            });
        }
        return false;   
    });

    // Enable the "add" button
    $('.incluirAdicionar').attr('disabled', false);
    // Disable the "remove" button
    $('.incluirRemover').attr('disabled', true);
});