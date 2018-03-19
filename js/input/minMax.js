﻿$(document).ready(function () {

    //Tratamento de todos os inputs do tipo MinMax 
    $(".minMaxInput").each(function () {
        trazerMinMax(this);
    });
});

function trazerMinMax(objeto) {

    var valores;

    if ($(objeto).hasClass("mmHosti")) {
        valores = ["Inofensivos", "Pacíficos", "Neutros", "Ameaçadores", "Agressivos"];
    }
    else if ($(objeto).hasClass("mmAltura")) {
        valores = ["Nanica", "Baixa", "Média", "Alta", "Gigante"];
    }
    else if ($(objeto).hasClass("mmCorpo")) { //Tirar ambiguidade com Peso
        valores = ["Raquítico", "Magro", "Normal", "Gordo", "Obeso"];
    }
    else if ($(objeto).hasClass("mmDesiSocial")) {
        valores = ["Muito Desigual", "Pouco Desigual", "Sem Desigualdades"]; //Bugado na aba de Mundo->Economia
    }
    else if ($(objeto).hasClass("mmSatfPop")) {
        valores = ["Muito Insatisfeita","Insatisfeita", "Neutra", "Satisfeita", "Muito Satisfeita"];
    }
    else if ($(objeto).hasClass("mmNvlTec")) {
        valores = ["Rudimentar","Inferior", "Mediana", "Desenvolvida", "Avançada"];
    }
    else if ($(objeto).hasClass("mmDpedTec")) {
        valores = ["Totalmente Dependentes","Elevada", "Neutra", "Pouca", "Totalmente Independentes"];
    }
    else if ($(objeto).hasClass("mmAces")) {
        valores = ["(Quase)Nenhum","Raro", "Neutro", "Comum", "Maioria dos Habitantes"];
    }
      else if ($(objeto).hasClass("mmPeso")) {
        valores = ["Raquítico", "Magro", "Normal", "Gordo", "Obeso"];
    }
	else if ($(objeto).hasClass("mmPorte")) {
        valores = ["Fraco", "Médio", "Forte"];
    }
	else if ($(objeto).hasClass("mmAlinhamento")) {
        valores = ["Ruim", "Neutro", "Bom"];
    }

    //Cria o MinMax no objeto atual, não modificar
    $(objeto).ionRangeSlider({
        from: 2,
        values: valores,
        type: 'single',
        hasGrid: false
    });
}