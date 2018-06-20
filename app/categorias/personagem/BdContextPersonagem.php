<?php

class BdContextPersonagem extends ConexaoBd {

    private $tabela = "tb_personagem";
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

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $parametros['fk_hist'] = (isset($parametros['fk_hist']) ? $parametros['fk_hist'] : $idHistoria);

        $res = false;

        if (isset($parametros['fk_classe'])) {
            $idsClasse = $parametros['fk_classe'];
            unset($parametros['fk_classe']);
        }

        if (isset($parametros['fk_profissao'])) {
            $idsPfs = $parametros['fk_profissao'];
            unset($parametros['fk_profissao']);
        }

        if (isset($parametros['fk_objeto'])) {
            $idsObj = $parametros['fk_objeto'];
            unset($parametros['fk_objeto']);
        }

        if (isset($parametros['fk_hbld_fsca'])) {
            $idsHbld_fsca = $parametros['fk_hbld_fsca'];
            unset($parametros['fk_hbld_fsca']);
        }

        if (isset($parametros['fk_hbld_mgca'])) {
            $idsHbld_mgca = $parametros['fk_hbld_mgca'];
            unset($parametros['fk_hbld_mgca']);
        }

        if (isset($parametros['familia'])) {
            $idsFamilia = $parametros['familia'];
            unset($parametros['familia']);
        }

        if (isset($parametros['amigos'])) {
            $idsAmigos = $parametros['amigos'];
            unset($parametros['amigos']);
        }

        if (isset($parametros['lacos'])) {
            $idsLacos = $parametros['lacos'];
            unset($parametros['lacos']);
        }

        if (isset($parametros['companheiros'])) {
            $idsComp = $parametros['companheiros'];
            unset($parametros['companheiros']);
        }

        if (isset($parametros['rivais'])) {
            $idsRivais = $parametros['rivais'];
            unset($parametros['rivais']);
        }

        if (isset($parametros['fk_lembranca'])) {
            $idsLmca = $parametros['fk_lembranca'];
            unset($parametros['fk_lembranca']);
        }

        if (isset($parametros['pk_psna']) && $parametros['pk_psna'] != '') { //Ao editar
            $condicao = " pk_psna='{$parametros['pk_psna']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);

            if ($res) {
                $this->excluirClasse($parametros['pk_psna']);
                $this->excluirProfissao($parametros['pk_psna']);
                $this->excluirObjeto($parametros['pk_psna']);
                $this->excluirHabilidade_fisica($parametros['pk_psna']);
                $this->excluirHabilidade_magica($parametros['pk_psna']);
                $this->excluirFamilia($parametros['pk_psna']);
                $this->excluirAmigos($parametros['pk_psna']);
                $this->excluirLacos($parametros['pk_psna']);
                $this->excluirComp($parametros['pk_psna']);
                $this->excluirRivais($parametros['pk_psna']);
                $this->excluirLembranca($parametros['pk_psna']);
            }
        } else { //Ao criar
            $parametros['dt_cric'] = $horarioAtual;
            unset($parametros['pk_psna']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }

        if ($res) {
            $idAtual = (isset($parametros['pk_psna']) ? $parametros['pk_psna'] : $this->proximoID() - 1);
            $this->salvarClasseExistente($idsClasse, $idAtual);
            $this->salvarProfissaoExistente($idsPfs, $idAtual);
            $this->salvarObjetoExistente($idsObj, $idAtual);
            $this->salvarHabilidade_fisicaExistente($idsHbld_fsca, $idAtual);
            $this->salvarHabilidade_magicaExistente($idsHbld_mgca, $idAtual);
            $this->salvarFamiliaExistente($idsFamilia, $idAtual);
            $this->salvarAmigosExistente($idsAmigos, $idAtual);
            $this->salvarLacosExistente($idsLacos, $idAtual);
            $this->salvarCompExistente($idsComp, $idAtual);
            $this->salvarRivaisExistente($idsRivais, $idAtual);
            $this->salvarLembrancaExistente($idsLmca, $idAtual);
        }

        return $res;
    }

