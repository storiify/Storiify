<?php

class ControladorHistoria extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas História");
        $this->setCategoria($categoria);

        require_once "BdContextHistoria.php";
    }

    public function cadastrar($parametros) {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao(ModeloHistoria::$viewForm);
        $this->setTituloPagina(ModeloHistoria::getTituloPagina("cadastrar"));
    }

    public function listar($parametros) {
        $bdContext = new BdContextHistoria();
        $res = $bdContext->listar($parametros);
        $this->setResultados($res);

        sessao()->setHistoriasData($res);
        sessao()->setHistoriaSelecionada(null);

        $this->setVisao(ModeloHistoria::$viewListar);
        $this->setTituloPagina(ModeloHistoria::getTituloPagina("listar"));
    }

    public function listarAoLogar($parametros) {
        $bdContext = new BdContextHistoria();
        var_dump($parametros);
        $res = $bdContext->listar($parametros);
        sessao()->setHistoriasData($res);
    }

    public function editar($parametros) {

        $bdContext = new BdContextHistoria();
        $instancia = new ModeloHistoria($bdContext->listar($parametros)[0]);

        if ($instancia != null) {
            $this->setResultados($instancia);

            $this->setVisao(ModeloHistoria::$viewForm);

            $this->setTituloPagina($instancia->tit_hist());

            //Lista todos os personagens
            $modeloPnsa = new ModeloPersonagem();
            $resPsna = $modeloPnsa->listar("");
            $res = array(
                "psna" => $resPsna);
            $this->setResultadosSelect($res);
        } else {
            redirecionar("?categoria=historia&acao=listar");
        }
    }

    public function salvar($parametros) {
        //Não altera o que não foi alterado
        foreach ($parametros as $key => $value) {
            if (!isset($parametros[$key]) || $parametros[$key] == '') {
                unset($parametros[$key]);
            }
        }
        $idUsuario = sessao()->getUserData()->id;
        $bdContext = new BdContextHistoria();

        if (isset($parametros['pk_hist']) && $parametros['pk_hist'] != '') {
            $idHistoria = $parametros['pk_hist'];
        } else {
            $idHistoria = $bdContext->proximoID();
        }

        if (isset($_FILES) && $_FILES['im_ppl']['size'] != 0) {
            $parametros['im_ppl'] = uploadImagem($idUsuario, "historia", $idHistoria, $_FILES['im_ppl']);
        }
        if (isset($parametros['vsi_hist']) && is_array($parametros['vsi_hist'])) {
            $tempStr = 0;
            foreach ($parametros['vsi_hist'] as $value) {
                $tempStr = $tempStr + $value;
            }
            $parametros['vsi_hist'] = $tempStr;
        }
        $parametros['fk_usu'] = $idUsuario;
        $res = $bdContext->salvar($parametros);

        if ($res) {
            redirecionar("?categoria=historia&acao=listarCategorias&id=$idHistoria");
        } else {
            redirecionar("?categoria=historia&acao=cadastrar");
        }
    }

    public function excluir($parametros) {

        $bdContext = new BdContextHistoria();
        $res = $bdContext->excluir($parametros);

        if ($res) {
            redirecionar("?categoria=historia&acao=listar");
        } else {
            redirecionar("?categoria=historia&acao=listar"); //mudar pra uma pagina de erro (Personagem não encontrado ou não faz parte de seus persongens cadastrados) :D
        }
    }

    public function listarCategorias($parametros) {

        $bdContext = new BdContextHistoria();
        $instancia = new ModeloHistoria($bdContext->listar($parametros)[0]);
        $this->setResultados($instancia);
        
        sessao()->setHistoriaSelecionada($instancia);

        $this->setVisao(ModeloHistoria::$viewCategoriasHistoria);
        
        $this->setTituloPagina($instancia->tit_hist());

        $res = $bdContext->listar("");
        sessao()->setHistoriasData($res);
    }

}
