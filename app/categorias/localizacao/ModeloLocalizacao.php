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

        $res = false;
        $parametros['dt_alt'] = $horarioAtual;

        $idsPsnaCnhd = $parametros['fk_psna_cnhd'];
        unset($parametros['fk_psna_cnhd']);

        if (isset($parametros['pk_lczc']) && $parametros['pk_lczc'] != '') { //Editando
            $condicao = " pk_lczc='{$parametros['pk_lczc']}'";
            $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);

            //Deleta todas as relações de personagens conhecidos
            if ($res) {
                $this->excluirPsnaCnhd($parametros['pk_lczc']);
            }
        } else { //Criando
            //Cria localização
            $parametros['dt_cric'] = $horarioAtual;
            $res = $modeloBase->inserirBase($parametros, $this->tabela);
        }
        //Cria relação de personagens conhecidos
        if ($res) {
            $this->salvarPsnaCnhd($idsPsnaCnhd);
        }

        return $res;
    }

    public function listar($parametros) {
        $modeloBase = new ConexaoBd();

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
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
        $id = $parametros['parametros'];
        $res = false;

        $this->excluirPsnaCnhd($id);

        $condicao = "pk_lczc='$id'";
        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    private function salvarPsnaCnhd($idsPsnaCnhd) {
        $tb_psna_cnhd = "tb_localizacao_rel_personagem";
        foreach ($idsPsnaCnhd as $psna) {
            $rel['fk_lczc'] = $this->proximoID() - 1;
            $rel['fk_psna'] = $psna;
            $res = $this->inserirBase($rel, $tb_psna_cnhd);
        }
        return $res;
    }

    public function listarPsnaCnhd($parametros) {
        $res = false;
        $tabela = "tb_localizacao_rel_personagem";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_psna', $tabela, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirPsnaCnhd($idLczc) {
        $tb_psna_cnhd = "tb_localizacao_rel_personagem";

        $res = false;
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tb_psna_cnhd, $condicao);

        return $res;
    }

    public function proximoID() {
        $modeloBase = new ConexaoBd();
        return $modeloBase->getNextID($this->tabela);
    }

}
