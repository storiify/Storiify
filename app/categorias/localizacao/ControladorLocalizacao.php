<?php

class ControladorLocalizacao extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        $dicas = array(
            'Clique no ícone de imagem para adicionar uma imagem para sua localização',
            'Você pode alternar de abas clicando sobre elas',
            'Usando o campo de nome, você pode nomear sua localização e também pode colocar mais detalhes sobre ela',
            'Em "Personagens mais conhecidos", você pode escolher um ou mais personagens mais conhecidos da sua localização',
            'Você pode definir a visibilidade de sua localização de acordo com a sua preferência'
        );
        
        parent::setDicas($dicas);
        $this->setCategoria($categoria);
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
        $bdRcsNtrl = new BdContextRecurso_natural();
        $resRcsNtrl = $bdRcsNtrl->listar("");
        $bdBioma = new BdContextBioma();
        $resBioma = $bdBioma->listar("");
        $bdReligiao = new BdContextReligiao();
        $resReligiao = $bdReligiao->listar("");
        $bdLingua = new BdContextLingua();
        $resLingua = $bdLingua->listar("");
        $bdMito = new BdContextMito();
        $resMito = $bdMito->listar("");
        $bdMagia = new BdContextMagia();
        $resMagia = $bdMagia->listar("");
        $res = array(
            "psna" => $resPsna,
            "lczc" => $resLczc,
            "raca" => $resRaca,
            "fauna" => $resFauna,
            "flora" => $resFlora,
            "rcs_ntrl" => $resRcsNtrl,
            "bioma" => $resBioma,
            "religiao" => $resReligiao,
            "lingua" => $resLingua,
            "mito" => $resMito,
            "magia" => $resMagia);
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
            $bdRcsNtrl = new BdContextRecurso_natural();
            $resRcsNtrl = $bdRcsNtrl->listar("");
            $bdBioma = new BdContextBioma();
            $resBioma = $bdBioma->listar("");
            $bdReligiao = new BdContextReligiao();
            $resReligiao = $bdReligiao->listar("");
            $bdLingua = new BdContextLingua();
            $resLingua = $bdLingua->listar("");
            $bdMito = new BdContextMito();
            $resMito = $bdMito->listar("");
            $bdMagia = new BdContextMagia();
            $resMagia = $bdMagia->listar("");
            //Get personagens registrados como mais conhecidos
            $idsPsnaCnhd = $bdLczc->listarPsnaCnhd($instancia->pk_lczc());
            //Get raças registradas
            $idsRaca = $bdLczc->listarRaca($instancia->pk_lczc());
            //Get faunas registradas
            $idsFauna = $bdLczc->listarFauna($instancia->pk_lczc());
            //Get floras registradas
            $idsFlora = $bdLczc->listarFlora($instancia->pk_lczc());
            //Get recursos registrados
            $idsRcsNtrl = $bdLczc->listarRcsNtrl($instancia->pk_lczc());
            //Get biomas registrados
            $idsBioma = $bdLczc->listarBioma($instancia->pk_lczc());
            //Get religiões registradas
            $idsReligiao = $bdLczc->listarReligiao($instancia->pk_lczc());
            //Get línguas registradas
            $idsLingua = $bdLczc->listarLingua($instancia->pk_lczc());
            //Get mitos registrados
            $idsMito = $bdLczc->listarMito($instancia->pk_lczc());
            //Get magias registradas
            $idsMagia = $bdLczc->listarMagia($instancia->pk_lczc());
            $res = array(
                "psna" => $resPsna,
                "lczc" => $resLczc,
                "raca" => $resRaca,
                "fauna" => $resFauna,
                "flora" => $resFlora,
                "rcs_ntrl" => $resRcsNtrl,
                "bioma" => $resBioma,
                "religiao" => $resReligiao,
                "lingua" => $resLingua,
                "mito" => $resMito,
                "magia" => $resMagia,
                "idsPsnaLczc" => $idsPsnaCnhd,
                "idsRaca" => $idsRaca,
                "idsFauna" => $idsFauna,
                "idsFlora" => $idsFlora,
                "idsRcsNtrl" => $idsRcsNtrl,
                "idsBioma" => $idsBioma,
                "idsReligiao" => $idsReligiao,
                "idsLingua" => $idsLingua,
                "idsMito" => $idsMito,
                "idsMagia" => $idsMagia);
            $this->setResultadosSelect($res);
        } else {
            redirecionar("?categoria=localizacao&acao=listar");
        }
    }

    public function salvar($parametros) {

        $idUsuario = sessao()->getUserData()->id;

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();

        $bdContext = new BdContextLocalizacao();
        if (isset($parametros['pk_lczc']) && $parametros['pk_lczc'] != '') {
            $idLocalizacao = $parametros['pk_lczc'];
        } else {
            $idLocalizacao = $bdContext->proximoID();
        }

        //Processamento de todas as imagens da categoria
        $imagens = array('im_lczc'); //adicionar nomes dos campos aqui

        foreach ($imagens as $imagem) {
            $reset = $imagem . '_reset';
            if (array_key_exists($imagem, $_FILES) && $_FILES[$imagem]['error'] === UPLOAD_ERR_OK) {
                $parametros[$imagem] = uploadImagem($idUsuario, $idHistoria, $bdContext->getTabela(), $idLocalizacao, $imagem, $_FILES[$imagem]);
            } else if (isset($parametros[$reset]) && $parametros[$reset] == true) {
                deleteImagem($idUsuario, $idHistoria, $bdContext->getTabela(), $idLocalizacao, $imagem);
                $parametros[$imagem] = "0";
            }
            unset($parametros[$reset]);
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
