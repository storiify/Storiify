<?php


class ModeloLogin extends ConexaoBd{
    
    public function check($param) {
	
	$email = $param['email'];
	$senha = $param['senha'];
	
	$condicao = "WHERE MAIL_USU='$email' AND SNH_USU='$senha'";
	
	$modeloBase = new ConexaoBd();
	$res = $modeloBase->listar("*", "tb_usuario", $condicao);
	
	if(!isset($res[0]) or $res[0]==null){
	    return false;
	}
	
	$temp = array(0=>array());
	$temp[0]['nome'] = $res[0]['NM_USU'];
	$temp[0]['email'] = $res[0]['MAIL_USU'];
	$temp[0]['apelido'] = $res[0]['APDO_USU'];
	
	return $temp;
    }
    
}
