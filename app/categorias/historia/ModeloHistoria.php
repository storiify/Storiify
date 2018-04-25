<?php

class ModeloHistoria extends ConexaoBd{
    
    public function __construct() {
	parent::__construct();
    }
    
    public function salvarHistoria($parametros) {
	$modeloGererico = $this->getInstance();
	$modeloGererico->salvar();
    }
        
}
