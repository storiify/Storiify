<html>
    <head>
        <meta charset="utf-8" />

        <title>Storiify - Torne suas histórias reais</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-touch-fullscreen" content="yes" />
        <meta name="description" content="Aplicativo web que permite ao usuário armazenar suas histórias de maneira estruturada" />
        <meta name="author" content="Grupo 3 PI" />

        <!-- BootStrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <!-- Estilo dos Menus de Navegação -->
        <link href="css/navegacao.css" rel="stylesheet" type="text/css"/>
        <!-- CSS Principal, com todos os estilos -->
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
        <!--CSS para editarmos-->
        <link href="css/geral.css" rel="stylesheet" />
        <!--ICheck-->
        <link href="plugins/icheck-1.x/skins/flat/_all.css" rel="stylesheet" />
        <!--IONRangeSlider-->
        <link href="plugins/Ion.RangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
        <link href="plugins/Ion.RangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
        <!--Select2-->
        <link href="plugins/select2/css/select2.css" rel="stylesheet" />

    </head>
    <body>
        <!--CABEÇALHO ORIGINAL-->
        <nav class="navbar navbar-fixed-top clearfix navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                                        <a class="menu-esquerdo-toggle" title="Abrir Menu Lateral">Link</a>

                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class=""><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="menu-esquerdo">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>

        <!--MENU LATERAL ESQUERDO/-->
        <!--CORPO DA PÁGINA-->
        <div class="static-content-wrapper">
            <div class="static-content">

                <!-- CONTEUDO COM DICAS,PAGINA DA CATEGORIA E INSTANCIAS -->
                <div class="conteudo">
                    <?php
                    if (isset($file_dir) && $file_dir != 'none') {
                        include_once $file_dir;
                    }
                    ?>
                </div>
                <!-- CONTEUDO COM DICAS,PAGINA DA CATEGORIA E INSTANCIAS/ -->

            </div>
            <!--RODAPÉ-->
            <footer role="contentinfo">
                <div class="clearfix">
                    <ul class="list-unstyled list-inline pull-left">
                        <li>
                            <h6 style="margin: 0;">© 2018 Storiify</h6>
                        </li>
                    </ul>
                    <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
                </div>
            </footer>
        </div>
        <!--CORPO DA PÁGINA/-->
    </div>
</div>

<!-- Load site level scripts -->
<!-- Load jQuery -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Load jQueryUI -->
<script src="js/jqueryui-1.9.2.min.js"></script>
<!-- Load Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!--Controlador dos Menus de Navegação-->
<script src="js/navegacao.js" type="text/javascript"></script>
<!--Controlador da Rolagem de Texto-->
<script src="js/marquee.js"></script>

<!--Seção dos Inputs-->
<!--MinMax - Tem que vir antes do incluir -->
<script src="js/input/minMax.js"></script>
<!--CheckBox-->
<script src="js/input/checkBox.js"></script>
<!--Imagem-->
<script src="js/input/imagem.js"></script>
<!--Incluir-->
<script src="js/input/incluir.js"></script>
<script src="js/input/incluirTeste.js"></script>
<!--/Seção dos Inputs-->
<!--Text Scroll Plugin-->
<script src="plugins/textScrollingMarquee/jquery.marquee.js"></script>
<!--TextArea autosize-->
<script src="plugins/autosize-TextArea/dist/autosize.js"></script>
<!--IChek-->
<script src="plugins/icheck-1.x/icheck.js"></script>
<!--IonRangeSlider-->
<script src="plugins/Ion.RangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
<!--Verificar o que tem dentro (faz o toggle do menu lateral)-->
<script src="js/application.js"></script>
<!--Selector2-->
<script src="plugins/select2/js/select2.js"></script>
<!-- End loading site level scripts -->
<!-- Load page level scripts-->
<!-- End loading page level scripts-->
</body>
</html>