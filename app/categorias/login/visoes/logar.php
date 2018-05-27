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
	<!-- bootstrap -->
	<link href="./css/bootstrap.min.css" rel="stylesheet" />
	<!-- CSS Principal, com todos os estilos -->
	<link href="./css/styles.css" type="text/css" rel="stylesheet" />	
	<!--Nestable Lists-->
	<link href="./plugins/form-nestable/jquery.nestable.css" type="text/css" rel="stylesheet" />
	<!--ICheck-->
	<link href="./plugins/icheck-1.x/skins/flat/_all.css" rel="stylesheet" />
	<!--CSS para editarmos-->
	<link href="./css/geral.css" rel="stylesheet" />
	<link href="./css/bootstrap.css" rel="stylesheet" />
    </head>
    <body class="focused-form" style="">


	<div class="container" id="login-form">
	    <a href="?categoria=login&acao=logar" class="login-logo" style="margin: 0px;">
		<img src="./imagens/logo/90logoNome.png" />
	    </a>
	    <div class="row">
		<div class="col-md-4 col-md-offset-4">
		    <div class="panel panel-default">
			<div class="panel-heading">
			    <h2 style="height: auto;">Login Form</h2>
			</div>
			<div class="panel-body">

			    <form action="?categoria=login&acao=check" method="POST" class="form-horizontal" id="validate-form">
				<div class="form-group">
				    <div class="col-xs-12">
					<div class="input-group">
					    <span class="input-group-addon">
						<i class="fa fa-user"></i>
					    </span>
					    <input name="email" type="text" class="form-control" placeholder="Endereço de E-mail" data-parsley-minlength="6" required="" />
					</div>
				    </div>
				</div>

				<div class="form-group">
				    <div class="col-xs-12">
					<div class="input-group">
					    <span class="input-group-addon">
						<i class="fa fa-key"></i>
					    </span>
					    <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" />
					</div>
				    </div>
				</div>

				<div class="form-group">
				    <div class="col-xs-12">
					<a href="esqueceuSenha.html" class="pull-left">Esqueceu sua Senha?</a>
					<div class="checkbox-inline icheck pull-right pt0">
                                            <input type="checkbox">
						<label for="">
						    Lembre-me
						</label>
					</div>
				    </div>
				</div>

				<div class="panel-footer">
				    <div class="clearfix">
					<button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#teste1">
					Registrar</button>
					
					<button type="submit" class="btn btn-primary pull-right">Login</button>
				    </div>
				</div>

			    </form>
			</div>
			
		    </div>

		    <div class="text-center">
			<a href="#" class="btn btn-label btn-social btn-googleplus mb20"><i class="fa fa-fw fa-google"></i>Conecte-se com Google</a>
			<a href="#" class="btn btn-label btn-social btn-facebook mb20"><i class="fa fa-fw fa-facebook"></i>Conecte-se com Facebook</a>
		    </div>
		</div>
	    </div>
	</div>
	
	<div class="modal fade" id="teste1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<form action="?categoria=login&acao=check" id="formLoko" class="form-horizontal">
				<div class="form-group">
				    <label for="txtNomeCompleto" class="col-xs-4 control-label">Nome</label>
				    <div class="col-xs-8">
					<input type="text" class="form-control" name="nm_usu" id="txtNomeCompleto" placeholder="Nome Completo" required="" autofocus />
				    </div>
				</div>
				<div class="form-group">
				    <label for="txtEmail" class="col-xs-4 control-label">Email</label>
				    <div class="col-xs-8">
					<input type="text" class="form-control" name="mail_usu" id="txtEmail" placeholder="Email" required="" />
				    </div>
				</div>
				<div class="form-group">
				    <label for="txtSenha" class="col-xs-4 control-label">Senha</label>
				    <div class="col-xs-8">
					<input type="password" class="form-control" name="snh_usu" id="txtSenha" placeholder="Senha" required="" />
				    </div>
				</div>
				<div class="form-group">
				    <label for="txtConfirmeSenha" class="col-xs-4 control-label">Confirme sua Senha</label>
				    <div class="col-xs-8">
					<input type="password" class="form-control" name="ConfirmeSenha" id="txtConfirmeSenha" placeholder="Confirme sua senha" required="" />
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
		
		  </div>
		  <div class="modal-footer">
			<button type="submit" id="btnForm" class="btn btn-primary pull-right">Registrar</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Load site level scripts -->
	<!-- Load jQuery -->
	<script src="./js/jquery-3.3.1.min.js"></script>
	<script src="./js/login.js"></script>
	<script src="./js/bootstrap.js"></script>
	<!--IChek-->
	<script src="./plugins/icheck-1.x/icheck.js"></script>
	<!--Javascript para editarmos-->
	<script src="./js/marquee.js"></script>
	<!--Verificar o que tem dentro (faz o toggle do menu lateral)-->
	<script src="./js/application.js"></script>
	<!--Text Scroll Plugin-->
	<script src="./plugins/textScrollingMarquee/jquery.marquee.js"></script>
	<!--TextArea autosize-->
	<script src="./plugins/autosize-TextArea/dist/autosize.js"></script>
	<!--IonRangeSlider-->
	<script src="./plugins/Ion.RangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<!-- End loading site level scripts -->
	<!-- Load page level scripts-->
	<!-- End loading page level scripts-->
    </body>
</html>
