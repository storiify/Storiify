<?php
$historiaSelecionada = sessao()->getHistoriaSelecionada();
$resultadoSelect = $controlador->getResultadosSelect();

$resultado = new ModeloLocalizacao(array());
$resultado = ($controlador->getResultados() == null ?
        new ModeloLocalizacao(array()) : $controlador->getResultados());
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>

<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?= (empty($resultado->nm_lczc()) ?
        ModeloLocalizacao::$nomeSingular : $resultado->nm_lczc(30))
?>
        </h1>
    </div>
</div>

<div class="conteudo">
    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaPassado"><span>Passado</span></a></li>
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
    <form action="?categoria=<?= $categoria ?>&acao=salvar" method="post" enctype="multipart/form-data">
        <div class="tab-content">
            <!--ABA GERAL-->
            <div id="abaGeral" class="container tab-pane active">
                <!--INPUT IMAGEM-->
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
                        <label class="col-md-11 input-label" for="input-im-ImagemdaLocalizacao">Imagem</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">

                                <div class="input-imagem" title="Campo para Imagem da Localização" id="input-im-ImagemdaLocalizacao"
                                     style="background-image:url(<?= $resultado->im_lczc() ?>)"></div>

                                <input value="<?= $resultado->im_lczc() ?>" 
                                       accept='.png,.jpg' type='file' class="imgUploader" name="im_lczc"/>

                                <a class="input-imagem-reset" title="Clique para resetar a Imagem da Localização" alt="Clique para resetar a Imagem da Localização">
                                    <i class="fa fa-ban"></i>
                                </a>

                                <div class="col-md-12 input-detalhes">
                                    <a class="detalhes-link">Adicionar Detalhes</a>
                                    <div class="detalhes-conteudo">
                                        <textarea name="im_lczc_dets" 
                                                  placeholder="Digite aqui os Detalhes da Imagem" 
                                                  title="Campo para Detalhes da Imagem"><?= $resultado->im_lczc_dets() ?></textarea>
                                    </div>
                                </div>

                            </div>
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
                                <input name="nm_lczc" value="<?= $resultado->nm_lczc() ?>" type="text" class="form-control" 
                                       placeholder="Digite aqui o Nome da Localização" id="input-tx-Nome"/>
                            </div>

                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="nm_lczc_dets" 
                                              placeholder="Campo de texto para detalhes" 
                                              title="Digite seu texto aqui"><?= $resultado->nm_lczc_dets() ?></textarea>
                                </div>
                            </div>

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
                        <label class="col-md-11 input-label" for="input-txarea-VisaoGeral">Visão Geral</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="vis_grl" value="" 
                                          placeholder="Digite aqui a Visão Geral dessa Localização" 
                                          title="Visão Geral" 
                                          id="input-txarea-VisaoGeral"><?= $resultado->vis_grl() ?></textarea>
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
                                <select class="form-control select2 input-textoselect" multiple="multiple" 
                                        name="fk_psna_cnhd[]" id="input-txselr-Personagensmaisconhecidos">
                                            <?php
                                            foreach ($resultadoSelect->psna as $personagemSelect) {
                                                $id = $personagemSelect["pk_psna"];
                                                $nome = $personagemSelect["nm_psna"];
                                                $isSelected = "";
                                                foreach ($resultadoSelect->idsPsnaLczc as $idPsnaCadastrado) {
                                                    if ($id == $idPsnaCadastrado["fk_psna"]) {
                                                        $isSelected = "selected";
                                                        break;
                                                    }
                                                }
                                                echo "<option value='$id' $isSelected>$nome</option>";
                                            }
                                            ?>
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
                                <textarea name="marc_geo" value="" placeholder="Digite aqui os Marcos Geográficos dessa Localização" 
                                          title="Campo para Marcos Geográficos" 
                                          id="input-txarea-MarcosGeograficos"><?= $resultado->marc_geo() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
                <!--INPUT TEXTOSELECT SINGLE-->
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
                        <label class="col-md-11 input-label" for="input-txselr-PrincipalLocalidade">Principal Localidade</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <select class="form-control select2 input-textoselect" 
                                        name="fk_ppl_lcld" id="input-txselr-PrincipalLocalidade">
                                    <option value="0" selected>-- Localidades de <?= $historiaSelecionada->tit_hist() ?> --</option>
                                    <?php
                                    foreach ($resultadoSelect->lczc as $localizacaoSelect) {
                                        $id = $localizacaoSelect["pk_lczc"];
                                        $nome = $localizacaoSelect["nm_lczc"];
                                        $isSelected = ($resultado->fk_ppl_lcld() == $id ? "selected" : "");

                                        if ($id != $resultado->pk_lczc()) {
                                            echo "<option value='$id' $isSelected>$nome</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOSELECT SINGLE-->
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
                        <label class="col-md-11 input-label" for="input-txarea-Arredores">Arredores</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="arrd_lczc" value="" placeholder="Digite aqui informações sobre os Arredores dessa Localização" 
                                          title="Campo para Arredores" id="input-txarea-Arredores"><?= $resultado->arrd_lczc() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-minmax-Hostilidade">Hostilidade</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="hotl_lczc" 
                                       data-minmax-valores="Inofensiva, Pacífica, Neutra, Ameaçadora, Hostil" class="input-minmax" 
                                       value="<?= $resultado->hotl_lczc() ?>" id="input-minmax-Hostilidade"></input>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="hotl_lczc_dets" placeholder="Digite aqui os detalhes para Hostilidade" 
                                              title="Campo para Hostilidade"><?= $resultado->hotl_lczc_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT MINMAX-->
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
                                    <input title="Seleciona todas as opções" <?= (count($resultado->vsi_lczc()) == 3 ? "checked" : "") ?>
                                           type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                    <label for="ckbx-Visibilidade-mestre">Todos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_lczc[]" value="1" <?= (in_array(1, $resultado->vsi_lczc()) ? "checked" : "") ?>
                                           title="Permite que seus amigos possam visualizar essa Localização"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_lczc[]" value="2" <?= (in_array(2, $resultado->vsi_lczc()) ? "checked" : "") ?>
                                           title="Permite que sua equipe possa visualizar essa Localização"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_lczc[]" value="4" <?= (in_array(4, $resultado->vsi_lczc()) ? "checked" : "") ?>
                                           title="Permite que o público possa visualizar essa Localização"
                                           type="checkbox" id ="ckbx-Visibilidade-opt3"/>
                                    <label for="ckbx-Visibilidade-opt3">Público</label>
                                </div>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT CHECKBOX-->
            </div>
            <!-- FINAL - ABA GERAL -->
            <!-- ABA PASSADO -->
            <div id="abaPassado" class="container tab-pane fade">
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
                        <label class="col-md-11 input-label" for="input-txarea-DescricaodoPassado">Descrição do Passado</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="dcr_pasd" value="" placeholder="Digite aqui a Descrição do Passado dessa Localização" 
                                          title="Campo para Descrição do Passado" id="input-txarea-DescricaodoPassado"><?= $resultado->dcr_pasd() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txselr-FundadorDescobridor">Fundador/Descobridor</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <select class="form-control select2 input-textoselect" 
                                        name="fk_fdd_decb" id="input-txselr-FundadorDescobridor">
                                    <option value="0" selected>-- Personagens de <?= $historiaSelecionada->tit_hist() ?> --</option>
                                    <?php
                                    foreach ($resultadoSelect->psna as $personagemSelect) {
                                        $id = $personagemSelect["pk_psna"];
                                        $nome = $personagemSelect["nm_psna"];
                                        $isSelected = ($resultado->fk_fdd_decb() == $id ? "selected" : "");

                                        echo "<option value='$id' $isSelected>$nome</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOSELECT-->
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
                        <label class="col-md-11 input-label" for="input-tx-DatadeFundacaoDescobrimento">Data de Fundação/Descobrimento</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="dt_fdc_decb" value="<?= $resultado->dt_fdc_decb() ?>" type="text" class="form-control" 
                                       placeholder="Digite aqui a Data de Fundação/Descobrimento" id="input-tx-DatadeFundacaoDescobrimento"/>
                            </div>

                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="dt_fdc_decb_dets" 
                                              placeholder="Digite aqui os detalhes da Data de Fundação/Descobrimento" 
                                              title="Campo para Data de Fundação/Descobrimento"><?= $resultado->dt_fdc_decb_dets() ?></textarea>
                                </div>
                            </div>

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
                        <label class="col-md-11 input-label" for="input-txarea-EnvolvimentoemGuerras">Envolvimento em Guerras</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="envl_grrs" value="" placeholder="Digite aqui o Envolvimento em Guerras dessa Localização" 
                                          title="Campo para Envolvimento em Guerras" id="input-txarea-DescricaodoPassado"><?= $resultado->envl_grrs() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-HistoriadeGoverno">História de Governo</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="hist_gov" value="" placeholder="Digite aqui a História de Governo dessa Localização" 
                                          title="Campo para História de Governo" id="input-txarea-DescricaodoPassado"><?= $resultado->hist_gov() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-AcontecimentodeMaiorOrgulho">Acontecimento de Maior Orgulho</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="actm_mor_oglh" value="" placeholder="Digite aqui o Acontecimento de Maior Orgulho dessa Localização" 
                                          title="Campo para Acontecimento de Maior Orgulho" id="input-txarea-AcontecimentodeMaiorOrgulho"><?= $resultado->actm_mor_oglh() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-ManchanaHistoria">Mancha na História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="manc_hist" value="" placeholder="Digite aqui a Mancha na História dessa Localização" 
                                          title="Campo para Mancha na História" id="input-txarea-ManchanaHistoria"><?= $resultado->manc_hist() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
            <!-- FINAL - ABA PASSADO -->
            <!-- ABA BIOLOGIA -->
            <div id="abaBiologia" class="container tab-pane fade">
                <!--RAÇA - INPUT TEXTOSELECT-->
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
                            <div class="col-md-12 input-conteudo row">
                                <div class="col-md-11 input-incluir">
                                    <select class="form-control select2 input-textoselect" multiple="multiple" 
                                            name="fk_raca[]" id="input-txselr-Raca">
                                                <?php
                                                foreach ($resultadoSelect->raca as $racaSelect) {
                                                    $raca = new ModeloRaca($racaSelect);
                                                    $id = $raca->pk_raca();
                                                    $nome = $raca->nm_raca();
                                                    $isSelected = "";
                                                    foreach ($resultadoSelect->idsRaca as $idRaca) {
                                                        if ($id == $idRaca["fk_raca"]) {
                                                            $isSelected = "selected";
                                                            break;
                                                        }
                                                    }
                                                    echo "<option value='$id' $isSelected>$nome</option>";
                                                }
                                                ?>
                                    </select>
                                </div>
                                <span class="incluir-adicionar col-md-1">
                                    <button class="btn btn-azul incluir-btn-adicionar" type="button"
                                            data-toggle="modal" data-target="#modalCadastrarRaca" >
                                        Criar Raça
                                    </button>
                                </span>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOSELECT-->
            </div>
            <!-- FINAL - ABA BIOLOGIA -->
            <!-- ABA CULTURA -->
            <div id="abaCultura" class="container tab-pane fade"><br>
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
                        <label class="col-md-11 input-label" for="input-txarea-Rituais">Rituais</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="rtus_lczc" value="" placeholder="Digite aqui os Rituais dessa Localização" 
                                          title="Campo para Rituais" id="input-txarea-Rituais"><?= $resultado->rtus_lczc() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-EticaeValores">Ética e Valores</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="etca_vls" value="" placeholder="Digite aqui Ética e Valores dessa Localização" 
                                          title="Campo para Ética e Valores" id="input-txarea-DescricaodoPassado"><?= $resultado->etca_vls() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-ArteeEntretenimento">Arte e Entretenimento</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="art_ettm" value="" placeholder="Digite aqui Arte e Entretenimento dessa Localização" 
                                          title="Campo para Arte e Entretenimento" id="input-txarea-ArteeEntretenimento"><?= $resultado->art_ettm() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Tabus">Tabus</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="tbus_lczc" value="" placeholder="Digite aqui sobre os Tabus dessa Localização" 
                                          title="Campo para Tabus" id="input-txarea-DescricaodoPassado"><?= $resultado->tbus_lczc() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Discriminacoes">Discriminações</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="dics_lczc" value="" placeholder="Digite aqui as Discriminações dessa Localização" 
                                          title="Campo para Discriminações" id="input-txarea-Discriminacoes"><?= $resultado->dics_lczc() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
            <!-- FINAL - CULTURA -->
            <!-- ABA ECONOMIA -->
            <div id="abaEconomia" class="container tab-pane fade"><br>
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
                        <label class="col-md-11 input-label" for="input-txarea-DescricaodaEconomia">Descrição da Economia</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="dcr_ecn" value="" placeholder="Digite aqui a Descrição da Economia dessa Localização" 
                                          title="Campo para Descrição da Economia" id="input-txarea-DescricaodaEconomia"><?= $resultado->dcr_ecn() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Moeda">Moeda</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="moe_lczc" value="" placeholder="Digite aqui sobre a Moeda dessa Localização" 
                                          title="Campo para Moeda" id="input-txarea-Moeda"><?= $resultado->moe_lczc() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Comercio">Comércio</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="cmc_lczc" value="" placeholder="Digite aqui sobre o Comércio dessa Localização" 
                                          title="Campo para Comércio" id="input-txarea-Comercio"><?= $resultado->cmc_lczc() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-RelacoesExteriores">Relações Exteriores</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="rlcs_extr_ecn" value="" placeholder="Digite aqui sobre as Relações Exteriores dessa Localização" 
                                          title="Campo para Relações Exteriores" id="input-txarea-RelacoesExteriores"><?= $resultado->rlcs_extr_ecn() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-RelacoesInternas">Relações Internas</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="rlcs_itna_ecn" value="" placeholder="Digite aqui sobre as Relações Internas dessa Localização" 
                                          title="Campo para Relações Internas" id="input-txarea-RelacoesInternas"><?= $resultado->rlcs_itna_ecn() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-NegociosIndustrias">Negócios/Indústrias</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="negs_ind" value="" placeholder="Digite aqui sobre os Negócios/Indústrias dessa Localização" 
                                          title="Campo para Negócios/Indústrias" id="input-txarea-NegociosIndustrias"><?= $resultado->negs_ind() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-minmax-DesigualdadeSocial">Desigualdade Social</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="degd_scl"
                                       data-minmax-valores="Muito Desigual, Pouco Desigual, Sem Desigualdades" class="input-minmax" 
                                       value="<?= $resultado->degd_scl() ?>" id="input-minmax-DesigualdadeSocial"></input>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="degd_scl_dets" placeholder="Digite aqui os detalhes para Desigualdade Social" 
                                              title="Campo para detalhes de Desigualdade Social"><?= $resultado->degd_scl_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT MINMAX-->
            </div>
            <!-- FINAL - ABA ECONOMIA -->
            <!-- ABA POLÍTICA -->
            <div id="abaPolitica" class="container tab-pane fade"><br>
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
                        <label class="col-md-11 input-label" for="input-txarea-FormadeGoverno">Forma de Governo</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="fma_gov" value="" placeholder="Digite aqui a Forma de Governo dessa Localização" 
                                          title="Campo para Forma de Governo" id="input-txarea-FormadeGoverno"><?= $resultado->fma_gov() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Leis">Leis</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="leis_lczc" value="" placeholder="Digite aqui sobre as Leis dessa Localização" 
                                          title="Campo para Leis" id="input-txarea-Leis"><?= $resultado->leis_lczc() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Punicoes">Punições</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="punc_lczc" value="" placeholder="Digite aqui sobre as Punições dessa Localização" 
                                          title="Campo para Punições" id="input-txarea-Punicoes"><?= $resultado->punc_lczc() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-RelacoesExteriores">Relações Exteriores</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="rlcs_extr_pol" value="" placeholder="Digite aqui sobre as Relações Exteriores dessa Localização" 
                                          title="Campo para Relações Exteriores" id="input-txarea-RelacoesExteriores"><?= $resultado->rlcs_extr_pol() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-minmax-SatisfacaodaPopulacao">Satisfação da População</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="satc_pop"
                                       data-minmax-valores="Muito Insatisfeita,Insatisfeita,Neutra,Satisfeita,Muito Satisfeita" class="input-minmax" 
                                       value="<?= $resultado->satc_pop() ?>" id="input-minmax-SatisfacaodaPopulacao"></input>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="satc_pop_dets" placeholder="Digite aqui os detalhes para Satisfação da População" 
                                              title="Campo para detalhes de Satisfação da População"><?= $resultado->satc_pop_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT MINMAX-->
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
                        <label class="col-md-11 input-label" for="input-txarea-OrganizacoesAntigoverno">Organizações Antigoverno</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="orgz_anti_gov" value="" placeholder="Digite aqui sobre as Organizações Antigoverno dessa Localização" 
                                          title="Campo para Organizações Antigoverno" id="input-txarea-OrganizacoesAntigoverno"><?= $resultado->orgz_anti_gov() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-ClassesCastas">Classes/Castas</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="cls_cast" value="" placeholder="Digite aqui sobre as Classes/Castas dessa Localização" 
                                          title="Campo para Classes/Castas" id="input-txarea-ClassesCastas"><?= $resultado->cls_cast() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
            <!-- FINAL - ABA POLÍTICA -->
            <!-- ABA TECNOLOGIA -->
            <div id="abaTecnologia" class="container tab-pane fade"><br>
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
                        <label class="col-md-11 input-label" for="input-minmax-NivelTecnologico">Nível Tecnológico</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="nvl_tecn"
                                       data-minmax-valores="Rudimentar,Inferior,Mediano,Desenvolvido,Avançado" class="input-minmax" 
                                       value="<?= $resultado->nvl_tecn() ?>" id="input-minmax-NivelTecnologico"></input>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="nvl_tecn_dets" placeholder="Digite aqui os detalhes para o Nível Tecnológico" 
                                              title="Campo para detalhes do Nível Tecnológico"><?= $resultado->nvl_tecn_dets() ?></textarea>
                                </div>
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
                        <label class="col-md-11 input-label" for="input-minmax-DependenciadeTecnologia">Dependência de Tecnologia</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="depe_tecn"
                                       data-minmax-valores="Totalmente Dependentes,Elevada,Mediana,Pouca,Totalmente Independentes" class="input-minmax" 
                                       value="<?= $resultado->depe_tecn() ?>" id="input-minmax-DependenciadeTecnologia"></input>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="depe_tecn_dets" placeholder="Digite aqui os detalhes para Dependência de Tecnologia" 
                                              title="Campo para detalhes de Dependência de Tecnologia"><?= $resultado->depe_tecn_dets() ?></textarea>
                                </div>
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
                        <label class="col-md-11 input-label" for="input-minmax-AcessoaTecnologia">Acesso à Tecnologia</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="acss_tecn"
                                       data-minmax-valores="Quase Nenhum,Baixo,Acessível,Comum,Maioria dos Habitantes" class="input-minmax" 
                                       value="<?= $resultado->acss_tecn() ?>" id="input-minmax-AcessoaTecnologia"></input>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="acss_tecn_dets" placeholder="Digite aqui os detalhes para Acesso à Tecnologia" 
                                              title="Campo para detalhes de Acesso à Tecnologia"><?= $resultado->acss_tecn_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT MINMAX-->
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
                        <label class="col-md-11 input-label" for="input-txarea-MetododeComunicacao">Método de Comunicação</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="mtd_cmco" value="" placeholder="Digite aqui o Método de Comunicação dessa Localização" 
                                          title="Campo para Método de Comunicação" id="input-txarea-MetododeComunicacao"><?= $resultado->mtd_cmco() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-MetododeTransporte">Método de Transporte</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="mtd_trnt" value="" placeholder="Digite aqui sobre o Método de Transporte dessa Localização" 
                                          title="Campo para Método de Transporte" id="input-txarea-MetododeTransporte"><?= $resultado->mtd_trnt() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-CienciaeDescobertas">Ciência e Descobertas</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="ciec_dcob" value="" placeholder="Digite aqui sobre a Ciência e Descobertas dessa Localização" 
                                          title="Campo para Ciência e Descobertas" id="input-txarea-CienciaeDescobertas"><?= $resultado->ciec_dcob() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
            <!-- FINAL - ABA TECNOLOGIA -->
            <!-- ABA MAGIA -->
            <div id="abaMagia" class="container tab-pane fade">
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
                        <label class="col-md-11 input-label" for="input-minmax-AcessoaMagia">Acesso à Magia</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="acss_magi"
                                       data-minmax-valores="Quase Nenhum,Baixo,Acessível,Comum,Maioria dos Habitantes" 
                                       class="input-minmax" value="<?= $resultado->acss_magi() ?>" 
                                       id="input-minmax-AcessoaMagia">
                                </input>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="acss_magi_dets" 
                                              placeholder="Digite aqui os detalhes para o Acesso à Magia" 
                                              title="Campo para detalhes do Acesso à Magia">
<?= $resultado->acss_magi_dets() ?>
                                    </textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT MINMAX-->
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
                        <label class="col-md-11 input-label" 
                               for="input-txarea-EfeitosdaMagianaLocalizacao">
                            Efeitos da Magia na Localização
                        </label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="efe_magi_lczc" value="" 
                                          placeholder="Digite aqui os Efeitos da Magia na Localização" 
                                          title="Campo para Efeitos da Magia na Localização" 
                                          id="input-txarea-EfeitosdaMagianaLocalizacao">
<?= $resultado->efe_magi_lczc() ?>
                                </textarea>
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
                        <label class="col-md-11 input-label" 
                               for="input-txarea-EfeitosdaMagianaSociedade">
                            Efeitos da Magia na Sociedade
                        </label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="efe_magi_scdd" value="" 
                                          placeholder="Digite aqui sobre os Efeitos da Magia na Sociedade" 
                                          title="Campo para Efeitos da Magia na Sociedade" 
                                          id="input-txarea-EfeitosdaMagianaSociedade">
<?= $resultado->efe_magi_scdd() ?>
                                </textarea>
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
                        <label class="col-md-11 input-label" 
                               for="input-txarea-EfeitosdaMagianaTecnologia">
                            Efeitos da Magia na Tecnologia
                        </label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="efe_magi_tecn" value="" 
                                          placeholder="Digite aqui sobre os Efeitos da Magia na Tecnologia" 
                                          title="Campo para Efeitos da Magia na Tecnologia" 
                                          id="input-txarea-EfeitosdaMagianaTecnologia">
<?= $resultado->efe_magi_tecn() ?>
                                </textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
            <!-- FINAL - ABA MAGIA -->
        </div>
        <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="col-md-12 form-controle">
            <input type="hidden" name="pk_lczc" value="<?= $resultado->pk_lczc() ?>">
            <input type="hidden" name="fk_hist" value="<?= $resultado->fk_hist() ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar <?= ModeloLocalizacao::$nomeSingular ?>
            </button>
        </div>
    </form>

</div>