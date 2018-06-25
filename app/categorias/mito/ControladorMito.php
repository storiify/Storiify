<?php

class ControladorMito extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
       //parent::setDicas("Dicas Mito");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloMito::$viewForm);

        $this->setTituloPagina(ModeloMito::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextMito();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloMito::$viewListar);

        $this->setTituloPagina(ModeloMito::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextMito();
        $instancia = new ModeloMito($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloMito::$viewForm);

            $this->setTituloPagina($instancia->nm_mito());
        } else {
            redirecionar("?categoria=mito&acao=listar");
        }
    }

    public function salvar($parametros) {
        //Checa se veio a partir de um Ajax
        $isAjax = false;
        if (isset($parametros['isAjax']) && $parametros['isAjax'] != "") {
            $isAjax = $parametros['isAjax'];
            unset($parametros['isAjax']);
        }

        //Não altera o que não foi alterado
        foreach ($parametros as $key => $value) {
            if (!isset($parametros[$key]) || $parametros[$key] == '') {
                unset($parametros[$key]);
            }
        }
        
        //Faz a inserção
        $bdContext = new BdContextMito();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=mito&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=mito&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextMito();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=mito&acao=listar");
        } else {
            redirecionar("?categoria=mito&acao=listar");
        }
    }

}
