<?php

class ControladorRaca extends Controlador  implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Raça");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao('FormRaca');
        $this->setTituloPagina("Cadastrar ".nomeFormal($this->getCategoria(), "singular"));
    }

    public function listar($parametros) {

        $modelo = new ModeloRaca();
        $res = $modelo->listar($parametros);

        $this->setVisao('ListarRaca');
        $nomeHistoria = sessao()->getHistoriaSelecionada()->tit_hist;
        $titulo = nomeFormal($this->getCategoria(),"plural") . (empty($nomeHistoria)? "" : " de ".$nomeHistoria);
        $this->setTituloPagina($titulo);
        
        $this->setResultados($res);
    }

    public function editar($parametros) {
        $modelo = new ModeloRaca();
        $res = $modelo->listar($parametros);

        if ($res[0] != false) {
            $this->setResultados($res[0]);
            $this->setVisao('FormRaca');
            $this->setTituloPagina($res[0]["nm_raca"]);
        } else {
            redirecionar("?categoria=raca&acao=listar");
        }
    }

    public function salvar($parametros) {
        $modelo = new ModeloRaca();
        $res = $modelo->salvar($parametros);

        if ($res != false) {
            redirecionar("?categoria=raca&acao=listar");
        } else {
            redirecionar("?categoria=raca&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $modelo = new ModeloHistoria();
        $res = $modelo->excluir($parametros);

        if ($res != false) {
            redirecionar("?categoria=raca&acao=listar");
        } else {
            redirecionar("?categoria=raca&acao=listar");
        }
    }

}
