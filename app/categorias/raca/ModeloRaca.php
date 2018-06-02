<?php

class Modeloraca extends ConexaoBd{
    
    private $tabela;
    private $campos = 'pk_raca,fk_hist,nm_raca, dcr_raca, pvmt_raca, rptc_raca';
    
    public function __construct() {
	parent::__construct();
	$this->tabela = "tb_raca";
    }
    
    public function salvar($parametros) {
	
	$modeloBase = new ConexaoBd();
	
	$res = false;	
	
	if(isset($parametros['pk_raca']) && $parametros['pk_raca']!=''){
	    $condicao=" pk_raca='{$parametros['pk_raca']}'";
	    $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);
	}else{
	    unset($parametros['pk_raca']);
	    $res = $modeloBase->inserirBase($parametros, $this->tabela);
	}
	return $res;
    }
    
    public function listar($parametros) {
	
	$modeloBase = new ConexaoBd();
	
	$idHistoriaSelecionada = sessao()->getHistoriaSelecionada()->pk_hist;
	$condicao = "WHERE fk_hist='$idHistoriaSelecionada'";
	
	if(isset($parametros['pk_raca']) && array_key_exists("pk_raca", $parametros)){
	    $id = $parametros['pk_raca'];
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
