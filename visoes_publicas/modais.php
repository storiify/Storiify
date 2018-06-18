<!--MODAL RAÇA-->
<div class="modal fade" id="modalCadastrarRaca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Raça</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalRaca" class="form-horizontal">
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
                                    <input name="nm_raca" value="" 
                                           placeholder="Digite aqui o Nome da Raça"
                                           title="Campo para Nome da Raça"
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
                                    <textarea name="dcr_raca" value="" 
                                              placeholder="Digite aqui a Descrição da Raça" title="Campo para Descrição da Raça" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--APARÊNCIA - INPUT TEXTOAREA-->
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
                            <label class="col-md-11 input-label" for="input-txarea-Aparencia">Aparência</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo"> 
                                    <textarea name="apci_raca" value="" 
                                              placeholder="Digite aqui a Aparência da Raça" title="Campo para Aparência da Raça" 
                                              id="input-txarea-Aparencia"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Povoamento">Povoamento</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="pvmt_raca" 
                                           data-minmax-valores="Quase Inexistente, Baixo, Médio, Alto, Abundante" class="input-minmax" 
                                           value="" id="input-minmax-Povoamento"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--REPUTAÇÃO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Reputacao">Reputação</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="rptc_raca" 
                                           data-minmax-valores="Odiado, Desvalorizado, Neutro, Respeitado, Venerado" class="input-minmax" 
                                           value="" id="input-minmax-Reputacao"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_raca" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-raca-modal">
                            Salvar Raça
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--FINAL - MODAL RAÇA-->
<!--MODAL FAUNA-->
<div class="modal fade" id="modalCadastrarFauna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Fauna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalFauna" class="form-horizontal">
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
                                    <input name="nm_fna" value="" 
                                           placeholder="Digite aqui o Nome da Fauna"
                                           title="Campo para Nome da Fauna"
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
                                    <textarea name="dcr_fna" value="" 
                                              placeholder="Digite aqui a Descrição da Fauna" title="Campo para Descrição da Fauna" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--APARÊNCIA - INPUT TEXTOAREA-->
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
                            <label class="col-md-11 input-label" for="input-txarea-Aparencia">Aparência</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo"> 
                                    <textarea name="apci_fna" value="" 
                                              placeholder="Digite aqui a Aparência da Fauna" title="Campo para Aparência da Fauna" 
                                              id="input-txarea-Aparencia"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Povoamento">Povoamento</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="pvmt_fna" 
                                           data-minmax-valores="Quase Inexistente, Baixo, Médio, Alto, Abundante" class="input-minmax" 
                                           value="" id="input-minmax-Povoamento"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--AGRESSIVIDADE - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Agressividade">Agressividade</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="agsd_fna" 
                                           data-minmax-valores="Inofensivo, Calmo, Neutro, Bravo, Violento" class="input-minmax" 
                                           value="" id="input-minmax-Agressividade"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_fna" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-fauna-modal">
                            Salvar Fauna
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--FINAL - MODAL FAUNA-->

