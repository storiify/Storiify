<?php

class ControladorMundo extends Controlador{
      
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function cadastrar($parametros) {
        $mundo = Mundo::SelecionarUm($parametros);
        $this->setVisao('CadastrarMundo'); 
        $this->setModelo($mundo);
    }
}
