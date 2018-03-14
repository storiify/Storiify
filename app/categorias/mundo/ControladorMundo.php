<?php

class ControladorMundo extends Controlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function cadastrar($parametros) {
        consoleLog('Chegou ao cadastro de Mundo!');
        
        $this->setVisao('CadastrarMundo');
       
    }
    
}
