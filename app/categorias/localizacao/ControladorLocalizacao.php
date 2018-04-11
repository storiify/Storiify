<?php

/*
 * @author Ricardo Fernandes
 */

class ControladorLocalizacao extends Controlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function cadastrar() {
        $this->setVisao('CadastrarLocalizacao');
    }
    
    
    public function listar() {
        $this->setVisao('ListarLocalizacao');
    }
    
}
