<?php
$historias = sessao()->getHistoriasData();
?>

<div class='container'>
    <ul class='navbar-nav mr-auto text-center list-group menu-esquerdo'>
        <li class='nav-item cabecalho-menu-lateral row'>
	    <div class="row">
		<div class='col-md-2'>
		    <div class='historia-avatar' style=""></div>
		</div>
		<div class='col-md-10'>
		    <span class='bem-vindo-texto'>Bem-vindo </span><br/>
		    <select class='nome-historia' id='selecao-nome-historia' title='Clique aqui para escolher qual história deseja editar'>
			<option value="">Suas Histórias</option>
			<?php
			foreach ($historias as $historia){
			    $historia = (object) $historia;
			    $nome = $historia->tit_hist;
			    $selected = ($historia->pk_hist == $historiaSelecionada->pk_hist) ? "selected" : "";

			    echo "<option value='$historia->pk_hist'"
			    . "$selected>" . truncar($nome, 25, "...") . "</option>";
			}
			?>
		    </select>
		</div>
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
                    <a href="?categoria=historia&acao=listar" class="nav-item list-group-item lista-clicavel">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8 acao-categoria">Listagem</div>
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
                    <a href="?categoria=personagem&acao=listar" class="nav-item list-group-item lista-clicavel">
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
