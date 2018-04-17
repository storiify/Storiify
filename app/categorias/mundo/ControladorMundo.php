<?php

class ControladorMundo extends Controlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Mundo");       
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        if ($parametros == null) {
            $this->setVisao('CadastrarMundo');
        } else {
            $mundo = Mundo::SelecionarUm($parametros);
            $this->setParametros($mundo);
            $this->setVisao('CadastrarMundo');
        }
    }
    
    public function salvar(){
        $mundo = new Mundo($_POST['view_pk_mnd'], $_POST['view_nm_ppl']);
        Mundo::Inserir($mundo);
        $this->setVisao('ListarMundo');
    }

}
