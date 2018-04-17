<?php
/* 
 * Arquivo base de configurações
 */
define("DEBUG", TRUE);
define("PATH", $_SERVER['DOCUMENT_ROOT'].'/');
define("PATH_AUTOLOAD", PATH."app/autoload/");
define("PATH_CLASS", PATH."app/classes/");
define("PATH_CAT", PATH."app/categorias/");
define("PATH_VISOES_PUBLICAS", PATH.'visoes_publicas/');

define("VISAO_BASE","base.php");
define("VISAO_404","404.php");

define("OBRIGAR_LOGIN",FALSE);
define("CHAVE_LOGIN","logado");
define("URL_LOGIN","?categoria=login&acao=logar");

function consoleLog($msg) {
    if(DEBUG){
        echo "<script>console.log( '" . $msg . "' );</script>";        
    }        
}
