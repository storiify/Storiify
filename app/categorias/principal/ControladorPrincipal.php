<?php

class ControladorPrincipal extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
	parent::setDicas("Dicas Historia");
        $this->setCategoria($categoria);
    }
    
    public function home($parametros){
	$this->setVisao('home');
    }

    public function cadastrar($parametros) {}

    public function editar($parametros) {}

    public function excluir($parametros) {}

    public function listar($parametros) {}

    public function salvar($parametros) {}

}
