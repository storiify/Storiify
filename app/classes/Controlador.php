<?php

/**
 * Controlador base de todas as categorias do sistema, TODOS os controladores deverão se estender a esse.
 *
 * @author Yan
 */
class Controlador {

    private $categoria;
    private $controlador;
    private $resultados;
    private $visao;
    private $sessao;
    private $dicas;

    public function __construct() {
        //Em Breve chamar sessão aqui
        $this->sessao = new Sessao();
        $this->dicas = "As dicas ficarão rodando aqui!";
    }

    public function exe($categoria, $acao, $parametros) {

        $this->controlador = $this->controladorCategoria($categoria);
        $this->resultados = $this->executeAcao($acao, $parametros);

        $file_base = PATH_VISOES_PUBLICAS . VISAO_BASE;
        $file_dir = $this->controlador->getVisao();

        if (file_exists($file_base)) {
            if (file_exists($file_dir) || $file_dir == "none") {
                //var_dump($file_base);
                require_once $file_base;
            } else {
                die("Pagina de visualização da categoria não encontrada!");
            }
        } else {
            die("Pagina de visualização base não encontrada!");
        }
    }

    /*
     * Seta arquivo de visualização a ser apresentado ao usuario
     * 
     * @var $arquivoPHP Nome do arquivo com ou ser o ".php"
     */

    public function setVisao($arquivoPHP) {
        if ((strpos($arquivoPHP, '.php') !== FALSE)) {
            $this->visao = $arquivoPHP;
        } else {
            $this->visao = $arquivoPHP . '.php';
        }
    }

    /*
     * Retorna o arquivo de visão (Somente usado no controlador principal)
     */

    public function getVisao() {
        if ($this->visao == "none.php") {
            return "none";
        }
        return PATH_CAT . $this->categoria . '/visoes/' . $this->visao;
    }

    /*
     * Seta a categoria no controlador geral
     * 
     * @var $categoria nome da categoria sendo usada
     */

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    /*
     * Pegar a sessao para trabalhar internamente
     * 
     * @return array Sessão a ser tratada
     */

    public function getSessao() {
        return $this->sessao->getSessao();
    }

    public function getDicas() {
        return $this->dicas;
    }

    private function controladorCategoria($cat) {
        $tempControlador = "Controlador" . ucfirst(strtolower($cat));
        if (!class_exists($tempControlador)) {
            die('Categoria "' . $cat . '" não encontrada no sistema!');
        }
        $controlador = new $tempControlador($cat);
        return $controlador;
    }

    private function executeAcao($acao, $parametros = []) {
        $res = [];
        if (!method_exists($this->controlador, $acao)) {
            die('Ação "' . $acao . '" não encontrada no sistema!');
        } else {
            $res = $this->controlador->$acao($parametros);
        }
        return $res;
    }

}
