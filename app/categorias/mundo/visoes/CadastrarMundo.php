<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Mundo</h1>
    </div>
</div>

<div class="conteudo">

    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaBiologia"><span>Biologia</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaCultura"><span>Cultura</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaEconomia"><span>Economia</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaPolitica"><span>Política</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaTecnologia"><span>Tecnologia</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaMagia"><span>Magia</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- FINAL - ABAS DE NAVEGAÇÃO -->
    <!-- CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
    <div class="tab-content">
        <!--ABA GERAL-->
        <div id="abaGeral" class="container tab-pane active">

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
                    <label class="col-md-1 input-label" for="input-texto-1">Nome do Input</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-10 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input type="text" class="form-control" id="input-texto-1" placeholder="Placeholder para Nome do Input" />
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
                    <label class="col-md-1 input-label" for="input-texto-1">Nome do Input</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-10 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Nome do Input" title="Nome do Input"></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
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
                    <label class="col-md-1 input-label" for="input-texto-1">Nome do Input</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-10 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple">
                                <option selected="selected">Autêntico</option>
                                <option>Humor</option>
                                <option>Sábio</option>
                                <option>Espiritualidade</option>
                                <option selected="selected">Criativo</option>
                                <option>Boa Memória</option>
                                <option>Mente Aberta</option>
                                <option>Competitivo</option>
                                <option>Coragem</option>
                                <option>Amizades Facilmente</option>
                                <option>Integridade</option>
                                <option>Objetivo</option>
                                <option selected="selected">Perseverança</option>
                                <option>Higiênico</option>
                                <option>Generosidade</option>
                                <option>Saudável Mentalmente</option>
                                <option>Justiça</option>
                                <option>Firme</option>
                                <option>Liderança</option>
                                <option>Heróico</option>
                                <option>Perdoar</option>
                                <option>Romântico</option>
                                <option>Humildade</option>
                                <option>Código de Conduta</option>
                                <option>Prudência</option>
                                <option>Autruísta</option>
                                <option selected="selected">Autocontrole</option>
                                <option>Apreciação da Beleza</option>
                            </select>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOSELECT-->
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
                    <label class="col-md-1 input-label" for="input-texto-1">Nome do Input</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-10 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="col-sm-12">
                                <div class="form-check-inline ckbox-mestre">
                                    <input type="checkbox" id ="ckbox-nomedoinput-mestre"/>
                                    <label for="ckbox-nomedoinput-mestre">CkBox Mestre</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input type="checkbox" name="ckbox-nomedoinput" id ="ckbox-nomedoinput-opt1"/>
                                    <label for="ckbox-nomedoinput-opt1">Opção 1</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input type="checkbox" name="ckbox-nomedoinput" id ="ckbox-nomedoinput-opt2"/>
                                    <label for="ckbox-nomedoinput-opt2">Opção 2</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input type="checkbox" name="ckbox-nomedoinput" id ="ckbox-nomedoinput-opt3"/>
                                    <label for="ckbox-nomedoinput-opt3">Opção 3</label>
                                </div>
                            </div>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT CHECKBOX-->
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
                    <label class="col-md-1 input-label" for="input-texto-1">Nome do Input</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-10 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div id="input-mimmax-1" data-minmax-valores="valor 1, valor 2, valor 3, valor 4, valor 5" class="input-minmax"></div>
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
            <!--INPUT IMAGEM-->
            <!--Só precisa de um input desse na página, por isso, deixarei o ID controlando-->
            <input type='file' id="imgUploader" style="display:none;" />
            
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
                    <label class="col-md-1 input-label" for="input-texto-1">Nome do Input</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-10 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-imagem"></div>
                            <a class="input-imagem-reset"><i class="fa fa-ban"></i></a>
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
            
        </div>
        <!-- FINAL - ABA GERAL -->
        <!-- ABA BIOLOGIA -->
        <div id="abaBiologia" class="container tab-pane fade"><br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <!-- FINAL - ABA BIOLOGIA -->
        <!-- ABA CULTURA -->
        <div id="abaCultura" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <!-- FINAL - ABA CULTURA -->
        <!-- ABA ECONOMIA -->
        <div id="abaEconomia" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Aqui nós podemos encontrar o conteúdo separado para tratar sobre o tema Economia, estamos todos de acordo com essa informção?.</p>
        </div>
        <!-- FINAL - ABA ECONOMIA -->
        <!-- ABA POLÍTICA -->
        <div id="abaPolitica" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Aqui nós podemos encontrar o conteúdo separado para tratar sobre o tema Política, estamos todos de acordo com essa informção?.</p>
        </div>
        <!-- FINAL - ABA POLÍTICA -->
        <!-- ABA TECNOLOGIA -->
        <div id="abaTecnologia" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Aqui nós podemos encontrar o conteúdo separado para tratar sobre o tema Tecnologia, estamos todos de acordo com essa informção?.</p>
        </div>
        <!-- FINAL - ABA TECNOLOGIA -->
        <!-- ABA MAGIA -->
        <div id="abaMagia" class="container tab-pane fade"><br>
            <h3>Menu 2</h3>
            <p>Aqui nós podemos encontrar o conteúdo separado para tratar sobre o tema Magia, estamos todos de acordo com essa informção?.</p>
        </div>
        <!-- FINAL - ABA MAGIA -->
    </div>
    <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
</div>