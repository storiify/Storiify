<?php

/**
 * Classe base para o redirecionamento
 *
 * @author Yan P. Gabriel
 */
class Redirecionar {

    public static function url($url) {
        if (!headers_sent()) {
            header("location:{$url}");
        } else {
            echo '<script>';
            echo 'window.location.href="' . $url . '";';
            echo '</script>';
        }
    }

    public function voltar() {

        $prev = "javascript:history.go(-1)";

        if (isset($_SERVER['HTTP_REFERER'])) {
            $prev = $_SERVER['HTTP_REFERER'];
        }
        return header("location:{$prev}");
    }

}
