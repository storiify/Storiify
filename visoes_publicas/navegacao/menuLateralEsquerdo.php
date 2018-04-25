<?php
//$historias = Historia::SelecionarTodosCustomizado(array("pk_hist", "im_ppl", "tit_hist", "stit_hist"))
?>

<div class='container'>

    <ul class='navbar-nav mr-auto text-center list-group menu-esquerdo'>

        <li class='nav-item cabecalho-menu-lateral row' title='Clique aqui para escolher qual história deseja editar'>

            <?php /*echo ($historiaSelecionada->im_ppl!=NULL?
                    "<div class='col-md-2'>
                        <div class='historia-avatar' style='background-image:url($historiaSelecionada->im_ppl'></div>
                    </div>" : "<div class='col-md-1'>&nbsp</div>" )*/?>

            <div class='col-md-10'>
                <span class='bem-vindo-texto'>Bem-vindo à </span>
                <select class='nome-historia' id='selecao-nome-historia'>
                    <?php
		    /*
                    foreach ($historias as $historia){
                        $nome = Historia::GerarNome($historia);
                        $selected = ($historia->pk_hist == $historiaSelecionada->pk_hist) ? "selected" : "";

                        echo "<option value='$historia->pk_hist'"
                        . "$selected>" . truncar($nome, 25, "...") . "</option>";
                    }*/
                    ?>
                </select>
            </div>
        </li>

        <li class='nav-item separador-menu-lateral'>
            <strong><span>Explore suas Categorias!</span></strong>
        </li>

        <li class='nav-item list-group-item'>
            <i class='fa fa-book col-md-2'></i>
            <span class='col-md-10'>História</span>
            <ul class='navbar-nav mr-auto text-center list-group'>
		<li>
                    <a href="?categoria=historia&acao=cadastrar" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Criar</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="<?php //echo "?categoria=historia&acao=editar&parametros=$historiaSelecionada->pk_hist";?>" 
                       class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Editar</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Configurações</div>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class='nav-item list-group-item'>
            <i class='fa fa-users col-md-2'></i>
            <span class='col-md-10'>Personagem</span>
            <ul class='navbar-nav mr-auto text-center list-group'>
                <li>
                    <a href="?categoria=personagem&acao=cadastrar" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Criar Personagem</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Listar Personagens</div>
                            <div class="col-md-1"><span class="insignia">&nbsp;11&nbsp;</span></div>                        
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item list-group-item">
            <i class="fa fa-globe col-md-2"></i>
            <span class="col-md-10">Mundo</span>
            <ul class="navbar-nav mr-auto text-center list-group">
                <li>
                    <a href="?categoria=mundo&acao=criar" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Criar Mundo</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="?categoria=mundo&acao=listar" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Listar Mundo</div>
                            <div class="col-md-1"><span class="insignia">&nbsp;02&nbsp;</span></div>                        
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item list-group-item">
            <i class="fa fa-bank col-md-2"></i>
            <span class="col-md-10">Localização</span>
            <ul class="navbar-nav mr-auto text-center list-group">
                <li>
                    <a href="?categoria=localizacao&acao=cadastrar" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Criar Localização</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Listar Localizações</div>
                            <div class="col-md-1"><span class="insignia">&nbsp;08&nbsp;</span></div>                        
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item list-group-item">
            <i class="fa fa-comments-o col-md-2"></i>
            <span class="col-md-10">Cena</span>
            <ul class="navbar-nav mr-auto text-center list-group">
                <li>
                    <a href="?categoria=cena&acao=cadastrar" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Criar Cena</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Listar Cenas</div>
                            <div class="col-md-1"><span class="insignia">&nbsp;22&nbsp;</span></div>                        
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item separador-menu-lateral">
            <strong><span>Conheça outras Histórias!</span></strong>
        </li>

        <li class="nav-item list-group-item">
            <i class="fa fa-warning col-md-2"></i>
            <span class="col-md-10">Em Breve</span>
        </li>

    </ul>
</div>
