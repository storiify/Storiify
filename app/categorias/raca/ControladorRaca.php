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
        //Não altera o que não foi alterado
        foreach ($parametros as $key => $value) {
            if (!isset($parametros[$key]) || $parametros[$key] == '') {
                unset($parametros[$key]);
            }
        }
        
        $modelo = new ModeloRaca();
        
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $parametros['fk_hist'] = $idHistoria;
        
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
