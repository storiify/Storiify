<?php

class ControladorFlora extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        //parent::setDicas("Dicas Flora");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloFlora::$viewForm);

        $this->setTituloPagina(ModeloFlora::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextFlora();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloFlora::$viewListar);

        $this->setTituloPagina(ModeloFlora::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextFlora();
        $instancia = new ModeloFlora($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloFlora::$viewForm);

            $this->setTituloPagina($instancia->nm_flra());
        } else {
            redirecionar("?categoria=flora&acao=listar");
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
        $bdContext = new BdContextFlora();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=flora&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=flora&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextFlora();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=flora&acao=listar");
        } else {
            redirecionar("?categoria=flora&acao=listar");
        }
    }

}
