<?php
$historiaSelecionada = new ModeloHistoria(array());
$historiaSelecionada = sessao()->getHistoriaSelecionada();
?>
<nav class="navbar">

    <button type="button" class="btn btn-azul menu-esquerdo-toggle"
            <?= ($historiaSelecionada == null ? "disabled" : "") ?>>
        <i class="fa fa-reorder"></i>
    </button>

    <div class="logo-nome-topo">
        <img src="./imagens/logo/180nomeInvertido.png" alt="Logo Storiify" title="Logo Storiify"/>
    </div>

    <div class="position-relative">
        <a href="?categoria=historia&acao=listar">
            <div class="fundo-logo"></div>
            <img src="./imagens/logo/540logoFundo.png" 
                 class="rounded-circle logo-topo" alt="Logo Storiify" 
                 title="Clique aqui para listar todas as suas Histórias"/>
        </a>
    </div>

    <ul class="menu-usuario-topo">
        <li class="nav-item">
            <div class="container">
                <!--Botão de Usuário-->
                <div class="dropdown">
                    <button type="button" class="btn btn-azul dropdown-toggle btn-usuario" data-toggle="dropdown">
                        <div class='pull-left'>
                            <div class='avatar-usuario' style='background-image:url(<?= $controlador->userData['imagem']?>)'></div>
                        </div>
                        <!-- <img src="./imagens/sem-foto.png" class="rounded-circle avatar-usuario" /> -->
                        <span class='nome-usuario'><?= $controlador->userData['nome'] ?></span>
                    </button>
                    <div class="dropdown-menu" style="left: calc(100% - 187px);">
                        <a class="dropdown-item" href="?categoria=login&acao=editar">Editar Perfil</a>
                        <!--a class="dropdown-item" href="#">Configurações da Conta</a>
                        <a class="dropdown-item" href="#">Ajuda</a-->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?categoria=login&acao=deslogar">Sair</a>
                    </div>
                </div>
                <!--Fim Botão de Usuário-->
            </div>
        </li>
    </ul>

</nav>
