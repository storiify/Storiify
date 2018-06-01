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
	<meta name="author" content="Grupo 1 PI III" />

	<!-- BootStrap -->
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="./font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />

        <!--Estilo geral-->
        <link href="./css/geral.css" rel="stylesheet" type="text/css"/>
        <!--Estilo da navegação-->
        <link href="./css/navegacao.css" rel="stylesheet" type="text/css"/>
        <!-- Estilo das Abas de Navegação -->
        <link href="./css/navTabs.css" rel="stylesheet" type="text/css"/>
        <!-- Estilo dos Formulários -->
        <link href="./css/formularios.css" rel="stylesheet" type="text/css"/>
        <!-- Estilo das Listagens -->
        <link href="./css/listagens.css" rel="stylesheet" type="text/css"/>

        <!--ICheck-->
        <link href="./plugins/icheck-1.x/skins/flat/blue.css" rel="stylesheet" />
        <!--IONRangeSlider-->
        <link href="./plugins/ion.rangeSlider-2.2.0/css/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
        <link href="./plugins/ion.rangeSlider-2.2.0/css/ion.rangeSlider.skinNice.css" rel="stylesheet" type="text/css"/>
        <!--Select2-->
        <link href="./plugins/select2/css/select2.css" rel="stylesheet" />
    </head>
    <body class="focused-form">
	<div class="container" id="registration-form">
		<img src="./imagens/logo/90logoNome.png" />
	    </a>
	    <div class="row">
		
		<div class="col-md-4 col-md-offset-4">		
		    <div class="panel panel-default">
			<div class="panel-heading">
			    <h2 style="height: auto;">Registre-se</h2>
			</div>
			<div class="panel-body">
			<form action="?categoria=login&acao=check" id="formLoko" class="form-horizontal">
				<div class="form-group">
				    <label for="txtNomeCompleto" class="col-xs-4 control-label">Nome</label>
				    <div class="col-xs-8">
					<input type="text" class="form-control" name="nm_usu" id="txtNomeCompleto" placeholder="Nome Completo" required="" />
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

			    
			    <div class="panel-footer">
				<div class="clearfix">
				    <button type="submit" id="btnForm" class="btn btn-primary pull-right">Registrar</button>
				</div>
			    </div>
				</form>
			</div>
			
		    </div>
			
		</div>
		
	    </div>
	</div>
	<script src="./js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <!-- Load jQueryUI -->
        <script src="./js/jqueryui-1.9.2.min.js"></script>
        <!-- Load Bootstrap -->
        <script src="./js/bootstrap.js"></script>

        <!--Controlador dos Menus de Navegação-->
        <script src="./js/navegacao.js" type="text/javascript"></script>
        <!--Controlador da Rolagem de Texto-->
        <script src="./js/marquee.js"></script>
        <!--NavTabs-->
        <script src="./js/navTabs.js" type="text/javascript"></script>
        <!--Formulários-->
        <script src="./js/formularios.js" type="text/javascript"></script>
        <!--Listagens-->
        <script src="./js/listagens.js" type="text/javascript"></script>
        <!--Seção dos Inputs-->
        <!--MinMax - Tem que vir antes do incluir -->
        <script src="./js/input/minMax.js"></script>
        <!--CheckBox-->
        <script src="./js/input/checkBox.js"></script>
        <!--Imagem-->
        <script src="./js/input/imagem.js"></script>
        <!--Incluir-->
        <script src="./js/teste.js"></script>
        <!--TextoArea-->
        <script src="./js/input/textoArea.js" type="text/javascript"></script>
        <!--/Seção dos Inputs-->     
        <!--Text Scroll Plugin-->
        <script src="./plugins/textScrollingMarquee/jquery.marquee.js"></script>
        <script src="./plugins/textScrollingMarquee/jquery.marquee.js"></script>
        <!--TextArea autosize-->
        <script src="./plugins/autosize-TextArea/dist/autosize.js"></script>
        <!--IChek-->
        <script src="./plugins/icheck-1.x/icheck.js"></script>
        <!--IonRangeSlider-->
        <script src="./plugins/ion.rangeSlider-2.2.0/js/ion-rangeSlider/ion.rangeSlider.js" type="text/javascript"></script>
        <!--Selector2-->
        <script src="./plugins/select2/js/select2.js"></script>
        <!-- End loading site level scripts -->
        <!-- Load page level scripts-->
        <!-- End loading page level scripts-->
	<!-- End loading page level scripts-->
    </body>
</html>
