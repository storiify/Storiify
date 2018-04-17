<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Personagem</h1>
    </div>
</div>

<div class="conteudo">
    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaAparencia"><span>Aparência</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaHabilidades"><span>Habilidades</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaHistoria"><span>História</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaRelacoes"><span>Relações</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaPassado"><span>Passado</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- FINAL - ABAS DE NAVEGAÇÃO -->
    <!-- CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
    <div class="tab-content">
        <!--ABA GERAL-->
        <div id="abaGeral" class="container tab-pane active">
            <!--INPUT IMAGEM-->
            <!--Só precisa de um input desse na página, por isso, deixarei o ID controlando-->
            <input type='file' id="imgUploader" />

            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-im-Imagem">Imagem</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-imagem"></div>
                            <a class="input-imagem-reset" title="Clique para resetar a imagem" alt="Clique para resetar a imagem" id="input-im-Imagem">
                                <i class="fa fa-ban"></i>
                            </a>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT IMAGEM-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-Nome">Nome</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Nome" id="input-tx-Nome"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT DATA-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-DatadeNascimento">Data de Nascimento</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="date" class="form-control" placeholder="Placeholder para Data de Nascimento" id="input-tx-DatadeNascimento"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT DATA-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-Mundo">Mundo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-Mundo">
                                <option selected="selected">Terra do Nunca</option>
                                <option>Nárnia</option>
                                <option>Terra Média</option>
                                <option>Reino Tão Tão Distante</option>
                                <option selected="selected">Alagaësia</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-LocalizacaoNatal">Localização Natal</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-LocalizacaoNatal">
                                <option selected="selected">Ceilândia</option>
                                <option>Sobradinho</option>
                                <option>Cidade Ocidental</option>
                                <option>Planaltina</option>
                                <option selected="selected">Samambaia</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-Raca">Raça</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-Raca">
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
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT INCLUIR-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-incr-Classe">Classe</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&minmax[Quantidade](Quase Inexistente, Baixa, Média, Alta, Abundante)&minmax[Reputação](Odiado, Desvalorizado, Neutro, Respeitado, Venerado)" 
                                 id="input-incr-Classe">
                                <div class="input-group">
                                    <span class="input-group-btn incluir-remover">
                                        <button class="btn btn-azul incluir-btn-remover" type="button">Remover</button>
                                    </span>
                                    <input value="0" class="form-control incluir-status" readonly="readonly" />
                                    <span class="input-group-btn incluir-adicionar">
                                        <button class="btn btn-azul incluir-btn-adicionar" type="button">Adicionar</button>
                                    </span>
                                </div>
                                <div class="incluir-filhos-area">
                                    <!--Aqui entrarão as instâncias-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT INCLUIR-->
            <!--INPUT INCLUIR-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-incr-Profissao">Profissão</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&minmax[Quantidade](Quase Inexistente, Baixa, Média, Alta, Abundante)&minmax[Reputação](Odiado, Desvalorizado, Neutro, Respeitado, Venerado)" 
                                 id="input-incr-Profissao">
                                <div class="input-group">
                                    <span class="input-group-btn incluir-remover">
                                        <button class="btn btn-azul incluir-btn-remover" type="button">Remover</button>
                                    </span>
                                    <input value="0" class="form-control incluir-status" readonly="readonly" />
                                    <span class="input-group-btn incluir-adicionar">
                                        <button class="btn btn-azul incluir-btn-adicionar" type="button">Adicionar</button>
                                    </span>
                                </div>
                                <div class="incluir-filhos-area">
                                    <!--Aqui entrarão as instâncias-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT INCLUIR-->
            <!--INPUT CHECKBOX-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-ckbx-Visibilidade">Visibilidade</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="input-checkbox" id="input-ckbx-Visibilidade">
                            <div class="form-check-inline ckbox-mestre">
                                <input type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                <label for="ckbx-0-mestre">Todos</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="checkbox" name="ckbox-nomedoinput" id ="ckbx-Visibilidade-opt1"/>
                                <label for="ckbx-0-opt1">Amigos</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="checkbox" name="ckbox-nomedoinput" id ="ckbx-Visibilidade-opt2"/>
                                <label for="ckbx-0-opt2">Equipe</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="checkbox" name="ckbox-nomedoinput" id ="ckbx-Visibilidade-opt3"/>
                                <label for="ckbx-0-opt3">Público</label>
                            </div>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT CHECKBOX-->
        </div>
        <!-- ABA BIOLOGIA -->
        <div id="abaAparencia" class="container tab-pane fade"><br>
            <!--INPUT TEXTOAREA-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txarea-DescricaoBasica">Descrição Básica</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Descrição Básica" title="Descrição Básica" id="input-txarea-DescricaoBasica"></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
            <!--INPUT MINMAX-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-minmax-Altura">Altura</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div data-minmax-valores="Anão, Baixo, Normal, Alto, Gigante" class="input-minmax" id="input-minmax-Altura"></div>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT MINMAX-->
            <!--INPUT MINMAX-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-minmax-Peso">Peso</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div data-minmax-valores="Raquítico, Magro, Normal, Gordo, Obeso" class="input-minmax" id="input-minmax-Peso"></div>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT MINMAX-->
            <!--INPUT MINMAX-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-minmax-PorteFisico">Porte Físico</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div data-minmax-valores="Frangote, Fraco, Normal, Atlético, Musculoso" class="input-minmax" id="input-minmax-PorteFisico"></div>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT MINMAX-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-TipodePele">Tipo de Pele</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Tipo de Pele" id="input-tx-TipodePele"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-Cabelo">Cabelo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Cabelo" id="input-tx-TipodePele"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-Vestimentas">Vestimentas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Vestimentas" id="input-tx-Vestimentas"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-Acessorios">Acessórios</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Acessórios" id="input-tx-Acessorios"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT INCLUIR-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-incr-Objetos">Objetos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&txarea[Aparência]&minmax[Valoração](Banal, Barata, Acessível, Cara, Exorbitante)" 
                                 id="input-incr-Objetos">
                                <div class="input-group">
                                    <span class="input-group-btn incluir-remover">
                                        <button class="btn btn-azul incluir-btn-remover" type="button">Remover</button>
                                    </span>
                                    <input value="0" class="form-control incluir-status" readonly="readonly" />
                                    <span class="input-group-btn incluir-adicionar">
                                        <button class="btn btn-azul incluir-btn-adicionar" type="button">Adicionar</button>
                                    </span>
                                </div>
                                <div class="incluir-filhos-area">
                                    <!--Aqui entrarão as instâncias-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT INCLUIR-->
        </div>
        <div id="abaHabilidades" class="container tab-pane fade"><br>
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-CompetenciasPositivas">Competências Positivas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Competências Positivas" id="input-tx-CompetenciasPositivas"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-CompetenciasNegativas">Competências Negativas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Competências Negativas" id="input-tx-CompetenciasNegativas"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT MINMAX-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-minmax-Alinhamento">Alinhamento</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div data-minmax-valores="Maléfico, Perverso, Neutro, Bondoso, Imaculado" class="input-minmax" id="input-minmax-Alinhamento"></div>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT MINMAX-->
            <!--INPUT INCLUIR-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-incr-HabilidadesFisicas">Habilidades Físicas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]" 
                                 id="input-incr-HabilidadesFisicas">
                                <div class="input-group">
                                    <span class="input-group-btn incluir-remover">
                                        <button class="btn btn-azul incluir-btn-remover" type="button">Remover</button>
                                    </span>
                                    <input value="0" class="form-control incluir-status" readonly="readonly" />
                                    <span class="input-group-btn incluir-adicionar">
                                        <button class="btn btn-azul incluir-btn-adicionar" type="button">Adicionar</button>
                                    </span>
                                </div>
                                <div class="incluir-filhos-area">
                                    <!--Aqui entrarão as instâncias-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT INCLUIR-->
        </div>
        <div id="abaHistoria" class="container tab-pane fade"><br>
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-PapelnaHistoria">Papel na História</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Papel na História" id="input-tx-PapelnaHistoria"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTOAREA-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txarea-EnvolvimentonaHistoria">Envolvimento na História</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Envolvimento na História" title="Envolvimento na História" id="input-txarea-EnvolvimentonaHistoria"></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
            <!--INPUT TEXTOAREA-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txarea-MomentoMarcante">Momento Marcante</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Momento Marcante" title="Momento Marcante" id="input-txarea-MomentoMarcante"></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-ObjetivoPrincipal">Objetivo Principal</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Objetivo Principal" id="input-tx-ObjetivoPrincipal"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-ObjetivoParalelo">Objetivo Paralelo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Objetivo Paralelo" id="input-tx-ObjetivoParalelo"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-IntroducaonoEnredo">Introdução no Enredo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-IntroducaonoEnredo">
                                <option selected="selected">Cena1</option>
                                <option>Cena2</option>
                                <option>Cena3</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT TEXTOAREA-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txarea-Motivacoes">Motivações</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Motivações" title="Motivações" id="input-txarea-Motivacoes"></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
        </div>
        <div id="abaRelacoes" class="container tab-pane fade"><br>
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-Familia">Família</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-Familia">
                                <option selected="selected">Personagem1</option>
                                <option>Personagem2</option>
                                <option>Personagem3</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-Amigos">Amigos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-Amigos">
                                <option>Personagem1</option>
                                <option selected="selected">Personagem2</option>
                                <option>Personagem3</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-LacosAfetivos">Laços Afetivos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-LacosAfetivos">
                                <option>Personagem1</option>
                                <option selected="selected">Personagem2</option>
                                <option>Personagem3</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-CompanheirosnaHistoria">Companheiros na História</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-CompanheirosnaHistoria">
                                <option>Personagem1</option>
                                <option>Personagem2</option>
                                <option selected="selected">Personagem3</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
            <!--INPUT TEXTOSELECT-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txselr-Rivais">Rivais</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-Rivais">
                                <option>Personagem1</option>
                                <option>Personagem2</option>
                                <option selected="selected">Personagem3</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
        </div>
        <div id="abaRelacoes" class="container tab-pane fade"><br>
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-EventoMarcante">Evento Marcante</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Evento Marcante" id="input-tx-EventoMarcante"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTO-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-tx-PerdaMarcante">Perda Marcante</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input value="" type="text" class="form-control" placeholder="Placeholder para Perda Marcante" id="input-tx-PerdaMarcante"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
                        </div>
                        <!--FINAL - DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTO-->
            <!--INPUT TEXTOAREA-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txarea-Medos">Medos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Medos" title="Medos" id="input-txarea-Medos"></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
            <!--INPUT TEXTOAREA-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-txarea-Segredos">Segredos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Segredos" title="Segredos" id="input-txarea-Segredos"></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
            <!--INPUT INCLUIR-->
            <div class="form-group">
                <div class="row">
                    <!--INPUT CONTROLE-->
                    <div class="col-md-1 input-controle">
                        <button type="button" class="btn btn-input-controle minimizar">
                            <i class="fa fa-minus"></i>
                        </button>                      
                    </div>
                    <!--FINAL - INPUT CONTROLE-->
                    <!--INPUT LABEL-->
                    <label class="col-md-11 input-label" for="input-incr-Lembrancas">Lembranças</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="txarea[Descrição]&txarea[Personagens Presentes]&minmax[Apreciação](Abominada, Odiada, Normal, Apreciada, Adorada)" 
                                 id="input-incr-Lembrancas">
                                <div class="input-group">
                                    <span class="input-group-btn incluir-remover">
                                        <button class="btn btn-azul incluir-btn-remover" type="button">Remover</button>
                                    </span>
                                    <input value="0" class="form-control incluir-status" readonly="readonly" />
                                    <span class="input-group-btn incluir-adicionar">
                                        <button class="btn btn-azul incluir-btn-adicionar" type="button">Adicionar</button>
                                    </span>
                                </div>
                                <div class="incluir-filhos-area">
                                    <!--Aqui entrarão as instâncias-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT INCLUIR-->
        </div>
            </div>
    <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
    <div class="col-md-12 form-controle">
        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block">
            Salvar Mundo
        </button>
    </div>
</div>