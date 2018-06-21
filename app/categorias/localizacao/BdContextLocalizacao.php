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
        $idsPsnaCnhd = (isset($parametros['fk_psna_cnhd']) ? $parametros['fk_psna_cnhd'] : 0);
        unset($parametros['fk_psna_cnhd']);
        //Gerencia a coluna de raças
        if (isset($parametros['fk_raca'])) {
            $idsRaca = $parametros['fk_raca'];
            unset($parametros['fk_raca']);
        }
        //Gerencia a coluna de faunas
        if (isset($parametros['fk_fna'])) {
            $idsFauna = $parametros['fk_fna'];
            unset($parametros['fk_fna']);
        }
        //Gerencia a coluna de floras
        if (isset($parametros['fk_flra'])) {
            $idsFlora = $parametros['fk_flra'];
            unset($parametros['fk_flra']);
        }
        //Gerencia a coluna de recursos naturais
        if (isset($parametros['fk_rcs_ntrl'])) {
            $idsRcsNtrl = $parametros['fk_rcs_ntrl'];
            unset($parametros['fk_rcs_ntrl']);
        }
        //Gerencia a coluna de bioma
        if (isset($parametros['fk_bma'])) {
            $idsBioma = $parametros['fk_bma'];
            unset($parametros['fk_bma']);
        }
        //Gerencia a qual história essa localização pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
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
                //Deleta todas as relações fauna
                $this->excluirFauna($parametros['pk_lczc']);
                //Deleta todas as relações flora
                $this->excluirFlora($parametros['pk_lczc']);
                //Deleta todas as relações recursos naturais
                $this->excluirRcsNtrl($parametros['pk_lczc']);
                //Deleta todas as relações bioma
                $this->excluirBioma($parametros['pk_lczc']);
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
            //Cria a relação de faunas existentes
            $this->salvarFaunaExistente($idsFauna, $idAtual);
            //Cria a relação de floras existentes
            $this->salvarFloraExistente($idsFlora, $idAtual);
            //Cria a relação de recursos naturais existentes
            $this->salvarRcsNtrlExistente($idsRcsNtrl, $idAtual);
            //Cria a relação de recursos naturais existentes
            $this->salvarBiomaExistente($idsBioma, $idAtual);
        }

        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
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
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
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

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "fk_hist='$idHistoria'";
        //Segunda condição
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

    private function salvarFaunaExistente($idsFauna, $idLczc) {
        $tbLczcFna = "tb_localizacao_rel_fauna";
        foreach ($idsFauna as $fauna) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_fna'] = $fauna;
            $res = $this->inserirBase($rel, $tbLczcFna);
        }
        return $res;
    }

    public function listarFauna($parametros) {
        $tbLczcFauna = "tb_localizacao_rel_fauna";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_fna', $tbLczcFauna, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirFauna($idLczc) {
        $tbLczcFna = "tb_localizacao_rel_fauna";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbLczcFna, $condicao);

        return $res;
    }

    private function salvarFloraExistente($idsFlora, $idLczc) {
        $tbLczcFlra = "tb_localizacao_rel_flora";
        foreach ($idsFlora as $flora) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_flra'] = $flora;
            $res = $this->inserirBase($rel, $tbLczcFlra);
        }
        return $res;
    }

    public function listarFlora($parametros) {
        $tbLczcFlora = "tb_localizacao_rel_flora";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_flra', $tbLczcFlora, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirFlora($idLczc) {
        $tbLczcFlra = "tb_localizacao_rel_flora";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbLczcFlra, $condicao);

        return $res;
    }

    private function salvarRcsNtrlExistente($idsRscNtrl, $idLczc) {
        $tbLczcRcsNtrl = "tb_localizacao_rel_recurso_natural";
        foreach ($idsRscNtrl as $rcsNtrl) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_rcs_ntrl'] = $rcsNtrl;
            $res = $this->inserirBase($rel, $tbLczcRcsNtrl);
        }
        return $res;
    }

    public function listarRcsNtrl($parametros) {
        $tbLczcRcsNtrl = "tb_localizacao_rel_recurso_natural";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_rcs_ntrl', $tbLczcRcsNtrl, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirRcsNtrl($idLczc) {
        $tbLczcRcsNtrl = "tb_localizacao_rel_recurso_natural";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbLczcRcsNtrl, $condicao);

        return $res;
    }

    private function salvarBiomaExistente($idsBioma, $idLczc) {
        $tbRel = "tb_localizacao_rel_bioma";
        foreach ($idsBioma as $bioma) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_bma'] = $bioma;
            $res = $this->inserirBase($rel, $tbRel);
        }
        return $res;
    }

    public function listarBioma($parametros) {
        $tbRel = "tb_localizacao_rel_bioma";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_bma', $tbRel, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirBioma($idLczc) {
        $tbRel = "tb_localizacao_rel_bioma";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbRel, $condicao);

        return $res;
    }

}
