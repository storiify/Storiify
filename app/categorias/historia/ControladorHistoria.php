<?php

class ControladorHistoria extends Controlador{
    
    public function __construct($categoria) {
        parent::__construct();
	parent::setDicas("Dicas Historia");
        $this->setCategoria($categoria);
    }
    
    public function cadastrar($parametros) {
        $this->setVisao('CadastrarHistoria');
    }
    public function listar($parametros) {
        $this->setVisao('ListarHistoria');
    }
}
