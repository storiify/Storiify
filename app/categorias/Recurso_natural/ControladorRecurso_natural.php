<?php

class ControladorRecurso_natural extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Recurso Natural");
        $this->setCategoria($categoria);
        
        require_once "BdContextRecurso_natural.php";
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloRecurso_natural::$viewForm);

        $this->setTituloPagina(ModeloRecurso_natural::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextRecurso_natural();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloRecurso_natural::$viewListar);

        $this->setTituloPagina(ModeloRecurso_natural::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextRecurso_natural();
        $instancia = new ModeloRecurso_natural($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloRecurso_natural::$viewForm);

            $this->setTituloPagina($instancia->nm_rcs_ntrl());
        } else {
            redirecionar("?categoria=recurso_natural&acao=listar");
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
        $bdContext = new BdContextRecurso_natural();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=recurso_natural&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=recurso_natural&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextRecurso_natural();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=recurso_natural&acao=listar");
        } else {
            redirecionar("?categoria=recurso_natural&acao=listar");
        }
    }

}
