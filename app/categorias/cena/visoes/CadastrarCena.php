<!--CORPO DE VERDADE-->
<div class="page-content col-md-9">
    <div class="page-heading mb0">
        <div class="marquee"><?= $this->getDicas() ?></div>
        <h1>Cena</h1>
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
            <li><a data-toggle="tab" href="#abaLocalizacoes">Locais</a></li>
            <li><a data-toggle="tab" href="#abaPersonagensObjetos">Personagens e Objetos</a></li>
            <li><a data-toggle="tab" href="#abaDesenvolvimento">Desenvolvimento</a></li>
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
                                                <img src="imagens/100no_photo.png" class="img-circle imgClicavel col-sm-offset-5" />
                                                <a class="imgReset col-sm-offset-5"><i class="fa fa-ban"></i></a>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                                <input type="text" class="form-control" id="txtAttObg" placeholder="Digite aqui o nome da sua Cena" />
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
                                        <label for="txtAttObg" class="col-sm-2 control-label">Data</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtAttObg" placeholder="Digite a data de quando essa cena ocorreu aqui" />
                                                <!--Não tem detalhes-->
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
                                        <label for="txtArea" class="col-sm-2 control-label">Descrição</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtArea" class="form-control" placeholder="Digite a descrição da Cena aqui" title="Digite uma breve descrição aqui"></textarea>
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

            <!--ABA LOCALIZAÇÕES-->
            <div class="tab-pane" id="abaLocalizacoes">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowLocalizacoes">
                            <form class="form-horizontal row-border">

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
                                                    <textarea id="txtArea" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
                                                </div>
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

            <!--ABA PERSONAGENS E OBJETOS-->
            <div class="tab-pane" id="abaPersonagensObjetos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowPersonagensObjetos">
                            <form class="form-horizontal row-border">
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
                                                    <textarea id="txtArea" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                        <label for="sel1" class="col-sm-2 control-label">Objetos</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="sel1Cenas">
                                                    <option selected="selected">Objeto1</option>
                                                    <option >Objeto2</option>
                                                    <option >Objeto3</option>
                                                </select>
                                            </div>
                                            <!--Não tem detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtArea" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
                                                </div>
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

            <!--ABA DESENVOLVIMENTO-->
            <div class="tab-pane" id="abaDesenvolvimento">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowDesenvolvimento">
                            <form class="form-horizontal row-border">

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtArea" class="col-sm-2 control-label">Desenvolvimento</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtArea" class="form-control" placeholder="Digite o desenvolvimento da cena aqui" title="Digite seu texto aqui"></textarea>
                                            </div>
                                            <!--Não tem detalhes-->
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

        </div>
    </div>
</div>
<!-- CORPO DE VERDADE/ -->
