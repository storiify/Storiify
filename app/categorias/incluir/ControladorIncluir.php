<?php

class ControladorIncluir extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }
	
	public function listar($parametros) {} 
	public function cadastrar($parametros) {}
	public function editar($parametros) {}
	public function excluir($parametros) {}
	
    public function salvar($parametros) {
	
	$modelo = new ModeloIncluir();   
	
	$res = $modelo->salvar($parametros); //Aqui é so um redirecionamento para o modeloIncluir, não parei para pensar direito, mas acredito que seja obrigatorio passar por aqui. Caso não seja, delete isso :D
	}
}