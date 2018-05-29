<?php

require_once '..\passwordBD.php';

class ConexaoBd {

    private static $instance = NULL;
    
    public function __construct() {}
    
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
       
        self::$instance = new PDO('mysql:host='.passwordBD::$servername.';dbname='.passwordBD::$dbname, passwordBD::$username, passwordBD::$password, $pdo_options);
      }
      return self::$instance;

    }
    
    /* lista 1 ou varias linhas de uma tabela e retorna a array delas */
    public function listarBase($colunas,$tabela,$where=null,$ordenar=null) {	
	$sql = "SELECT $colunas FROM $tabela ";	
	if($where!=null){
	    $sql.= ' '.$where;
	}
	if($ordenar!=null){
	    $sql.= ' '.$where;
	}	
	$res = array();
	foreach (self::getInstance()->query($sql) as $row) {
	    $res[] = $row;
	}
	return $res;
    }
    
    /* da update em 1 ou varias colunas de uma tabela e retorna BOOL */
    public function updateBase($parametros,$tabela,$where) {	
	$query = "";
	foreach ($parametros as $coluna => $valor) {
	    $query .= "`".$coluna."`='$valor',";
	}
	$query = substr($query, 0, -1);	
	$sql = "UPDATE `$tabela`a SET $query WHERE $where";
	$res = self::getInstance()->query($sql);
	if($res->rowCount()>0){
	    return true;
	}else{
	    return false;
	}	
	return $res;
    }
    
    /* insere em 1 registro numa tabela e retorna BOOL */
    public function inserirBase($parametros,$tabela) {	
	$colunas = "";
	$valores = "";
	foreach ($parametros as $coluna => $valor) {
	    $colunas .= $coluna.',';
	    $valores .= "'".$valor."',";
	}
	$colunas = substr($colunas, 0, -1);
	$valores = substr($valores, 0, -1);
		
	$sql = "INSERT INTO $tabela ($colunas) VALUES ($valores)";
	$res = self::getInstance()->query($sql);
	
	if($res->rowCount()>0){
	    return true;
	}else{
	    return false;
	}
    }
    
    /* da delete */
    public function excluirBase($tabela,$where) {
	$sql = "DELETE FROM $tabela WHERE $where";
	$res = self::getInstance()->query($sql);
	if($res->rowCount()>0){
	    return true;
	}else{
	    return false;
	}	
	return $res;
    }
    
    /* retorna o ID a ser usado no proximo registro em determinada tabela */
    public function getNextID($tabela) {
	$sql = "SHOW TABLE STATUS LIKE '$tabela'";
	$res = null;
	foreach (self::getInstance()->query($sql) as $row) {
	    $res = $row['Auto_increment'];
	}
	return $res;	
    }
}
