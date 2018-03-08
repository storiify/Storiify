$(document).ready(function () {

    //Tratamento de todos os inputs do tipo MinMax 
    $(".minMaxInput").each(function () {

        var valores;

        //Acrescentar cases para cada id de input MinMax
        switch (this.id) {
            case "idMinMaxHosti":
                valores = ["Inofensivos", "Pacíficos", "Neutros", "Ameaçadores", "Agressivos"];
                break;

            case "idMinMaxAltura":
                valores = ["Nanica", "Baixa", "Média", "Alta", "Gigante"];
                break;

            case "idMinMaxCorpo":
                valores = ["Raquítico", "Magro", "Normal", "Gordo", "Obeso"];
                break;
        }

        //Cria o MinMax no objeto atual, não modificar
        $(this).ionRangeSlider({
            from: 2,
            values: valores,
            type: 'single',
            hasGrid: false
        });

    });

});