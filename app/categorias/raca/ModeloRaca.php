<?php

class ModeloRaca extends ConexaoBd{
    
    private $tabela;
    private $campos = '*';
    
    public function __construct() {
	parent::__construct();
	$this->tabela = "tb_raca";
    }
    
    public function salvar($parametros) {
	$modeloBase = new ConexaoBd();
	$res = false;	
        
	if(isset($parametros['pk_raca']) && $parametros['pk_raca']!=''){ //Ao editar
	    $condicao = " pk_raca='{$parametros['pk_raca']}'";
	    $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);
	}else{ //Ao criar
	    unset($parametros['pk_raca']);
            $historiaSelecionada = sessao()->getHistoriaSelecionada()->pk_hist;
            $parametros['fk_hist'] = $historiaSelecionada;
	    $res = $modeloBase->inserirBase($parametros, $this->tabela);
	}
	return $res;
    }
    
    public function listar($parametros) {
	$modeloBase = new ConexaoBd();
	
	$idHistoriaSelecionada = sessao()->getHistoriaSelecionada()->pk_hist;
	$condicao = "WHERE fk_hist='$idHistoriaSelecionada'";
	
	if(isset($parametros['id']) && array_key_exists("id", $parametros)){
	    $id = $parametros['id'];
	    $condicao.=" AND pk_raca='$id'";
	}
	
	$res = $modeloBase->listarBase($this->campos, $this->tabela, $condicao);
	
	if(!isset($res) or $res==null){
	    return array();
	}
		
	return $res;
	
    }
	
    public function excluir($parametros) {
	
	$modeloBase = new ConexaoBd();
	
	$res = false;	
	$id = $parametros['parametros'];
	$idusuario = sessao()->getUserData()->id;
	$condicao = "pk_hist='$id'";
	$condicao.=" AND fk_usu='$idusuario'";
	
	$res = $modeloBase->excluirBase($this->tabela, $condicao);
	
	return $res;
    }
    
    public function proximoID() {
	$modeloBase = new ConexaoBd();
	return $modeloBase->getNextID($this->tabela);
    } 
}
