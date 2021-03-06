<?php
$resultado = $controlador->getResultados();
$msg = sessao()->getChave('msg');
sessao()->setChave('msg', null);
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas(); ?></div>
</div>

<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Perfil de Usuário</h1>
    </div>    
</div>

<div class="conteudo">
    <!--BOTÃO DE CRIAR NOVA INSTÂNCIA-->
    <div class='pos-cabecalho mx-auto'>
        <p class="texto-lista-categorias"><?= (isset($msg) ? $msg . "!" : "") ?></p>
    </div>

    <form action="?categoria=<?= $categoria ?>&acao=salvar" method="post" enctype="multipart/form-data">

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
                <label class="col-md-11 input-label" for="input-im-ImagemdoUsuario">Imagem</label>
                <!--FINAL - INPUT LABEL-->
                <!--INPUT CORPO-->
                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">

                        <div class="input-imagem" title="Campo para Imagem da Localização" id="input-im-ImagemdoUsuario"
                             style="background-image:url(<?= $resultado['im_usu'] ?>)"></div>

                        <input value="" accept='.png,.jpg,.jpeg' type='file' class="imgUploader" name="im_usu"/>
                        <input value="" type="hidden" name="im_usu_reset" class="request-reset"/>

                        <a class="input-imagem-reset" title="Clique para resetar a Imagem do Usuário" alt="Clique para resetar a Imagem do Usuário">
                            <i class="fa fa-ban"></i>
                        </a>
                    </div>
                </div>
                <!--FINAL - INPUT CORPO-->
            </div>
        </div>
        <!--FINAL - INPUT IMAGEM-->

        <div class="form-group">
            <div class="row">
                <div class="col-md-1 input-controle">
                    <button type="button" class="btn btn-input-controle minimizar">
                        <i class="fa fa-minus"></i>
                    </button>                      
                </div>
                <label class="col-md-11 input-label" for="nm_usu">Nome</label>

                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">
                        <input name="nm_usu" value="<?= $resultado['nm_usu'] ?>" 
                               placeholder="Digite aqui seu primeiro nome"
                               title="Digite aqui seu primeiro nome"
                               maxlength="20" type="text"
                               class="form-control" id="nm_usu"/>
                    </div>
                </div>		
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 input-controle">
                    <button type="button" class="btn btn-input-controle minimizar">
                        <i class="fa fa-minus"></i>
                    </button>                      
                </div>
                <label class="col-md-11 input-label" for="snm_usu">Sobrenome</label>

                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">
                        <input name="snm_usu" value="<?= $resultado['snm_usu'] ?>" 
                               placeholder="Digite aqui seu sobrenome"
                               title="Digite aqui seu sobrenome"
                               maxlength="80" type="text"
                               class="form-control" id="snm_usu"/>
                    </div>
                </div>		
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 input-controle">
                    <button type="button" class="btn btn-input-controle minimizar">
                        <i class="fa fa-minus"></i>
                    </button>                      
                </div>
                <label class="col-md-11 input-label" for="mail_usu">E-mail</label>

                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">
                        <input name="mail_usu" value="<?= $resultado['mail_usu'] ?>" 
                               placeholder="Digite aqui seu e-mail"
                               title="Digite aqui seu e-mail"
                               maxlength="100" type="email"
                               class="form-control" id="mail_usu"/>
                    </div>
                </div>		
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 input-controle">
                    <button type="button" class="btn btn-input-controle minimizar">
                        <i class="fa fa-minus"></i>
                    </button>                      
                </div>
                <label class="col-md-11 input-label" for="mail_usu">Senha</label>

                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">
                        <input name="snh_usu" value="" 
                               placeholder="Digite aqui sua senha"
                               title="Digite aqui sua senha"
                               maxlength="30" type="password"
                               class="form-control" id="snh_usu"/>
                    </div>
                </div>		
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 input-controle">
                    <button type="button" class="btn btn-input-controle minimizar">
                        <i class="fa fa-minus"></i>
                    </button>                      
                </div>
                <label class="col-md-11 input-label" for="apdo_usu">Apelido</label>

                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">
                        <input name="apdo_usu" value="<?= $resultado['apdo_usu'] ?>" 
                               placeholder="Digite aqui seu apelido"
                               title="Digite aqui seu apelido"
                               maxlength="20" type="text"
                               class="form-control" id="apdo_usu"/>
                    </div>
                </div>		
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 input-controle">
                    <button type="button" class="btn btn-input-controle minimizar">
                        <i class="fa fa-minus"></i>
                    </button>                      
                </div>
                <label class="col-md-11 input-label" for="dt_nsc">Data de Nascimento</label>

                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">
                        <input name="dt_nsc" value="<?= $resultado['dt_nsc'] ?>" 
                               placeholder="Digite aqui sua data de nascimento"
                               title="Digite aqui sua data de nascimento"
                               maxlength="30" type="date"
                               class="form-control" id="dt_nsc"/>
                    </div>
                </div>		
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-1 input-controle">
                    <button type="button" class="btn btn-input-controle minimizar">
                        <i class="fa fa-minus"></i>
                    </button>                      
                </div>
                <label class="col-md-11 input-label" for="sexo_usu">Sexo</label>

                <!--INPUT CORPO-->
                <div class="col-md-12 input-corpo">
                    <div class="col-md-12 input-conteudo">
                        <div class="input-checkbox" id="sexo_usu">
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="M" name="sexo_usu" id ="ckbx-Sexo-opt" <?= ($resultado['sexo_usu'] == "M") ? "checked" : ""; ?>/>
                                <label for="ckbx-Sexo-opt">Masculino</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="F" name="sexo_usu" id ="ckbx-Sexo-opt1" <?= ($resultado['sexo_usu'] == "F") ? "checked" : ""; ?>/>
                                <label for="ckbx-Sexo-opt1">Feminino</label>
                            </div>
                            <div class="form-check-inline ckbox-servo">
                                <input type="radio" value="O" name="sexo_usu" id ="ckbx-Sexo-opt2" <?= ($resultado['sexo_usu'] == "O") ? "checked" : ""; ?>/>
                                <label for="ckbx-Sexo-opt2">Outro</label>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!--FINAL - INPUT CORPO-->

            </div>
        </div>

        <div class="col-md-12 form-controle">
            <input type="hidden" name="pk_usu" value="<?= $resultado['pk_usu'] ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar Edição
            </button>
        </div>
    </form>

</div>