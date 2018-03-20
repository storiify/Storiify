<?php
/**
 * Classe feita para a manupulação da sessão privada do sistema
 *
 * @author Yan P. Gabriel
 */

class Sessao {
        
    public function __construct() {
        session_name('Storiify_Session');
        @session_start();
    }
    
    public function setSessao($chave, $valor) {        
        $_SESSION[$chave] = $valor;
    }
    
    public function getSessao() {
        return $_SESSION;
    }
    
}
