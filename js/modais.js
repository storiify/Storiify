//RAÇA
$(".salvar-raca-modal").on("click", function () {
    var nm_raca = $("[name='nm_raca']").val();
    var dcr_raca = $("[name='dcr_raca']").val();
    var apci_raca = $("[name='apci_raca']").val();
    var pvmt_raca = $("[name='pvmt_raca']").val();
    var rptc_raca = $("[name='rptc_raca']").val();
    $.ajax({
        url: "?categoria=raca&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_raca: nm_raca, dcr_raca: dcr_raca, apci_raca: apci_raca, pvmt_raca: pvmt_raca, rptc_raca: rptc_raca},
        success: function (data) {
            alert("A raça"+ (nm_raca == ""? "": " " + nm_raca) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idRaca = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionRaca(idRaca, nm_raca);
            
            $("#modalCadastrarRaca").modal('hide');
        }
    });
});

function inserirOptionRaca(idRaca, nomeRaca){
    $("#input-txselr-Raca").append("<option value='"+idRaca+"' selected>"+nomeRaca+"</option>");
}
//FINAL RAÇA
//FAUNA
$(".salvar-fauna-modal").on("click", function () {
    var nm_fna = $("[name='nm_fna']").val();
    var dcr_fna = $("[name='dcr_fna']").val();
    var apci_fna = $("[name='apci_fna']").val();
    var pvmt_fna = $("[name='pvmt_fna']").val();
    var agsd_fna = $("[name='agsd_fna']").val();
    $.ajax({
        url: "?categoria=fauna&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_fna: nm_fna, dcr_fna: dcr_fna, apci_fna: apci_fna, pvmt_fna: pvmt_fna, agsd_fna: agsd_fna},
        success: function (data) {
            alert("A fauna"+ (nm_fna == ""? "": " " + nm_fna) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idFauna = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionFauna(idFauna, nm_fna);
            
            $("#modalCadastrarFauna").modal('hide');
        }
    });
});

function inserirOptionFauna(idFauna, nomeFauna){
    $("#input-txselr-Fauna").append("<option value='"+idFauna+"' selected>"+nomeFauna+"</option>");
}
//FINAL FAUNA