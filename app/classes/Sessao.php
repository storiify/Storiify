<?php
/**
 * Classe feita para a manupulação da sessão privada do sistema
 *
 * @author Yan P. Gabriel
 */

class Sessao {
    
    private static $instance = NULL;
        
    public function __construct() {
	if (!isset(self::$instance)) {
	    session_name('Storiify_Session');
	    session_start();
	    self::$instance = $this;
	}
    }   
    
    public function setSessao($chave, $valor) {        
        $_SESSION[$chave] = $valor;
    }
    
    public function getSessao() {
        return $_SESSION;
    }
    
    public function getChave($chave) {
        return $_SESSION[$chave];
    }
    
}
