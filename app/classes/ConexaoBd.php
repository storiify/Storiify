<?php

class ConexaoBd {

    private static $instance = NULL;
    
    public function __construct() {}
    
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
        self::$instance = new PDO('mysql:host=0.tcp.ngrok.io:10217;dbname=bd_storiify', 'storiify', 'strfg1pi3senac', $pdo_options);
        //self::$instance = new PDO('mysql:host=localhost;dbname=bd_storiify', 'root', '', $pdo_options);
      }
      return self::$instance;

    }
    
    public function listar($colunas,$tabela,$where=null,$ordenar=null) {
	
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
    
    public function salvar($parametros) {
	
    }

}

//$servername  = "0.tcp.ngrok.io:18751";
//       $dbname      = "storiify";
//       $username    = "storiify";
//       $password    = "strfg1pi3senac";