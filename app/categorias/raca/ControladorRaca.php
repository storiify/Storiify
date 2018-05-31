<?php

class ControladorRaca extends Controlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Raça");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao('FormRaca');
    }

    public function listar($parametros) {

        $modelo = new ModeloRaca();
        $res = $modelo->listar($parametros);

        $this->setVisao('ListarRaca');
        $this->setResultados($res);
    }

    public function editar($parametros) {
        $modelo = new ModeloRaca();
        $res = $modelo->listar($parametros);

        if ($res[0] != false) {
            $this->setResultados($res[0]);
            $this->setVisao('FormRaca');
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
