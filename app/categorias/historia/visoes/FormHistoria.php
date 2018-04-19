<?php $modelo = $controlador->getParametros(); ?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>História</h1>
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
                <!--INPUT IMAGEM-->
                <!--Só precisa de um input desse na página, por isso, deixarei o ID controlando-->
                <input name="fileToUpload" value="<?php echo (isset($modelo->im_ppl)) ? $modelo->im_ppl : null; ?>" type='file' id="imgUploader" />

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
                                <div class="input-imagem" style="background-image:url(<?php echo (isset($modelo->im_ppl)) ? $modelo->im_ppl : "../imagens/sem-foto.png"; ?>)"></div>
                                <a class="input-imagem-reset" title="Clique para resetar a imagem" alt="Clique para resetar a imagem" id="input-im-Imagem">
                                    <i class="fa fa-ban"></i>
                                </a>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_im_ppl" placeholder="Detalhe o Nome do Input" 
                                              title="Detalhes do Nome do Input"><?php echo (isset($modelo->dets_im_ppl)) ? $modelo->dets_im_ppl : ""; ?></textarea>
                                </div>
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
                        <label class="col-md-11 input-label" for="input-tx-Titulo">Título</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="view_tit_hist" value="<?php echo (isset($modelo->tit_hist)) ? $modelo->tit_hist : ""; ?>" type="text" class="form-control" placeholder="Placeholder para Título" id="input-tx-Titulo"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_tit" placeholder="Detalhe o Nome do Input" 
                                              title="Detalhes do Nome do Input"><?php echo (isset($modelo->dets_tit)) ? $modelo->dets_tit : ""; ?></textarea>
                                </div>
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
                        <label class="col-md-11 input-label" for="input-tx-Subtitulo">Subtítulo</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="view_stit_hist" value="<?php echo (isset($modelo->stit_hist)) ? $modelo->stit_hist : ""; ?>" type="text" class="form-control" placeholder="Placeholder para Subtítulo" id="input-tx-Subtitulo"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_stit" placeholder="Detalhe o Nome do Input" 
                                              title="Detalhes do Nome do Input"><?php echo (isset($modelo->dets_stit)) ? $modelo->dets_stit : ""; ?></textarea>
                                </div>
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
                        <label class="col-md-11 input-label" for="input-tx-Autor">Autor</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="view_aur_hist" value="<?php echo (isset($modelo->aur_hist)) ? $modelo->aur_hist : ""; ?>" type="text" class="form-control" placeholder="Placeholder para Autor" id="input-tx-Autor"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_aur" placeholder="Detalhe o Nome do Input" 
                                              title="Detalhes do Nome do Input"><?php echo (isset($modelo->dets_aur)) ? $modelo->dets_aur : ""; ?></textarea>
                                </div>
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
                        <label class="col-md-11 input-label" for="input-tx-Ilustrador">Ilustrador</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input name="view_iltd_hist" value="<?php echo (isset($modelo->iltd_hist)) ? $modelo->iltd_hist : ""; ?>" type="text" class="form-control" placeholder="Placeholder para Ilustrador" id="input-tx-Ilustrador"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_iltd" placeholder="Detalhe o Nome do Input" 
                                              title="Detalhes do Nome do Input"><?php echo (isset($modelo->dets_iltd)) ? $modelo->dets_iltd : ""; ?></textarea>
                                </div>
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
                        <label class="col-md-11 input-label" for="input-txarea-PublicoAlvo">Público Alvo</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="view_pbco_alvo" placeholder="Placeholder para Público Alvo" title="Público Alvo" 
                                          id="input-txarea-PublicoAlvo"><?php echo (isset($modelo->pbco_alvo)) ? $modelo->pbco_alvo : ""; ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
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
                                <textarea name="view_dcr_em_uma_sntn" placeholder="Placeholder para Descrição em uma Sentença" title="Descrição em uma Sentença" 
                                          id="input-txarea-DescricaoemumaSentença"><?php echo (isset($modelo->dcr_em_uma_sntn)) ? $modelo->dcr_em_uma_sntn : ""; ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Sinopse">Sinopse</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="view_snp_hist" placeholder="Placeholder para Sinopse" title="Sinopse" 
                                          id="input-txarea-Sinopse"><?php echo (isset($modelo->snp_hist)) ? $modelo->snp_hist : ""; ?></textarea>
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
                        <label class="col-md-11 input-label" for="input-txarea-Resumo">Resumo</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="view_rsm_hist" placeholder="Placeholder para Resumo" title="Resumo" 
                                          id="input-txarea-Resumo"><?php echo (isset($modelo->rsm_hist)) ? $modelo->rsm_hist : ""; ?></textarea>
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
