<?php

class ControladorBioma extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Bioma");
        $this->setCategoria($categoria);
        
        require_once "BdContextBioma.php";
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloBioma::$viewForm);

        $this->setTituloPagina(ModeloBioma::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextBioma();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloBioma::$viewListar);

        $this->setTituloPagina(ModeloBioma::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextBioma();
        $instancia = new ModeloBioma($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloBioma::$viewForm);

            $this->setTituloPagina($instancia->nm_bma());
        } else {
            redirecionar("?categoria=bioma&acao=listar");
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
        $bdContext = new BdContextBioma();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=bioma&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=bioma&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextBioma();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=bioma&acao=listar");
        } else {
            redirecionar("?categoria=bioma&acao=listar");
        }
    }

}
