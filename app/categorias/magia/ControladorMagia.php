<?php

class ControladorMagia extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Magia");
        $this->setCategoria($categoria);
        
        require_once "BdContextMagia.php";
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloMagia::$viewForm);

        $this->setTituloPagina(ModeloMagia::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextMagia();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloMagia::$viewListar);

        $this->setTituloPagina(ModeloMagia::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextMagia();
        $instancia = new ModeloMagia($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloMagia::$viewForm);

            $this->setTituloPagina($instancia->nm_magi());
        } else {
            redirecionar("?categoria=magia&acao=listar");
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
        $bdContext = new BdContextMagia();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=magia&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=magia&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextMagia();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=magia&acao=listar");
        } else {
            redirecionar("?categoria=magia&acao=listar");
        }
    }

}
