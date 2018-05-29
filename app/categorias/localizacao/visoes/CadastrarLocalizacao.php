<?php
$resultado = $controlador->getResultados();

$teste = sessao()->getUserData()->id;

if (empty((array) $resultado)) {
    $pk_lczc = '';
    //Geral
    $im_lczc = './imagens/sem-foto.png';
    $im_lczc_dets = '';
    $nm_lczc = '';
    $nm_lczc_dets = '';
    $vis_grl = '';
    //$personagensMaisConhecidos
    $marc_geo = '';
    $fk_ppl_lcld = '';
    $arrd_lczc = '';
    $hotl_lczc = '';
    $hotl_lczc_dets = '';
    $vsi_lczc = '';
    //Passado
    $dcr_pasd = '';
    $fk_fdd_decb = '';
    $dt_fdc_decb = '';
    $dt_fdc_decb_dets = '';
    $envl_grrs = '';
    $hist_gov = '';
    $actm_mor_oglh = '';
    $manc_hist = '';
    //Biologia
    //Cultura
    //--Religiões
    $rtus_lczc = '';
    //--Mitos
    $etca_vls = '';
    //--Línguas
    $art_ettm = '';
    $tbus_lczc = '';
    $dics_lczc = '';
    //Economia
    $dcr_ecn = '';
    $moe_lczc = '';
    $cmc_lczc = '';
    $rlcs_extr_ecn = '';
    $rlcs_itna_ecn = '';
    $negs_ind = '';
    $degd_scl = '';
    $degd_scl_dets = '';
    //Politica
    $fma_gov = '';
    $leis_lczc = '';
    $punc_lczc = '';
    $rlcs_extr_pol = '';
    $satc_pop = '';
    $satc_pop_dets = '';
    $orgz_anti_gov = '';
    $cls_cast = '';
    //Tecnologia
    $nvl_tecn = '';
    $depe_tecn = '';
    $acss_tecn = '';
    $mtd_cmco = '';
    $mtd_trnt = '';
    $citc_dcob = '';
    //Magia
    //--Tipos de Magia
    $acss_magi = '';
    $efe_magi_lczc = '';
    $efe_magi_scdd = '';
    $efe_magi_tecn = '';

} else {
    $personagem = (array) $resultado;
    foreach ($personagem as $key => $value) {
        $$key = $value;
    }
}
// $nome = (isset($tit_hist)? substr($tit_hist, 0,25).'...':"História sem nome!");
// $vsi_hist = parseCheckbox($vsi_hist);
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Localização</h1>
    </div>
</div>

<div class="conteudo">
    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaBiologia"><span>Biologia</span></a></li>
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
                    <label class="col-md-11 input-label" for="input-txarea-Descricao">Descrição</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Descrição" title="Descrição" id="input-txarea-Descricao"></textarea>
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
                    <label class="col-md-11 input-label" for="input-txarea-Historia">História</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para História" title="História" id="input-txarea-Historia"></textarea>
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
                    <label class="col-md-11 input-label" for="input-txselr-Personagensmaisconhecidos">Personagens mais conhecidos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-Personagensmaisconhecidos">
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
                    <label class="col-md-11 input-label" for="input-txarea-MarcosGeograficos">Marcos Geográficos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea placeholder="Placeholder para Marcos Geográficos" title="Marcos Geográficos" id="input-txarea-MarcosGeograficos"></textarea>
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
                    <label class="col-md-11 input-label" for="input-txselr-Mundo">Mundo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" id="input-txselr-Mundo">
                                <option selected="selected">Mundo1</option>
                                <option>Mundo2</option>
                                <option>Mundo3</option>
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
                    <label class="col-md-11 input-label" for="input-txselr-Localizacoes">Localizações</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-Localizacoes">
                                <option selected="selected">Localização1</option>
                                <option>Localização2</option>
                                <option>Localização3</option>
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
        <div id="abaBiologia" class="container tab-pane fade"><br>
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
                    <label class="col-md-11 input-label" for="input-incr-Raca">Raça</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&txarea[Aparência]&minmax[Povoamento](Quase Inexistente, Baixo, Médio, Alto, Abundante)&minmax[Reputação](Odiado, Desvalorizado, Neutro, Respeitado, Venerado)" 
                                 id="input-incr-Raca">
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
                    <label class="col-md-11 input-label" for="input-incr-AnimaisCriaturas">Animais/Criaturas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&txarea[Aparência]&minmax[Agressividade](Inofensivo, Calmo, Neutro, Bravo, Violento)&minmax[Reputação](Odiado, Desvalorizado, Neutro, Respeitado, Venerado)" 
                                 id="input-incr-AnimaisCriaturas">
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
                    <label class="col-md-11 input-label" for="input-incr-Flora">Flora</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&minmax[Raridade](Quase Inexistente, Raro, Comum, Numeroso, Abundante)" 
                                 id="input-incr-Flora">
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
                    <label class="col-md-11 input-label" for="input-incr-RecursosNaturais">Recursos Naturais</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&minmax[Valoração](Banal, Barata, Acessível, Cara, Exorbitante)" 
                                 id="input-incr-RecursosNaturais">
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
                    <label class="col-md-11 input-label" for="input-incr-Biomas">Biomas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&txarea[Clima]&txarea[Variações]&"
                                 id="input-incr-Biomas">
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
        <!-- FINAL - ABA BIOLOGIA -->
    </div>
    <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
    <div class="col-md-12 form-controle">
        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block">
            Salvar Mundo
        </button>
    </div>
</div>