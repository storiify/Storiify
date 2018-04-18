<!--CORPO DE VERDADE-->
<div class="page-content">
    <div class="page-heading mb0">
        <div class="marquee"><?= $this->getDicas() ?></div>
        <h1>Criar Personagem</h1>
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
            <li><a data-toggle="tab" href="#abaAparencia">Aparência</a></li>
            <li><a data-toggle="tab" href="#abaHabilidades">Habilidades</a></li>
            <li><a data-toggle="tab" href="#abaHistoria">História</a></li>
            <li><a data-toggle="tab" href="#abaRelacoes">Relações</a></li>
            <li><a data-toggle="tab" href="#abaPassado">Passado</a></li>
        </ul>
    </div>

    <div class="container-fluid">
        <div class="tab-content">
            <!--ABA 1-->
            <div class="tab-pane active" id="abaGeral">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 30px;">
                        <div class="tab-pane active" id="bordered-rowGeral">
                            <form class="form-horizontal row-border">
                                <input type='file' id="imgUploader" style="display:none;" />
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label class="col-sm-2 control-label" for="Imagem">Imagem</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <img src="imagens/100no_photo.png" class="img-circle imgClicavel col-sm-offset-5" />
                                                <a class="imgReset col-sm-offset-5"><i class="fa fa-ban"></i></a>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaImagem" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                        <label for="txtNome" class="col-sm-2 control-label">Nome</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtNome" placeholder="Digite o nome do personagem aqui" />
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
                                        <label for="txtSexo" class="col-sm-2 control-label">Sexo</label>
                                        <div class="inputCorpo col-sm-4">
                                            <div class="radio-inline">
                                                <input type="radio" name="sexoPersona" id="ckbSexoMasc" class="cBoxClass" required />
                                                <label for="ckbSexoMasc">Masculino</label>
                                            </div>
                                            <div class="radio-inline">
                                                <input type="radio" name="sexoPersona" id="ckbSexoFem" class="cBoxClass" />
                                                <label for="ckbSexoFem">Feminino</label>
                                            </div>    
                                        </div>
                                        <div class="inputCorpo col-sm-6">
                                            <label for="txtData" class="col-sm-4 control-label text-right">Data de Nascimento</label>
                                            <div class="inputCorpo col-sm-8 pull-right">
                                                <input type="date" class="form-control" id="inputData" />
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
                                        <label for="relacMundo" class="col-sm-2 control-label">Mundo</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="relacMundo">
                                                    <option selected="selected">Terra do Nunca</option>
                                                    <option>Nárnia</option>
                                                    <option>Terra Média</option>
                                                    <option>Reino Tão Tão Distante</option>
                                                    <option selected="selected">Alagaësia</option>
                                                </select>
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
                                        <label for="relacLocal" class="col-sm-2 control-label">Localização Natal</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="relacLocal">
                                                    <option selected="selected">Ceilândia</option>
                                                    <option>Sobradinho</option>
                                                    <option>Cidade Ocidental</option>
                                                    <option>Planaltina</option>
                                                    <option selected="selected">Samambaia</option>
                                                </select>
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
                                        <label for="SelectRaca" class="col-sm-2 control-label">Raça</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" id="SelectRaca">
                                                    <option selected="selected">Humano</option>
                                                    <option>Orc</option>
                                                    <option>Anão</option>
                                                    <option>Morto-Vivo</option>
                                                    <option>Elfo Noturno</option>
                                                    <option>Tauren</option>
                                                    <option>Gnomo</option>
                                                    <option>Troll</option>
                                                    <option>Draenei</option>
                                                    <option>Elfo Sangrento</option>
                                                    <option>Worgen</option>
                                                    <option>Goblin</option>
                                                    <option>Pandaren</option>
                                                </select>
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
                                        <label class="col-sm-2 control-label">Classe</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-classe">
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
                                        <label class="col-sm-2 control-label">Profissão</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-profissao">
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

            <!--ABA 2-->
            <div class="tab-pane" id="abaAparencia">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
                            <form class="form-horizontal row-border">
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtDescBasica" class="col-sm-2 control-label">Descrição básica</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <textarea id="txtDescBasica" class="form-control" placeholder="Digite aqui a descrição básica do personagem" title="Digite aqui a descrição básica do personagem"></textarea>
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
                                        <label for="minMaxAltura" class="col-sm-2 control-label">Altura</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <div id="minMaxAltura" class="minMaxInput mmAltura"></div>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                        <label for="minMaxPeso" class="col-sm-2 control-label">Peso</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <div id="minMaxPeso" class="minMaxInput mmPeso"></div>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaPeso" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                        <label for="minMaxPorte" class="col-sm-2 control-label">Porte Físico</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <div id="minMaxPorte" class="minMaxInput mmPorte"></div>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaPorte" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                        <label for="txtPele" class="col-sm-2 control-label">Tipo de Pele</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtPele" placeholder="Digite aqui o tipo de pele do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaPele" class="form-control" placeholder="Digite aqui a descrição da Pele" title="Digite aqui a descrição da Pele"></textarea>
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
                                        <label for="txtCabelo" class="col-sm-2 control-label">Cabelo</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtCabelo" placeholder="Digite aqui o tipo de cabelo do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaCabelo" class="form-control" placeholder="Digite aqui a descrição do cabelo" title="Digite aqui a descrição do cabelo"></textarea>
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
                                        <label for="txtVestimenta" class="col-sm-2 control-label">Vestimentas</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtVestimenta" placeholder="Digite aqui o tipo de vestimenta do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaVestimenta" class="form-control" placeholder="Digite aqui a descrição das vestimentas" title="Digite aqui a descrição das vestimentas."></textarea>
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
                                        <label for="txtAcessorios" class="col-sm-2 control-label">Acessórios</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtAcessorios" placeholder="Digite aqui o tipo de acessórios do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaAcessorio" class="form-control" placeholder="Digite aqui a descrição dos acessórios do personagem" title="Digite aqui a descrição dos acessórios do personagem"></textarea>
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
                                        <label class="col-sm-2 control-label">Objetos</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-objetos">
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
            <!--ABA 3-->
            <div class="tab-pane" id="abaHabilidades">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowComp+">
                            <form class="form-horizontal row-border">
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtComp+" class="col-sm-2 control-label">Competências Positivas</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtComp+" placeholder="Digite aqui as competências positivas do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaComp+" class="form-control" placeholder="Digite aqui a descrição das competências positivas do personagem" title="Digite aqui a descrição das competências positivas do personagem"></textarea>
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
                                        <label for="txtComp-" class="col-sm-2 control-label">Competências Negativas</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtComp-" placeholder="Digite aqui as competências negativas do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaComp-" class="form-control" placeholder="Digite aqui a descrição das competências negativas do personagem" title="Digite aqui a descrição das competências negativas do personagem"></textarea>
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
                                        <label for="minMaxAlinhamento" class="col-sm-2 control-label">Alinhamento</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <div id="minMaxAlinhamento" class="minMaxInput mmAlinhamento"></div>
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaAlinhamento" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"></textarea>
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
                                        <label class="col-sm-2 control-label">Habilidades Físicas</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-habFisica">
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
                                        <label class="col-sm-2 control-label">Habilidades Físicas</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-habMagica">
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

            <div class="tab-pane" id="abaHistoria">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-row">
                            <form class="form-horizontal row-border">
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtPapel" class="col-sm-2 control-label">Papel na História</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtPapel" placeholder="Digite aqui o papel na história do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaPapel" class="form-control"  placeholder="Digite aqui a descrição do papel na história do persongem" title="Digite aqui a descrição do papel na história do persongem"></textarea>
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
                                        <label for="txtEnvolvimento" class="col-sm-2 control-label">Envolvimento na História</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtEnvolvimento" placeholder="Digite aqui o envolvimento do personagem na história" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaEnvolvimento" class="form-control" placeholder="Digite aqui a descrição do envolvimento do personagem na história" title="Digite aqui a descrição do envolvimento do personagem na história"></textarea>
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
                                        <label for="txtMomentoMarcante" class="col-sm-2 control-label">Momento Marcante</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtMomentoMarcante" placeholder="Digite aqui o momento marcante do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaMomentoMarcante" class="form-control" placeholder="Digite aqui a descrição do momento marcante do personagem" title="Digite aqui a descrição do momento marcante do personagem"></textarea>
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
                                        <label for="txtObjetivoPrincipal" class="col-sm-2 control-label">Objetivo Principal</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtObjetivoPrincipal" placeholder="Digite aqui o principal objetivo do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaObjetivoPrincipal" class="form-control" placeholder="Digite aqui a descrição do principal objetivo do personagem na história" title="Digite aqui a descrição do principal objetivo do personagem na história"></textarea>
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
                                        <label class="col-sm-2 control-label">Objetivo(s) Paralelo(s)</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-objParalelos">
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
                                        <label for="txtIntroEnredo" class="col-sm-2 control-label">Introdução no Enredo</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtIntroEnredo" placeholder="Digite aqui a introdução do personagem no enredo" />
                                            </div>

                                            <div class="col-sm-12">
                                                <br>
                                                <div class="conteudoDetalhes  col-sm-10 col-md-offset-1">
                                                    <textarea id="txtAreaIntroEnredo" class="form-control" placeholder="Digite aqui os detalhes da introdução do personagem ao enredo" title="Digite aqui os detalhes da introdução do personagem ao enredo"></textarea>
                                                </div>

                                                <div class="conteudoQuando col-sm-10 col-md-offset-1">
                                                    <textarea id="txtQuando" class="form-control" placeholder="Digite aqui quando ocorreu a introdução do personagem no enredo"></textarea>
                                                </div>

                                                <div class="conteudoOnde col-sm-10 col-md-offset-1">
                                                    <textarea id="txtOnde" class="form-control" placeholder="Digite aqui onde ocorreu a introdução do personagem no enredo"></textarea>
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
                                        <label for="txtMotivacoes" class="col-sm-2 control-label">Motivações</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtMotivacoes" placeholder="Digite aqui as motivações do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaMotivacoes" class="form-control" placeholder="Digite aqui a descrição das motivações do personagem na história" title="Digite aqui a descrição das motivações do personagem na história"></textarea>
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

            <div class="tab-pane" id="abaRelacoes">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-row">
                            <form class="form-horizontal row-border">

                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="relacFamilia" class="col-sm-2 control-label">Família</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="relacFamilia" style="width:  100%">
                                                    <option selected="selected">Relação 1</option>
                                                    <option>Relação 2</option>
                                                    <option>Relação 3</option>
                                                    <option>Relação 4</option>
                                                    <option selected="selected">Relação 5</option>
                                                </select>
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
                                        <label for="relacAmigos" class="col-sm-2 control-label">Amigos</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="relacAmigos" style="width:  100%">
                                                    <option selected="selected">Relação 1</option>
                                                    <option>Relação 2</option>
                                                    <option>Relação 3</option>
                                                    <option>Relação 4</option>
                                                    <option selected="selected">Relação 5</option>
                                                </select>
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
                                        <label for="relacLacos" class="col-sm-2 control-label">Laços Afetivos</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="relacLacos" style="width:  100%">
                                                    <option selected="selected">Relação 1</option>
                                                    <option>Relação 2</option>
                                                    <option>Relação 3</option>
                                                    <option>Relação 4</option>
                                                    <option selected="selected">Relação 5</option>
                                                </select>
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
                                        <label for="relacCompanheiros" class="col-sm-2 control-label">Companheiros na História</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="relacCompanheiros" style="width:  100%">
                                                    <option selected="selected">Relação 1</option>
                                                    <option>Relação 2</option>
                                                    <option>Relação 3</option>
                                                    <option>Relação 4</option>
                                                    <option selected="selected">Relação 5</option>
                                                </select>
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
                                        <label for="relacRivais" class="col-sm-2 control-label">Rivais</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <select class="form-control select2" multiple="multiple" id="relacRivais" style="width:  100%">
                                                    <option selected="selected">Relação 1</option>
                                                    <option>Relação 2</option>
                                                    <option>Relação 3</option>
                                                    <option>Relação 4</option>
                                                    <option selected="selected">Relação 5</option>
                                                </select>
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

            <div class="tab-pane" id="abaPassado">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowComp+">
                            <form class="form-horizontal row-border">
                                <div class="form-group">
                                    <div class="col-sm-10 inputWrapper">
                                        <label for="txtEvento" class="col-sm-2 control-label">Evento Marcante</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtEvento" placeholder="Digite aqui um evento marcante do passado do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaEvento" class="form-control" placeholder="Digite aqui a descrição do evento" title="Digite aqui a descrição do evento"></textarea>
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
                                        <label for="txtPerda" class="col-sm-2 control-label">Perda Marcante</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtPerda" placeholder="Digite aqui uma perda marcante no passado do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaPerda" class="form-control" placeholder="Digite aqui a descrição da perda" title="Digite aqui a descrição da perda"></textarea>
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
                                        <label for="txtMedos" class="col-sm-2 control-label">Medos</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtMedos" placeholder="Digite aqui alguns medos do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaMedo" class="form-control" placeholder="Digite aqui a descrição geral dos medos" title="Digite aqui a descrição geral dos medos"></textarea>
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
                                        <label for="txtSegredo" class="col-sm-2 control-label">Segredo</label>
                                        <div class="inputCorpo col-sm-10">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="txtSegredo" placeholder="Digite aqui o principal segredo do personagem" />
                                            </div>
                                            <!--Detalhes-->
                                            <div class="col-sm-12">
                                                <a class="col-md-offset-5 inputDetalhes">Adicionar Detalhes</a>
                                                <div class="conteudoDetalhes col-sm-10 col-md-offset-1" style="display:none;">
                                                    <textarea id="txtAreaSegredo" class="form-control" placeholder="Digite aqui a descrição do segredo" title="Digite aqui a descrição do segredo"></textarea>
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
                                        <label class="col-sm-2 control-label">Lembranças Boas</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-lembBoa">
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
                                        <label class="col-sm-2 control-label">Lembranças Ruins</label>
                                        <div class="col-sm-10">
                                            <!--Parte que Importa-->
                                            <div class="col-sm-12 inputIncluir icl-lembRuim">
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
        </div>
        <div class="col-sm-10">
            <button class="btn btn-primary col-sm-12 col-sm-offset-1">Salvar</button>
            <p>&nbsp;</p>
        </div>
    </div>
</div>
