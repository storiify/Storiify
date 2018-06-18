<?php

/*
 * Controlador Exemplo - Não modificar nada abaixo!!
 * 
 * Somente copie e edite a class abaixo caso tenha duvida do funcionamento. 
 */

class ControladorExemplo extends Controlador implements InterfaceControlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function teste($parametros) {
        
        echo "<script>alert('Aperte F12 e olhe a console para mais informações!');</script>";
        consoleLog('Ação teste do controlador exemplo!');
        
        $this->setVisao('sample');
        
        /* Set a visão como 'none' caso não queira carregar nada na pagina.  */
        //$this->setVisao('none');
        
    }

    /* Metodos padrões */
    public function cadastrar($parametros) {
	
    }

    public function editar($parametros) {
	
    }

    public function excluir($parametros) {
	
    }

    public function listar($parametros) {
	
    }

    public function salvar($parametros) {
	
    }

}
