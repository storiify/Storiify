<?php

class ControladorLocalizacao extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Localização");
        $this->setCategoria($categoria);

        require_once "BdContextLocalizacao.php";
        require_once PATH_CAT . "/raca/BdContextRaca.php";
        require_once PATH_CAT . "/fauna/BdContextFauna.php";
        require_once PATH_CAT . "/flora/BdContextFlora.php";
        require_once PATH_CAT . "/personagem/BdContextPersonagem.php";
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloLocalizacao::$viewForm);
        $this->setTituloPagina(ModeloLocalizacao::getTituloPagina("cadastrar"));

        $modeloPsna = new BdContextPersonagem();
        $resPsna = $modeloPsna->listar("");
        $bdLczc = new BdContextLocalizacao();
        $resLczc = $bdLczc->listar("");
        $bdRaca = new BdContextRaca();
        $resRaca = $bdRaca->listar("");
        $bdFauna = new BdContextFauna();
        $resFauna = $bdFauna->listar("");
        $bdFlora = new BdContextFlora();
        $resFlora = $bdFlora->listar("");
        $res = array(
            "psna" => $resPsna,
            "lczc" => $resLczc,
            "raca" => $resRaca,
            "fauna" => $resFauna,
            "flora" => $resFlora);
        $this->setResultadosSelect($res);
    }

    public function listar($parametros) {

        $bdContext = new BdContextLocalizacao();
        $res = $bdContext->listar($parametros);
        $this->setResultados($res);

        $this->setVisao(ModeloLocalizacao::$viewListar);

        $this->setTituloPagina(ModeloLocalizacao::getTituloPagina("listar"));
    }

    public function editar($parametros) {

        $bdContext = new BdContextLocalizacao();
        $instancia = new ModeloLocalizacao($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloLocalizacao::$viewForm);

            $this->setTituloPagina($instancia->nm_lczc());

            //Lista todos os personagens e localizações
            $modeloPnsa = new BdContextPersonagem();
            $resPsna = $modeloPnsa->listar("");
            $bdLczc = new BdContextLocalizacao();
            $resLczc = $bdLczc->listar("");
            $bdRaca = new BdContextRaca();
            $resRaca = $bdRaca->listar("");
            $bdFauna = new BdContextFauna();
            $resFauna = $bdFauna->listar("");
            $bdFlora = new BdContextFlora();
            $resFlora = $bdFlora->listar("");
            //Get personagens registrados como mais conhecidos
            $idsPsnaCnhd = $bdLczc->listarPsnaCnhd($instancia->pk_lczc());
            //Get raças registradas
            $idsRaca = $bdLczc->listarRaca($instancia->pk_lczc());
            //Get faunas registradas
            $idsFauna = $bdLczc->listarFauna($instancia->pk_lczc());
            //Get floras registradas
            $idsFlora = $bdLczc->listarFlora($instancia->pk_lczc());
            $res = array(
                "psna" => $resPsna,
                "lczc" => $resLczc,
                "raca" => $resRaca,
                "fauna" => $resFauna,
                "flora" => $resFlora,
                "idsPsnaLczc" => $idsPsnaCnhd,
                "idsRaca" => $idsRaca,
                "idsFauna" => $idsFauna,
                "idsFlora" => $idsFlora);
            $this->setResultadosSelect($res);
        } else {
            redirecionar("?categoria=localizacao&acao=listar");
        }
    }

    public function salvar($parametros) {
        //Não altera o que não foi alterado
        foreach ($parametros as $key => $value) {
            if (!isset($parametros[$key]) || $parametros[$key] == '') {
                unset($parametros[$key]);
            }
        }

        $bdContext = new BdContextLocalizacao();

        //Cuida da parte de imagem
        $idUsuario = sessao()->getUserData()->id;
        if (isset($_FILES) && $_FILES['im_lczc']['size'] != 0) {
            $idLocalizacao = $bdContext->proximoID();
            $parametros['im_lczc'] = uploadImagem($idUsuario, "localizacao", $idLocalizacao, $_FILES['im_lczc']);
        }
        //Cuida da parte da visibilidade
        if (isset($parametros['vsi_lczc']) && is_array($parametros['vsi_lczc'])) {
            $tempStr = 0;
            foreach ($parametros['vsi_lczc'] as $value) {
                $tempStr = $tempStr + $value;
            }
            $parametros['vsi_lczc'] = $tempStr;
        }

        $res = $bdContext->salvar($parametros);

        if ($res) {
            redirecionar("?categoria=localizacao&acao=listar");
        } else {
            redirecionar("?categoria=localizacao&acao=cadastrar");
        }
    }

    public function excluir($parametros) {

        $bdContext = new BdContextLocalizacao();
        $res = $bdContext->excluir($parametros);

        if ($res) {
            redirecionar("?categoria=localizacao&acao=listar");
        } else {
            redirecionar("?categoria=localizacao&acao=listar"); //mudar pra uma pagina de erro (Localização não encontrada ou não faz parte de suas localizações cadastradas) :D
        }
    }

}
