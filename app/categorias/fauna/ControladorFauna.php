<?php

class ControladorFauna extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Fauna");
        $this->setCategoria($categoria);
        
        require_once "BdContextFauna.php";
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloFauna::$viewForm);

        $this->setTituloPagina(ModeloFauna::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextFauna();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloFauna::$viewListar);

        $this->setTituloPagina(ModeloFauna::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextFauna();
        $instancia = new ModeloFauna($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloFauna::$viewForm);

            $this->setTituloPagina($instancia->nm_fna());
        } else {
            redirecionar("?categoria=fauna&acao=listar");
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
        $bdContext = new BdContextFauna();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=fauna&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=fauna&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextFauna();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=fauna&acao=listar");
        } else {
            redirecionar("?categoria=fauna&acao=listar");
        }
    }

}
