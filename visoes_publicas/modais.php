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


