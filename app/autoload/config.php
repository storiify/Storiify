<?php
/* 
 * Arquivo base de configurações
 */
define("DEBUG", TRUE);
define("DEBUG_VERBOSE", FALSE);
define("PATH", $_SERVER['DOCUMENT_ROOT'].'/storiify/');
define("PATH_AUTOLOAD", PATH."app/autoload/");
define("PATH_CLASS", PATH."app/classes/");
define("PATH_CAT", PATH."app/categorias/");
define("PATH_VISOES_PUBLICAS", PATH.'visoes_publicas/');

define("VISAO_BASE","base.php");
define("VISAO_404","404.php");

define("OBRIGAR_LOGIN",TRUE);
define("CHAVE_LOGIN","logado");
define("URL_LOGIN","?categoria=login&acao=logar");

define("const_Indefinida_IM", "./imagens/sem-foto.png");
define("const_Indefinida", "./imagens/sem-instancia.png");
define("const_Indefinida_Msg", "Suas %s aparecerão aqui");

function consoleLog($msg) {
    
    static $handle;
    
    if(DEBUG){
        echo "<script>console.log( '" . $msg . "' );</script>";       
        
        if (!isset($handle)) {
            $handle = fopen('debug.txt', 'a+');
            fwrite($handle, "----------------------------------------------------".PHP_EOL);
            fwrite($handle, "Log iniciado " . date("Y-m-d h:i:sa", time()) . PHP_EOL);
        }
        
        fwrite($handle, $msg.PHP_EOL);
    }        
}
