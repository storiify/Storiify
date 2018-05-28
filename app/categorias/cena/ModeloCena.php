<?php

class ModeloCena extends ConexaoBd{
    
    private $tabela;
    private $campos = 'pk_cena,fk_usu,fk_hist,im_cena,im_cena_dets,tit_cena,tit_cena_dets,fk_cena_ant,fk_cena_ptrr,dt_hora,dt_hora_dets,vsi_cena,rsm_cena,desm_cena,dt_cric,dt_alt';
    
    public function __construct() {
	parent::__construct();
	$this->tabela = "tb_Cena";
    }
    
    public function salvar($parametros) {
	
	date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");
	
	$modeloBase = new ConexaoBd();
	
        $parametros['dt_alt'] = $horarioAtual;
	$res = false;	
	
	if(isset($parametros['pk_cena']) && $parametros['pk_cena']!=''){
	    $condicao=" pk_cena='{$parametros['pk_cena']}'";
	    $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);
	}else{
	    unset($parametros['pk_cena']);
	    $parametros['dt_cric'] = $horarioAtual;
	    $res = $modeloBase->inserirBase($parametros, $this->tabela);
	    
	}
	
	return $res;
    }
    
    public function listar($parametros) {
	
	$modeloBase = new ConexaoBd();
	
	$idusuario = sessao()->getUserData()->id;
	$condicao = "WHERE fk_usu='$idusuario'";
	
	if(isset($parametros['id']) && array_key_exists("id", $parametros)){
	    $id = $parametros['id'];
	    $condicao.=" AND pk_cena='$id'";
	}
	
	$res = $modeloBase->listarBase($this->campos, $this->tabela, $condicao);
	
	if(!isset($res) or $res==null){
	    return array();
	}
		
	return $res;
	
    }
    
    public function proximoID() {
	$modeloBase = new ConexaoBd();
	return $modeloBase->getNextID($this->tabela);
    }
        
}
