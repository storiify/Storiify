<?php $modelo = $controlador->getParametros();
 if (isset($modelo->tit_cena)) {
    $nome = ($modelo->tit_cena == "" || ctype_space($modelo->tit_cena)) ?
                "" : $modelo->tit_cena;
        $nome .= ($modelo->stit_cena == "" || ctype_space($modelo->stit_cena) ? "" :
                ($nome == "" ? $modelo->stit_cena : ": " . $modelo->stit_cena));
} else{
    $nome = "";
}
?>


<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?php echo ($nome == "" || ctype_space($nome)? "Cena" : $nome) ?></h1>
    </div>
</div>

<div class="conteudo">
    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
				<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaDesenvolvimento"><span>Geral</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- FINAL - ABAS DE NAVEGAÇÃO -->
	<form action="?categoria=cena&acao=salvar" method="post">
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
						<label class="col-md-11 input-label" for="input-im-ImagemCena">Imagem da Cena</label>
						<!--FINAL - INPUT LABEL-->
						<!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                
                                <div class="input-imagem" title="Campo para Imagem da Cena" id="input-im-Imagemdacena"
                                     style="background-image:url(<?php echo (isset($modelo->im_ppl)) ? $modelo->im_ppl : "../imagens/sem-foto.png"; ?>)"></div>
                                
                                <input value="<?php echo (isset($modelo->im_ppl)) ? $modelo->im_ppl : null; ?>" 
                                       accept='.png' type='file' class="imgUploader" name="view_im_ppl"/>
                                
                                <a class="input-imagem-reset" title="Clique para resetar a Imagem da Cena" alt="Clique para resetar a Imagem da Cena">
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
				<!--TÍTULO DA CENA - INPUT TEXTO-->
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
                                <input name="view_tit_cena" value="<?php echo (isset($modelo->tit_cena)) ? $modelo->tit_cena : ""; ?>" 
                                       placeholder="Digite aqui o Título da Cena"
                                       title="Campo para Título da Cena"
                                       maxlength="60" type="text"
                                       class="form-control" id="input-tx-TitulodaCena"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="view_dets_tit" placeholder="Digite aqui os detalhes do Título da Cena" 
                                              title="Campo para detalhes do Título da Cena"
                                              maxlength="1000"><?php echo (isset($modelo->dets_tit)) ? $modelo->dets_tit : ""; ?></textarea>
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
						<label class="col-md-11 input-label" for="input-tx-DatadaCena">Data</label>
						<!--FINAL - INPUT LABEL-->
						<!--INPUT CORPO-->
						<div class="col-md-12 input-corpo">
							<div class="col-md-12 input-conteudo">
								<input name="view_dt_cena" 
								value="<?php echo (isset($modelo->dt_cena)) ? $modelo->dt_cena : ""; ?>" 
								type="text" 
								class="form-control" 
								placeholder="Digite aqui a Data da cena" 
								maxlength="10"
								id="input-tx-DatadaCena"/>
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
						<label class="col-md-11 input-label" for="input-txarea-DescricaodaCena">Descrição</label>
						<!--FINAL - INPUT LABEL-->
						<!--INPUT CORPO-->
						<div class="col-md-12 input-corpo">
							<div class="col-md-12 input-conteudo">
								<textarea name="view_dcr_cena" placeholder="Digite aqui a Descrição da Cena" 
                                          title="Campo para a Descrição da Cena" 
                                          id="input-txarea-DescricaodaCena"
                                          maxlength="100"><?php echo (isset($modelo->dcr_cena)) ? $modelo->dcr_cena : ""; ?></textarea>
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
						<label class="col-md-11 input-label" for="input-txselr-LocalizacoesContidas">Localizações Contidas</label>
						<!--FINAL - INPUT LABEL-->
						<!--INPUT CORPO-->
						<div class="col-md-12 input-corpo">
							<div class="col-md-12 input-conteudo">
								<select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-LocalizacoesContidas">
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
						<label class="col-md-11 input-label" for="input-txselr-psna-pct">Personagens Participantes</label>
						<!--FINAL - INPUT LABEL-->
						<!--INPUT CORPO-->
						<div class="col-md-12 input-corpo">
							<div class="col-md-12 input-conteudo">
								<select class="form-control select2 input-textoselect" multiple="multiple" id="input-txselr-psna-pct">
									<option>Personagem1</option>
									<option selected="selected">Personagem2</option>
									<option selected="selected">Personagem3</option>
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
						<label class="col-md-11 input-label" for="input-txarea-desm">Desenvolvimento</label>
						<!--FINAL - INPUT LABEL-->
						<!--INPUT CORPO-->
						<div class="col-md-12 input-corpo">
							<div class="col-md-12 input-conteudo">
								<textarea name="view_desm_cena" placeholder="Digite aqui o Desenvolvimento da Cena" 
                                          title="Campo para o Desenvolvimento da Cena" 
                                          id="input-txarea-DesenvolvimentodaCena"
                                          maxlength="100"><?php echo (isset($modelo->desm_cena)) ? $modelo->desm_cena : ""; ?></textarea>
							</div>
							<!--NÃO TEM DETALHES-->
						</div>
						<!--FINAL - INPUT CORPO-->
					</div>
				</div>
				<!--FINAL - INPUT TEXTOAREA-->
				<!--VISIBILIDADE DA CENA - INPUT CHECKBOX-->
                <?php $opcoes =(isset($modelo->vsi_cena)? parseCheckbox($modelo->vsi_cena) : [0]) ?>
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
                                    <input name="view_vsi_cena[]" value="1" 
                                           <?php echo(in_array(1, $opcoes)? "checked": "") ?>
                                           title="Permite que sua equipe possa visualizar essa cena"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="view_vsi_cena[]" value="2"
                                           <?php echo(in_array(2, $opcoes)? "checked": "") ?>
                                           title="Permite que todos os seus amigos possam visualizar essa cena"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="view_vsi_cena[]" value="4"
                                           <?php echo(in_array(4, $opcoes)? "checked": "") ?>
                                           title="Permite que o público possa visualizar essa cena"
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