<?php

class ModeloHistoria extends ConexaoBd{
    
    private $tabela;
    private $campos = 'pk_hist,fk_usu,im_hist,im_hist_dets,tit_hist,tit_hist_dets,stit_hist,stit_hist_dets,aur_hist,
	aur_hist_dets,iltd_hist,iltd_hist_dets,pbco_alvo,vsi_hist,fk_psna_ppl,dcr_em_uma_sntn,snp_hist,rsm_hist,dt_cric,dt_alt';
    
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
	
	if(isset($parametros['pk_hist']) && $parametros['pk_hist']!=''){
	    $condicao=" pk_hist='{$parametros['pk_hist']}'";
	    $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);
	}else{
	    unset($parametros['pk_hist']);
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
