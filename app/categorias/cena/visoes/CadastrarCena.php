<?php
$historiaSelecionada = sessao()->getHistoriaSelecionada();
$resultadoSelect = $controlador->getResultadosSelect();

$resultado = new ModeloCena(array()); //Necessário para usar o autoComplete
$resultado = ($controlador->getResultados() == null ?
        new ModeloCena(array()) : $controlador->getResultados());
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>

<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?= (empty($resultado->tit_cena()) ? ModeloCena::$nomeSingular : $resultado->tit_cena(30)) ?></h1>
    </div>
</div>

<div class="conteudo">
    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaDesenvolvimento"><span>Desenvolvimento</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- FINAL - ABAS DE NAVEGAÇÃO -->
    <form action="?categoria=<?= $categoria ?>&acao=salvar" method="post" enctype="multipart/form-data">
        <!-- CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
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
                        <label class="col-md-11 input-label" for="input-im-ImagemdaCena">Imagem da Cena</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">

                                <div class="input-imagem" title="Campo para Imagem da Cena" id="input-im-ImagemdaCena"
                                     style="background-image:url(<?= $resultado->im_cena() ?>)"></div>

                                <input value="" accept='.png,.jpg,.jpeg' type='file' class="imgUploader" name="im_cena"/>
                                <input value="" type="hidden" name="im_cena_reset" class="request-reset"/>

                                <a class="input-imagem-reset" title="Clique para resetar a Imagem da Cena" alt="Clique para resetar a Imagem da Cena">
                                    <i class="fa fa-ban"></i>
                                </a>

                                <div class="col-md-12 input-detalhes">
                                    <a class="detalhes-link">Adicionar Detalhes</a>
                                    <div class="detalhes-conteudo">
                                        <textarea name="im_cena_dets" 
                                                  placeholder="Digite aqui os Detalhes da Imagem" 
                                                  title="Campo para Detalhes da Imagem"><?= $resultado->im_cena_dets() ?></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT IMAGEM-->
                <!--TITULO DA CENA - INPUT TEXTO-->
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
                        <label class="col-md-11 input-label" for="input-tx-TitulodaCena">Título da Cena</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="tit_cena" value="<?= $resultado->tit_cena() ?>" 
                                       placeholder="Digite aqui o Título da Cena"
                                       title="Campo para Título da Cena"
                                       maxlength="60" type="text"
                                       class="form-control" id="input-tx-TitulodaCena"/>
                            </div>

                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="tit_cena_dets" 
                                              placeholder="Digite aqui os Detalhes do Título da Cena" 
                                              title="Campo para Detalhes do Título da Cena"><?= $resultado->tit_cena_dets() ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
                <!--CENA ANTERIOR - INPUT TEXTOSELECT SINGLE-->
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
                        <label class="col-md-11 input-label" for="input-txselr-CenaAnterior">Cena Anterior</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <select class="form-control select2 input-textoselect" 
                                        name="fk_cena_ant" id="input-txselr-CenaAnterior">
                                    <option value="0" selected>-- Cenas de <?= $historiaSelecionada->tit_hist() ?> --</option>
                                    <?php
                                    foreach ($resultadoSelect->cena as $cenaSelect) {
                                        $id = $cenaSelect["pk_cena"];
                                        $titulo = $cenaSelect["tit_cena"];
                                        $isSelected = ($resultado->fk_cena_ant() == $id ? "selected" : "");

                                        if ($id != $resultado->pk_cena()) {
                                            echo "<option value='$id' $isSelected>$titulo</option>";
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
                <!--CENA POSTERIOR - INPUT TEXTOSELECT SINGLE-->
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
                        <label class="col-md-11 input-label" for="input-txselr-CenaPosterior">Cena Posterior</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <select class="form-control select2 input-textoselect" 
                                        name="fk_cena_ptrr" id="input-txselr-CenaPosterior">
                                    <option value="0" selected>-- Cenas de <?= $historiaSelecionada->tit_hist() ?> --</option>
                                    <?php
                                    foreach ($resultadoSelect->cena as $cenaSelect) {
                                        $id = $cenaSelect["pk_cena"];
                                        $titulo = $cenaSelect["tit_cena"];
                                        $isSelected = ($resultado->fk_cena_ptrr() == $id ? "selected" : "");

                                        if ($id != $resultado->pk_cena()) {
                                            echo "<option value='$id' $isSelected>$titulo</option>";
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
                <!--DATA E HORA DA CENA - INPUT TEXTO-->
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
                        <label class="col-md-11 input-label" for="input-tx-DataeHoradaCena">Data e Hora da Cena</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="dt_hora" value="<?= $resultado->dt_hora() ?>" 
                                       placeholder="Digite aqui a Data e Hora da Cena"
                                       title="Campo para Data e Hora da Cena"
                                       maxlength="60" type="text"
                                       class="form-control" id="input-tx-DataeHoradaCena"/>
                            </div>

                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="tit_cena_dets" 
                                              placeholder="Digite aqui os Detalhes da Data e Hora da Cena" 
                                              title="Campo para Detalhes da Data e Hora da Cena"><?= $resultado->dt_hora_dets() ?></textarea>
                                </div>
                            </div>
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
                <!--VISIBILIDADE DA CENA - INPUT CHECKBOX-->
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
                                    <input title="Seleciona todas as opções" <?= (count($resultado->vsi_cena()) == 3 ? "checked" : "") ?>
                                           type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                    <label for="ckbx-Visibilidade-mestre">Todos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_cena[]" value="1" <?= (in_array(1, $resultado->vsi_cena()) ? "checked" : "") ?>
                                           title="Permite que seus amigos possam visualizar essa Cena"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_cena[]" value="2" <?= (in_array(2, $resultado->vsi_cena()) ? "checked" : "") ?>
                                           title="Permite que sua equipe possa visualizar essa Cena"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_cena[]" value="4" <?= (in_array(4, $resultado->vsi_cena()) ? "checked" : "") ?>
                                           title="Permite que o público possa visualizar essa Cena"
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
            <!--ABA DESENVOLVIMENTO -->
            <div id="abaDesenvolvimento" class="container tab-pane">
                <!--RESUMO - INPUT TEXTOAREA-->
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
                        <label class="col-md-11 input-label" for="input-txarea-ResumodaCena">Resumo da Cena</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="rsm_cena" value="" 
                                          placeholder="Digite aqui o Resumo da Cena" title="Campo para Resumo da Cena" 
                                          id="input-txarea-ResumodaCena"><?= $resultado->rsm_cena() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
                <!--DESENVOLVIMENTO - INPUT TEXTOAREA-->
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
                        <label class="col-md-11 input-label" for="input-txarea-DesenvolvimentodaCena">Desenvolvimento da Cena</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo"> 
                                <textarea name="desm_cena" value="" 
                                          placeholder="Digite aqui o Desenvolvimento da Cena" title="Campo para Desenvolvimento da Cena" 
                                          id="input-txarea-DesenvolvimentodaCena"><?= $resultado->desm_cena() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
            <!--FIM - ABA DESENVOLVIMENTO-->
        </div>
        <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="col-md-12 form-controle">
            <input type="hidden" name="pk_cena" value="<?= $resultado->pk_cena() ?>">
            <input type="hidden" name="fk_hist" value="<?= $resultado->fk_hist() ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar <?= ModeloCena::$nomeSingular ?>
            </button>
        </div>
    </form>
</div>
