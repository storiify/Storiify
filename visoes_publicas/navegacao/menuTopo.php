<?php
$historiaSelecionada = (array)sessao()->getHistoriaSelecionada();
?>
<nav class="navbar navbar-expand-lg">

    <div class="navbar-collapse collapse w-100 dual-collapse2 order-1 order-md-0">
        <button type="button" class="btn btn-azul menu-esquerdo-toggle"
                <?= empty($historiaSelecionada)? "disabled" : ""?>>
            <i class="fa fa-reorder"></i>
        </button>
    </div>
    
    <div class="navbar-collapse collapse logo-nome-topo dual-collapse2 order-1 order-md-0">
        <img src="./imagens/logo/180nomeInvertido.png" alt="Logo Storiify" title="Logo Storiify"/>
    </div>
    
    <div class="mx-auto my-2 order-0 order-md-1 position-relative">
        <a class="mx-auto" href="?categoria=historia&acao=listar">
            <div class="fundo-logo"></div>
            <img src="./imagens/logo/540logoFundo.png" class="rounded-circle logo-topo" alt="Logo Storiify" title="Logo Storiify"/>
        </a>
    </div>

    <div class="navbar-collapse collapse w-100 dual-collapse2 order-2 order-md-2">
        <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
                <div class="container">
                    <!--Botão de Usuário-->
                    <div class="dropdown">
                        <button type="button" class="btn btn-azul dropdown-toggle" data-toggle="dropdown">
                            <img src="./imagens/sem-foto.png" class="rounded-circle avatar-usuario" />
                            <?= $controlador->userData['nome'] ?>
                        </button>
                        <div class="dropdown-menu" style="left: calc(100% - 187px);">
                            <a class="dropdown-item" href="#">Editar Perfil</a>
                            <a class="dropdown-item" href="#">Configurações da Conta</a>
                            <a class="dropdown-item" href="#">Ajuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="?categoria=login&acao=deslogar">Sair</a>
                        </div>
                    </div>
                    <!--Fim Botão de Usuário-->
                </div>
            </li>
        </ul>
    </div>

</nav>
