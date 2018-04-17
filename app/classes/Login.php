<?php
/**
 * Classe controle de login
 *
 * @author Yan P. Gabriel
 */
class Login {
        
    public function __construct() {
    }
    
    public function logar() {
        
    }
    public function check() {
        
        $sessao = sessao();
        if($sessao->getChave(CHAVE_LOGIN)!=TRUE){
            redirecionar(URL_LOGIN);
            die;//Caso falhe o redirecionamento ele morre.
        }
        
    }
    public function logout() {
        
    }
    
}
