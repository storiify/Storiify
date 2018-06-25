<?php

class ControladorObjeto extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Objeto");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloObjeto::$viewForm);

        $this->setTituloPagina(ModeloObjeto::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextObjeto();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloObjeto::$viewListar);

        $this->setTituloPagina(ModeloObjeto::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextObjeto();
        $instancia = new ModeloObjeto($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloObjeto::$viewForm);

            $this->setTituloPagina($instancia->nm_obj());
        } else {
            redirecionar("?categoria=objeto&acao=listar");
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
        $bdContext = new BdContextObjeto();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=objeto&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=objeto&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextObjeto();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=objeto&acao=listar");
        } else {
            redirecionar("?categoria=objeto&acao=listar");
        }
    }

}
