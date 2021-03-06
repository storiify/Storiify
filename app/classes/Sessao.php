<?php

/**
 * Classe feita para a manupulação da sessão privada do sistema
 *
 * @author Yan P. Gabriel
 */
class Sessao {

    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            @session_name('Storiify_Session'); //Usar o @ para suprimir erros
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
        if (!isset($_SESSION[$chave])) {
            return null;
        }
        return $_SESSION[$chave];
    }

    public function getUserData() {
        return (object) $this->getChave('user_data');
    }

    public function setHistoriasData(array $listaHistorias) {
        return (object) $this->setChave('hist_data', $listaHistorias);
    }

    public function getHistoriasData() {
        return (object) $this->getChave('hist_data');
    }

    public function setHistoriaSelecionada($historia) {
        return $this->setChave('hist_selecionada', $historia);
    }

    public function getHistoriaSelecionada() {
        return $this->getChave('hist_selecionada');
    }

}
