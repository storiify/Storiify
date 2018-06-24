<?php

class BdContextHabilidade_fisica extends ConexaoBd {

    const tx_tabela = "tb_habilidade_fisica";
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

        if ($parametros['pk_hbld_fsca'] != '') { //Ao editar
            $condicao = " pk_hbld_fsca='{$parametros['pk_hbld_fsca']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
            consoleLog("BdContext: " . $res);
        } else { //Ao criar
            unset($parametros['pk_hbld_fsca']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }
        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_hbld_fsca='$id'";
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
        //Segunda condição = pk_hbld_fsca
        $id = $parametros['id'];
        $condicao .= " AND pk_hbld_fsca='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    public function personagensQueAparece($parametros) {
        $tbPsnaPfs = "tb_personagem_rel_habilidade_fisica";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_hbld_fsca='$idPersonagem'";

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
