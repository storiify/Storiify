<?php

class ControladorPersonagem extends Controlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function listar($parametros) {
        consoleLog('Chegou a listagem de Personagens!');
        
        $this->setVisao('ListarPersonagens');
       
    }
	
	public function cadastrar($parametros) {
        consoleLog('Chegou ao cadastro de Personagem!');
        
        $this->setVisao('CadastrarPersonagem');
       
    }
    
}
