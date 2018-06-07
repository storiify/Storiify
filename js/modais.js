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