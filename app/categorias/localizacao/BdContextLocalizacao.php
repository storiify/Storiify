<?php

class BdContextLocalizacao extends ConexaoBd {

    private $tabela = "tb_localizacao";
    private $campos;

    public function __construct($campos = '*') {
        parent::__construct();
        $this->campos = $campos;
    }

    public function salvar($parametros) {
        //Gerencia as colunas de hora
        date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");
        $parametros['dt_alt'] = $horarioAtual;
        //Gerencia a coluna de personagens mais conhecidos
        $idsPsnaCnhd = $parametros['fk_psna_cnhd'];
        unset($parametros['fk_psna_cnhd']);
        //Gerencia a coluna de raças
        if (isset($parametros['fk_raca'])) {
            $idsRaca = $parametros['fk_raca'];
            unset($parametros['fk_raca']);
        }
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $parametros['fk_hist'] = (isset($parametros['fk_hist']) ? $parametros['fk_hist'] : $idHistoria);

        $res = false;

        if (isset($parametros['pk_lczc']) && $parametros['pk_lczc'] != '') { //Ao editar
            $condicao = " pk_lczc='{$parametros['pk_lczc']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);

            if ($res) {
                //Deleta todas as relações de personagens conhecidos
                $this->excluirPsnaCnhd($parametros['pk_lczc']);
                //Deleta todas as relações raças
                $this->excluirRaca($parametros['pk_lczc']);
            }
        } else { //Ao criar
            $parametros['dt_cric'] = $horarioAtual;
            unset($parametros['pk_lczc']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }

        if ($res) {
            $idAtual = (isset($parametros['pk_lczc']) ? $parametros['pk_lczc'] : $this->proximoID() - 1);
            //Cria a relação de personagens conhecidos
            $this->salvarPsnaCnhd($idsPsnaCnhd, $idAtual);
            //Cria a relação de raças existentes
            $this->salvarRacaExistente($idsRaca, $idAtual);
        }

        return $res;
    }

    public function listar($parametros) {
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_lczc='$id'";
        }

        $res = $this->listarBase($this->campos, $this->tabela, $condicao);

        if (!isset($res) || $res == null) {
            return array();
        }

        return $res;
    }

    public function listarVarios($parametros) {
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $condicao = "WHERE fk_hist='$idHistoria' AND ";

        $pks = array();
        foreach ($parametros as $id) {
            $id = $id["fk_lczc"];
            $pks[] = "pk_lczc='$id'";
        }
        $condicao .= join(" OR ", $pks);
        
        $res = $this->listarBase($this->campos, $this->tabela, $condicao);

        if (!isset($res) || $res == null) {
            return array();
        }

        return $res;
    }

    public function excluir($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist;
        $condicao = "fk_hist='$idHistoria'";
        //Segunda condição = pk_raca
        $id = $parametros['id'];
        $condicao .= " AND pk_lczc='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    private function salvarPsnaCnhd($idsPsnaCnhd, $idLczc) {
        $tbLczcPsna = "tb_localizacao_rel_personagem";
        foreach ($idsPsnaCnhd as $psna) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_psna'] = $psna;
            $res = $this->inserirBase($rel, $tbLczcPsna);
        }
        return $res;
    }

    public function listarPsnaCnhd($parametros) {
        $tbLczcPsna = "tb_localizacao_rel_personagem";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_psna', $tbLczcPsna, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirPsnaCnhd($idLczc) {
        $tbLczcPsna = "tb_localizacao_rel_personagem";

        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbLczcPsna, $condicao);

        return $res;
    }

    private function salvarRacaExistente($idsRaca, $idLczc) {
        $tbLczcRaca = "tb_localizacao_rel_raca";
        foreach ($idsRaca as $raca) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_raca'] = $raca;
            $res = $this->inserirBase($rel, $tbLczcRaca);
        }
        return $res;
    }

    public function listarRaca($parametros) {
        $tbLczcRaca = "tb_localizacao_rel_raca";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_raca', $tbLczcRaca, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirRaca($idLczc) {
        $tbLczcRaca = "tb_localizacao_rel_raca";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbLczcRaca, $condicao);

        return $res;
    }

}