<div class="modal fade" id="modalCadastrarClasse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Classe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalClasse" class="form-horizontal">
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
                                    <input name="nm_cls" value="" 
                                           placeholder="Digite aqui o Nome da Classe"
                                           title="Campo para Nome da Classe"
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
                                    <textarea name="dcr_cls" value="" 
                                              placeholder="Digite aqui a Descrição da Classe" title="Campo para Descrição da Classe" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Quantidade">Quantidade</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="qt_cls" 
                                           data-minmax-valores="Quase Inexistente, Baixo, Médio, Alto, Abundante" class="input-minmax" 
                                           value="" id="input-minmax-Hostilidade"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--REPUTAÇÃO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Reputacao">Reputação</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="rptc_cls" 
                                           data-minmax-valores="Odiado, Desvalorizado, Neutro, Respeitado, Venerado" class="input-minmax" 
                                           value="" id="input-minmax-Reputacao"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_cls" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-classe-modal">
                            Salvar Classe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCadastrarProfissao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Profissão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalProfissao" class="form-horizontal">
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
                                    <input name="nm_pfs" value="" 
                                           placeholder="Digite aqui o Nome da Profissão"
                                           title="Campo para Nome da Profissão"
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
                                    <textarea name="dcr_pfs" value="" 
                                              placeholder="Digite aqui a Descrição da Profissão" title="Campo para Descrição da Profissão" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Quantidade">Quantidade</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="qt_pfs" 
                                           data-minmax-valores="Quase Inexistente, Baixo, Médio, Alto, Abundante" class="input-minmax" 
                                           value="" id="input-minmax-Hostilidade"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--REPUTAÇÃO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Reputacao">Reputação</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="rptc_pfs" 
                                           data-minmax-valores="Odiado, Desvalorizado, Neutro, Respeitado, Venerado" class="input-minmax" 
                                           value="" id="input-minmax-Reputacao"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_pfs" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-profissao-modal">
                            Salvar Profissão
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCadastrarObjeto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Objeto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalObjeto" class="form-horizontal">
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
                                    <input name="nm_obj" value="" 
                                           placeholder="Digite aqui o Nome do Objeto"
                                           title="Campo para Nome do Objeto"
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
                                    <textarea name="dcr_obj" value="" 
                                              placeholder="Digite aqui a Descrição do Objeto" title="Campo para Descrição do Objeto" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-txarea-Aparencia">Aparência</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo"> 
                                    <textarea name="apci_obj" value="" 
                                              placeholder="Digite aqui a Aparência do Objeto" title="Campo para Aparência do Objeto" 
                                              id="input-txarea-Aparencia"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--REPUTAÇÃO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-valoracao">Valoração</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="vlr_obj" 
                                           data-minmax-valores="Banal, Barato, Acessível, Caro, Exorbitante" class="input-minmax" 
                                           value="" id="input-minmax-Valoracao"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_obj" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-objeto-modal">
                            Salvar Objeto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCadastrarHabilidadeFisica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Habilidade Física</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalHabFisica" class="form-horizontal">
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
                                    <input name="nm_hbld_fsca" value="" 
                                           placeholder="Digite aqui o Nome da Habilidade Física"
                                           title="Campo para Nome da Habilidade Física"
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
                                    <textarea name="dcr_hbld_fsca" value="" 
                                              placeholder="Digite aqui a Descrição da Habilidade Física" title="Campo para Descrição da Habilidade Física" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Poder">Poder</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="podr_hbld_fsca" 
                                           data-minmax-valores="Muito Fraca, Fraca, Normal, Forte, Muito Forte" class="input-minmax" 
                                           value="" id="input-minmax-Poder"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--REPUTAÇÃO - INPUT MINMAX-->                  
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_hbld_fsca" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-habilidade-fisica-modal">
                            Salvar Habilidade Física
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCadastrarHabilidademagica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Habilidade Mágica</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalHabMagica" class="form-horizontal">
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
                                    <input name="nm_hbld_mgca" value="" 
                                           placeholder="Digite aqui o Nome da Habilidade Mágica"
                                           title="Campo para Nome da Habilidade Mágica"
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
                                    <textarea name="dcr_hbld_mgca" value="" 
                                              placeholder="Digite aqui a Descrição da Habilidade Mágica" title="Campo para Descrição da Habilidade Mágica" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Poder">Poder</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="podr_hbld_mgca" 
                                           data-minmax-valores="Muito Fraca, Fraca, Normal, Forte, Muito Forte" class="input-minmax" 
                                           value="" id="input-minmax-Poder"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--REPUTAÇÃO - INPUT MINMAX-->                  
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_hbld_mgca" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-habilidade-magica-modal">
                            Salvar Habilidade Mágica
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCadastrarLembranca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Lembranca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formModalLembranca" class="form-horizontal">                   
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
                                    <textarea name="dcr_lmca" value="" 
                                              placeholder="Digite aqui a Descrição da Lembrança" title="Campo para Descrição da Lembrança" 
                                              id="input-txarea-Descricao"></textarea>
                                </div>
                                <!--NÃO TEM DETALHES-->
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT TEXTOAREA-->
                    <!--POVOAMENTO - INPUT MINMAX-->
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
                            <label class="col-md-11 input-label" for="input-minmax-Poder">Apreciação</label>
                            <!--FINAL - INPUT LABEL-->
                            <!--INPUT CORPO-->
                            <div class="col-md-12 input-corpo">
                                <div class="col-md-12 input-conteudo">
                                    <input type="text" name="apcc_lmca" 
                                           data-minmax-valores="Abobinada, Odiada, Normal, Apreciada, Adorada" class="input-minmax" 
                                           value="" id="input-minmax-Poder"></input>
                                </div>
                            </div>
                            <!--FINAL - INPUT CORPO-->
                        </div>
                    </div>
                    <!--FINAL - INPUT MINMAX-->
                    <!--REPUTAÇÃO - INPUT MINMAX-->                  
                    <!--FINAL - INPUT MINMAX-->		
                    <div class="col-md-12 form-controle">
                        <input type="hidden" name="pk_lmca" value="">
                        <button type="button" id="btn-salvar-form" class="btn btn-azul btn-block salvar-lembranca-modal">
                            Salvar Lembrança
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--FINAL LEMBRANÇAS E TUDO DE PERSONAGEM-->