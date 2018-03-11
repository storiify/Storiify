$(document).ready(function () {

    //Tratamento de todos os inputs do tipo MinMax 
    $(".minMaxInput").each(function () {
        trazerMinMax(this)
    });
});

function trazerMinMax(objeto) {

    var valores;

    if (objeto.className.indexOf("mmHosti") != -1) {
        valores = ["Inofensivos", "Pacíficos", "Neutros", "Ameaçadores", "Agressivos"];
    }
    else if (objeto.className.indexOf("mmAltura") != -1) {
        valores = ["Nanica", "Baixa", "Média", "Alta", "Gigante"];
    }
    else if (objeto.className.indexOf("mmCorpo") != -1) {
        valores = ["Raquítico", "Magro", "Normal", "Gordo", "Obeso"];
    }

    //Cria o MinMax no objeto atual, não modificar
    $(objeto).ionRangeSlider({
        from: 2,
        values: valores,
        type: 'single',
        hasGrid: false
    });
}