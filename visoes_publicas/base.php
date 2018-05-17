<?php
//Aqui indica qual história o usuário está editando no momento arranjar um lugar melhor depois
//$historiaSelecionada = (object) Historia::SelecionarUm(2);
?>
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
    <body>

        <!--CABEÇALHO DA PÁGINA-->
        <?php
        require_once "visoes_publicas/navegacao/menuTopo.php";
        require_once "visoes_publicas/navegacao/menuLateralEsquerdo.php";
        ?>
        <!-- FINAL - CABEÇALHO DA PÁGINA-->

        <!-- CONTEÚDO COM DICAS, PÁGINA DA CATEGORIA E INSTÂNCIAS -->
        <?php
        if (isset($file_dir) && $file_dir != 'none') {
            include_once $file_dir;
        }
        ?>
        <!-- FINAL - CONTEÚDO COM DICAS, PÁGINA DA CATEGORIA E INSTÂNCIAS -->

        <!-- RODAPÉ DA PÁGINA-->
        <?php
        require_once "visoes_publicas/navegacao/rodape.php";
        ?>
        <!-- FINAL - RODAPÉ DA PÁGINA-->
        <!--FINAL - CORPO DA PÁGINA-->

        <!-- Load site level scripts -->

        <!-- Load jQuery -->
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
        <script src="./js/input/incluir.js"></script>
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
    </body>
</html>