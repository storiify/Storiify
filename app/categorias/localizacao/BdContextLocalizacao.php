<?php

class BdContextLocalizacao extends ConexaoBd {

    const tx_tabela = "tb_localizacao";
    private $campos;

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
        //Gerencia a coluna de personagens mais conhecidos
        if (isset($parametros['fk_psna_cnhd'])) {
            $idsPsnaCnhd = $parametros['fk_psna_cnhd'];
            unset($parametros['fk_psna_cnhd']);
        }
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
        //Gerencia a coluna de religião
        if (isset($parametros['fk_relg'])) {
            $idsReligiao = $parametros['fk_relg'];
            unset($parametros['fk_relg']);
        }
        //Gerencia a coluna de língua
        if (isset($parametros['fk_lnga'])) {
            $idsLingua = $parametros['fk_lnga'];
            unset($parametros['fk_lnga']);
        }
        //Gerencia a coluna de mito
        if (isset($parametros['fk_mito'])) {
            $idsMito = $parametros['fk_mito'];
            unset($parametros['fk_mito']);
        }
        //Gerencia a coluna de magia
        if (isset($parametros['fk_magi'])) {
            $idsMagia = $parametros['fk_magi'];
            unset($parametros['fk_magi']);
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
                //Deleta todas as relações religiao
                $this->excluirReligiao($parametros['pk_lczc']);
                //Deleta todas as relações língua
                $this->excluirLingua($parametros['pk_lczc']);
                //Deleta todas as relações mito
                $this->excluirMito($parametros['pk_lczc']);
                //Deleta todas as relações magia
                $this->excluirMagia($parametros['pk_lczc']);
            }
        } else { //Ao criar
            $parametros['dt_cric'] = $horarioAtual;
            unset($parametros['pk_lczc']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }

        if ($res) {
            $idAtual = (isset($parametros['pk_lczc']) ? $parametros['pk_lczc'] : $this->proximoID() - 1);
            //Cria a relação de personagens conhecidos
            if (isset($idsPsnaCnhd)) {
                $this->salvarPsnaCnhd($idsPsnaCnhd, $idAtual);
            }
            //Cria a relação de raças existentes
            if (isset($idsRaca)) {
                $this->salvarRacaExistente($idsRaca, $idAtual);
            }
            //Cria a relação de faunas existentes
            if (isset($idsFauna)) {
                $this->salvarFaunaExistente($idsFauna, $idAtual);
            }
            //Cria a relação de floras existentes
            if (isset($idsFlora)) {
                $this->salvarFloraExistente($idsFlora, $idAtual);
            }
            //Cria a relação de recursos naturais existentes
            if (isset($idsRcsNtrl)) {
                $this->salvarRcsNtrlExistente($idsRcsNtrl, $idAtual);
            }
            //Cria a relação de biomas existentes
            if (isset($idsBioma)) {
                $this->salvarBiomaExistente($idsBioma, $idAtual);
            }
            //Cria a relação de religiões existentes
            if (isset($idsReligiao)) {
                $this->salvarReligiaoExistente($idsReligiao, $idAtual);
            }
            //Cria a relação de línguas existentes
            if (isset($idsLingua)) {
                $this->salvarLinguaExistente($idsLingua, $idAtual);
            }
            //Cria a relação de mitos existentes
            if (isset($idsMito)) {
                $this->salvarMitoExistente($idsMito, $idAtual);
            }
            //Cria a relação de magias existentes
            if (isset($idsMagia)) {
                $this->salvarMagiaExistente($idsMagia, $idAtual);
            }
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
            $this->inserirBase($rel, $tbLczcPsna);
        }
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
            $this->inserirBase($rel, $tbLczcRaca);
        }
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
            $this->inserirBase($rel, $tbLczcFna);
        }
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
            $this->inserirBase($rel, $tbLczcFlra);
        }
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
            $this->inserirBase($rel, $tbLczcRcsNtrl);
        }
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
            $this->inserirBase($rel, $tbRel);
        }
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

    private function salvarReligiaoExistente($idsReligiao, $idLczc) {
        $tbRel = "tb_localizacao_rel_religiao";
        foreach ($idsReligiao as $religiao) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_relg'] = $religiao;
            $this->inserirBase($rel, $tbRel);
        }
    }

    public function listarReligiao($parametros) {
        $tbRel = "tb_localizacao_rel_religiao";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_relg', $tbRel, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirReligiao($idLczc) {
        $tbRel = "tb_localizacao_rel_religiao";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbRel, $condicao);

        return $res;
    }

    private function salvarLinguaExistente($idsLingua, $idLczc) {
        $tbRel = "tb_localizacao_rel_lingua";
        foreach ($idsLingua as $lingua) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_lnga'] = $lingua;
            $this->inserirBase($rel, $tbRel);
        }
    }

    public function listarLingua($parametros) {
        $tbRel = "tb_localizacao_rel_lingua";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_lnga', $tbRel, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirLingua($idLczc) {
        $tbRel = "tb_localizacao_rel_lingua";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbRel, $condicao);

        return $res;
    }

    private function salvarMitoExistente($idsMito, $idLczc) {
        $tbRel = "tb_localizacao_rel_mito";
        foreach ($idsMito as $mito) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_mito'] = $mito;
            $this->inserirBase($rel, $tbRel);
        }
    }

    public function listarMito($parametros) {
        $tbRel = "tb_localizacao_rel_mito";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_mito', $tbRel, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirMito($idLczc) {
        $tbRel = "tb_localizacao_rel_mito";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbRel, $condicao);

        return $res;
    }

    private function salvarMagiaExistente($idsMagia, $idLczc) {
        $tbRel = "tb_localizacao_rel_magia";
        foreach ($idsMagia as $magia) {
            $rel['fk_lczc'] = $idLczc;
            $rel['fk_magi'] = $magia;
            $this->inserirBase($rel, $tbRel);
        }
    }

    public function listarMagia($parametros) {
        $tbRel = "tb_localizacao_rel_magia";
        $idLocalizacao = $parametros;
        $condicao = "WHERE fk_lczc='$idLocalizacao'";

        $res = $this->listarBase('fk_magi', $tbRel, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirMagia($idLczc) {
        $tbRel = "tb_localizacao_rel_magia";
        $condicao = "fk_lczc='$idLczc'";

        $res = $this->excluirBase($tbRel, $condicao);

        return $res;
    }

}
