<?php

class ControladorLocalizacao extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Localização");
        $this->setCategoria($categoria);
        
        require_once PATH_CAT."/raca/BdContextRaca.php";
    }

    public function cadastrar($parametros) {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('FormLocalizacao');
        $this->setTituloPagina("Cadastrar " . nomeFormal($this->getCategoria()));

        $modeloPnsa = new ModeloPersonagem();
        $resPsna = $modeloPnsa->listar("");
        $modeloLczc = new ModeloLocalizacao();
        $resLczc = $modeloLczc->listar("");
        $bdRaca = new BdContextRaca();
        $resRaca = $bdRaca->listar("");
        $res = array(
            "psna" => $resPsna,
            "lczc" => $resLczc,
            "raca" => $resRaca);
        $this->setResultadosSelect($res);
    }

    public function listar($parametros) {

        $modelo = new ModeloLocalizacao();
        $res = $modelo->listar($parametros);

        $this->setVisao('ListarLocalizacao');
        $nomeHistoria = sessao()->getHistoriaSelecionada()->tit_hist;
        $titulo = nomeFormal($this->getCategoria(), "plural") . (empty($nomeHistoria) ? "" : " de " . $nomeHistoria);
        $this->setTituloPagina($titulo);

        $this->setResultados($res);
    }

    public function editar($parametros) {

        $modelo = new ModeloLocalizacao();
        $res = $modelo->listar($parametros);

        if ($res[0] != false) {
            $this->setResultados($res[0]);
            $this->setVisao('FormLocalizacao');
            $this->setTituloPagina($res[0]["nm_lczc"]);

            //Lista todos os personagens e localizações
            $modeloPnsa = new ModeloPersonagem();
            $resPsna = $modeloPnsa->listar("");
            $modeloLczc = new ModeloLocalizacao();
            $resLczc = $modeloLczc->listar("");
            $bdRaca = new BdContextRaca();
            $resRaca = $bdRaca->listar("");
            //Get personagens registrados como mais conhecidos
            $idsPsnaCnhd = $modeloLczc->listarPsnaCnhd($res[0]["pk_lczc"]);
            //Get raças registrados
            $idsRaca = $modeloLczc->listarRaca($res[0]["pk_lczc"]);
            $res = array(
                "psna" => $resPsna,
                "lczc" => $resLczc,
                "raca" => $resRaca,
                "idsPsnaLczc" => $idsPsnaCnhd,
                "idsRaca" => $idsRaca);
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

        $modelo = new ModeloLocalizacao();

        //Cuida da parte de imagem
        $idUsuario = sessao()->getUserData()->id;
        if (isset($_FILES) && $_FILES['im_lczc']['size'] != 0) {
            $idLocalizacao = $modelo->proximoID();
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
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $parametros['fk_hist'] = $idHistoria;

        $res = $modelo->salvar($parametros);

        if ($res) {
            redirecionar("?categoria=localizacao&acao=listar");
        } else {
            redirecionar("?categoria=localizacao&acao=cadastrar");
        }
    }

    public function excluir($parametros) {

        $modelo = new ModeloLocalizacao();
        $idUsuario = sessao()->getUserData()->id;
        $parametros['fk_usu'] = $idUsuario;
        $res = $modelo->excluir($parametros);

        if ($res) {
            redirecionar("?categoria=localizacao&acao=listar");
        } else {
            redirecionar("?categoria=localizacao&acao=listar"); //mudar pra uma pagina de erro (Localização não encontrada ou não faz parte de suas localizações cadastradas) :D
        }
    }

}
