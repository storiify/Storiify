<?php

class BdContextProfissao extends ConexaoBd {

    private $tabela = "tb_profissao";
    private $campos = '*';

    public function __construct() {
        parent::__construct();
    }

    public function salvar($parametros) {
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $parametros['fk_hist'] = ($parametros['fk_hist'] != '' ? $parametros['fk_hist'] : $idHistoria);

        $res = false;

        if ($parametros['pk_pfs'] != '') { //Ao editar
            $condicao = " pk_pfs='{$parametros['pk_pfs']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
            consoleLog("BdContext: " . $res);
        } else { //Ao criar
            unset($parametros['pk_pfs']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }
        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_pfs='$id'";
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
        //Segunda condição = pk_pfs
        $id = $parametros['id'];
        $condicao .= " AND pk_pfs='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    public function personagensQueAparece($parametros) {
        $tbPsnaPfs = "tb_personagem_rel_profissao";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_pfs='$idPersonagem'";

        $res = $this->listarBase('fk_psna', $tbPsnaPfs, $condicao);
        
        if (!isset($res) or $res == null) {
            return array();
        }

        require_once PATH_CAT . "personagem/BdContextPersonagem.php";

        $bdContextPsna = new BdContextPersonagem("pk_psna, nm_psna");

        $res = $bdContextPsna->listarVarios($res);

        return $res;
    }

}
