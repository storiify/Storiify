<?php

class BdContextRaca extends ConexaoBd {

    private $tabela = "tb_raca";
    private $campos = '*';

    public function __construct() {
        parent::__construct();
    }

    public function salvar($parametros) {
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $parametros['fk_hist'] = ($parametros['fk_hist'] != '' ? $parametros['fk_hist'] : $idHistoria);

        $res = false;

        if ($parametros['pk_raca'] != '') { //Ao editar
            $condicao = " pk_raca='{$parametros['pk_raca']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
            consoleLog("BdContext: ".$res);
        } else { //Ao criar
            unset($parametros['pk_raca']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }
        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros['id']) && array_key_exists("id", $parametros)) {
            $id = $parametros['id'];
            $condicao .= " AND pk_raca='$id'";
        }

        $res = $this->listarBase($this->campos, $this->tabela, $condicao);

        if (!isset($res) || $res == null) {
            return array();
        }

        return $res;
    }

    public function excluir($parametros) {

        //Primeira condição = fk_hist
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $condicao = "fk_hist='$idHistoria'";
        //Segunda condição = pk_raca
        $id = $parametros['id'];
        $condicao .= " AND pk_raca='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

}
