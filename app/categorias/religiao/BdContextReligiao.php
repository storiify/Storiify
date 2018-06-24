<?php

class BdContextReligiao extends ConexaoBd {

    const tx_tabela = "tb_religiao";
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
        
        if (isset($parametros['pk_relg']) && $parametros['pk_relg'] != '') { //Ao editar
            $condicao = " pk_relg='{$parametros['pk_relg']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
        } else { //Ao criar
            unset($parametros['pk_relg']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }
        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_relg='$id'";
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
        //Segunda condição = pk_religiao
        $id = $parametros['id'];
        $condicao .= " AND pk_relg='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    public function localizacoesQueAparece($parametros) {
        $tbRel = "tb_localizacao_rel_religiao";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_relg='$idLocalizacao'";

        $res = $this->listarBase('fk_lczc', $tbRel, $condicao);
        
        if (!isset($res) or $res == null) {
            return array();
        }

        require_once PATH_CAT . "localizacao/BdContextLocalizacao.php";

        $bdContextLczc = new BdContextLocalizacao("pk_lczc, nm_lczc");

        $res = $bdContextLczc->listarVarios($res);

        return $res;
    }

}
