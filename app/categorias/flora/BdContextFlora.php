<?php

class BdContextFlora extends ConexaoBd {

    private $tabela = "tb_flora";
    private $campos = '*';

    public function __construct() {
        parent::__construct();
    }

    public function salvar($parametros) {
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $parametros['fk_hist'] = ($parametros['fk_hist'] != '' ? $parametros['fk_hist'] : $idHistoria);

        $res = false;
        
        if (isset($parametros['pk_flra']) && $parametros['pk_flra'] != '') { //Ao editar
            $condicao = " pk_flra='{$parametros['pk_flra']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
        } else { //Ao criar
            unset($parametros['pk_flra']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }
        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_flra='$id'";
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
        //Segunda condição = pk_fna
        $id = $parametros['id'];
        $condicao .= " AND pk_flra='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    public function localizacoesQueAparece($parametros) {
        $tbLczcFlora = "tb_localizacao_rel_flora";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_flra='$idLocalizacao'";

        $res = $this->listarBase('fk_lczc', $tbLczcFlora, $condicao);
        
        if (!isset($res) or $res == null) {
            return array();
        }

        require_once PATH_CAT . "localizacao/BdContextLocalizacao.php";

        $bdContextLczc = new BdContextLocalizacao("pk_lczc, nm_lczc");

        $res = $bdContextLczc->listarVarios($res);

        return $res;
    }

}
