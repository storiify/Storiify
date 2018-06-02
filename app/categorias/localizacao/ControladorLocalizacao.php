<?php

class ControladorLocalizacao extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Localização");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('CadastrarLocalizacao');
    }

    public function listar($parametros) {

        $modelo = new ModeloLocalizacao();
        $res = $modelo->listar($parametros);

        $this->setVisao('ListarLocalizacao');
        $this->setResultados($res);
    }

    public function editar($parametros) {

        $modelo = new ModeloLocalizacao();
        $res = $modelo->listar($parametros);

        if ($res[0] != false) {
            $this->setResultados($res[0]);
            $this->setVisao('CadastrarLocalizacao');
        } else {
            redirecionar("?categoria=localizacao&acao=listar");
        }
    }

    public function salvar($parametros) {

        $modelo = new ModeloLocalizacao();
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $idUsuario = sessao()->getUserData()->id;
        if (isset($_FILES) && $_FILES['im_lczc']['size'] != 0) {
            $idLocalizacao = $modelo->proximoID();
            $parametros['im_lczc'] = uploadImagem($idUsuario, "localizacao", $idLocalizacao, $_FILES['im_lczc']);
        }
        
        $parametros['fk_hist'] = $idHistoria;
        $res = $modelo->salvar($parametros);

        if ($res) {
            redirecionar("?categoria=localizacao&acao=listar");
        } else {
            redirecionar("?categoria=localizacao&acao=cadastrar");
        }
    }

    public function excluir($parametros) {

        $modelo = new ModeloLocalizacao();
        $idUsuario = sessao()->getUserData()->id;
        $parametros['fk_usu'] = $idUsuario;
        $res = $modelo->excluir($parametros);

        if ($res) {
            redirecionar("?categoria=localizacao&acao=listar");
        } else {
            redirecionar("?categoria=localizacao&acao=listar"); //mudar pra uma pagina de erro (Localização não encontrada ou não faz parte de suas localizações cadastradas) :D
        }
    }

}
