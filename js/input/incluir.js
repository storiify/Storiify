$(document).ready(function () {
//Botão Adicionar
    $('.input-incluir').on("click", "button.incluir-btn-adicionar", function () {
        InputIncluir.Adicionar($(this));
    });
    //Botão Remover
    $('.input-incluir').on("click", "button.incluir-btn-remover", function () {
        InputIncluir.Remover($(this), "removerUltimo");
    });
    $('.input-incluir').on("click", ".remover-filho", function () {
        InputIncluir.Remover($(this), "removerClicado");
    });
    $('.incluir-btn-remover').attr('disabled', true);
});
InputIncluir = {
    qtdMaxima: 2,
    Adicionar: function (btnOrigem) {

        var idPai = $(btnOrigem).parent().parent().parent().attr("id");
        var qtdAtualDeFilhos = $(btnOrigem).parent().parent().siblings().children().length,
                idASerAtribuido = new Number(qtdAtualDeFilhos + 1),
                novoElemento = InputIncluir.Gerar(idASerAtribuido, idPai, $("#" + idPai + "").data("inputs-internos").split("&"));

        $(btnOrigem).parent().parent().siblings('.incluir-filhos-area').append(novoElemento);

        //Ativa o MinMax criado
        $(btnOrigem).closest(".input-incluir").children(".incluir-filhos-area").children().last().children().children().children(".input-minmax").each(function () { //coloquei mais um "children" para que o minMax seja ativado
            trazerMinMax(this);
        });

        InputIncluir.Atualizar($(btnOrigem).closest(".input-incluir"));
    },
    Remover: function (btnOrigem, metodo) {
        var inputIncr = $(btnOrigem).closest(".input-incluir");
        var alvoDeletar = (metodo === "removerUltimo") ? $(btnOrigem).parent().parent().siblings().children().last() : $(btnOrigem).parent();

        var alvoValorPrimeiroFilho = (alvoDeletar.children().children().eq(1).val() === "") ? "" : " " + alvoDeletar.children().children().eq(1).val();
        if (confirm("Deseja mesmo excluir" + alvoValorPrimeiroFilho + "?")) {
            $(alvoDeletar).remove();
            InputIncluir.Atualizar(inputIncr);
        }
    },
    Atualizar: function (inputIncr) {
        //Contagem
        var qtdAtual = $(inputIncr).children(".incluir-filhos-area").children().length;
        //Atualizando o incluir-status
        $(inputIncr).children().children(".incluir-status").val(qtdAtual);

        //Ativando/desativando os botões de adicionar/remover
        if (qtdAtual === InputIncluir.qtdMaxima) {
            $(inputIncr).children(".input-group").children(".incluir-adicionar").children("button").attr('disabled', true);
        } else if (qtdAtual === 0) {
            $(inputIncr).children(".input-group").children(".incluir-remover").children("button").attr('disabled', true);
        } else {
            $(inputIncr).find('.incluir-btn-remover').attr('disabled', false);
            $(inputIncr).find('.incluir-btn-adicionar').attr('disabled', false);
        }
    },
    Gerar: function (id, idDoPai, dataIncluir) {
		var idDeFilho = idDoPai;		
		
        //Abrindo instância
        var moldeInputIncluirAbertura = [
			"<form action='' method='post'>",  //O incluir vai gerar um form proprio, para que mande para o controlador somente oq se encontra dentro do incluir.
            "<div class='incluir-filho row' id='" + idDeFilho + "'>",			
            "<div class='col-md-11 mx-auto incluir-filho-corpo'>"
			
        ].join("\n");
        //Molde Texto
        var moldeTx = [
            "<label for='" + idDeFilho + "-tx-{nomeTrim}'>{nome}</label>",
            "<input type='text' class='form-control' id='nm_" + idDeFilho + "' name='nm_" + idDeFilho + "'>" //Adicionei os "name" nos input, e coloquei nomes genericos que coincidem com os nomes das colunas no bd
        ].join("\n");
        //Molde TextoArea
        var moldeTxArea = [
            "<label for='" + idDeFilho + "-txarea-{nomeTrim}'>{nome}</label>",
            "<textarea class='form-control' id='dcr_" + idDeFilho + "' name='dcr_" + idDeFilho + "'></textarea>"
        ].join("\n");
        //Molde MinMax
        var moldeMinMax = [
            "<label for='" + idDeFilho + "-minmax-{nomeTrim}'>{nome}</label>",
            "<input value='' data-minmax-valores='{0}, {1}, {2}, {3}, {4}' class='input-minmax' id='minMax_" + idDeFilho + "_{nomeTrim}'>"
        ].join("\n");
        //Fechando Instância
        var moldeInputIncluirFechamento = [
			"<button class='btn btn-azul btn-md btn-block' type='submit'>Criar</button>", //botão simples, bonito e belo. que fará o submit do incluir
			"</div>",	
            "<button type='button' class='btn btn-icl-controle remover-filho'>",
            "<i class='fa fa-times'></i>",
            "</button>",
            "</div>",
			"</form>"
			
        ].join("\n");
		
		$("#" + idDeFilho).submit(function(event){ //quando o submit do incluir for disparado ele executará essa função
		event.preventDefault(); //impede submit de mudar de pagina
		var nome = $("#nm_" + idDeFilho).val(); //pega os valores dentro dos input ex: nm_cls
		var dcr = $("#dcr_" + idDeFilho).val(); //
		$.post('?categoria=incluir&acao=salvar', { col1 : nome, col2 : dcr, tabela : idDeFilho}, function(response) {  //vai fazer o post por meio de ajax para o controlador do Incluir, ele vai mandar col1 e col2 que são nomes genericos para as colunas, no controladorIncluir esses nomes serão tratados para suas respectivas colunas. Fiz dessa maneira pq fica mais abrangente. Alem disso ele vai passar um ['tabela']->idDeFilho, isso é para definir a tabela e o tratamento das colunas. 
			//console.log(response, idDeFilho, nome, dcr);
			alert (nome + " foi cadastrado"); //
			$("#nm_" + idDeFilho).val(""); //Limpa os campos
			$("#dcr_" + idDeFilho).val(""); //
		}); //
		}); //

        var inputFilhoRetorno = moldeInputIncluirAbertura;

        for (var i = 0; i < dataIncluir.length; i++) {
            var funcao = dataIncluir[i].substring(0, dataIncluir[i].indexOf("["));
            var nome = dataIncluir[i].substring(dataIncluir[i].indexOf("[") + 1, dataIncluir[i].indexOf("]"));
            var parametros = dataIncluir[i].substring(dataIncluir[i].indexOf("(") + 1, dataIncluir[i].indexOf(")")).split(",");
            if (funcao === "tx") {
                inputFilhoRetorno += substituirTodos(moldeTx, nome, parametros);
            } else if (funcao === "txarea") {
                inputFilhoRetorno += substituirTodos(moldeTxArea, nome, parametros);
            } else if (funcao === "minmax") {
                inputFilhoRetorno += substituirTodos(moldeMinMax, nome, parametros);
            }
        }

        inputFilhoRetorno += moldeInputIncluirFechamento;

        return inputFilhoRetorno;			
	
    }
};

function substituirTodos(stringAlvo, nome, parametros) {
    //substitui os {nome}
    stringAlvo = stringAlvo.replace("{nome}", nome);
    //substitui os {nomeTrim}
    while (stringAlvo.indexOf("{nomeTrim}") !== -1) {

        stringAlvo = stringAlvo.replace("{nomeTrim}", nome.replace(/ /g, ''));
    }
    //coloca os parâmetros
    for (var i = 0; i < parametros.length; i++) {
        while (stringAlvo.indexOf("{" + i + "}") !== -1) {
            stringAlvo = stringAlvo.replace("{" + i + "}", parametros[i]);
        }
    }
    return stringAlvo;

}
		