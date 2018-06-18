<?php
$resultadoSelect = $controlador->getResultadosSelect();

$resultado = new ModeloHistoria(array());
$resultado = ($controlador->getResultados() == null ?
        new ModeloHistoria(array()) : $controlador->getResultados());
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>

<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?= (empty($resultado->tit_hist()) ? ModeloHistoria::$nomeSingular : $resultado->tit_hist(30)) ?></h1>
    </div>
</div>

<div class="conteudo">
    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#abaEnredo"><span>Enredo</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- FINAL - ABAS DE NAVEGAÇÃO -->
    <form action="?categoria=<?= $categoria ?>&acao=salvar" method="post" enctype="multipart/form-data">
        <!-- CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="tab-content">
            <!--ABA GERAL-->
            <div id="abaGeral" class="container tab-pane active">
                <!--IMAGEM PRINCIPAL - INPUT IMAGEM-->
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
                        <label class="col-md-11 input-label" for="input-im-ImagemdaHistoria">Imagem da História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">

                                <div class="input-imagem" title="Campo para Imagem da história" id="input-im-ImagemdaHistoria"
                                     style="background-image:url(<?= $resultado->im_hist() ?>)"></div>

                                <input value="" accept="image/*" type='file' class="imgUploader" name="im_hist"/>

                                <a class="input-imagem-reset" title="Clique para resetar a Imagem da História" alt="Clique para resetar a Imagem da História">
                                    <i class="fa fa-ban"></i>
                                </a>

                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="im_hist_dets" placeholder="Digite aqui os detalhes para Imagem Principal" 
                                              title="Detalhes para Imagem Principal"
                                              maxlength="1000"><?= $resultado->im_hist_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT IMAGEM--> 
                <!--TÍTULO DA HISTÓRIA - INPUT TEXTO-->
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
                        <label class="col-md-11 input-label" for="input-tx-TitulodaHistoria">Título da História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="tit_hist" value="<?= $resultado->tit_hist() ?>" 
                                       placeholder="Digite aqui o Título da História"
                                       title="Campo para Título da História"
                                       maxlength="60" type="text"
                                       class="form-control" id="input-tx-TitulodaHistoria"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="tit_hist_dets" placeholder="Digite aqui os detalhes do Título da História" 
                                              title="Campo para detalhes do Título da História"
                                              maxlength="1000"><?= $resultado->tit_hist_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
                <!--SUBTÍTULO DA HISTÓRIA - INPUT TEXTO-->
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
                        <label class="col-md-11 input-label" for="input-tx-SubtitulodaHistoria">Subtítulo da História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="stit_hist" value="<?= $resultado->stit_hist() ?>" 
                                       placeholder="Digite aqui o Subtítulo da História"
                                       maxlength="80" type="text" 
                                       class="form-control" id="input-tx-SubtitulodaHistoria"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="stit_hist_dets" placeholder="Digite aqui detlhes para o Subtítulo da História" 
                                              title="Detalhes do Nome do Input"
                                              maxlength="1000"><?= $resultado->stit_hist_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
                <!--AUTOR DA HISTÓRIA - INPUT TEXTO-->
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
                        <label class="col-md-11 input-label" for="input-tx-AutordaHistoria">Autor(a) da História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="aur_hist" value="<?= $resultado->aur_hist() ?>" 
                                       placeholder="Digite aqui o nome do Autor(a) da História"
                                       title="Campo para Autor(a) da História"
                                       maxlength="70" type="text" 
                                       class="form-control" id="input-tx-Autor"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="aur_hist_dets" placeholder="Digite aqui os detalhes do(a) Autor(a) da História" 
                                              title="Campo para detalhes do(a) Autor(a) da História"
                                              maxlength="1000"><?= $resultado->aur_hist_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
                <!--ILUSTRADOR DA HISTÓRIA - INPUT TEXTO-->
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
                        <label class="col-md-11 input-label" for="input-tx-IlustradordaHistoria">Ilustrador(a) da História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="iltd_hist" value="<?= $resultado->iltd_hist() ?>" 
                                       placeholder="Digite aqui o nome do(a) Ilustrador(a) da História"
                                       title="Campo para Ilustrador(a) da História"
                                       maxlength="70" type="text" 
                                       class="form-control" id="input-tx-Ilustrador"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="iltd_hist_dets" placeholder="Digite aqui detalhes do(a) Ilustrador(a) da História" 
                                              title="Campo para detalhes do(a) Ilustrador(a) da História"
                                              maxlength="1000"><?= $resultado->iltd_hist_dets() ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
                <!--PÚBLICO ALVO - INPUT TEXTOAREA-->
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
                        <label class="col-md-11 input-label" for="input-txarea-PublicoAlvo">Público Alvo</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="pbco_alvo" placeholder="Digite aqui o Público Alvo" 
                                          title="Campo para Público Alvo" 
                                          id="input-txarea-PublicoAlvo"
                                          maxlength="1000"><?= $resultado->pbco_alvo() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
                <!--VISIBILIDADE DA HISTÓRIA - INPUT CHECKBOX-->
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
                                    <input title="Seleciona todas as opções"
                                    <?php echo(count($resultado->vsi_hist()) == 3 ? "checked" : "") ?>
                                           type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                    <label for="ckbx-Visibilidade-mestre">Todos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_hist[]" value="1" 
                                    <?php echo(in_array(1, $resultado->vsi_hist()) ? "checked" : "") ?>
                                           title="Permite que sua equipe possa visualizar essa história"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_hist[]" value="2"
                                    <?php echo(in_array(2, $resultado->vsi_hist()) ? "checked" : "") ?>
                                           title="Permite que todos os seus amigos possam visualizar essa história"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_hist[]" value="4"
                                    <?php echo(in_array(4, $resultado->vsi_hist()) ? "checked" : "") ?>
                                           title="Permite que o público possa visualizar essa história"
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
            <!--FINAL - ABA GERAL-->
            <!--ABA ENREDO-->
            <div id="abaEnredo" class="container tab-pane fade">
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
                        <label class="col-md-11 input-label" for="input-txselr-PersonagemPrincipal">Personagem Principal</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <select class="form-control select2 input-textoselect" 
                                        name="fk_psna_ppl" id="input-txselr-PersonagemPrincipal">
                                    <option value="" selected>
                                        <?php
                                        if ($resultado->fk_psna_ppl() == "") {
                                            echo"Seus Personagens aparecerão aqui";
                                        } else {
                                            echo"Personagens de {$resultado->tit_hist()}";
                                        }
                                        ?></option>
                                    <?php
                                    foreach ($resultadoSelect->psna as $personagemSelect) {
                                        $id = $personagemSelect["pk_psna"];
                                        $nome = $personagemSelect["nm_psna"];
                                        $isSelected = ($resultado->fk_psna_ppl() == $id ? "selected" : "");

                                        if ($id != $pk_lczc) {
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
                        <label class="col-md-11 input-label" for="input-txarea-DescricaoemumaSentença">Descrição em uma Sentença</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="dcr_em_uma_sntn" placeholder="Digite aqui a Descrição em uma Sentença da história" 
                                          title="Campo para a Descrição em uma Sentença da hisória" 
                                          id="input-txarea-DescricaoemumaSentença"
                                          maxlength="200"><?= $resultado->dcr_em_uma_sntn() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Sinopse">Sinopse da História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="snp_hist" placeholder="Digite aqui a Sinopse da História" 
                                          title="Campo para a Sinopse da História" 
                                          id="input-txarea-Sinopse"
                                          maxlength="1000"><?= $resultado->snp_hist() ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Resumo">Resumo da História</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="rsm_hist" placeholder="Digite aqui o Resumo da História" 
                                          title="Campo para Resumo da História" 
                                          id="input-txarea-Resumo"
                                          maxlength="10000"><?= $resultado->rsm_hist() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
            <!--FINAL - ABA ENREDO-->
        </div>
        <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="col-md-12 form-controle">
            <input type="hidden" name="pk_hist" value="<?= $resultado->pk_hist() ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar <?= ModeloHistoria::$nomeSingular ?>
            </button>
        </div>
    </form>
</div>
