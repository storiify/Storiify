<?php $historiaSelecionada = sessao()->getHistoriaSelecionada();
$resultadoSelect = $controlador->getResultadosSelect();

$resultado = new ModeloPersonagem(array());
$resultado = ($controlador->getResultados() == null ?
        new ModeloPersonagem(array()) : $controlador->getResultados());

?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas();?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?= (empty($resultado->nm_psna()) ? ModeloPersonagem::$nomeSingular : $resultado->nm_psna(30)) ?></h1>
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
							 style="background-image:url(<?= $resultado->im_psna() ?>)"></div>
						
						<input value="<?= $resultado->im_psna()?>" 
							   accept='.png,.jpg' type='file' class="imgUploader" name="im_psna"/>
						
						<a class="input-imagem-reset" title="Clique para resetar a Imagem da História" alt="Clique para resetar a Imagem do Personagem">
							<i class="fa fa-ban"></i>
						</a>
								
						<div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="im_psna_dets" placeholder="Digite Aqui os Detalhes da Imagem do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->im_psna_dets() ?></textarea>
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
                            <input name="nm_psna" value="<?= $resultado->nm_psna() ?>" type="text" class="form-control" placeholder="Digite Aqui o Nome do Personagem" id="input-tx-Nome" maxlength="45"/>
                        </div>
						<div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="nm_psna_dets" placeholder="Digite Aqui os Detalhes do Nome do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->nm_psna_dets() ?></textarea>
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
                                <input type="radio" value="M" name="sexo_psna" id ="ckbx-Sexo-opt" <?= ($resultado->sexo_psna() == "M") ? "checked" : ""; ?>/>
                                <label for="ckbx-0-opt1">Masculino</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="F" name="sexo_psna" id ="ckbx-Sexo-opt1" <?= ($resultado->sexo_psna() == "F") ? "checked" : ""; ?>/>
                                <label for="ckbx-0-opt1">Feminino</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="O" name="sexo_psna" id ="ckbx-Sexo-opt2" <?= ($resultado->sexo_psna() == "O") ? "checked" : ""; ?>/>
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
                            <input name="dt_nsc" value="<?= $resultado->dt_nsc(); ?>" type="date" class="form-control" placeholder="Digite Aqui a Data de Nascimento do Personagem" id="input-tx-DatadeNascimento"/>
                        </div>
						<div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="dt_nsc_dets" placeholder="Digite Aqui os Detalhes do Nascimento do Personagem" title="Digite seu texto aqui" maxlength="1000"><?php echo $resultado->dt_nsc_dets(); ?></textarea>
                            </div>
                        </div>	
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
                            <select class="form-control select2 input-textoselect" name="fk_lczc_natl" id="input-txselr-LocalizacaoNatal">
                                <option value="" selected>-- Localidades de <?= $historiaSelecionada->tit_hist() ?> --</option>
                                        <?php
                                        foreach ($resultadoSelect->relLczc as $localizacaoSelect) {
                                        $id = $localizacaoSelect["pk_lczc"];
                                        $nome = $localizacaoSelect["nm_lczc"];
                                        $isSelected = ($resultado->fk_lczc_natl() == $id ? "selected" : "");
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
                            <div class="col-md-12 input-conteudo row">
                                <div class="col-md-11 input-incluir">
                                    <select class="form-control select2 input-textoselect" name="fk_raca" id="input-txselr-Raca">
									    <option value="" selected>-- Raças de <?= $historiaSelecionada->tit_hist() ?> --</option>

										<?php
                                        foreach ($resultadoSelect->raca as $racaSelect) {
                                        $id = $racaSelect["pk_raca"];
                                        $nome = $racaSelect["nm_raca"];
                                        $isSelected = ($resultado->fk_raca() == $id ? "selected" : "");
                                        echo "<option value='$id' $isSelected>$nome</option>";
                                        }
										?>
                                    </select>
                                </div>
                                <span class="incluir-adicionar col-md-1">
                                    <button class="btn btn-azul incluir-btn-adicionar" type="button"
                                            data-toggle="modal" data-target="#modalCadastrarRaca" >
                                        Criar Novo
                                    </button>
                                </span>
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
                        <label class="col-md-11 input-label" for="input-txselr-classe">Classe</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo row">
                                <div class="col-md-11 input-incluir">
                                    <select class="form-control select2 input-textoselect" multiple="multiple"  name="fk_classe[]" id="input-txselr-classe">
                                        <?php
                                        foreach ($resultadoSelect->classe as $classeSelect) {
                                            $classe = new ModeloClasse($classeSelect);
                                            $id = $classe->pk_cls();
                                            $nome = $classe->nm_cls();
                                            $isSelected = "";
                                            foreach ($resultadoSelect->idsClasse as $idsClasse) {
                                                if ($id == $idsClasse['fk_cls']) {
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
                                            data-toggle="modal" data-target="#modalCadastrarClasse" >
                                        Criar Novo
                                    </button>
                                </span>
                            </div>
                            <!--NÃO TEM DETALHES-->
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
                        <div class="col-md-12 input-conteudo row">
                            <div class="col-md-11 input-incluir">
                                <select class="form-control select2 input-textoselect" multiple="multiple"  name="fk_profissao[]" id="input-txselr-profissao">
                                <?php
                                foreach ($resultadoSelect->pfs as $pfsSelect) {
                                        $pfs = new ModeloProfissao($pfsSelect);
                                        $id = $pfs->pk_pfs();
                                        $nome = $pfs->nm_pfs();
                                        $isSelected = "";
                                        foreach ($resultadoSelect->idsPfs as $idPfs) {
                                                if ($id == $idPfs['fk_pfs']) {
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
                                                data-toggle="modal" data-target="#modalCadastrarProfissao" >
                                        Criar Novo
                                </button>
                            </span>
                        </div>
						<!--NÃO TEM DETALHES-->
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
                                    <input title="Seleciona todas as opções" <?= (count($resultado->vsi_psna()) == 3 ? "checked" : "") ?>
                                           type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                    <label for="ckbx-Visibilidade-mestre">Todos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_psna[]" value="1" <?= (in_array(1, $resultado->vsi_psna()) ? "checked" : "") ?>
                                           title="Permite que seus amigos possam visualizar essa Localização"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_psna[]" value="2" <?= (in_array(2, $resultado->vsi_psna()) ? "checked" : "") ?>
                                           title="Permite que sua equipe possa visualizar essa Localização"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_psna[]" value="4" <?= (in_array(4, $resultado->vsi_psna()) ? "checked" : "") ?>
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
                            <textarea name="dcr_bsca" value="" placeholder="Digite Aqui a Descrição Básica do Personagem" title="Descrição Básica" id="input-txarea-DescricaoBasica" maxlength="1000"><?= $resultado->dcr_bsca(); ?></textarea>
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
                           <input type="text" name="h_psna" data-minmax-valores="Anão, Baixo, Normal, Alto, Gigante" class="input-minmax" value="<?= $resultado->h_psna(); ?>" id="input-minmax-Altura"></input>
						</div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="detalhes-conteudo">
                                <textarea name="h_psna_dets" placeholder="Digite Aqui os Detalhes Da Altura do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->h_psna_dets(); ?></textarea>
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
                            <input type="text" name="peso_psna" data-minmax-valores="Raquítico, Magro, Normal, Gordo, Obeso"  class="input-minmax" value="<?= $resultado->peso_psna(); ?>" id="input-minmax-Peso" ></input>							
						</div>
						
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="peso_pnsa_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes do Peso do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->peso_pnsa_dets(); ?></textarea>
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
                            <input type="text" name="prte_fsco" data-minmax-valores="Frangote, Fraco, Normal, Atlético, Musculoso" class="input-minmax" value="<?= $resultado->prte_fsco(); ?>" id="input-minmax-PorteFisico"></input>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="prte_fsco_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes do Porte Físico do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->prte_fsco_dets(); ?></textarea>
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
                            <input name="tip_pele" value="<?= $resultado->tip_pele(); ?>" type="text" class="form-control" placeholder="Digite Aqui o Tipo De Pele do Personagem" id="input-tx-TipodePele" maxlength="45"/>
                        </div>
                        <!--DETALHES--> 
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="tip_pele_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes da Pele do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->tip_pele_dets(); ?></textarea>
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
                            <input name="cblo_pnsa" value="<?= $resultado->cblo_pnsa(); ?>" type="text" class="form-control" placeholder="Digite Aqui o Tipo de Cabelo do Personagem" id="input-tx-TipodePele" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="cblo_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes do Cabelo do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->cblo_psna_dets(); ?></textarea>
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
                            <input name="vstm_psna" value="<?= $resultado->vstm_psna(); ?>" type="text" class="form-control" placeholder="Digite Aqui os Tipos de Vestimentas do Personagem" id="input-tx-Vestimentas" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="vstm_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes da Vestimenta do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->vstm_psna_dets(); ?></textarea>
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
                            <input name="acsr_psna" value="<?= $resultado->acsr_psna(); ?>" type="text" class="form-control" placeholder="Digite Aqui os Acessórios do Personagem" id="input-tx-Acessorios" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="acsr_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes dos Acessórios do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->acsr_psna_dets(); ?></textarea>
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
                        <div class="col-md-12 input-conteudo row">
                            <div class="col-md-11 input-incluir">
                                <select class="form-control select2 input-textoselect" multiple="multiple"  name="fk_objeto[]" id="input-txselr-objeto">
                                    <?php
                                    foreach ($resultadoSelect->obj as $objSelect) {
                                            $obj = new ModeloObjeto($objSelect);
                                            $id = $obj->pk_obj();
                                            $nome = $obj->nm_obj();
                                            $isSelected = "";
                                            foreach ($resultadoSelect->idsObj as $idObj) {
                                                    if ($id == $idObj['fk_obj']) {
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
                                                data-toggle="modal" data-target="#modalCadastrarObjeto" >
                                        Criar Novo
                                </button>
                            </span>
                        </div>
                    <!--NÃO TEM DETALHES-->
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
                            <input name="cptc_pst" value="<?= $resultado->cptc_pst() ?>" type="text" class="form-control" placeholder="Digite Aqui as Competências Positivas do Personagem" id="input-tx-CompetenciasPositivas" maxlength="45" />
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="cptc_pst_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes das Competências Positivas do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->cptc_pst_dets(); ?></textarea>
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
                            <input name="cptc_ngt" value="<?= $resultado->cptc_ngt(); ?>" type="text" class="form-control" placeholder="Digite Aqui as Competências Negativas Do Personagem" id="input-tx-CompetenciasNegativas" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="cptc_ngt_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes da Competencias Negativas do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->cptc_ngt_dets(); ?></textarea>
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
                            <input type="text" name="almt_psna" data-minmax-valores="Maléfico, Perverso, Neutro, Bondoso, Santo" class="input-minmax" value="<?= $resultado->almt_psna(); ?>" id="input-minmax-Alinhamento" maxlength="45"></input>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="almt_psna_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes do Alinhamento do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->almt_psna_dets(); ?></textarea>
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
                        <div class="col-md-12 input-conteudo row">
                            <div class="col-md-11 input-incluir">
                                <select class="form-control select2 input-textoselect" multiple="multiple"  name="fk_hbld_fsca[]" id="input-txselr-habilidade-fisica">
                                    <?php
                                    foreach ($resultadoSelect->hbld_fsca as $hbld_fscaSelect) {
                                        $hbld_fsca = new ModeloHabilidade_fisica($hbld_fscaSelect);
                                        $id = $hbld_fsca->pk_hbld_fsca();
                                        $nome = $hbld_fsca->nm_hbld_fsca();
                                        $isSelected = "";
                                        foreach ($resultadoSelect->idsHbld_fsca as $idHbld_fsca) {
                                            if ($id == $idHbld_fsca['fk_hbld_fsca']) {
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
                                                data-toggle="modal" data-target="#modalCadastrarHabilidadeFisica" >
                                        Criar Novo
                                </button>
                            </span>
                        </div>
                    <!--NÃO TEM DETALHES-->
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
                        <div class="col-md-12 input-conteudo row">
                            <div class="col-md-11 input-incluir">
                                <select class="form-control select2 input-textoselect" multiple="multiple"  name="fk_hbld_mgca[]" id="input-txselr-habilidade-magica">
                                    <?php
                                    foreach ($resultadoSelect->hbld_mgca as $hbld_mgcaSelect) {
                                        $hbld_mgca = new ModeloHabilidade_magica($hbld_mgcaSelect);
                                        $id = $hbld_mgca->pk_hbld_mgca();
                                        $nome = $hbld_mgca->nm_hbld_mgca();
                                        $isSelected = "";
                                        foreach ($resultadoSelect->idsHbld_mgca as $idHbld_mgca) {
                                            if ($id == $idHbld_mgca['fk_hbld_mgca']) {
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
                                                data-toggle="modal" data-target="#modalCadastrarHabilidademagica" >
                                        Criar Novo
                                </button>
                            </span>
                        </div>
                    <!--NÃO TEM DETALHES-->
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
                            <input name="papl_hist" value="<?= $resultado->papl_hist(); ?>" type="text" class="form-control" placeholder="Digite Aqui o Papel na História que o Personagem possui" id="input-tx-PapelnaHistoria" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="papl_hist_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes do Pepel na História do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->papl_hist_dets(); ?></textarea>
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
                            <textarea name="envl_hist" value="" placeholder="Digite Aqui o Envolvimento na História do Personagem" title="Envolvimento na História" id="input-txarea-EnvolvimentonaHistoria" maxlength="1000"><?= $resultado->envl_hist(); ?></textarea>
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
                            <textarea name="mmt_mact" value="" placeholder="Digite Aqui o Momento Marcante do Personagem" title="Momento Marcante" id="input-txarea-MomentoMarcante" maxlength="1000"><?= $resultado->mmt_mact(); ?></textarea>
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
                            <input name="objt_ppl" value="<?= $resultado->objt_ppl(); ?>" type="text" class="form-control" placeholder="Digite Aqui o Objetivo Principal Do Personagem" id="input-tx-ObjetivoPrincipal" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="objt_ppl_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes do Objetivo Principal do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->objt_ppl_dets(); ?></textarea>
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
                            <input name="objt_pllo" value="<?= $resultado->objt_pllo(); ?>" type="text" class="form-control" placeholder="Digite Aqui o Objetivo Paralelo do Personagem" id="input-tx-ObjetivoParalelo" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="objt_pllo_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes do Objetivo Paralelo do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->objt_pllo_dets(); ?></textarea>
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
                            <select class="form-control select2 input-textoselect" name="fk_cena_into_erdo" id="input-txselr-LocalizacaoNatal">
                                <option value="" selected>-- Cenas de <?= $historiaSelecionada->tit_hist() ?> --</option>
									<?php
									foreach ($resultadoSelect->cena as $cenaSelect) {
									$id = $cenaSelect["pk_cena"];
									$nome = $cenaSelect["tit_cena"];
									$isSelected = ($resultado->fk_cena_into_erdo() == $id ? "selected" : "");
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
                    <label class="col-md-11 input-label" for="input-txarea-Motivacoes">Motivações</label>
                    <!--FINAL - INPUT LABEL-->
                    <!--INPUT CORPO-->
                    <div class="col-md-12 input-corpo">
                        <div class="col-md-12 input-conteudo">
                            <textarea name="mtvc_psna" value="" placeholder="Digite Aqui as Motivações do Personagem" title="Motivações" id="input-txarea-Motivacoes" maxlength="1000"><?= $resultado->mtvc_psna(); ?></textarea>
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
                            <select class="form-control select2 input-textoselect" name="familia[]" multiple="multiple" id="input-txselr-Familia">
                                <?php
                               foreach ($resultadoSelect->psna as $familiaSelect) {
                                    $personagem = new ModeloPersonagem($familiaSelect);
                                    $id = $personagem->pk_psna();
                                    $nome = $personagem->nm_psna();
                                    $isSelected = "";
                                    foreach ($resultadoSelect->idsFamilia as $idsFamilia) {
                                        if ($id == $idsFamilia['fk_psna2']) {
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
                            <select class="form-control select2 input-textoselect" name="amigos[]" multiple="multiple" id="input-txselr-Amigos">
                                <?php
                                foreach ($resultadoSelect->psna as $AmigosSelect) {
                                $personagem = new ModeloPersonagem($AmigosSelect);
                                $id = $personagem->pk_psna();
                                $nome = $personagem->nm_psna();
                                $isSelected = "";
                                foreach ($resultadoSelect->idsAmigos as $idsAmigos) {
                                    if ($id == $idsAmigos['fk_psna2']) {
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
                            <select class="form-control select2 input-textoselect" name="lacos[]" multiple="multiple" id="input-txselr-LacosAfetivos">
                               <?php
                                foreach ($resultadoSelect->psna as $LacosSelect) {
                                $personagem = new ModeloPersonagem($LacosSelect);
                                $id = $personagem->pk_psna();
                                $nome = $personagem->nm_psna();
                                $isSelected = "";
                                foreach ($resultadoSelect->idsLacos as $idslacos) {
                                    if ($id == $idslacos['fk_psna2']) {
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
                            <select class="form-control select2 input-textoselect" name="companheiros[]" multiple="multiple" id="input-txselr-CompanheirosnaHistoria">
                                <?php
                                foreach ($resultadoSelect->psna as $LacosSelect) {
                                $personagem = new ModeloPersonagem($LacosSelect);
                                $id = $personagem->pk_psna();
                                $nome = $personagem->nm_psna();
                                $isSelected = "";
                                foreach ($resultadoSelect->idsComp as $idsComp) {
                                    if ($id == $idsComp['fk_psna2']) {
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
                            <select class="form-control select2 input-textoselect" name="rivais[]" multiple="multiple" id="input-txselr-Rivais">
                                <?php
                                foreach ($resultadoSelect->psna as $LacosSelect) {
                                $personagem = new ModeloPersonagem($LacosSelect);
                                $id = $personagem->pk_psna();
                                $nome = $personagem->nm_psna();
                                $isSelected = "";
                                foreach ($resultadoSelect->idsRivais as $idsRivais) {
                                    if ($id == $idsRivais['fk_psna2']) {
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
                            <input name="evt_mact" value="<?= $resultado->evt_mact(); ?>" type="text" class="form-control" placeholder="Digite Aqui um Evento Marcante do Personagem" id="input-tx-EventoMarcante" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="evt_mact_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os detalhes do Evento Marcante do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->evt_mact_dets(); ?></textarea>
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
                            <input name="pda_mact" value="<?= $resultado->pda_mact(); ?>" type="text" class="form-control" placeholder="Digite Aqui uma Perda Marcante do Personagem" id="input-tx-PerdaMarcante" maxlength="45"/>
                        </div>
                        <!--DETALHES-->
                        <div class="col-md-12 input-detalhes">
                            <a class="detalhes-link">Adicionar Detalhes</a>
							<div class="conteudoDetalhes col-sm-12 col-md-offset-1" style="display:none;">
                                <textarea name="pda_mact_dets" value="" id="txtAreaAltura" class="form-control" placeholder="Digite Aqui os Detalhes da Perda Marcante do Personagem" title="Digite seu texto aqui" maxlength="1000"><?= $resultado->pda_mact_dets(); ?></textarea>
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
                            <textarea name="medo_psna" value="" placeholder="Digite Aqui Medos do Personagem" title="Medos" id="input-txarea-Medos" maxlength="1000"><?= $resultado->medo_psna(); ?></textarea>
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
                            <textarea name="segd_psna" value="" placeholder="Digite Aqui Segredos do Personagem" title="Segredos" id="input-txarea-Segredos" maxlength="1000"><?= $resultado->segd_psna(); ?></textarea>
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
                        <div class="col-md-12 input-conteudo row">
                            <div class="col-md-11 input-incluir">
                                <select class="form-control select2 input-textoselect" multiple="multiple"  name="fk_lembranca[]" id="input-txselr-lembranca">
                                <?php
                                foreach ($resultadoSelect->lmca as $lmcaSelect) {
                                    $lmca = new ModeloLembranca($lmcaSelect);
                                    $id = $lmca->pk_lmca();
                                    $nome = $lmca->dcr_lmca();
                                    $isSelected = "";
                                    foreach ($resultadoSelect->idsLmca as $idsLmca) {
                                            if ($id == $idsLmca['fk_lmca']) {
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
                                                data-toggle="modal" data-target="#modalCadastrarLembranca" >
                                        Criar Novo
                                </button>
                            </span>
                        </div>
						<!--NÃO TEM DETALHES-->
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
	<input type="hidden" name="pk_psna" value="<?= $resultado->pk_psna(); ?>">
    <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
            Salvar Personagem
    </button>
    </div>
	</form>
	
	
	
</div>
