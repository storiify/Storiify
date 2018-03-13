
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

        <!-- Font Awesome -->
        <link href="font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <!-- CSS Principal, com todos os estilos -->
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
        <!--CSS para editarmos-->
        <link href="css/geral.css" rel="stylesheet" />
        <!--Nestable Lists-->
        <link href="plugins/form-nestable/jquery.nestable.css" type="text/css" rel="stylesheet" />
        <!--ICheck-->
        <link href="plugins/icheck-1.x/skins/flat/_all.css" rel="stylesheet" />
    </head>
    <body>
        <!--CABEÇALHO ORIGINAL-->
        <header id="topnav" class="navbar navbar-fixed-top clearfix navbar-inverse" role="banner">
            <a id="leftmenu-trigger" class="" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
            <ul class="nav navbar-nav toolbar pull-right">
                <!--NOTIFICAÇÕES-->
                <li class="dropdown toolbar-icon-bg">
                    <a href="#" class="hasnotifications dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="icon-bg"><i class="fa fa-fw fa-bell"></i></span><span class="badge badge-alizarin">2</span></a>
                    <div class="dropdown-menu notifications arrow">
                        <div class="dd-header">
                            <span>Notifications</span>
                            <span><a href="#">Settings</a></span>
                        </div>

                        <ul class="scrollthis">
                            <!--CADA NOTIFICAÇÃO-->
                            <li class="">
                                <a href="#" class="notification-success">
                                    <div class="notification-icon"><i class="fa fa-check"></i></div>
                                    <div class="notification-content"><strong>Lorem ipsum</strong> dolor sit amet consectetur adipisicing elit!</div>
                                    <div class="notification-time">40m</div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#" class="notification-danger">
                                    <div class="notification-icon"><i class="fa fa-times fa-fw"></i></div>
                                    <div class="notification-content">Etiam porta sem malesuada</div>
                                    <div class="notification-time">5h</div>
                                </a>
                            </li>
                        </ul>
                        <div class="dd-footer">
                            <a href="#">View all notifications</a>
                        </div>
                    </div>
                </li>
                <!--NOTIFICAÇÕES/-->
                <!--MENSAGENS-->
                <li class="dropdown toolbar-icon-bg hidden-xs">
                    <a href="#" class="hasnotifications dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="icon-bg"><i class="fa fa-fw fa-envelope"></i></span><span class="badge badge-info">2</span></a>
                    <div class="dropdown-menu messages arrow">
                        <div class="dd-header">
                            <span>Messages</span>
                            <span><a href="#">Settings</a></span>
                        </div>

                        <ul class="scrollthis">
                            <!--CADA MENSAGEM INDIVIDUAL-->
                            <li class="">
                                <a href="#">
                                    <img class="msg-avatar" src="imagens/avatares/avatar_09.png" alt="avatar">
                                        <div class="msg-content">
                                            <span class="name">Steven Shipe</span>
                                            <span class="msg">Nonummy nibh epismod lorem ipsum</span>
                                        </div>
                                        <span class="msg-time">30s</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="msg-avatar" src="imagens/avatares/avatar_01.png" alt="avatar">
                                        <div class="msg-content">
                                            <span class="name">Roxann Hollingworth <i class="fa fa-paperclip attachment"></i></span>
                                            <span class="msg">Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                                        </div>
                                        <span class="msg-time">5m</span>
                                </a>
                            </li>
                        </ul>
                        <div class="dd-footer"><a href="#">View all messages</a></div>
                    </div>
                </li>
                <!--MENSAGENS/-->
                <!--BUSCA-->
                <li class="dropdown toolbar-icon-bg demo-search-hidden mr5">
                    <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown" data-original-title="" title="" aria-expanded="false"><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>

                    <div class="dropdown-menu arrow search dropdown-menu-form">
                        <div class="dd-header">
                            <span>Search</span>
                            <span><a href="#">Advanced search</a></span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">

                                <span class="input-group-btn">

                                    <a class="btn btn-primary" href="#">Search</a>
                                </span>
                        </div>
                    </div>
                </li>
                <!--BUSCA/-->
                <!--PROFILE-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                        <span class="hidden-xs">Alexander Smith</span>
                        <img class="img-circle" src="imagens/avatares/avatar_06.png" alt="Dangerfield">
                    </a>
                    <ul class="dropdown-menu userinfo">
                        <li><a href="#"><span class="pull-left">Edit Profile</span> <i class="pull-right fa fa-pencil"></i></a></li>
                        <li><a href="#"><span class="pull-left">Account Settings</span> <i class="pull-right fa fa-cogs"></i></a></li>
                        <li><a href="#"><span class="pull-left">Help</span> <i class="pull-right fa fa-question-circle"></i></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="pull-left">Sign Out</span> <i class="pull-right fa fa-sign-out"></i></a></li>
                    </ul>
                </li>
                <!--PROFILE/-->
            </ul>

        </header>
        <!--CABEÇALHO ORIGINAL/-->
        <div id="wrapper">
            <div id="layout-static">
                <!--MENU LATERAL ESQUERDO-->
                <div class="static-sidebar-wrapper sidebar-inverse">
                    <div class="static-sidebar" style="top: 50px;">
                        <div class="sidebar">

                            <div class="widget stay-on-collapse">
                                <div class="widget-body welcome-box tabular">
                                    <div class="tabular-row">
                                        <div class="tabular-cell welcome-avatar">
                                            <a href="#">
                                                <img src="imagens/imagem_historia.png" class="avatar" />
                                            </a>
                                        </div>
                                        <div class="tabular-cell welcome-options">
                                            <span class="welcome-text">Bem-vindo à </span>
                                            <a href="#" class="name">Título da História</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget stay-on-collapse" id="widget-sidebar">
                                <!--Título do Menu Lateral-->
                                <span class="widget-heading">Explore seus Tipos!</span>
                                <nav role="navigation" class="widget-body">
                                    <ul class="acc-menu">
                                        <!--Link Simples-->
                                        <li><a href="cadastrarHistoria.html"><i class="fa fa-book"></i><span>História</span><span class="badge badge-dark">1</span></a></li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-users"></i><span>Personagens</span><span class="badge badge-dark">6</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">Criar novo Personagem &nbsp&nbsp<span class="fa fa-plus"></span></a></li>
                                                <li><a href="listarPersonagens.html">Listar Personagens<span class="badge badge-dark">6</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-globe"></i><span>Mundos</span><span class="badge badge-dark">2</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="cadastrarMundo.html">Criar novo Mundo &nbsp&nbsp<span class="fa fa-plus"></span></a></li>
                                                <li><a href="javascript:;">Listar Mundos<span class="badge badge-dark">2</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-bank"></i><span>Localizações</span><span class="badge badge-dark">5</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">Criar nova Localização &nbsp&nbsp<span class="fa fa-plus"></span></a></li>
                                                <li><a href="javascript:;">Listar Localizações<span class="badge badge-dark">5</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-comments-o"></i><span>Cenas</span><span class="badge badge-dark">3</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">Criar nova Cena &nbsp&nbsp<span class="fa fa-plus"></span></a></li>
                                                <li><a href="javascript:;">Listar Cenas<span class="badge badge-dark">3</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;"><i class="fa fa-key"></i><span>Objetos</span><span class="badge badge-dark">4</span></a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">Criar novo Objeto &nbsp&nbsp<span class="fa fa-plus"></span></a></li>
                                                <li><a href="javascript:;">Listar Objetos<span class="badge badge-dark">4</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--MENU LATERAL ESQUERDO/-->
                <!--CORPO DA PÁGINA-->
                <div class="static-content-wrapper">
                    <div class="static-content">
                        
                        <!-- CONTEUDO COM DICAS,PAGINA DA CATEGORIA E INSTANCIAS -->
                        <div class="conteudo">
                            <? 
                            if(isset($file_dir) && $file_dir!='none'){
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
        <!--Javascript para editarmos-->
        <script src="js/marquee.js"></script>
        <!--Listas aninhadas-->
        <script src="plugins/form-nestable/jquery.nestable.min.js"></script>
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
        <!-- End loading site level scripts -->

        <!-- Load page level scripts-->
        <!-- End loading page level scripts-->
    </body>
</html>