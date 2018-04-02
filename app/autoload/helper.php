<?php

/*
 * Contém funções para facilitar a vida (Usável em qualquer parte do código!)
 * 
 */

function proccessRequest() {
    $arrayTratado = ['categoria' => 'login', 'acao' => 'logar', 'parametros' => []];

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

function redirecionar($url) {
    Redirecionar::url($url);
}

function sessao() {
    $session = new Sessao();
    return $session;
}

function notfount($msg=null) {
    $sessao = sessao();
    $sessao->setSessao('MSG_404', $msg);
    require_once PATH_VISOES_PUBLICAS.VISAO_404;
    die;
}
