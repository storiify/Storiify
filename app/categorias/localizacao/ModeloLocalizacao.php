<?php

class ModeloLocalizacao extends ConexaoBd {

    private $tabela;
    private $campos = '*';

    public function __construct() {
        parent::__construct();
        $this->tabela = "tb_localizacao";
    }

    public function salvar($parametros) {
        $modeloBase = new ConexaoBd();
        $res = false;
        //Gerencia as colunas de hora
        date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");
        $parametros['dt_alt'] = $horarioAtual;
        //Gerencia a coluna de personagens mais conhecidos
        $idsPsnaCnhd = $parametros['fk_psna_cnhd'];
        unset($parametros['fk_psna_cnhd']);
        //Gerencia a coluna de raças
        $idsRaca = $parametros['fk_raca'];
        unset($parametros['fk_raca']);
        //Editando
        if (isset($parametros['pk_lczc']) && $parametros['pk_lczc'] != '') {
            $condicao = " pk_lczc='{$parametros['pk_lczc']}'";
            $res = $modeloBase->updateBase($parametros, $this->tabela, $condicao);

            if ($res) {
                //Deleta todas as relações de personagens conhecidos
                $this->excluirPsnaCnhd($parametros['pk_lczc']);
                //Deleta todas as relações raças
                $this->excluirRaca($parametros['pk_lczc']);
            }
            //Criando
        } else {
            $parametros['dt_cric'] = $horarioAtual;
            $res = $modeloBase->inserirBase($parametros, $this->tabela);
        }
        //Cria relação de personagens conhecidos
        if ($res) {
            $this->salvarPsnaCnhd($idsPsnaCnhd, $parametros['pk_lczc']);
            $this->salvarRaca($idsRaca);
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

    private function salvarPsnaCnhd($idsPsnaCnhd, $idLczc) {
        $tb_psna_cnhd = "tb_localizacao_rel_personagem";
        foreach ($idsPsnaCnhd as $psna) {
            $rel['fk_lczc'] = $idLczc;
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

    private function salvarRaca($idsRaca) {
        $tb_rel_raca = "tb_localizacao_rel_raca";
        foreach ($idsRaca as $raca) {
            $rel['fk_lczc'] = $this->proximoID() - 1;
            $rel['fk_raca'] = $raca;
            $res = $this->inserirBase($rel, $tb_rel_raca);
        }
        return $res;
    }

    public function listarRaca($parametros) {
        $res = false;
        $tabela = "tb_localizacao_rel_raca";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_raca', $tabela, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirRaca($idLczc) {
        $tb_rel_raca = "tb_localizacao_rel_raca";

        $res = false;
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tb_rel_raca, $condicao);

        return $res;
    }

    public function proximoID() {
        $modeloBase = new ConexaoBd();
        return $modeloBase->getNextID($this->tabela);
    }

}
