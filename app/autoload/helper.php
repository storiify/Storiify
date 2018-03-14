<?php

/* 
 * Contem funções para facilitar a vida (Usavel eu qualquer parte do codigo!)
 * 
 */

function proccessRequest() {
    $arrayTratado = ['categoria'=>'login','acao'=>'logar','parametros'=>[]];    
    foreach ($_GET as $key => $val) {
        switch ($key) {
            case 'categoria':
                $arrayTratado['categoria'] = $val;
                break;
            case 'acao':
                $arrayTratado['acao'] = $val;
                break;
            default:
                $arrayTratado['parametros'][$key] = $val;
                break;
        }
    }    
    return (object) $arrayTratado;
}

