<?php

class ControladorHistoria extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas História");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('FormHistoria');
    }

    public function listar($parametros) {

        $modelo = new ModeloHistoria();
        $res = $modelo->listar($parametros);

        sessao()->setHistoriasData($res);
        $this->setVisao('ListarHistoria');
        $this->setResultados($res);
    }

    public function listarAoLogar($parametros) {
        $modelo = new ModeloHistoria();
        $res = $modelo->listar($parametros);
        sessao()->setHistoriasData($res);
    }

    public function editar($parametros) {

        $modelo = new ModeloHistoria();
        $res = $modelo->listar($parametros);

        if ($res[0] != false) {
            $this->setResultados($res[0]);
            $this->setVisao('FormHistoria');
        } else {
            redirecionar("?categoria=historia&acao=listar");
        }
    }

    public function salvar($parametros) {

        $modelo = new ModeloHistoria();
        $idUsuario = sessao()->getUserData()->id;
        if (isset($_FILES) && $_FILES['im_ppl']['size'] != 0) {
            $idHistoria = $modelo->proximoID();
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
        $res = $modelo->salvar($parametros);

        if ($res != false) {
            redirecionar("?categoria=historia&acao=listar");
        } else {
            redirecionar("?categoria=historia&acao=cadastrar");
        }
    }

    public function excluir($parametros) {

        $modelo = new ModeloHistoria();
        $idUsuario = sessao()->getUserData()->id;
        $parametros['fk_usu'] = $idUsuario;

        $res = $modelo->excluir($parametros);

        if ($res != false) {
            redirecionar("?categoria=historia&acao=listar");
        } else {
            redirecionar("?categoria=historia&acao=listar"); //mudar pra uma pagina de erro (Personagem não encontrado ou não faz parte de seus persongens cadastrados) :D
        }
    }

    public function listarCategorias($parametros) {
        
        $modelo = new ModeloHistoria();
        $res = $modelo->listar($parametros);
        
        sessao()->setHistoriaSelecionada($res);
        
        $this->setVisao('CategoriasHistoria');
        $this->setResultados($res);
    }
}
