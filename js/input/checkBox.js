$(document).ready(function () {
    //IChek - Aqui que muda a cor
    $('input').iCheck({
        checkboxClass: 'icheckbox_flat-red',
        radioClass: 'iradio_flat-red'
    });

    //Master CheckBox
    var mudadoPeloFilho = false;

    $('#ckbTodos').on('ifChecked', function () {
        $(".cBoxClass").iCheck('check');
        mudadoPeloFilho = false;
    });
    $('#ckbTodos').on('ifUnchecked', function () {
        if (!mudadoPeloFilho) {
            $(".cBoxClass").iCheck('uncheck');
            mudadoPeloFilho = false;
        }
    });
    $('.cBoxClass').on('ifUnchecked', function () {
        mudadoPeloFilho = true;
        $("#ckbTodos").iCheck('uncheck');
    });

});