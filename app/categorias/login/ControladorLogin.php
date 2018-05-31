<?php

class ControladorLogin extends Controlador implements InterfaceControlador {
    
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
	redirecionar("?categoria=historia&acao=listar");
    }
    
    public function deslogar($param) {	
	$login = new Login();
	$login->logout();
	redirecionar("?categoria=principal&acao=home");
    }
    
    public function registrar($param) {
        
        $this->setVisao('registrar', TRUE);
        
    }

    public function salvar($parametros) {
		
	$modelo = new ModeloLogin();
	
	$res = $modelo->salvar($parametros);
	if($res != true){
		echo "erro ao registrar o usuario!";
	}	
		
	}
	
	public function verificar($parametros) {
		
	$modelo = new ModeloLogin();
	
	$res = $modelo->verificar($parametros);	
	
	if($res == true){ //se a consulta no banco de dados for verdadeira (se o registro constar no bd), ele "escreve" na resposta do ajax "email ja existe"
		echo "email ja existe";
	}else {die;} //se o registro não constar no banco de dados ele "retorna nada" para para o ajax 
		
	}

    public function editar($parametros) {}

    public function excluir($parametros) {}

    public function listar($parametros) {}

    public function cadastrar($parametros) {}
    

}
