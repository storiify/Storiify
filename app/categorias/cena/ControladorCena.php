<?php

class ControladorCena extends Controlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function cadastrar($parametros){
        consoleLog('Cadastro de Cenas');
        $this -> setVisao('CadastrarCena');
    }
    
    public function listar($parametros){
        consoleLog('Listagem de cenas');
        $this -> setVisao('ListarCenas');
    }
}