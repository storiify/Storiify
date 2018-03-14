<?php

/*
 * Contém funções para facilitar a vida (Usável em qualquer parte do código!)
 * 
 */

function proccessRequest() {
    $arrayTratado = ['categoria' => 'login', 'acao' => 'logar', 'parametros' => []];
    //$arrayTratado = ['categoria' => 'mundo', 'acao' => 'cadastrar', 'parametros' => []];

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
