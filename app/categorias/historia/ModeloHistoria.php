<?php

class ModeloHistoria extends ConexaoBd{
    
    private $tabela;
    private $campos = 'pk_hist,fk_usu,im_ppl,dets_im_ppl,tit_hist,dets_tit,stit_hist,dets_stit,aur_hist,dets_aur,'
	    . 'iltd_hist,dets_iltd,pbco_alvo,vsi_hist,dcr_em_uma_sntn,snp_hist,rsm_hist,dt_cric,dt_alt';
    
    public function __construct() {
	parent::__construct();
	$this->tabela = "tb_historia";
    }
    
    public function salvar($parametros) {
	
	date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");
	
	$modeloBase = new ConexaoBd();
	
        $parametros['dt_alt'] = $horarioAtual;
	$res = false;	
	
	if(isset($parametros['pk_hist']) && array_key_exists("pk_hist", $parametros)){
	    $condicao=" pk_hist='{$parametros['pk_hist']}'";
	    $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);
	}else{
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
	    $condicao.=" AND pk_hist='$id'";
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