    public function listar($parametros) {
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_psna='$id'";
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
            $id = $id["fk_psna"];
            $pks[] = "pk_psna='$id'";
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
        //Segunda condição = pk_raca
        $id = $parametros['id'];
        $condicao .= " AND pk_psna='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

    private function salvarClasseExistente($idsClasse, $idPsna) {
        $tbRelClasse = "tb_personagem_rel_Classe";
        foreach ($idsClasse as $classe) {
            $rel['fk_psna'] = $idPsna;
            $rel['fk_cls'] = $classe;
            $res = $this->inserirBase($rel, $tbRelClasse);
        }
        return $res;
    }

    public function listarClasse($parametros) {
        $tbRelClasse = "tb_personagem_rel_Classe";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna='$idPersonagem'";

        $res = $this->listarBase('fk_cls', $tbRelClasse, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirClasse($idPsna) {
        $tbRelClasse = "tb_personagem_rel_Classe";
        $condicao = "fk_psna='$idPsna'";

        $res = $this->excluirBase($tbRelClasse, $condicao);

        return $res;
    }

    private function salvarProfissaoExistente($idsPfs, $idPsna) {
        $tbRelPfs = "tb_personagem_rel_Profissao";
        foreach ($idsPfs as $pfs) {
            $rel['fk_psna'] = $idPsna;
            $rel['fk_pfs'] = $pfs;
            $res = $this->inserirBase($rel, $tbRelPfs);
        }
        return $res;
    }

    public function listarProfissao($parametros) {
        $tbRelPfs = "tb_personagem_rel_Profissao";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna='$idPersonagem'";

        $res = $this->listarBase('fk_pfs', $tbRelPfs, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirProfissao($idPsna) {
        $tbRelPfs = "tb_personagem_rel_Profissao";
        $condicao = "fk_psna='$idPsna'";

        $res = $this->excluirBase($tbRelPfs, $condicao);

        return $res;
    }

    private function salvarObjetoExistente($idsObj, $idPsna) {
        $tbRelObj = "tb_personagem_rel_objeto";
        foreach ($idsObj as $obj) {
            $rel['fk_psna'] = $idPsna;
            $rel['fk_obj'] = $obj;
            $res = $this->inserirBase($rel, $tbRelObj);
        }
        return $res;
    }

    public function listarObjeto($parametros) {
        $tbRelObj = "tb_personagem_rel_objeto";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna='$idPersonagem'";

        $res = $this->listarBase('fk_obj', $tbRelObj, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirObjeto($idPsna) {
        $tbRelObj = "tb_personagem_rel_objeto";
        $condicao = "fk_psna='$idPsna'";

        $res = $this->excluirBase($tbRelObj, $condicao);

        return $res;
    }

    private function salvarHabilidade_fisicaExistente($idsHbld_fsca, $idPsna) {
        $tbRelHbld_fsca = "tb_personagem_rel_habilidade_fisica";
        foreach ($idsHbld_fsca as $hbld_fsca) {
            $rel['fk_psna'] = $idPsna;
            $rel['fk_hbld_fsca'] = $hbld_fsca;
            $res = $this->inserirBase($rel, $tbRelHbld_fsca);
        }
        return $res;
    }

    public function listarHabilidade_fisica($parametros) {
        $tbRelHbld_fsca = "tb_personagem_rel_habilidade_fisica";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna='$idPersonagem'";

        $res = $this->listarBase('fk_hbld_fsca', $tbRelHbld_fsca, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirHabilidade_fisica($idPsna) {
        $tbRelHbld_fsca = "tb_personagem_rel_habilidade_fisica";
        $condicao = "fk_psna='$idPsna'";

        $res = $this->excluirBase($tbRelHbld_fsca, $condicao);

        return $res;
    }

    private function salvarHabilidade_magicaExistente($idsHbld_mgca, $idPsna) {
        $tbRelHbld_mgca = "tb_personagem_rel_habilidade_magica";
        foreach ($idsHbld_mgca as $hbld_mgca) {
            $rel['fk_psna'] = $idPsna;
            $rel['fk_hbld_mgca'] = $hbld_mgca;
            $res = $this->inserirBase($rel, $tbRelHbld_mgca);
        }
        return $res;
    }

    public function listarHabilidade_magica($parametros) {
        $tbRelHbld_mgca = "tb_personagem_rel_habilidade_magica";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna='$idPersonagem'";

        $res = $this->listarBase('fk_hbld_mgca', $tbRelHbld_mgca, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirHabilidade_magica($idPsna) {
        $tbRelHbld_mgca = "tb_personagem_rel_habilidade_magica";
        $condicao = "fk_psna='$idPsna'";

        $res = $this->excluirBase($tbRelHbld_mgca, $condicao);

        return $res;
    }

    private function salvarFamiliaExistente($idsFamilia, $idPsna) {
        $tbRelFamilia = "tb_personagem_rel_relacionamento";
        foreach ($idsFamilia as $familia) {
            $rel['fk_psna1'] = $idPsna;
            $rel['fk_psna2'] = $familia;
            $rel['fk_rlc'] = '1';
            $res = $this->inserirBase($rel, $tbRelFamilia);
        }
        return $res;
    }

    public function listarFamilia($parametros) {
        $tbRelFamilia = "tb_personagem_rel_relacionamento";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna1='$idPersonagem' AND fk_rlc='1'";

        $res = $this->listarBase('fk_psna2', $tbRelFamilia, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirFamilia($idPsna) {
        $tbRelFamilia = "tb_personagem_rel_relacionamento";
        $condicao = "fk_psna1='$idPsna'";

        $res = $this->excluirBase($tbRelFamilia, $condicao);

        return $res;
    }

    private function salvarAmigosExistente($idsAmigos, $idPsna) {
        $tbRelAmigos = "tb_personagem_rel_relacionamento";
        foreach ($idsAmigos as $Amigos) {
            $rel['fk_psna1'] = $idPsna;
            $rel['fk_psna2'] = $Amigos;
            $rel['fk_rlc'] = '2';
            $res = $this->inserirBase($rel, $tbRelAmigos);
        }
        return $res;
    }

    public function listarAmigos($parametros) {
        $tbRelAmigos = "tb_personagem_rel_relacionamento";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna1='$idPersonagem' AND fk_rlc='2'";

        $res = $this->listarBase('fk_psna2', $tbRelAmigos, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirAmigos($idPsna) {
        $tbRelAmigos = "tb_personagem_rel_relacionamento";
        $condicao = "fk_psna1='$idPsna'";

        $res = $this->excluirBase($tbRelAmigos, $condicao);

        return $res;
    }

    private function salvarLacosExistente($idsLacos, $idPsna) {
        $tbRelLacos = "tb_personagem_rel_relacionamento";
        foreach ($idsLacos as $lacos) {
            $rel['fk_psna1'] = $idPsna;
            $rel['fk_psna2'] = $lacos;
            $rel['fk_rlc'] = '3';
            $res = $this->inserirBase($rel, $tbRelLacos);
        }
        return $res;
    }

    public function listarLacos($parametros) {
        $tbRelLacos = "tb_personagem_rel_relacionamento";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna1='$idPersonagem' AND fk_rlc='3'";

        $res = $this->listarBase('fk_psna2', $tbRelLacos, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirLacos($idPsna) {
        $tbRelLacos = "tb_personagem_rel_relacionamento";
        $condicao = "fk_psna1='$idPsna'";

        $res = $this->excluirBase($tbRelLacos, $condicao);

        return $res;
    }

    private function salvarCompExistente($idsComp, $idPsna) {
        $tbRelComp = "tb_personagem_rel_relacionamento";
        foreach ($idsComp as $Comp) {
            $rel['fk_psna1'] = $idPsna;
            $rel['fk_psna2'] = $Comp;
            $rel['fk_rlc'] = '4';
            $res = $this->inserirBase($rel, $tbRelComp);
        }
        return $res;
    }

    public function listarComp($parametros) {
        $tbRelComp = "tb_personagem_rel_relacionamento";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna1='$idPersonagem' AND fk_rlc='4'";

        $res = $this->listarBase('fk_psna2', $tbRelComp, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirComp($idPsna) {
        $tbRelComp = "tb_personagem_rel_relacionamento";
        $condicao = "fk_psna1='$idPsna'";

        $res = $this->excluirBase($tbRelComp, $condicao);

        return $res;
    }

    private function salvarRivaisExistente($idsRivais, $idPsna) {
        $tbRelRivais = "tb_personagem_rel_relacionamento";
        foreach ($idsRivais as $rivais) {
            $rel['fk_psna1'] = $idPsna;
            $rel['fk_psna2'] = $rivais;
            $rel['fk_rlc'] = '5';
            $res = $this->inserirBase($rel, $tbRelRivais);
        }
        return $res;
    }

    public function listarRivais($parametros) {
        $tbRelRivais = "tb_personagem_rel_relacionamento";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna1='$idPersonagem' AND fk_rlc='5'";

        $res = $this->listarBase('fk_psna2', $tbRelRivais, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirRivais($idPsna) {
        $tbRelRivais = "tb_personagem_rel_relacionamento";
        $condicao = "fk_psna1='$idPsna'";

        $res = $this->excluirBase($tbRelRivais, $condicao);

        return $res;
    }

    private function salvarLembrancaExistente($idsLmca, $idPsna) {
        $tbRellmca = "tb_personagem_rel_lembranca";
        foreach ($idsLmca as $lmca) {
            $rel['fk_psna'] = $idPsna;
            $rel['fk_lmca'] = $lmca;
            $res = $this->inserirBase($rel, $tbRellmca);
        }
        return $res;
    }

    public function listarLembranca($parametros) {
        $tbRellmca = "tb_personagem_rel_lembranca";
        $idPersonagem = $parametros;
        $condicao = "WHERE fk_psna='$idPersonagem'";

        $res = $this->listarBase('fk_lmca', $tbRellmca, $condicao);

        if (!isset($res) or $res == null) {
            return array();
        }
        return $res;
    }

    private function excluirLembranca($idPsna) {
        $tbRellmca = "tb_personagem_rel_lembranca";
        $condicao = "fk_psna='$idPsna'";

        $res = $this->excluirBase($tbRellmca, $condicao);

        return $res;
    }

    public function getPsnaDeHist($parametros) {
        $idHistoria = $parametros["idHist"];
        $condicao = "WHERE fk_hist='$idHistoria'";

        $id = $parametros["idPsna"];
        $condicao .= " AND pk_psna='$id'";

        $res = $this->listarBase("pk_psna, nm_psna", $this->tabela, $condicao);

        if (!isset($res) || $res == null) {
            return array();
        }

        return $res;
    }

}
