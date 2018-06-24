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

        $modeloCena = new BdContextCena();
        $resCena = $modeloCena->listar("");
        $res = array(
            "cena" => $resCena);
        $this->setResultadosSelect($res);
    }

    public function listar($parametros) {

        $bdContext = new BdContextCena();
        $res = $bdContext->listar($parametros);
        $this->setResultados($res);

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

            //Lista todos as cenas
            $modeloCena = new BdContextCena();
            $resCena = $modeloCena->listar("");
            $res = array(
                "cena" => $resCena,);
            $this->setResultadosSelect($res);
        } else {
            redirecionar("?categoria=cena&acao=listar");
        }
    }

    public function salvar($parametros) {
        $bdContext = new BdContextCena();

        //Cuida da parte de imagem
        $idUsuario = sessao()->getUserData()->id;
        if (isset($_FILES) && $_FILES['im_cena']['size'] != 0) {
            $idCena = $bdContext->proximoID();
            $parametros['im_cena'] = uploadImagem($idUsuario, "cena", $idCena, $_FILES['im_cena']);
        }
        //Cuida da parte da visibilidade
        if (isset($parametros['vsi_cena']) && is_array($parametros['vsi_cena'])) {
            $tempStr = 0;
            foreach ($parametros['vsi_cena'] as $value) {
                $tempStr = $tempStr + $value;
            }
            $parametros['vsi_cena'] = $tempStr;
        }

        $res = $bdContext->salvar($parametros);

        if ($res) {
            redirecionar("?categoria=cena&acao=listar");
        } else {
            redirecionar("?categoria=cena&acao=cadastrar");
        }
    }

    public function excluir($parametros) {

        $bdContext = new BdContextCena();
        $res = $bdContext->excluir($parametros);

        if ($res) {
            redirecionar("?categoria=cena&acao=listar");
        } else {
            redirecionar("?categoria=cena&acao=listar");
        }
    }

}
