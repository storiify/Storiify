<?php

class ControladorLingua extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Lingua");
        $this->setCategoria($categoria);
        
        require_once "BdContextLingua.php";
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloLingua::$viewForm);

        $this->setTituloPagina(ModeloLingua::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextLingua();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloLingua::$viewListar);

        $this->setTituloPagina(ModeloLingua::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextLingua();
        $instancia = new ModeloLingua($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloLingua::$viewForm);

            $this->setTituloPagina($instancia->nm_lnga());
        } else {
            redirecionar("?categoria=lingua&acao=listar");
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
        $bdContext = new BdContextLingua();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=lingua&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=lingua&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextLingua();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=lingua&acao=listar");
        } else {
            redirecionar("?categoria=lingua&acao=listar");
        }
    }

}
