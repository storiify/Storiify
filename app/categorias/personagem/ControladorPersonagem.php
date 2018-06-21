<?php

class ControladorPersonagem extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Personagem");
        $this->setCategoria($categoria);

        require_once "BdContextPersonagem.php";
        require_once PATH_CAT . "/raca/BdContextRaca.php";
        require_once PATH_CAT . "/classe/BdContextClasse.php";
        require_once PATH_CAT . "/profissao/BdContextprofissao.php";
        require_once PATH_CAT . "/localizacao/BdContextLocalizacao.php";
        require_once PATH_CAT . "/objeto/BdContextObjeto.php";
        require_once PATH_CAT . "/habilidade_fisica/BdContextHabilidade_fisica.php";
        require_once PATH_CAT . "/habilidade_magica/BdContextHabilidade_magica.php";
        require_once PATH_CAT . "/lembranca/BdContextLembranca.php";
        
        require_once PATH_CAT . "/historia/BdContextHistoria.php";
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloPersonagem::$viewForm);
        $this->setTituloPagina(ModeloPersonagem::getTituloPagina("cadastrar"));

        $bdPsna = new bdContextPersonagem();
        $resPsna = $bdPsna->listar("");
        $bdLczc = new BdContextLocalizacao();
        $resLczc = $bdLczc->listar("");
        $bdRaca = new BdContextRaca();
        $resRaca = $bdRaca->listar("");
        $bdClasse = new BdContextClasse();
        $resClasse = $bdClasse->listar("");
        $bdPfs = new BdContextProfissao();
        $resPfs = $bdPfs->listar("");
        $bdObj = new BdContextObjeto();
        $resObj = $bdObj->listar("");
        $bdHbld_fsca = new BdContextHabilidade_fisica();
        $resHbld_fsca = $bdHbld_fsca->listar("");
        $bdHbld_mgca = new BdContextHabilidade_magica();
        $resHbld_mgca = $bdHbld_mgca->listar("");
        $bdLmca = new BdContextLembranca();
        $resLmca = $bdLmca->listar("");
        $res = array(
            "psna" => $resPsna,
            "relLczc" => $resLczc,
            "classe" => $resClasse,
            "pfs" => $resPfs,
            "obj" => $resObj,
            "hbld_fsca" => $resHbld_fsca,
            "hbld_mgca" => $resHbld_mgca,
            "lmca" => $resLmca,
            "raca" => $resRaca);
        $this->setResultadosSelect($res);
    }

    public function listar($parametros) {

        $bdRaca = new bdContextPersonagem();
        $res = $bdRaca->listar($parametros);
        $this->setResultados($res);

        $this->setVisao(ModeloPersonagem::$viewListar);

        $this->setTituloPagina(ModeloPersonagem::getTituloPagina("listar"));
    }

    public function editar($parametros) {
        $bdContext = new BdContextPersonagem();
        $instancia = new ModeloPersonagem($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloPersonagem::$viewForm);

            $this->setTituloPagina($instancia->nm_psna());

            //Lista todos os personagens e localizações
            $bdPnsa = new BdContextPersonagem();
            $resPsna = $bdPnsa->listar("");
            $bdLczc = new BdContextLocalizacao();
            $resLczc = $bdLczc->listar("");
            $bdRaca = new BdContextRaca();
            $resRaca = $bdRaca->listar("");
            $bdClasse = new BdContextClasse();
            $resClasse = $bdClasse->listar("");
            $idsClasse = $bdPnsa->listarClasse($instancia->pk_psna());
            $bdPfs = new BdContextProfissao();
            $resPfs = $bdPfs->listar("");
            $idsPfs = $bdPnsa->listarProfissao($instancia->pk_psna());
            $bdObj = new BdContextObjeto();
            $resObj = $bdObj->listar("");
            $idsObj = $bdPnsa->listarObjeto($instancia->pk_psna());
            $bdHbld_fsca = new BdContextHabilidade_fisica();
            $resHbld_fsca = $bdHbld_fsca->listar("");
            $idsHbld_fsca = $bdPnsa->listarHabilidade_fisica($instancia->pk_psna());
            $bdHbld_mgca = new BdContextHabilidade_magica();
            $resHbld_mgca = $bdHbld_mgca->listar("");
            $idsHbld_mgca = $bdPnsa->listarHabilidade_magica($instancia->pk_psna());

            $idsFamilia = $bdPnsa->listarFamilia($instancia->pk_psna());
            $idsAmigos = $bdPnsa->listarAmigos($instancia->pk_psna());
            $idsLacos = $bdPnsa->listarLacos($instancia->pk_psna());
            $idsComp = $bdPnsa->listarComp($instancia->pk_psna());
            $idsRivais = $bdPnsa->listarRivais($instancia->pk_psna());

            $bdLmca = new BdContextLembranca();
            $resLmca = $bdLmca->listar("");
            $idsLmca = $bdPnsa->listarLembranca($instancia->pk_psna());
            $res = array(
                "psna" => $resPsna,
                "relLczc" => $resLczc,
                "raca" => $resRaca,
                "classe" => $resClasse,
                "pfs" => $resPfs,
                "obj" => $resObj,
                "lmca" => $resLmca,
                "hbld_fsca" => $resHbld_fsca,
                "hbld_mgca" => $resHbld_mgca,
                "idsPfs" => $idsPfs,
                "idsObj" => $idsObj,
                "idsHbld_fsca" => $idsHbld_fsca,
                "idsHbld_mgca" => $idsHbld_mgca,
                "idsFamilia" => $idsFamilia,
                "idsAmigos" => $idsAmigos,
                "idsLacos" => $idsLacos,
                "idsComp" => $idsComp,
                "idsRivais" => $idsRivais,
                "idsLmca" => $idsLmca,
                "idsClasse" => $idsClasse);
            $this->setResultadosSelect($res);
        } else {
            redirecionar("?categoria=personagem&acao=listar");
        }
    }

    public function salvar($parametros) {
        //Não altera o que não foi alterado
        foreach ($parametros as $key => $value) {
            if (!isset($parametros[$key]) || $parametros[$key] == '') {
                unset($parametros[$key]);
            }
        }

        $bdContext = new BdContextPersonagem();

        //Cuida da parte de imagem
        $idUsuario = sessao()->getUserData()->id;
        if (isset($_FILES) && $_FILES['im_psna']['size'] != 0) {
            $idPersonagem = $bdContext->proximoID();
            $parametros['im_psna'] = uploadImagem($idUsuario, "Personagem", $idPersonagem, $_FILES['im_psna']);
        }
        //Cuida da parte da visibilidade
        if (isset($parametros['vsi_psna']) && is_array($parametros['vsi_psna'])) {
            $tempStr = 0;
            foreach ($parametros['vsi_psna'] as $value) {
                $tempStr = $tempStr + $value;
            }
            $parametros['vsi_psna'] = $tempStr;
        }

        $res = $bdContext->salvar($parametros);

        if ($res) {
            redirecionar("?categoria=personagem&acao=listar");
        } else {
            redirecionar("?categoria=personagem&acao=cadastrar");
        }
    }

    public function excluir($parametros) {

        $bdContext = new BdContextPersonagem();
        $res = $bdContext->excluir($parametros);

        if ($res) {
            redirecionar("?categoria=personagem&acao=listar");
        } else {
            redirecionar("?categoria=personagem&acao=listar"); //mudar pra uma pagina de erro (Localização não encontrada ou não faz parte de suas localizações cadastradas) :D
        }
    }
    
    public function editarExterno($parametros) {
        
        $parametros["id"] = $parametros["idHist"];
        
        $bdContext = new BdContextHistoria();
        $instancia = new ModeloHistoria($bdContext->listar($parametros)[0]);
        
        sessao()->setHistoriaSelecionada($instancia);
        unset($parametros["idHist"]);
        
        $parametros["id"] = $parametros["idPsna"];
        
        $this->editar($parametros);
    }
}
