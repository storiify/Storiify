<?php

class ControladorLembranca extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
       //parent::setDicas("Dicas Lembrança");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloLembranca::$viewForm);

        $this->setTituloPagina(ModeloLembranca::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextLembranca();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloLembranca::$viewListar);

        $this->setTituloPagina(ModeloLembranca::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextLembranca();
        $instancia = new ModeloLembranca($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloLembranca::$viewForm);

            $this->setTituloPagina($instancia->dcr_lmca());
        } else {
            redirecionar("?categoria=Lembranca&acao=listar");
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
        $bdContext = new BdContextLembranca();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=Lembranca&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=Lembranca&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextLembranca();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=Lembranca&acao=listar");
        } else {
            redirecionar("?categoria=Lembranca&acao=listar");
        }
    }

}
