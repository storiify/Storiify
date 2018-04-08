<?php
  class ConexaoBd {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=0.tcp.ngrok.io:18751;dbname=storiify', 'storiify', 'strfg1pi3senac', $pdo_options);
      }
      return self::$instance;
    }
  }

//$servername  = "0.tcp.ngrok.io:17013";
//       $dbname      = "storiify";
//       $username    = "storiify";
//       $password    = "strfg1pi3senac";