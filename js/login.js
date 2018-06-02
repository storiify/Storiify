$(document).ready(function() {
	$("#formLoko").submit(function(event){
		event.preventDefault(); //impede submit de mudar de pag
		var input1 = $("#txtNomeCompleto").val(); //pega os valores dentro dos input
		var input2 = $("#txtEmail").val(); 
		var input3 = $("#txtSenha").val();
		var input4 = $("#txtConfirmeSenha").val();
		
		
		if (vrfc == true){ //verificação se o e-mail inserido é valido ou não (se o email ja existir no bd vrfc será = true), true = invalido
			alert ("Este e-mail já está cadastrado em nosso banco de dados, favor insira outro e-mail");
			return false; //impede que a função de ser concluida :D
		}
			
		if (input3 != input4){ //verifica se os inputs das senhas são iguais
			alert("As senhas não conferem, favor digitar senhas igual.");
			return false; //impede que a função de ser concluida :D
		}
		if (input3 == input4 & vrfc == false){ //se as senhas forem iguais e o email valido essa função é executada
		$.post('?categoria=login&acao=salvar', { input1 : input1, input2 : input2, input3 : input3}, function(response) { //faz o POST por ajax
			//console.log(response);
				if(response.match(/erro/)){ //se conter a palavra "existe" na resposta do POST, um alerta é emitido e a variavel vrfc se torna true
					  alert('Erro ao registrar o usuário! Por favor tente novamente mais tarde');
					  $("#txtNomeCompleto").val("");
					  $("#txtEmail").val("");
					  $("#txtSenha").val("");
					  $("#txtConfirmeSenha").val("");
					  vrfc = true;
				}else{
			alert ("Usuário " + input1 + " cadastrado com sucesso!")
			$("#txtNomeCompleto").val("");
			$("#txtEmail").val("");
			$("#txtSenha").val("");
			$("#txtConfirmeSenha").val("");
			$('#registrar').modal('hide') //fecha o modal de registro
			}
		});
		}
	});
	
	$("#txtEmail").on('blur', function(){ //quando sai do input de Email essa função é executada
	  var txtEmail = $(this).val(); //pega o valor do input email
		$.post('?categoria=login&acao=verificar', { txtEmail : txtEmail}, function(data) { //faz POST por ajax para verificar se o email ja consta no bd. (verificar no modelo/controlador os caminhos que levam este post). ps:O POST passa primeiro pelo controlador
			//console.log(data);
				if(data.match(/existe/)){ //se conter a palavra "existe" na resposta do POST, um alerta é emitido e a variavel vrfc se torna true
				  alert('O e-mail ' + txtEmail +  ' já está cadastrado!');
				  $("#txtEmail").val("");
				  vrfc = true;
				}else{
					vrfc = false; //se a resposta do POST, não conter a palavra "existe", a variavel vrfc se torna falsa.
				}
		});
	});
	
});