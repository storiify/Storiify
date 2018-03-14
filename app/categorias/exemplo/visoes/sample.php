<!--CORPO DE VERDADE-->
<div class="page-content col-md-9">
    <div class="page-heading mb0">
        <div class="marquee"><?=$this->getDicas()?></div>
        <h1>História</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
            </div>
        </div>
    </div>
    <div class="page-tabs">
        <ul class="nav nav-tabs">
            <li class="dropdown pull-right tabdrop hide">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu"></ul>
            </li>
            <!--ABAS-->
            <li class="active"><a data-toggle="tab" href="#abaGeral">Geral</a></li>
            <li><a data-toggle="tab" href="#aba1">Aba 1</a></li>
            <li><a data-toggle="tab" href="#aba2">Aba 2</a></li>
        </ul>
    </div>

    <div class="container-fluid">
        <div class="tab-content">
            <!--ABA 1-->
            <div class="tab-pane active" id="aba1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowGeral">
                            <form class="form-horizontal row-border">

                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Imagem de Capa</label>
                                    <div class="col-sm-8">
                                        <div style="padding: 2% 50% 2% 50%;">
                                            <img src="imagens/imagem_historia.png" class="img-circle" style="margin: 0 0 10px 0" />
                                            <a href="#" class="btn btn-default">Upload Imagem</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtTitulo" class="col-sm-2 control-label">Título</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="txtTitulo" placeholder="Digite seu Título aqui" />
                                    </div>
                                    <div class="col-sm-2">
                                        <p class="help-block">Obrigatório!</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtSubTitulo" class="col-sm-2 control-label">Subtítulo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="txtSubTitulo" placeholder="Digite seu Subtítulo aqui" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtAutor" class="col-sm-2 control-label">Autor</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="txtAutor" placeholder="Digite seu Autor aqui" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtIlustrador" class="col-sm-2 control-label">Ilustrador</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="txtIlustrador" placeholder="Digite seu Ilustrador aqui" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="checkbox" class="col-sm-2 control-label">Quem pode visualizar essa instância?</label>
                                    <div class="col-sm-8">
                                        <div class="checkbox-inline">
                                            <input type="checkbox" id="ckbTodos" />
                                            <label for="ckbTodos">Todos</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <input type="checkbox" name="publicidade" id="ckbAmigos" class="cBoxClass" />
                                            <label for="ckbAmigos">Amigos</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <input type="checkbox" name="publicidade" id="ckbEquipes" class="cBoxClass" />
                                            <label for="ckbEquipes">Equipe</label>
                                        </div>
                                        <div class="checkbox-inline">
                                            <input type="checkbox" name="publicidade" id="ckbPublico" class="cBoxClass" />
                                            <label for="ckbPublico">Público</label>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA 2-->
            <div class="tab-pane" id="aba2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">

                                <div class="form-group">
                                    <label for="txtDescSentenca" class="col-sm-2 control-label">Descrição de uma sentença</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="txtDescSentenca" placeholder="Digite sua Descrição de uma sentença aqui" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtSinopse" class="col-sm-2 control-label">Sinopse</label>
                                    <div class="col-sm-8">
                                        <textarea id="txtSinopse" placeholder="Digite sua Sinopse aqui" title="Digite sua Sinopse aqui"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtResumo" class="col-sm-2 control-label">Resumo</label>
                                    <div class="col-sm-8">
                                        <textarea id="txtResumo" placeholder="Digite seu Resumo aqui" title="Digite seu Resumo aqui"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="relMundosContidos" class="col-sm-2 control-label">Mundos Contidos</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="relMundosContidos" placeholder="" title="Relacione seus mundos aqui" />
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="tab-pane" id="tab4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h2>Info</h2>
                            </div>
                            <div class="panel-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CORPO DE VERDADE/ -->
<!--DRAG AND DROP RIGHT MENU-->
<div id="listaTudo" class="col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading" style="border-top-right-radius: 0px; border-top-left-radius: 0px;">
            <h2>Suas Instâncias</h2>
        </div>
        <div class="panel-body" style="border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin: 0px -5px 0 -0px;">

            <div class="dd" id="nestable_list_1">
                <ol class="dd-list">
                    <!--PERSONAGENS-->
                    <li class="dd-item" data-id="1">
                        <div class="dd-handle">Personagens</div>
                        <ol class="dd-list" style="">
                            <li class="dd-item" data-id="6">
                                <div class="dd-handle">Personagem 1</div>
                            </li>
                            <li class="dd-item" data-id="7">
                                <div class="dd-handle">Personagem 2</div>
                            </li>
                        </ol>
                    </li>
                    <!--MUNDOS-->
                    <li class="dd-item" data-id="2">
                        <div class="dd-handle">Mundos</div>
                    </li>
                    <!--LOCALIZAÇÕES-->
                    <li class="dd-item" data-id="3">
                        <div class="dd-handle">Localizações</div>
                    </li>
                    <!--CENAS-->
                    <li class="dd-item" data-id="4">
                        <div class="dd-handle">Cenas</div>
                    </li>
                    <!--OBJETOS-->
                    <li class="dd-item" data-id="5">
                        <div class="dd-handle">Objetos</div>
                    </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!--DRAG AND DROP RIGHT MENU/-->