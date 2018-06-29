<?php

class ControladorRaca extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
       //parent::setDicas("Dicas Raça");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloRaca::$viewForm);

        $this->setTituloPagina(ModeloRaca::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextRaca();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloRaca::$viewListar);

        $this->setTituloPagina(ModeloRaca::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextRaca();
        $instancia = new ModeloRaca($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloRaca::$viewForm);

            $this->setTituloPagina($instancia->nm_raca());
        } else {
            redirecionar("?categoria=raca&acao=listar");
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
        $bdContext = new BdContextRaca();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=raca&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=raca&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextRaca();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=raca&acao=listar");
        } else {
            redirecionar("?categoria=raca&acao=listar");
        }
    }

}
