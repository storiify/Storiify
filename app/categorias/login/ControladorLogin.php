<?php

class ControladorLogin extends Controlador implements InterfaceControlador{
    
    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
    
    public function logar($param) {
	//Pega a lista de historias e ja salva na SESSAO ao logar
        $this->setVisao('logar', TRUE);       
    }
    
    public function check($param) {	
	$modelo = new ModeloLogin();
	$res = $modelo->check($param);
	
	if($res[0]){
	    $login = new Login();
	    $login->logar($res[0]);
	}
	redirecionar("?categoria=principal&acao=home");
    }
    
    public function delogar($param) {	
	$login = new Login();
	$login->logout();
	redirecionar("?categoria=principal&acao=home");
    }
    
    public function registrar($param) {
        
        $this->setVisao('registrar', TRUE);
        
    }

    public function cadastrar($parametros) {}

    public function editar($parametros) {}

    public function excluir($parametros) {}

    public function listar($parametros) {}

    public function salvar($parametros) {}

}
