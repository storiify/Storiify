<?php $modelo = $controlador->getParametros();

 if (isset($modelo->tit_hist)) {
    $nome = ($modelo->tit_hist == "" || ctype_space($modelo->tit_hist)) ?
                "" : $modelo->tit_hist;
        $nome .= ($modelo->stit_hist == "" || ctype_space($modelo->stit_hist) ? "" :
                ($nome == "" ? $modelo->stit_hist : ": " . $modelo->stit_hist));
} else{
    $nome = "";
}
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?php echo ($nome == "" || ctype_space($nome)? "História" : $nome) ?></h1>
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
    <form action="?categoria=historia&acao=salvar" method="post" enctype="multipart/form-data">
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
                                     style="background-image:url(<?php echo (isset($modelo->im_ppl)) ? $modelo->im_ppl : "../imagens/sem-foto.png"; ?>)"></div>
                                
                                <input value="<?php echo (isset($modelo->im_ppl)) ? $modelo->im_ppl : null; ?>" 
                                       accept='.png' type='file' class="imgUploader" name="view_im_ppl"/>
                                
                                <a class="input-imagem-reset" title="Clique para resetar a Imagem da História" alt="Clique para resetar a Imagem da História">
                                    <i class="fa fa-ban"></i>
                                </a>
                                
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_im_ppl" placeholder="Digite aqui os detalhes para Imagem Principal" 
                                              title="Detalhes para Imagem Principal"
                                              maxlength="1000"><?php echo (isset($modelo->dets_im_ppl)) ? $modelo->dets_im_ppl : ""; ?></textarea>
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
                                <input name="view_tit_hist" value="<?php echo (isset($modelo->tit_hist)) ? $modelo->tit_hist : ""; ?>" 
                                       placeholder="Digite aqui o Título da História"
                                       title="Campo para Título da História"
                                       maxlength="60" type="text"
                                       class="form-control" id="input-tx-TitulodaHistoria"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_tit" placeholder="Digite aqui os detalhes do Título da História" 
                                              title="Campo para detalhes do Título da História"
                                              maxlength="1000"><?php echo (isset($modelo->dets_tit)) ? $modelo->dets_tit : ""; ?></textarea>
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
                                <input name="view_stit_hist" value="<?php echo (isset($modelo->stit_hist)) ? $modelo->stit_hist : ""; ?>" 
                                       placeholder="Digite aqui o Subtítulo da História"
                                       maxlength="80" type="text" 
                                       class="form-control" id="input-tx-SubtitulodaHistoria"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_stit" placeholder="Digite aqui detlhes para o Subtítulo da História" 
                                              title="Detalhes do Nome do Input"
                                              maxlength="1000"><?php echo (isset($modelo->dets_stit)) ? $modelo->dets_stit : ""; ?></textarea>
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
                                <input name="view_aur_hist" value="<?php echo (isset($modelo->aur_hist)) ? $modelo->aur_hist : ""; ?>" 
                                       placeholder="Digite aqui o nome do Autor(a) da História"
                                       title="Campo para Autor(a) da História"
                                       maxlength="70" type="text" 
                                       class="form-control" id="input-tx-Autor"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_aur" placeholder="Digite aqui os detalhes do(a) Autor(a) da História" 
                                              title="Campo para detalhes do(a) Autor(a) da História"
                                              maxlength="1000"><?php echo (isset($modelo->dets_aur)) ? $modelo->dets_aur : ""; ?></textarea>
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
                                <input name="view_iltd_hist" value="<?php echo (isset($modelo->iltd_hist)) ? $modelo->iltd_hist : ""; ?>" 
                                       placeholder="Digite aqui o nome do(a) Ilustrador(a) da Históri"
                                       title="Campo para Ilustrador(a) da História"
                                       maxlength="70" type="text" 
                                       class="form-control" id="input-tx-Ilustrador"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_iltd" placeholder="Digite aqui detalhes do(a) Ilustrador(a) da História" 
                                              title="Campo para detalhes do(a) Ilustrador(a) da História"
                                              maxlength="1000"><?php echo (isset($modelo->dets_iltd)) ? $modelo->dets_iltd : ""; ?></textarea>
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
                                <textarea name="view_pbco_alvo" placeholder="Digite aqui o Público Alvo" 
                                          title="Campo para Público Alvo" 
                                          id="input-txarea-PublicoAlvo"
                                          maxlength="1000"><?php echo (isset($modelo->pbco_alvo)) ? $modelo->pbco_alvo : ""; ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
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
                                           type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                    <label for="ckbx-Visibilidade-mestre">Todos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="view_vsi_hist[]" value="1"
                                           title="Permite que sua equipe possa visualizar essa história"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="view_vsi_hist[]" value="2"
                                           title="Permite que todos os seus amigos possam visualizar essa história"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="view_vsi_hist[]" value="4" 
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
            <div id="abaEnredo" class="container tab-pane fade"><br>
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
                                <textarea name="view_dcr_em_uma_sntn" placeholder="Digite aqui a Descrição em uma Sentença da história" 
                                          title="Campo para a Descrição em uma Sentença da hisória" 
                                          id="input-txarea-DescricaoemumaSentença"
                                          maxlength="200"><?php echo (isset($modelo->dcr_em_uma_sntn)) ? $modelo->dcr_em_uma_sntn : ""; ?></textarea>
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
                                <textarea name="view_snp_hist" placeholder="Digite aqui a Sinopse da História" 
                                          title="Campo para a Sinopse da História" 
                                          id="input-txarea-Sinopse"
                                          maxlength="1000"><?php echo (isset($modelo->snp_hist)) ? $modelo->snp_hist : ""; ?></textarea>
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
                                <textarea name="view_rsm_hist" placeholder="Digite aqui o Resumo da História" 
                                          title="Campo para Resumo da História" 
                                          id="input-txarea-Resumo"
                                          maxlength="10000"><?php echo (isset($modelo->rsm_hist)) ? $modelo->rsm_hist : ""; ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
            </div>
        </div>
        <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="col-md-12 form-controle">
            <input type="hidden" name="view_pk_hist" value="<?php echo (isset($modelo->pk_hist)) ? $modelo->pk_hist : 0; ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar História
            </button>
        </div>
    </form>
</div>
