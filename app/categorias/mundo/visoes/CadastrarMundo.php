<!--CORPO DE VERDADE-->
<div class="page-content col-md-9">
    <div class="page-heading mb0">
        <div class="marquee"><?= $this->getDicas() ?></div>
        <h1>Mundos</h1>
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
            <li><a data-toggle="tab" href="#abaBiologia">Biologia</a></li>
            <li><a data-toggle="tab" href="#abaCultura">Cultura</a></li>
            <li><a data-toggle="tab" href="#abaEconomia">Economia</a></li>
            <li><a data-toggle="tab" href="#abaPolitica">Política</a></li>
            <li><a data-toggle="tab" href="#abaTecnologia">Tecnologia</a></li>
            <li><a data-toggle="tab" href="#abaMagia">Magia</a></li>
            <li><a data-toggle="tab" href="#abaInspiracoes">Inspirações</a></li>
        </ul>
    </div>

    <div class="container-fluid">
        <div class="tab-content">
            <!--ABA GERAL-->
            <div class="tab-pane active" id="abaGeral">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowGeral">
                            <form class="form-horizontal row-border">
                                <!--CONTEÚDO DA ABA GERAL-->

                                <input type='file' id="imgUploader" style="display:none;" />
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label" for="imgImagem">Imagem</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <img src="imagens/no_photo.png" class="img-circle imgClicavel" style="display:block;margin: 0 auto; width:100px;" />
                                                <a class="imgReset"><i class="fa fa-ban"></i></a>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtAttObg" class="col-sm-2 control-label">Nome</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtAttObg" placeholder="Digite aqui o nome do seu Mundo" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" placeholder="Digite aqui o porquê/peculiaridades desse nome" title="Campo de texto para detalhes"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtArea" class="col-sm-2 control-label">Visão Geral</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtArea" placeholder="Campo de texto autoexpansível" title="Digite seu texto aqui"></textarea>
                                            </div>
                                            <!--Não tem detalhes-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtArea" class="col-sm-2 control-label">História</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtArea" placeholder="Campo de texto autoexpansível" title="Digite seu texto aqui"></textarea>
                                            </div>
                                            <!--Não tem detalhes-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtArea" class="col-sm-2 control-label">Era</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtArea" placeholder="Campo de texto autoexpansível" title="Digite seu texto aqui"></textarea>
                                            </div>
                                            <!--Não tem detalhes-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtArea" class="col-sm-2 control-label">Arredores</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtArea" placeholder="Campo de texto autoexpansível" title="Digite seu texto aqui"></textarea>
                                            </div>
                                            <!--Não tem detalhes-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="minMaxInput1" class="col-sm-2 control-label">Hostilidade</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <div id="minMaxInput1" class="minMaxInput mmHosti"></div>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="sel1" class="col-sm-2 control-label">Localizações</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="sel1Localizacoes">
                                                    <option >Localização1</option>
                                                    <option selected="selected">Localização2</option>
                                                    <option >Localização3</option>
                                                </select>
                                            </div>
                                            <!--Não tem detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="sel1" class="col-sm-2 control-label">Cenas</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="sel1Cenas">
                                                    <option selected="selected">Cena1</option>
                                                    <option >Cena2</option>
                                                    <option >Cena3</option>
                                                </select>
                                            </div>
                                            <!--Não tem detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="sel1" class="col-sm-2 control-label">Personagens</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="sellPersonagens">
                                                    <option >Personagem1</option>
                                                    <option >Personagem2</option>
                                                    <option selected="selected">Personagem3</option>
                                                </select>
                                            </div>
                                            <!--Não tem detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="checkbox" class="col-sm-2 control-label">Visibilidade</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
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
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA BIOLOGIA-->
            <div class="tab-pane" id="abaBiologia">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label">Raças</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="inputIncluir icl-raca">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirRemover" type="button">Remover</button>
                                                    </span>
                                                    <input value="0" class="form-control incluirStatus" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirAdicionar" type="button">Adicionar</button>
                                                    </span>
                                                </div>
                                                <div class="incluirWrapper">
                                                    <!--Aqui entrarão as instâncias-->
                                                </div>
                                            </div>
                                            <!--/Parte que Importa-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label">Criaturas/ Animais</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="inputIncluir icl-criatura">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirRemover" type="button">Remover</button>
                                                    </span>
                                                    <input value="0" class="form-control incluirStatus" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirAdicionar" type="button">Adicionar</button>
                                                    </span>
                                                </div>
                                                <div class="incluirWrapper">
                                                    <!--Aqui entrarão as instâncias-->
                                                </div>
                                            </div>
                                            <!--/Parte que Importa-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label">Flora</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="inputIncluir icl-flora">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirRemover" type="button">Remover</button>
                                                    </span>
                                                    <input value="0" class="form-control incluirStatus" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirAdicionar" type="button">Adicionar</button>
                                                    </span>
                                                </div>
                                                <div class="incluirWrapper">
                                                    <!--Aqui entrarão as instâncias-->
                                                </div>
                                            </div>
                                            <!--/Parte que Importa-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label">Recursos Naturais</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="inputIncluir icl-recurso">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirRemover" type="button">Remover</button>
                                                    </span>
                                                    <input value="0" class="form-control incluirStatus" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirAdicionar" type="button">Adicionar</button>
                                                    </span>
                                                </div>
                                                <div class="incluirWrapper">
                                                    <!--Aqui entrarão as instâncias-->
                                                </div>
                                            </div>
                                            <!--/Parte que Importa-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label">Biomas</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="inputIncluir icl-bioma">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirRemover" type="button">Remover</button>
                                                    </span>
                                                    <input value="0" class="form-control incluirStatus" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default incluirAdicionar" type="button">Adicionar</button>
                                                    </span>
                                                </div>
                                                <div class="incluirWrapper">
                                                    <!--Aqui entrarão as instâncias-->
                                                </div>
                                            </div>
                                            <!--/Parte que Importa-->
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA CULTURA-->
            <div class="tab-pane" id="abaCultura">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">



                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA ECONOMIA-->
            <div class="tab-pane" id="abaEconomia">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">



                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA POLÍTICA-->
            <div class="tab-pane" id="abaPolitica">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">



                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA TECNOLOGIA-->
            <div class="tab-pane" id="abaTecnologia">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">



                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA MAGIA-->
            <div class="tab-pane" id="abaMagia">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">



                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--ABA INSPIRAÇÕES-->
            <div class="tab-pane" id="abaInspiracoes">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">



                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- CORPO DE VERDADE/ -->
