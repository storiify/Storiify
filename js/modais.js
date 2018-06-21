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
//FLORA
$(".salvar-flora-modal").on("click", function () {
    var nm_flra = $("[name='nm_flra']").val();
    var dcr_flra = $("[name='dcr_flra']").val();
    var rrdd_flra = $("[name='rrdd_flra']").val();
    $.ajax({
        url: "?categoria=flora&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_flra: nm_flra, dcr_flra: dcr_flra, rrdd_flra: rrdd_flra},
        success: function (data) {
            alert("A flora"+ (nm_flra == ""? "": " " + nm_flra) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idFlora = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionFlora(idFlora, nm_flra);
            
            $("#modalCadastrarFlora").modal('hide');
        }
    });
});

function inserirOptionFlora(idFlora, nomeFlora){
    $("#input-txselr-Flora").append("<option value='"+idFlora+"' selected>"+nomeFlora+"</option>");
}
//FINAL FLORA

$(".salvar-classe-modal").on("click", function () {
    var nm_cls = $("[name='nm_cls']").val();
    var dcr_cls = $("[name='dcr_cls']").val();
    var qt_cls = $("[name='qt_cls']").val();
    var rptc_cls = $("[name='rptc_cls']").val();
    $.ajax({
        url: "?categoria=classe&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_cls: nm_cls, dcr_cls: dcr_cls, qt_cls: qt_cls, rptc_cls: rptc_cls},
        success: function (data) {
            alert("A Classe"+ (nm_cls == ""? "": " " + nm_cls) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idClasse = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionClasse(idClasse, nm_cls);
            
            $("#modalCadastrarClasse").modal('hide');
        }
    });
});

function inserirOptionClasse(idClasse, nm_cls){
    $("#input-txselr-classe").append("<option value='"+idClasse+"' selected>"+nm_cls+"</option>");
}

$(".salvar-profissao-modal").on("click", function () {
    var nm_pfs = $("[name='nm_pfs']").val();
    var dcr_pfs = $("[name='dcr_pfs']").val();
    var qt_pfs = $("[name='qt_pfs']").val();
    var rptc_pfs = $("[name='rptc_pfs']").val();
    $.ajax({
        url: "?categoria=profissao&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_pfs: nm_pfs, dcr_pfs: dcr_pfs, qt_pfs: qt_pfs, rptc_pfs: rptc_pfs},
        success: function (data) {
            alert("A Profissão"+ (nm_pfs == ""? "": " " + nm_pfs) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idPfs = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionProfissao(idPfs, nm_pfs);
            
            $("#modalCadastrarProfissao").modal('hide');
        }
    });
});

function inserirOptionProfissao(idPfs, nm_pfs){
    $("#input-txselr-profissao").append("<option value='"+idPfs+"' selected>"+nm_pfs+"</option>");
}

$(".salvar-objeto-modal").on("click", function () {
    var nm_obj = $("[name='nm_obj']").val();
    var dcr_obj = $("[name='dcr_obj']").val();
    var apci_obj = $("[name='apci_obj']").val();
    var vlr_obj = $("[name='vlr_obj']").val();
    $.ajax({
        url: "?categoria=objeto&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_obj: nm_obj, dcr_obj: dcr_obj, apci_obj: apci_obj, vlr_obj: vlr_obj},
        success: function (data) {
            alert("O Objeto"+ (nm_obj == ""? "": " " + nm_obj) +" foi cadastrado com sucesso");
            
            var pre = "idInserido";
            var idObj = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionObjeto(idObj, nm_obj);
            
            $("#modalCadastrarObjeto").modal('hide');
        }
    });
});

function inserirOptionObjeto(idObj, nm_obj){
    $("#input-txselr-objeto").append("<option value='"+idObj+"' selected>"+nm_obj+"</option>");
}

$(".salvar-habilidade-fisica-modal").on("click", function () {
    var nm_hbld_fsca = $("[name='nm_hbld_fsca']").val();
    var dcr_hbld_fsca = $("[name='dcr_hbld_fsca']").val();
    var podr_hbld_fsca = $("[name='podr_hbld_fsca']").val();
    $.ajax({
        url: "?categoria=habilidade_fisica&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_hbld_fsca: nm_hbld_fsca, dcr_hbld_fsca: dcr_hbld_fsca, podr_hbld_fsca: podr_hbld_fsca},
        success: function (data) {
            alert("A Habilidade Física"+ (nm_hbld_fsca == ""? "": " " + nm_hbld_fsca) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idhbld_fsca = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionHabilidadeFisica(idhbld_fsca, nm_hbld_fsca);
            
            $("#modalCadastrarHabilidadeFisica").modal('hide');
        }
    });
});

function inserirOptionHabilidadeFisica(idhbld_fsca, nm_hbld_fsca){
    $("#input-txselr-habilidade-fisica").append("<option value='"+idhbld_fsca+"' selected>"+nm_hbld_fsca+"</option>");
}

$(".salvar-habilidade-magica-modal").on("click", function () {
    var nm_hbld_mgca = $("[name='nm_hbld_mgca']").val();
    var dcr_hbld_mgca = $("[name='dcr_hbld_mgca']").val();
    var podr_hbld_mgca = $("[name='podr_hbld_mgca']").val();
    $.ajax({
        url: "?categoria=habilidade_magica&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', nm_hbld_mgca: nm_hbld_mgca, dcr_hbld_mgca: dcr_hbld_mgca, podr_hbld_mgca: podr_hbld_mgca},
        success: function (data) {
            alert("A Habilidade Mágica"+ (nm_hbld_mgca == ""? "": " " + nm_hbld_mgca) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idhbld_mgca = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionHabilidademagica(idhbld_mgca, nm_hbld_mgca);
            
            $("#modalCadastrarHabilidademagica").modal('hide');
        }
    });
});

function inserirOptionHabilidademagica(idhbld_mgca, nm_hbld_mgca){
    $("#input-txselr-habilidade-magica").append("<option value='"+idhbld_mgca+"' selected>"+nm_hbld_mgca+"</option>");
}

$(".salvar-lembranca-modal").on("click", function () {
    var dcr_lmca = $("[name='dcr_lmca']").val();
    var apcc_lmca = $("[name='apcc_lmca']").val();
    $.ajax({
        url: "?categoria=lembranca&acao=salvar",
        method: "POST",
        data: {isAjax: 'true', dcr_lmca: dcr_lmca, apcc_lmca: apcc_lmca},
        success: function (data) {
            alert("A Lembrança"+ (dcr_lmca == ""? "": " " + dcr_lmca) +" foi cadastrada com sucesso");
            
            var pre = "idInserido";
            var idLembranca = data.substr(data.indexOf(pre) + pre.length + 1);
            inserirOptionLembranca(idLembranca, dcr_lmca);
            
            $("#modalCadastrarLembranca").modal('hide');
        }
    });
});

function inserirOptionLembranca(idLembranca, dcr_lmca){
    $("#input-txselr-lembranca").append("<option value='"+idLembranca+"' selected>"+dcr_lmca+"</option>");
}
//final lembrança e tudo de personagem