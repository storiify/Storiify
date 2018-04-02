<!--CORPO DE VERDADE-->
<div class="page-content col-md-9">
    <div class="page-heading mb0">
        <div class="marquee"><?=$this->getDicas()?></div>
        <h1>Localização</h1>
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
                                
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtNome" class="col-sm-2 control-label">Nome</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtNome" placeholder="Digite o nome da Localização aqui" />
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
                                        <label for="txtDescricao" class="col-sm-2 control-label">Descrição</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtDescricao" class="form-control" placeholder="Digite a descrição da Localização aqui"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="button-icon has-bg inputToggle"><i class="fa fa-minus"></i></span>
                                        <span class="button-icon has-bg inputDelet"><i class="fa fa-times"></i></span>
                                    </div>
                                </div>
                                
                                <input type='file' id="imgUploader" style="display:none;" />
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label" for="imgImagem">Imagem</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <img src="imagens/100no_photo.png" class="img-circle imgClicavel col-sm-offset-5" />
                                                <a class="imgReset col-sm-offset-5"><i class="fa fa-ban"></i></a>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtDetalheImagem" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                        <label for="txtHistoria" class="col-sm-2 control-label">História</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtHistoria" class="form-control" placeholder="Digite a história da Localização aqui"></textarea>
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
                                        <label for="relPersonagens" class="col-sm-2 control-label">Personagens mais conhecidos</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple id="relPersonagens">
                                                    <option selected="selected">Exemplo Personagem</option>
                                                    <option >Personagem 2</option>
                                                    <option >Personagem 3</option>
                                                </select>
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
                                        <label for="txtMarcoGeo" class="col-sm-2 control-label">Marcos Geográficos</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtMarcoGeo" class="form-control" placeholder="Digite os marcos geográficos da Localização aqui"></textarea>
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
                                        <label for="relMundo" class="col-sm-2 control-label">Mundo</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" id="relMundo">
                                                    <option selected="selected">Exemplo Mundo</option>
                                                    <option >Mundo 2</option>
                                                    <option >Mundo 3</option>
                                                </select>
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
                                        <label for="relLocalizacoes" class="col-sm-2 control-label">Localizações</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple id="relLocalizacoes">
                                                    <option selected="selected">Exemplo Localização</option>
                                                    <option >Localização 2</option>
                                                    <option >Localização 3</option>
                                                </select>
                                            </div>
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
            <!--ABA GERAL/-->

            <!--ABA BIOLOGIA-->
            <div class="tab-pane" id="abaBiologia">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowBiologia">
                            <form class="form-horizontal row-border">

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label">Raças</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-raca">
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
                                        <label class="col-sm-2 control-label">Criaturas / Animais</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-criatura">
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
                                            <div class="col-sm-12 inputIncluir icl-flora">
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
                                            <div class="col-sm-12 inputIncluir icl-recurso">
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
                                            <div class="col-sm-12 inputIncluir icl-bioma">
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
            <!--ABA BIOLOGIA/-->
        </div>
    </div>
</div>
<!-- CORPO DE VERDADE/ -->