<?php

class ControladorCena extends Controlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function cadastrar($parametros) {
        
        $this->setVisao('CadastrarCena');
       
    }
    
}
