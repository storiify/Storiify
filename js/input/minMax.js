$(document).ready(function () {

    //Tratamento de todos os inputs do tipo MinMax 
    $(".input-minmax").each(function () {
        trazerMinMax(this);
    });
});

function trazerMinMax(objeto) {
    var valores = $(objeto).data("minmax-valores").split(",")

    //Cria o MinMax no objeto atual, não modificar
    $(objeto).ionRangeSlider({
        type: 'single',
        min: 0,
        max: 4,
        from: 2,
        step: 1,
        values: valores,
        hasGrid: false
    });
}