<?php

class BdContextHistoria extends ConexaoBd {

    private $campos;
    const tx_tabela = 'tb_historia';

    public function __construct($campos = '*') {
        parent::__construct();
        $this->campos = $campos;
        $this->tabela = self::tx_tabela;
    }

    public function salvar($parametros) {
        //Gerencia as colunas de hora
        date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");
        $parametros['dt_alt'] = $horarioAtual;
        //Gerencia a qual usuário essa história pertence
        $idUsuario = sessao()->getUserData()->id;

        $res = false;

        if (isset($parametros['pk_hist']) && $parametros['pk_hist'] != '') {
            $condicao = " pk_hist='{$parametros['pk_hist']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
        } else {
            unset($parametros['pk_hist']);
            $parametros['dt_cric'] = $horarioAtual;
            $res = $this->inserirBase($parametros, $this->tabela);
        }

        return $res;
    }

    public function listar($parametros) {

        $idusuario = sessao()->getUserData()->id;
        $condicao = "WHERE fk_usu='$idusuario'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_hist='$id'";
        }

        $res = $this->listarBase($this->campos, $this->tabela, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }

        return $res;
    }

    public function excluir($parametros) {
        $idusuario = sessao()->getUserData()->id;
        $condicao = "fk_usu='$idusuario'";
        //Segunda condição
        $id = $parametros['parametros'];
        $condicao .= " AND pk_hist='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    public static function getQtdPsna($parametros) {
        $bdBase = new ConexaoBd();
        $tbPsna = "tb_personagem";
        $colunas = "COUNT(pk_psna)";
        $where = "WHERE fk_hist = " . $parametros;

        return $bdBase->listarBase($colunas, $tbPsna, $where)[0][0];
    }

    public static function getQtdLczc($parametros) {
        $bdBase = new ConexaoBd();
        $tbLczc = "tb_localizacao";
        $colunas = "COUNT(pk_lczc)";
        $where = "WHERE fk_hist = " . $parametros;

        return $bdBase->listarBase($colunas, $tbLczc, $where)[0][0];
    }

    public static function getQtdCena($parametros) {
        $bdBase = new ConexaoBd();
        $tbCena = "tb_cena";
        $colunas = "COUNT(pk_cena)";
        $where = "WHERE fk_hist = " . $parametros;

        return $bdBase->listarBase($colunas, $tbCena, $where)[0][0];
    }

}
