<?php

class ControladorHabilidade_fisica extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
       //parent::setDicas("Dicas Habilidade Física");
        $this->setCategoria($categoria);        
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloHabilidade_fisica::$viewForm);

        $this->setTituloPagina(ModeloHabilidade_fisica::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextHabilidade_fisica();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloHabilidade_fisica::$viewListar);

        $this->setTituloPagina(ModeloHabilidade_fisica::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextHabilidade_fisica();
        $instancia = new ModeloHabilidade_fisica($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloHabilidade_fisica::$viewForm);

            $this->setTituloPagina($instancia->nm_hbld_fsca());
        } else {
            redirecionar("?categoria=habilidade_fisica&acao=listar");
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
        $bdContext = new BdContextHabilidade_fisica();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=habilidade_fisica&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=habilidade_fisica&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextHabilidade_fisica();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=habilidade_fisica&acao=listar");
        } else {
            redirecionar("?categoria=habilidade_fisica&acao=listar");
        }
    }

}
