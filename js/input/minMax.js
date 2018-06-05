$(document).ready(function () {
    //Tratamento de todos os inputs do tipo MinMax 
    $(".input-minmax").each(function () {
        trazerMinMax(this);
    });
});

function trazerMinMax(objeto) {
    var valores = $(objeto).data("minmax-valores").split(",");
    var vlMaximo = valores.length - 1;
    var valorInicial = ($(objeto).val() == "" ? vlMaximo / 2 : valores.indexOf($(objeto).val()));

    $(objeto).ionRangeSlider({
        type: 'single',
        min: 0,
        max: vlMaximo,
        from: valorInicial,
        step: 1,
        values: valores,
        hasGrid: false,
        onFinish: function (data) {
            $(objeto).prop("value",data.from_value);
        }
    });
}