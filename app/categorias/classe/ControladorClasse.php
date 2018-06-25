<?php

class ControladorClasse extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Classe");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloClasse::$viewForm);

        $this->setTituloPagina(ModeloClasse::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextClasse();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloClasse::$viewListar);

        $this->setTituloPagina(ModeloClasse::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextclasse();
        $instancia = new ModeloClasse($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloClasse::$viewForm);

            $this->setTituloPagina($instancia->nm_cls());
        } else {
            redirecionar("?categoria=classe&acao=listar");
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
        $bdContext = new BdContextClasse();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=classe&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=classe&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextclasse();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=classe&acao=listar");
        } else {
            redirecionar("?categoria=classe&acao=listar");
        }
    }

}
