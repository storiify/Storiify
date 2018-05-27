<?php $resultado = $controlador->getResultados();

if(empty((array)$resultado)){
    $nm_psna = '';
    // PK
    $pk_psna = '';
    // Aba 1
    $im_psna = './imagens/sem-foto.png';
	$dt_nsc = '';
	$vsi_psna = array();
	$dets_bsca = '';
	$h_psna = '';
	$h_psna_dets = '';
	$peso_psna = '';
	$peso_dets_pnsa = '';
	$prte_psna = '';
	$prte_psna_dets = '';
	$pele_psna = '';
	$pele_psna_dets = '';
	$cblo_psna = '';
	$cblo_psna_dets = '';
	$vstm_psna = '';
	$vstm_psna_dets = '';
	$acsr_psna = '';
	$acsr_psna_dets = '';
	$cptc_pst = '';
	$cptc_pst_dets = '';
	$cptc_ngt = '';
	$cptc_ngt_dets = '';
	$almt_psna = '';
	$almt_psna_dets = ''; 
	$papl_psna = '';
	$papl_psna_dets = '';
	$envl_psna = '';
	$mmt_psna = '';
	$objt_psna = '';
	$objt_psna_dets = '';
	$objt_prlel_psna = '';
	$objt_prlel_psna_dets = '';
	$mtvc_psna = '';
	$evt_psna = '';
	$evt_psna_dets = '';
	$pda_psna = '';
	$pda_psna_dets = '';
	$medo_psna = '';
	$segd_psna = '';
}else{
    $personagem = (array)$resultado;
    foreach ($personagem as $key => $value) {
	$$key = $value;
    }
	$vsi_psna = parseCheckbox($vsi_psna);
}

