<?php

class ControladorProfissao extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
       //parent::setDicas("Dicas Profissão");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloProfissao::$viewForm);

        $this->setTituloPagina(ModeloProfissao::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextProfissao();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloProfissao::$viewListar);

        $this->setTituloPagina(ModeloProfissao::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextProfissao();
        $instancia = new ModeloProfissao($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloProfissao::$viewForm);

            $this->setTituloPagina($instancia->nm_pfs());
        } else {
            redirecionar("?categoria=profissao&acao=listar");
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
        $bdContext = new BdContextProfissao();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=profissao&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=profissao&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextProfissao();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=profissao&acao=listar");
        } else {
            redirecionar("?categoria=profissao&acao=listar");
        }
    }

}
