<?php
//    if(SESSION['idUsuarioLogado'] == 0){
//        Mostrar barra superior perguntando se ele já é registrado
//        com link para logar ou registrar
//    }
?>
<nav class="navbar navbar-expand-lg">

    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <button type="button" class="btn btn-azul menu-esquerdo-toggle">
            <i class="fa fa-reorder"></i>
        </button>
    </div>
    
    <div class="navbar-collapse collapse logo-nome-topo dual-collapse2 order-1 order-md-0">
        <img src="../../imagens/logo/180nomeInvertido.png" alt="Logo Storify" title="Logo Storify"/>
    </div>
    
    <div class="mx-auto my-2 order-0 order-md-1 position-relative">
        <a class="mx-auto" href="">
            <div class="fundo-logo"></div>
            <img src="../../imagens/logo/540logoFundo.png" class="rounded-circle logo-topo" alt="Logo Storify" title="Logo Storify"/>
        </a>
    </div>

    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
                <div class="container">
                    <!--Botão de Usuário-->
                    <div class="dropdown">
                        <button type="button" class="btn btn-azul dropdown-toggle" data-toggle="dropdown">
                            <img src="../../imagens/avatares/avatar_07.png" class="rounded-circle avatar-usuario" />
                            Nome do Usuário
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Editar Perfil</a>
                            <a class="dropdown-item" href="#">Configurações da Conta</a>
                            <a class="dropdown-item" href="#">Ajuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">Sair</a>
                        </div>
                    </div>
                    <!--Fim Botão de Usuário-->
                </div>
            </li>
        </ul>
    </div>

</nav>

