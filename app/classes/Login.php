<?php
/**
 * Classe controle de login
 *
 * @author Yan P. Gabriel
 */
class Login {
        
    private $sessao;
    
    public function __construct() {
	$this->sessao = sessao();
    }
    
    public function logar($param) {
	
	$userData = array();
	foreach ($param as $key=>$val){
	    $userData[$key] = $val;
	}
	$this->sessao->setChave("user_data", $userData);
	
	$cHit = new ControladorHistoria('historia');
	$cHit->listar($param);
	
        return $this->sessao->setChave(CHAVE_LOGIN, TRUE);
    }
    public function check() {
        
        if($this->sessao->getChave(CHAVE_LOGIN)!=TRUE){
            redirecionar(URL_LOGIN);
            die;//Caso falhe o redirecionamento ele morre.
        }
        
    }
    public function logout() {
        $this->sessao->setChave(CHAVE_LOGIN, FALSE);
        $this->sessao->setChave('user_data', NULL);
    }
    
}
