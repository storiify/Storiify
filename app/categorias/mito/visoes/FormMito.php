<?php
$resultado = new ModeloMito(array()); //Necessário para usar o autoComplete
$resultado = ($controlador->getResultados() == null ?
        new ModeloMito(array()) : $controlador->getResultados());
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>

<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?= (empty($resultado->nm_mito()) ? ModeloMito::$nomeSingular : $resultado->nm_mito(30)) ?></h1>
    </div>
</div>

<div class="conteudo">
    <!-- ABAS DE NAVEGAÇÃO -->
    <div class="tabs tabs-style-linemove">
        <nav>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#abaGeral"><span>Geral</span></a></li>
            </ul>
        </nav>
    </div>
    <!-- FINAL - ABAS DE NAVEGAÇÃO -->
    <form action="?categoria=<?= $categoria ?>&acao=salvar" method="post" enctype="multipart/form-data">
        <!-- CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="tab-content">
            <!--ABA GERAL-->
            <div id="abaGeral" class="container tab-pane active"> 
                <!--NOME - INPUT TEXTO-->
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
                                <input name="nm_mito" value="<?= $resultado->nm_mito() ?>" 
                                       placeholder="Digite aqui o Nome do Mito"
                                       title="Campo para Nome do Mito"
                                       maxlength="60" type="text"
                                       class="form-control" id="input-tx-Nome"/>
                            </div>
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTO-->
                <!--DESCRIÇÃO - INPUT TEXTOAREA-->
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
                                <textarea name="dcr_mito" value="" 
                                          placeholder="Digite aqui a Descrição do Mito" 
                                          title="Campo para Descrição do Mito" 
                                          id="input-txarea-Descricao"><?= $resultado->dcr_mito() ?></textarea>
                            </div>
                            <!--NÃO TEM DETALHES-->
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT TEXTOAREA-->
                <!--POPULARIDADE - INPUT MINMAX-->
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
                        <label class="col-md-11 input-label" for="input-minmax-Popularidade">Popularidade</label>
                        <!--FINAL - INPUT LABEL-->
                        <!--INPUT CORPO-->
                        <div class="col-md-12 input-corpo">
                            <div class="col-md-12 input-conteudo">
                                <input type="text" name="popd_mito" 
                                       data-minmax-valores="Anônima,Incomum,Conhecida,Popular,Dominante" class="input-minmax" 
                                       value="<?= $resultado->popd_mito() ?>" id="input-minmax-Popularidade"></input>
                            </div>
                        </div>
                        <!--FINAL - INPUT CORPO-->
                    </div>
                </div>
                <!--FINAL - INPUT MINMAX-->
            </div>
            <!--FIM - ABA GERAL-->
        </div>
        <!-- FINAL - CONTEÚDO DAS ABAS DE NAVEGAÇÃO -->
        <div class="col-md-12 form-controle">
            <input type="hidden" name="pk_mito" value="<?= $resultado->pk_mito() ?>">
            <input type="hidden" name="fk_hist" value="<?= $resultado->fk_hist() ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar <?= ModeloMito::$nomeSingular ?>
            </button>
        </div>
    </form>
</div>
