<?php
/**
 * Classe feita para a manupulação da sessão privada do sistema
 *
 * @author Yan P. Gabriel
 */

class Sessao {
            
    public function __construct() {
	if(!isset($_SESSION)) {
	    session_name('Storiify_Session');
	    @session_start();
	}
    }   
    
    public function setChave($chave, $valor) {        
        $_SESSION[$chave] = $valor;
	return $this->getChave($chave);
    }
    
    public function getSessao() {
        return $_SESSION;
    }
    
    public function getChave($chave) {
        return $_SESSION[$chave];
    }
    
}
