<?php

class BdContextClasse extends ConexaoBd {

    const tx_tabela = "tb_classe";
    private $campos = '*';

    public function __construct() {
        parent::__construct();
        $this->tabela = self::tx_tabela;
    }

    public function salvar($parametros) {
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $parametros['fk_hist'] = ($parametros['fk_hist'] != '' ? $parametros['fk_hist'] : $idHistoria);

        $res = false;

        if ($parametros['pk_cls'] != '') { //Ao editar
            $condicao = " pk_cls='{$parametros['pk_cls']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
            consoleLog("BdContext: " . $res);
        } else { //Ao criar
            unset($parametros['pk_cls']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }
        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_cls='$id'";
        }

        $res = $this->listarBase($this->campos, $this->tabela, $condicao);
        if (!isset($res) || $res == null) {
            return array();
        }

        return $res;
    }

    public function excluir($parametros) {

        //Primeira condição = fk_hist
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "fk_hist='$idHistoria'";
        //Segunda condição = pk_cls
        $id = $parametros['id'];
        $condicao .= " AND pk_cls='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    public function personagensQueAparece($parametros) {
        $tbPsnaClasse = "tb_personagem_rel_classe";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_cls='$idPersonagem'";

        $res = $this->listarBase('fk_psna', $tbPsnaClasse, $condicao);
        
        if (!isset($res) or $res == null) {
            return array();
        }

        require_once PATH_CAT . "personagem/BdContextPersonagem.php";

        $bdContextPsna = new BdContextPersonagem("pk_psna, nm_psna");

        $res = $bdContextPsna->listarVarios($res);

        return $res;
    }

}
