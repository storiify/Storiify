<?php

class ControladorReligiao extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Religiao");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloReligiao::$viewForm);

        $this->setTituloPagina(ModeloReligiao::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        
        $bdContext = new BdContextReligiao();
        $instancias = $bdContext->listar($parametros);
        $this->setResultados($instancias);

        $this->setVisao(ModeloReligiao::$viewListar);

        $this->setTituloPagina(ModeloReligiao::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextReligiao();
        $instancia = new ModeloReligiao($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloReligiao::$viewForm);

            $this->setTituloPagina($instancia->nm_relg());
        } else {
            redirecionar("?categoria=religiao&acao=listar");
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
        $bdContext = new BdContextReligiao();
        $resultado = $bdContext->salvar($parametros);
        
        //Checa o que fazer com o resultado
        if ($resultado && !$isAjax) {
            redirecionar("?categoria=religiao&acao=listar");
        } elseif ($resultado && $isAjax) {
            $idInserido = $bdContext->proximoID() - 1;
            echo "idInserido:" . $idInserido;
            exit;
        } else {
            redirecionar("?categoria=religiao&acao=cadastrar");
        }
    }

    public function excluir($parametros) {
        $bdContext = new BdContextReligiao();
        $resultado = $bdContext->excluir($parametros);

        if ($resultado) {
            redirecionar("?categoria=religiao&acao=listar");
        } else {
            redirecionar("?categoria=religiao&acao=listar");
        }
    }

}
