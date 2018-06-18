<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
	<meta charset="utf-8" />
	<title>Storiify - Torne suas histórias reais</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-touch-fullscreen" content="yes" />
	<meta name="description" content="Aplicativo web que permite ao usuário armazenar suas histórias de maneira estruturada" />
	<meta name="author" content="Grupo 3 PI" />
	<!-- Font Awesome -->
	<link href="./font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
	<!-- Bootstrap -->
	<link href="./css/bootstrap.css" type="text/css" rel="stylesheet" /> <!-- bootstrap V4.0.0 -->
	<!-- CSS Principal, com todos os estilos -->
	<!-- <link href="./css/bootstrap.css" rel="stylesheet" /> -->
    </head>
    <body class="focused-form" style="">


	<div class="container">
	    <a href="?categoria=login&acao=logar" class="login-logo" style="margin: 0px;">
	    <div class="text-center">
		<img class="rounded mx-auto d-block" src="./imagens/logo/90logoNome.png" />
    	</div>
	    </a>
	    <div class="row">
		<div class="col-md-4 offset-md-4 offset-xs-1">
		    <div class="panel panel-default">
			<div class="panel-heading">
			  <h2 style="height: auto;">Login</h2> <hr>
			</div>
			<div class="panel-body">
			    <form action="?categoria=login&acao=check" method="POST" class="form-horizontal" id="validate-form">
				<div class="form-group">
				    <div class="col-xs-12">
					<div class="input-group">
					    <span class="input-group-text" >
						<i class="fa fa-user" style="width:16px;height:16px;"></i>
					    </span>
					    <input name="email" type="text" class="form-control" placeholder="Endereço de E-mail" data-parsley-minlength="6" required="" />
					</div>
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-xs-12">
					<div class="input-group">
					    <span class="input-group-text">
						<i class="fa fa-key"></i>
					    </span>
					    <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" />
					</div>
				    </div>
				</div>
				<div class="form-group">								
					<div class="form-check mb-2 mr-sm-2 mb-sm-0">						
						<a href="esqueceuSenha.html" class="float-right">Esqueceu sua Senha?</a>						
                        <input  class="form-check-input" type="checkbox">
						<label for="">
						    Lembre-me
						</label>
					</div>				    
				</div>
				<hr>
				<div class="panel panel-default">
				    <div class="clearfix">				
					<button type="button" class="btn btn-default float-left" data-toggle="modal" data-target="#registrar">
					Registre-se</button>					
					<button type="submit" class="btn btn-success float-right">Login</button>					
				    </div>
				</div>
			    </form>
			</div>			
		    </div>			
		</div>
	    </div>
	</div>
	
	<div class="modal fade" id="registrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document" >
		<div class="modal-content" >
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Registre-se</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form action="?categoria=login&acao=check" id="formLoko" class="form-horizontal">
				<div class="form-group">
					<label for="txtNomeCompleto" class="col-sm-2 col-form-label">Nome</label>
				    <div class="col-sm-12">
					<input type="text" class="form-control" name="nm_usu" id="txtNomeCompleto" placeholder="Digite aqui seu nome" required="" maxlength="20" />
				    </div>
				</div>
				<div class="form-group">
				    <label for="txtEmail" class="col-sm-2 col-form-label">Email</label>
				    <div class="col-sm-12">
					<input type="email" class="form-control" name="mail_usu" id="txtEmail" placeholder="Digite aqui seu endereço de E-mail" required="" maxlength="100" />
				    </div>
				</div>
				<div class="form-group">
				    <label for="txtSenha" class="col-sm-2 col-form-label">Senha</label>
				    <div class="col-sm-12">
					<input type="password" class="form-control" name="snh_usu" id="txtSenha" placeholder="Digite aqui sua senha" required="" maxlength="100" />
				    </div>
				</div>
				<div class="form-group">
				    <label for="txtConfirmeSenha" class="col-sm-5 col-form-label">Confirme a Senha</label>
				    <div class="col-sm-12">
					<input type="password" class="form-control" name="ConfirmeSenha" id="txtConfirmeSenha" placeholder="Confirme sua senha" required="" maxlength="100" />
				    </div>
				</div>
				<div class="form-group">
				    <div class="col-xs-12">
					<input type="checkbox" />
					<label>
					    Li e aceito os <a href="#">termos de uso</a>
					</label>
				    </div>
				</div>				
			  <div class="modal-footer">
				<button type="submit" id="btnForm" class="btn btn-primary pull-right">Registrar</button>
			  </div>
		 </form>
		</div>
	  </div>
	</div>
	
	<!-- Load site level scripts -->
	<!-- Load jQuery -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<script src="./js/login.js"></script>
	<script src="./js/bootstrap.js"></script> <!-- bootstrap V4.0.0 -->
	<!--IChek-->
	<script src="./plugins/icheck-1.x/icheck.js"></script>
	<!--Javascript para editarmos-->
	<!-- End loading site level scripts -->
	<!-- Load page level scripts-->
	<!-- End loading page level scripts-->
    </body>
</html>
