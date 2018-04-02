<?php
/**
 * Classe base para o redirecionamento
 *
 * @author Yan P. Gabriel
 */
class Redirecionar {
    
    public function url($url) {
        return header("location:{$url}");
    }
    
    public function voltar() {
        
        $prev = "javascript:history.go(-1)";
        
        if(isset($_SERVER['HTTP_REFERER'])){
            $prev = $_SERVER['HTTP_REFERER'];
        }
        return header("location:{$prev}");
    }
    
}
