<?php


class ModeloLogin extends ConexaoBd{
    
    private $campos = '';

    public function check($param) {
	
	$email = $param['email'];
	$senha = $param['senha'];
	
	$condicao = "WHERE MAIL_USU='$email' AND SNH_USU='$senha'";
	
	$modeloBase = new ConexaoBd();
	$res = $modeloBase->listarBase("*", "tb_usuario", $condicao);
	
	if(!isset($res[0]) or $res[0]==null){
	    return false;
	}
	
	$temp = array(0=>array());
	$temp[0]['id'] = $res[0]['pk_usu'];
	$temp[0]['nome'] = $res[0]['nm_usu'];
	$temp[0]['sobrenome'] = $res[0]['snm_usu'];
	$temp[0]['email'] = $res[0]['mail_usu'];
	$temp[0]['apelido'] = $res[0]['apdo_usu'];
	
	return $temp;
    }
    
}
