<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas(); ?></div>
</div>

<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?php echo "Nome da História Selecionada" ?></h1>
    </div>    
</div>

<div class="conteudo">
    
        <!--BOTÃO DE CRIAR NOVA INSTÂNCIA-->
    <div class='pos-cabecalho'>
        <p class="texto-lista-categorias">Escolha qual Categoria da sua História você quer editar</p>
    </div>
    
    <div class="lista-categorias">
        <a class="btn btn-azul btn-categoria"><i class='fa fa-book col-md-2'></i><br><span>História</span></a>
        <a class="btn btn-azul btn-categoria"><i class='fa fa-users col-md-2'></i><br><span>Personagens</span></a>
        <a class="btn btn-azul btn-categoria"><i class="fa fa-globe col-md-2"></i><br><span>Localizações</span></a>
        <a class="btn btn-azul btn-categoria"><i class="fa fa-comments-o col-md-2"></i><br><span>Cenas</span></a>
    </div>
</div>
