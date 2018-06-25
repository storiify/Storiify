<?php

class ControladorPersonagem extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        $dicas = array(
            'Clique no ícone de imagem para adicionar uma imagem para seu personagem',
            'Usando o campo de nome, você pode nomear seu personagem e também pode colocar mais detalhes sobre ele',
            'Você pode alternar de abas clicando sobre elas',
            'Você pode escolher a localização natal do seu personagem entre as localizações disponíveis',
            'Você pode definir a visibilidade de seu personagem de acordo com a sua preferência'
        );

        parent::setDicas($dicas);
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        $this->setVisao(ModeloPersonagem::$viewForm);
        $this->setTituloPagina(ModeloPersonagem::getTituloPagina("cadastrar"));

        $bdPsna = new BdContextPersonagem();
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
		$bdCena = new BdContextCena();
        $resCena = $bdCena->listar("");
        $res = array(
            "psna" => $resPsna,
            "relLczc" => $resLczc,
            "classe" => $resClasse,
            "pfs" => $resPfs,
            "obj" => $resObj,
            "hbld_fsca" => $resHbld_fsca,
            "hbld_mgca" => $resHbld_mgca,
            "lmca" => $resLmca,
			"cena" => $resCena,
            "raca" => $resRaca);
        $this->setResultadosSelect($res);
    }

    public function listar($parametros) {

        $bdRaca = new BdContextPersonagem();
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
			$bdCena = new BdContextCena();
			$resCena = $bdCena->listar("");
            $res = array(
                "psna" => $resPsna,
                "relLczc" => $resLczc,
                "raca" => $resRaca,
                "classe" => $resClasse,
                "pfs" => $resPfs,
                "obj" => $resObj,
                "lmca" => $resLmca,
				"cena" => $resCena,
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

        $idUsuario = sessao()->getUserData()->id;

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        
        $bdContext = new BdContextPersonagem();
        if (isset($parametros['pk_psna']) && $parametros['pk_psna'] != '') {
            $idPersonagem = $parametros['pk_psna'];
        } else {
            $idPersonagem = $bdContext->proximoID();
        }
        
        //Processamento de todas as imagens da categoria
        $imagens = array('im_psna'); //adicionar nomes dos campos aqui

        foreach ($imagens as $imagem) {
            $reset = $imagem . '_reset';
            if (array_key_exists($imagem, $_FILES) && $_FILES[$imagem]['error'] === UPLOAD_ERR_OK) {
                $parametros[$imagem] = uploadImagem($idUsuario, $idHistoria, $bdContext->getTabela(), $idPersonagem, $imagem, $_FILES[$imagem]);
            } else if (isset($parametros[$reset]) && $parametros[$reset] == true) {
                deleteImagem($idUsuario, $idHistoria, $bdContext->getTabela(), $idPersonagem, $imagem);
                $parametros[$imagem] = "0";
            }
            unset($parametros[$reset]);
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
