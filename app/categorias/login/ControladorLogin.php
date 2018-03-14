<?php

class ControladorLogin extends Controlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function logar($param) {
        
        $this->setVisao('none');
        
    }
    
}
