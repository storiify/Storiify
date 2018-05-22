<?php

class ModeloPersonagem extends ConexaoBd{
    
    private $tabela;
    private $campos = '*';
    
    public function __construct() {
	parent::__construct();
	$this->tabela = "tb_personagem";
    }
    
    public function salvar($parametros) {
	
	date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");
	
	$modeloBase = new ConexaoBd();
	
    //$parametros['dt_alt'] = $horarioAtual;
	$res = false;	
	
	if (isset($parametros['nm_cls']) || isset($parametros['dcr_cls'])){
		
	$tabelaCls = tb_cls;
	$InsCls->nm_cls = $parametros['nm_cls'];
	$InsCls->dcr_cls = $parametros['dcr_cls'];
	
	unset ($parametros['nm_cls'], $parametros['dcr_cls']);
	
	$res = $modeloBase->inserirBase($InsCls, $tabelaCls);
	
	// if(isset($parametros['pk_psna']) && $parametros['pk_psna']!=''){
	    // $condicao=" pk_psna='{$parametros['pk_psna']}'";
	    // $res = $modeloBase->updateBase($parametros, $tabelaCls, $condicao);
	// }else{
	    // unset($parametros['pk_psna']);
	    //$parametros['dt_cric'] = $horarioAtual;
	    // $res = $modeloBase->inserirBase($parametros, $tabelaCls);
	// }
	}
	
	if (isset($parametros['nm_pfs']) || isset($parametros['dcr_pfs'])){
		
	$tabelaPfs = tb_pfs;
	$InsPfs->nm_pfs = $parametros['nm_pfs'];
	$InsPfs->dcr_pfs = $parametros['dcr_pfs'];
	
	unset ($parametros['nm_pfs'], $parametros['dcr_pfs']);
	
	$res = $modeloBase->inserirBase($InsPfs, $tabelaPfs);
	
	// if(isset($parametros['pk_psna']) && $parametros['pk_psna']!=''){
	    // $condicao=" pk_psna='{$parametros['pk_psna']}'";
	    // $res = $modeloBase->updateBase($parametros, $tabelaCls, $condicao);
	// }else{
	    // unset($parametros['pk_psna']);
	    //$parametros['dt_cric'] = $horarioAtual;
	    // $res = $modeloBase->inserirBase($parametros, $tabelaCls);
	// }
	}
	
	
	if(isset($parametros['pk_psna']) && $parametros['pk_psna']!=''){
	    $condicao=" pk_psna='{$parametros['pk_psna']}'";
	    $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);
	}else{
	    unset($parametros['pk_psna']);
	    // $parametros['dt_cric'] = $horarioAtual;
	    $res = $modeloBase->inserirBase($parametros, $this->tabela);
	}
	
	return $res;
    }
    
    public function listar($parametros) {
	
	$modeloBase = new ConexaoBd();
	//$tab = "tb_cls"; $camp = "*"; $cond = "WHERE pk_cls = 1"; 
	$idusuario = sessao()->getUserData()->id;
	$condicao = "WHERE fk_usu='$idusuario'";
	
	if(isset($parametros['parametros']) && array_key_exists("parametros", $parametros)){
	    $id = $parametros['parametros'];
	    $condicao.=" AND pk_psna='$id'";
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
	$condicao = "pk_psna='$id'";
	$condicao.=" AND fk_usu='$idusuario'";
	
	$res = $modeloBase->excluirBase($this->tabela, $condicao);
	
	
	return $res;
    }
    
    public function proximoID() {
	$modeloBase = new ConexaoBd();
	return $modeloBase->getNextID($this->tabela);
    }
        
}
