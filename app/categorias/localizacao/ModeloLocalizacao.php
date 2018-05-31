<?php

class ModeloLocalizacao extends ConexaoBd {

    private $tabela;
    private $campos = '*';

    public function __construct() {
        parent::__construct();
        $this->tabela = "tb_localizacao";
    }

    public function salvar($parametros) {

        date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");

        $modeloBase = new ConexaoBd();

        //$parametros['dt_alt'] = $horarioAtual;
        $res = false;

        if (isset($parametros['pk_lczc']) && $parametros['pk_lczc'] != '') {
            $condicao = " pk_lczc='{$parametros['pk_lczc']}'";
            $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);
        } else {
            unset($parametros['pk_lczc']);
            // $parametros['dt_cric'] = $horarioAtual;
            $res = $modeloBase->inserirBase($parametros, $this->tabela);
        }

        return $res;
    }

    public function listar($parametros) {
        $modeloBase = new ConexaoBd();
        
        $idHistoria= sessao()->getHistoriaSelecionada()[0]['pk_hist'];
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros['parametros']) && array_key_exists("parametros", $parametros)) {
            $id = $parametros['parametros'];
            $condicao .= " AND pk_lczc='$id'";
        }

        $res = $modeloBase->listarBase($this->campos, $this->tabela, $condicao);


        if (!isset($res) or $res == null) {
            return array();
        }

        return $res;
    }

    public function excluir($parametros) {

        $modeloBase = new ConexaoBd();

        $res = false;
        $id = $parametros['parametros'];
        $condicao = "pk_lczc='$id'";

        $res = $modeloBase->excluirBase($this->tabela, $condicao);
        
        return $res;
    }

    public function proximoID() {
        $modeloBase = new ConexaoBd();
        return $modeloBase->getNextID($this->tabela);
    }
}
