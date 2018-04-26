<?php

class Historia {

    public function __construct($id) {
        $this->pk_hist = $id;
    }

    public static function GerarNome($historia){
        $nome = ($historia->tit_hist == "" || ctype_space($historia->tit_hist)) ?
                "" : $historia->tit_hist;
        $nome .= ($historia->stit_hist == "" || ctype_space($historia->stit_hist) ? "" :
                ($historia == "" ? $historia->stit_hist : ": " . $historia->stit_hist));
        return $nome;
    }
    
    public static function ProximoId() {
        $bd = ConexaoBd::getInstance();

        $sql = "SHOW TABLE STATUS LIKE 'tb_historia'";
        
        $query = $bd->prepare($sql);
        $query->execute();
        $proximoId = $query->fetch()['Auto_increment'];
        
        return $proximoId;
    }

    public static function Inserir($historia) {
        $bd = ConexaoBd::getInstance();
        date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");

        $sql = "INSERT INTO tb_historia
                VALUES (:pk_hist,:im_ppl,:dets_im_ppl,"
                . ":tit_hist,:dets_tit,:stit_hist,:dets_stit,"
                . ":aur_hist,:dets_aur,:iltd_hist,:dets_iltd,"
                . ":pbco_alvo,:vsi_hist,:dcr_em_uma_sntn,"
                . ":snp_hist,:rsm_hist, :dt_cric, :dt_alt);";

        $query = $bd->prepare($sql);

        $query->bindparam(':pk_hist', $historia->pk_hist);
        $query->bindparam(':im_ppl', $historia->im_ppl);
        $query->bindparam(':dets_im_ppl', $historia->dets_im_ppl);
        $query->bindparam(':tit_hist', $historia->tit_hist);
        $query->bindparam(':dets_tit', $historia->dets_tit);
        $query->bindparam(':stit_hist', $historia->stit_hist);
        $query->bindparam(':dets_stit', $historia->dets_stit);
        $query->bindparam(':aur_hist', $historia->aur_hist);
        $query->bindparam(':dets_aur', $historia->dets_aur);
        $query->bindparam(':iltd_hist', $historia->iltd_hist);
        $query->bindparam(':dets_iltd', $historia->dets_iltd);
        $query->bindparam(':pbco_alvo', $historia->pbco_alvo);
        $query->bindparam(':vsi_hist', $historia->vsi_hist);
        $query->bindparam(':dcr_em_uma_sntn', $historia->dcr_em_uma_sntn);
        $query->bindparam(':snp_hist', $historia->snp_hist);
        $query->bindparam(':rsm_hist', $historia->rsm_hist);
        $query->bindparam(':dt_cric', $horarioAtual);
        $query->bindparam(':dt_alt', $horarioAtual);

        $query->execute();

        return $bd->lastInsertId();
    }

    public static function SelecionarUm($id) {
        $bd = ConexaoBd::getInstance();
        //Garantindo que a $id é um int
        $id = intval($id);
        $req = $bd->prepare('SELECT * FROM tb_historia WHERE pk_hist = :pk_hist');
        //A query foi preparada, agora trocamos :pk_mnd por $id
        $req->execute(array('pk_hist' => $id));
        $mundo = $req->fetch();
        return $mundo;
    }

    public static function SelecionarTodos() {
        $bd = ConexaoBd::getInstance();

        $req = $bd->prepare("SELECT pk_hist, tit_hist FROM tb_mundo");
        $req->execute();

        $historias = [];
        while ($historia = $req->fetch()) {
            $historias[] = (object) $historia;
        }

        return $historias;
    }
    public static function SelecionarTodosCustomizado($atributos) {
        $bd = ConexaoBd::getInstance();
        
        $sql = "SELECT ".join(',', $atributos)." FROM tb_historia";

        $req = $bd->prepare($sql);
        $req->execute();

        $historias = [];
        while ($historia = $req->fetch()) {
            $historias[] = (object) $historia;
        }

        return $historias;
    }

    public static function Alterar($historia) {
        try {
            $bd = ConexaoBd::getInstance();

            date_default_timezone_set('America/Sao_Paulo');
            $horarioAtual = date("Y-m-d H:i:s");

            $sql = "UPDATE tb_historia SET 
                im_ppl=(:im_ppl), 
                dets_im_ppl=(:dets_im_ppl),
                tit_hist=(:tit_hist),
                dets_tit=(:dets_tit),
                stit_hist=(:stit_hist),
                dets_stit=(:dets_stit),
                aur_hist=(:aur_hist),
                dets_aur=(:dets_aur),
                iltd_hist=(:iltd_hist),
                dets_iltd=(:dets_iltd),
                pbco_alvo=(:pbco_alvo),
                vsi_hist=(:vsi_hist),
                dcr_em_uma_sntn=(:dcr_em_uma_sntn),
                snp_hist=(:snp_hist),
                rsm_hist=(:rsm_hist),
                dt_alt=(:dt_alt)
                WHERE pk_hist=(:pk_hist);";

            $query = $bd->prepare($sql);

            $query->bindparam(':pk_hist', $historia->pk_hist);
            $query->bindparam(':im_ppl', $historia->im_ppl);
            $query->bindparam(':dets_im_ppl', $historia->dets_im_ppl);
            $query->bindparam(':tit_hist', $historia->tit_hist);
            $query->bindparam(':dets_tit', $historia->dets_tit);
            $query->bindparam(':stit_hist', $historia->stit_hist);
            $query->bindparam(':dets_stit', $historia->dets_stit);
            $query->bindparam(':aur_hist', $historia->aur_hist);
            $query->bindparam(':dets_aur', $historia->dets_aur);
            $query->bindparam(':iltd_hist', $historia->iltd_hist);
            $query->bindparam(':dets_iltd', $historia->dets_iltd);
            $query->bindparam(':pbco_alvo', $historia->pbco_alvo);
            $query->bindparam(':vsi_hist', $historia->vsi_hist);
            $query->bindparam(':dcr_em_uma_sntn', $historia->dcr_em_uma_sntn);
            $query->bindparam(':snp_hist', $historia->snp_hist);
            $query->bindparam(':rsm_hist', $historia->rsm_hist);
            $query->bindparam(':dt_alt', $horarioAtual);

            $query->execute();
        } catch (PDOException $e) {
            consoleLog($e->getMessage());
        }
    }

    public static function Deletar($id) {
        $bd = ConexaoBd::getInstance();

        $sql = "DELETE FROM tb_historia WHERE pk_hist=:pk_hist";

        $query = $bd->prepare($sql);
        $query->bindparam(':pk_hist', $id);

        $query->execute();

        return $query;
    }

    public $pk_hist;
    public $im_ppl;
    public $dets_im_ppl;
    public $tit_hist;
    public $dets_tit;
    public $stit_hist;
    public $dets_stit;
    public $aur_hist;
    public $dets_aur;
    public $iltd_hist;
    public $dets_iltd;
    public $pbco_alvo;
    public $vsi_hist;
    public $dcr_em_uma_sntn;
    public $snp_hist;
    public $rsm_hist;
    public $dt_cric;
    public $dt_alt;

}