?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas(); var_dump($controlador);
	?></div>
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
	<form action="?categoria=personagem&acao=salvar" method="post" enctype="multipart/form-data">
    <div class="tab-content">
        <!--ABA GERAL-->
        <div id="abaGeral" class="container tab-pane active">
            <!--INPUT IMAGEM-->
            <!--Só precisa de um input desse na página, por isso, deixarei o ID controlando-->

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
                   <div class="col-md-12 input-conteudo">
                                
                                <div class="input-imagem" title="Campo para Imagem da Personagem" id="input-im-ImagemdoPersonagem"
                                     style="background-image:url(<?php echo $im_psna; ?>)"></div>
                                
                                <input value="<?php echo $im_psna; ?>" 
                                       accept='.png,.jpg' type='file' class="imgUploader" name="im_psna"/>
                                
                                <a class="input-imagem-reset" title="Clique para resetar a Imagem da História" alt="Clique para resetar a Imagem do Personagem">
                                    <i class="fa fa-ban"></i>
                                </a>
								
						<div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="im_psna_dets" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $im_psna_dets; ?></textarea>
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
                            <input name="nm_psna" value="<?php echo $nm_psna; ?>" type="text" class="form-control" placeholder="Placeholder para Nome" id="input-tx-Nome"/>
                        </div>
						<div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="nm_psna_dets" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $nm_psna_dets; ?></textarea>
                            </div>
                        </div>							
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
                    <label class="col-md-11 input-label" for="input-tx-DatadeNascimento">Sexo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-checkbox" id="input-ckbx-Sexo">
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="M" name="sexo_psna" id ="ckbx-Sexo-opt" <?php if($sexo_psna == "M"){ echo "checked";} ?>/>
                                <label for="ckbx-0-opt1">Masculino</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="F" name="sexo_psna" id ="ckbx-Sexo-opt1" <?php if($sexo_psna == "F"){ echo "checked";} ?>/>
                                <label for="ckbx-0-opt1">Feminino</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="O" name="sexo_psna" id ="ckbx-Sexo-opt2" <?php if($sexo_psna == "O"){ echo "checked";} ?>/>
                                <label for="ckbx-0-opt2">Outro</label>
                            </div>                            
                        </div>
                        </div>
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
			
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
                            <input name="dt_nsc" value="<?php echo $dt_nsc; ?>" type="date" class="form-control" placeholder="Placeholder para Data de Nascimento" id="input-tx-DatadeNascimento"/>
                        </div>
						<div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="dt_nsc_dets" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $dt_nsc_dets; ?></textarea>
                            </div>
                        </div>	
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
                                <option>Samambaia</option>
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
                                 id="cls">
                                <div class="input-group"> 
									<div class="col-md-10" style="padding-right: 0px;">
										<select class="form-control select2" multiple="multiple">
											<option>Pandaren</option>
										</select>
									</div>
                                    <span class="input-group-btn incluir-adicionar">
                                        <button class="btn btn-azul incluir-btn-adicionar" type="button" data-toggle="modal" id="btnFormCls" data-target="#formCls">Criar Classe</button>
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
						<input type="hidden" value="<?php echo $nm_psna; ?>" id="teste"></input>
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&minmax[Quantidade](Quase Inexistente, Baixa, Média, Alta, Abundante)&minmax[Reputação](Odiado, Desvalorizado, Neutro, Respeitado, Venerado)" 
                                 id="pfs" value="<?php echo $nm_psna; ?>">                           <div class="input-group">
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
                                    <input title="Seleciona todas as opções"
					   <?php echo(count($vsi_psna)==3? "checked": "") ?>
                                           type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                    <label for="ckbx-Visibilidade-mestre">Todos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_psna[]" value="1" 
                                           <?php echo(in_array(1, $vsi_psna)? "checked": "") ?>
                                           title="Permite que sua equipe possa visualizar essa história"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_psna[]" value="2"
                                           <?php echo(in_array(2, $vsi_psna)? "checked": "") ?>
                                           title="Permite que todos os seus amigos possam visualizar essa história"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_psna[]" value="4"
                                           <?php echo(in_array(4, $vsi_psna)? "checked": "") ?>
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
        <!-- ABA APARÊNCIA -->
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
                            <textarea name="dcr_bsca" value="" placeholder="Placeholder para Descrição Básica" title="Descrição Básica" id="input-txarea-DescricaoBasica"><?php echo $dcr_bsca; ?></textarea>
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
                           <input type="text" name="h_psna" data-minmax-valores="Anão, Baixo, Normal, Alto, Gigante" class="input-minmax" value="<?php echo $h_psna; ?>" id="input-minmax-Altura"></input>
						</div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="h_psna_dets" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $h_psna_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-minmax-Peso">Peso</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">					
                            <input type="text" name="peso_psna" data-minmax-valores="Raquítico, Magro, Normal, Gordo, Obeso"  class="input-minmax" value="<?php echo $peso_psna; ?>" id="input-minmax-Peso" ></input>							
						</div>
						
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="peso_pnsa_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $peso_pnsa_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-minmax-PorteFisico">Porte Físico</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input type="text" name="prte_fsco" data-minmax-valores="Frangote, Fraco, Normal, Atlético, Musculoso" class="input-minmax" value="<?php echo $prte_fsco; ?>" id="input-minmax-PorteFisico"></input>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="prte_fsco_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $prte_fsco_dets; ?></textarea>
                            </div>
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
                            <input name="tip_pele" value="<?php echo $tip_pele; ?>" type="text" class="form-control" placeholder="Placeholder para Tipo de Pele" id="input-tx-TipodePele"/>
                        </div>
                        <!--DETALHES--> 
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="tip_pele_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $tip_pele_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-tx-Cabelo">Cabelo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input name="cblo_pnsa" value="<?php echo $cblo_pnsa; ?>" type="text" class="form-control" placeholder="Placeholder para Cabelo" id="input-tx-TipodePele"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="cblo_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $cblo_psna_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-tx-Vestimentas">Vestimentas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input name="vstm_psna" value="<?php echo $vstm_psna; ?>" type="text" class="form-control" placeholder="Placeholder para Vestimentas" id="input-tx-Vestimentas"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="vstm_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $vstm_psna_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-tx-Acessorios">Acessórios</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input name="acsr_psna" value="<?php echo $acsr_psna; ?>" type="text" class="form-control" placeholder="Placeholder para Acessórios" id="input-tx-Acessorios"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="acsr_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $acsr_psna_dets; ?></textarea>
                            </div>
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
        <!-- FINAL - ABA APARÊNCIA -->
        <!-- ABA HABILIDADES -->
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
                            <input name="cptc_pst" value="<?php echo $cptc_pst ?>" type="text" class="form-control" placeholder="Placeholder para Competências Positivas" id="input-tx-CompetenciasPositivas"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="cptc_pst_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $cptc_pst_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-tx-CompetenciasNegativas">Competências Negativas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input name="cptc_ngt" value="<?php echo $cptc_ngt; ?>" type="text" class="form-control" placeholder="Placeholder para Competências Negativas" id="input-tx-CompetenciasNegativas"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="cptc_ngt_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $cptc_ngt_dets; ?></textarea>
                            </div>
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
                            <input type="text" name="almt_psna" data-minmax-valores="Maléfico, Perverso, Neutro, Bondoso, Santo" class="input-minmax" value="<?php echo $almt_psna; ?>" id="input-minmax-Alinhamento"></input>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="almt_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $almt_psna_dets; ?></textarea>
                            </div>
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
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&minmax[Poder](Muito fraca, Fraca, Normal, Forte, Muito forte)" 
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
                    <label class="col-md-11 input-label" for="input-incr-HabilidadesMágicas">Habilidades Mágicas</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <div class="input-incluir" 
                                 data-inputs-internos="tx[Nome]&txarea[Descrição]&minmax[Poder](Muito fraco, Fraco, Normal, Forte, Muito forte)"  
                                 id="input-incr-HabilidadesMágicas">
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
        <!-- FINAL - ABA HABILIDADES -->
        <!-- ABA HISTÓRIA -->
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
                            <input name="papl_hist" value="<?php echo $papl_hist; ?>" type="text" class="form-control" placeholder="Placeholder para Papel na História" id="input-tx-PapelnaHistoria"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="papl_hist_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $papl_hist_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-txarea-EnvolvimentonaHistoria">Envolvimento na História</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea name="envl_hist" value="" placeholder="Placeholder para Envolvimento na História" title="Envolvimento na História" id="input-txarea-EnvolvimentonaHistoria"><?php echo $envl_hist; ?></textarea>
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
                            <textarea name="mmt_mact" value="" placeholder="Placeholder para Momento Marcante" title="Momento Marcante" id="input-txarea-MomentoMarcante"><?php echo $mmt_mact; ?></textarea>
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
                            <input name="objt_ppl" value="<?php echo $objt_ppl; ?>" type="text" class="form-control" placeholder="Placeholder para Objetivo Principal" id="input-tx-ObjetivoPrincipal"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="objt_ppl_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $objt_ppl_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-tx-ObjetivoParalelo">Objetivo Paralelo</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input name="objt_pllo" value="<?php echo $objt_pllo; ?>" type="text" class="form-control" placeholder="Placeholder para Objetivo Paralelo" id="input-tx-ObjetivoParalelo"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="objt_pllo_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $objt_pllo_dets; ?></textarea>
                            </div>
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
                            <textarea name="mtvc_psna" value="" placeholder="Placeholder para Motivações" title="Motivações" id="input-txarea-Motivacoes"><?php echo $mtvc_psna; ?></textarea>
                        </div>
                        <!--NÃO TEM DETALHES-->
                    </div>
                    <!--FINAL - INPUT CORPO-->
                </div>
            </div>
            <!--FINAL - INPUT TEXTOAREA-->
        </div>
        <!-- FINAL - ABA HISTÓRIA -->
        <!-- ABA RELAÇÕES -->
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
        <!-- FINAL - ABA RELAÇÕES -->
        <!-- ABA PASSADO -->
        <div id="abaPassado" class="container tab-pane fade"><br>
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
                            <input name="evt_mact" value="<?php echo $evt_mact; ?>" type="text" class="form-control" placeholder="Placeholder para Evento Marcante" id="input-tx-EventoMarcante"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="evt_mact_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $evt_mact_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-tx-PerdaMarcante">Perda Marcante</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <input name="pda_mact" value="<?php echo $pda_mact; ?>" type="text" class="form-control" placeholder="Placeholder para Perda Marcante" id="input-tx-PerdaMarcante"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="pda_mact_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Campo de texto para detalhes" title="Digite seu texto aqui"><?php echo $pda_mact_dets; ?></textarea>
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
                    <label class="col-md-11 input-label" for="input-txarea-Medos">Medos</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea name="medo_psna" value="" placeholder="Placeholder para Medos" title="Medos" id="input-txarea-Medos"><?php echo $medo_psna; ?></textarea>
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
                            <textarea name="segd_psna" value="" placeholder="Placeholder para Segredos" title="Segredos" id="input-txarea-Segredos"><?php echo $segd_psna; ?></textarea>
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
        <!-- FINAL - ABA PASSADO -->
            </div>
    <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
    <div class="col-md-12 form-controle">
	<input type="hidden" name="pk_psna" value="<?php echo $pk_psna; ?>">
    <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
            Salvar Personagem
    </button>
    </div>
	</form>
	
	
	
</div>