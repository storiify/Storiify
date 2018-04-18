$(document).ready(function () {
    //IChek - Aqui que muda a cor
    $("input").iCheck({
        checkboxClass: "icheckbox_flat-blue",
        radioClass: "iradio_flat-blue"
    });

    //Master CheckBox
    var mudadoPeloFilho = false;

    $(".ckbox-mestre input").on("ifChecked", function () {
        $(this).parent().parent().parent().children(".ckbox-servo").find("input").iCheck("check");
        mudadoPeloFilho = false;
    });
    $(".ckbox-mestre input").on("ifUnchecked", function () {
        if (!mudadoPeloFilho) {
            $(this).parent().parent().parent().children(".ckbox-servo").find("input").iCheck("uncheck");
            mudadoPeloFilho = false;
        }
    });
    $(".ckbox-servo input").on("ifUnchecked", function () {
        mudadoPeloFilho = true;
        $(this).parent().parent().parent().children(".ckbox-mestre").find("input").iCheck("uncheck");
    });
});