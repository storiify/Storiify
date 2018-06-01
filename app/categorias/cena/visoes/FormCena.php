<?php 

$resultado = $controlador->getResultados();

if(empty((array)$resultado)){
    $nome = "Cena";
    // PK
    $pk_cena = '';
    // Aba 1
    $im_cena = './imagens/sem-foto.png';
    $im_cena_dets = '';
    $tit_cena = '';
    $tit_cena_dets = '';
	$dt_hora = '';
	$dt_hora_dets = '';
    $vsi_cena = array();
    // Aba 2
    $rsm_cena = '';
    $desm_cena = '';
}else{
    $cena = (array)$resultado;
    foreach ($cena as $key => $value) {
	$$key = $value;
    }
    $nome = (isset($tit_cena)? substr($tit_cena, 0,25).'...':"Cena sem nome!");
    $vsi_cena = parseCheckbox($vsi_cena);
}

?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?php echo $nome; ?></h1>
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
    <form action="?categoria=historia&acao=salvar" method="post" enctype="multipart/form-data">
        <!-- CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="tab-content">
            <!--ABA GERAL-->
            <div id="abaGeral" class="container tab-pane active">
                <!--IMAGEM DA CENA - INPUT IMAGEM-->
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
                                     style="background-image:url(<?php echo $im_cena; ?>)"></div>
                                
                                <input value="" accept="image/*" type='file' class="imgUploader" name="im_cena"/>
                                
                                <a class="input-imagem-reset" title="Clique para resetar a Imagem da Cena" alt="Clique para resetar a Imagem da Cena">
                                    <i class="fa fa-ban"></i>
                                </a>
                                
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="im_cena_dets" placeholder="Digite aqui os detalhes para Imagem Principal" 
                                              title="Detalhes para Imagem Principal"
                                              maxlength="1000"><?php echo $im_cena_dets; ?></textarea>
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
                                <input name="tit_cena" value="<?php echo $tit_cena?>" 
                                       placeholder="Digite aqui o Título da Cena"
                                       title="Campo para Título da Cena"
                                       maxlength="60" type="text"
                                       class="form-control" id="input-tx-TitulodaCena"/>
                            </div>
                            <!--DETALHES-->
                            <div class="col-md-12 input-detalhes">
                                <a class="detalhes-link">Adicionar Detalhes</a>
                                <div class="detalhes-conteudo">
                                    <textarea name="tit_cena_dets" placeholder="Digite aqui os detalhes do Título da Cena" 
                                              title="Campo para detalhes do Título da Cena"
                                              maxlength="1000"><?php echo $tit_cena_dets; ?></textarea>
                                </div>
                            </div>
                            <!--FINAL - DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
				<!--RESUMO DA CENA - INPUT TEXTOAREA-->
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
                        <label class="col-md-11 input-label" for="input-txarea-ResumoDaCena">Resumo da Cena</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="rsm_cena" placeholder="Digite aqui o Resumo da cena" 
                                          title="Campo para o Resumo da cena" 
                                          id="input-txarea-ResumoDaCena"
                                          maxlength="200"><?php echo $rsm_cena; ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
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
                                    <input title="Seleciona todas as opções"
					   <?php echo(count($vsi_cena)==3? "checked": "") ?>
                                           type="checkbox" id ="ckbx-Visibilidade-mestre"/>
                                    <label for="ckbx-Visibilidade-mestre">Todos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_cena[]" value="1" 
                                           <?php echo(in_array(1, $vsi_cena)? "checked": "") ?>
                                           title="Permite que sua equipe possa visualizar essa cena"
                                           type="checkbox" id ="ckbx-Visibilidade-opt1"/>
                                    <label for="ckbx-Visibilidade-opt1">Equipe</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_cena[]" value="2"
                                           <?php echo(in_array(2, $vsi_cena)? "checked": "") ?>
                                           title="Permite que todos os seus amigos possam visualizar essa cena"
                                           type="checkbox" id ="ckbx-Visibilidade-opt2"/>
                                    <label for="ckbx-Visibilidade-opt2">Amigos</label>
                                </div>
                                <div class="form-check-inline ckbox-servo">
                                    <input name="vsi_cena[]" value="4"
                                           <?php echo(in_array(4, $vsi_cena)? "checked": "") ?>
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
            <div id="abaDesenvolvimento" class="container tab-pane fade"><br>
                <!--DESENVOLVIMENTO DA CENA - INPUT TEXTOAREA-->
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
                        <label class="col-md-11 input-label" for="input-txarea-DesenvolvimentoDaCena">Desenvolvimento da Cena</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <textarea name="desm_cena" placeholder="Digite aqui o Desenvolvimento da Cena" 
                                          title="Campo para o Desenvolvimento da Cena" 
                                          id="input-txarea-DesenvolvimentoDaCena"
                                          maxlength="1000"><?php echo $desm_cena; ?></textarea>
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
            <input type="hidden" name="pk_cena" value="<?php echo $pk_cena; ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar Cena
            </button>
        </div>
    </form>
</div>