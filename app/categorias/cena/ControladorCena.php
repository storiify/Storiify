<?php

class ControladorCena extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Cena");
        $this->setCategoria($categoria);

        require_once "BdContextCena.php";
		
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloCena::$viewForm);

        $this->setTituloPagina(ModeloCena::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextCena();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloCena::$viewListar);

        $this->setTituloPagina(ModeloCena::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextCena();
        $instancia = new ModeloCena($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloCena::$viewForm);

            $this->setTituloPagina($instancia->tit_cena());
        } else {
            redirecionar("?categoria=cena&acao=listar");
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
        $bdContext = new BdContextCena();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=cena&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=cena&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextCena();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=cena&acao=listar");
        } else {
            redirecionar("?categoria=cena&acao=listar");
        }
    }

}
