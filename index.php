<?php
// Carrega config antes de tudo para definir os parametros a serem usados
require_once 'app/autoload/config.php';

/**
 * Autoload - Carrega arquivos iniciais e essenciais para o funcionamento do sistema.
 */

$dirloads = PATH_AUTOLOAD;
if ($handle = opendir($dirloads)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "..." && $file != 'config.php') {
            require_once $dirloads.$file;
            consoleLog("Arquivo carregado: $file");
        }
    }
}

$resultadoURL = proccessRequest();

$controlador = new Controlador();
$controlador->exe($resultadoURL->categoria,$resultadoURL->acao,$resultadoURL->parametros);
