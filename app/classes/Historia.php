<?php

class Historia {

    public function __construct($id, $nome) {
        $this->pk_hist = $id;
        $this->tit_hist = $nome;
    }

    public static function Inserir($historia) {
        $bd = ConexaoBd::getInstance();
        
        $sql = ("INSERT INTO tb_historia
                VALUES ('$historia->pk_hist','$historia->im_ppl','$historia->dets_im_ppl',"
                . "'$historia->tit_hist','$historia->dets_tit','$historia->stit_hist','$historia->dets_stit',"
                . "'$historia->aur_hist','$historia->dets_aur','$historia->iltd_hist','$historia->dets_iltd',"
                . "'$historia->pbco_alvo','$historia->vsi_hist','$historia->dcr_em_uma_sntn',"
                . "'$historia->snp_hist','$historia->rsm_hist');");
        
        $bd->exec($sql);
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
        while ($historia = $req->fetch()){
            $historias[] = (object) $historia;
        }
        
        return $historias;
    }
    public static function SelecionarTodosSimplificado() {
        $bd = ConexaoBd::getInstance();

        $req = $bd->prepare("SELECT pk_hist, tit_hist, stit_hist, aur_hist, pbco_alvo, snp_hist FROM tb_historia"); 
        $req->execute();
        
        $historias = [];
        while ($historia = $req->fetch()){
            $historias[] = (object) $historia;
        }
        
        return $historias;
    }

    public static function Alterar($historia) {
        $bd = ConexaoBd::getInstance();

        $sql = "UPDATE tb_historia SET 
                im_ppl=:im_ppl, 
                dets_im_ppl=:dets_im_ppl,
                tit_hist=:tit_hist,
                dets_tit=:dets_tit,
                stit_hist=:stit_hist,
                dets_stit=:dets_stit,
                aur_hist=:aur_hist,
                dets_aur=:dets_aur,
                iltd_hist=:iltd_hist,
                dets_iltd=:dets_iltd,
                pbco_alvo=:pbco_alvo,
                vsi_hist=:vsi_hist,
                dcr_em_uma_sntn=:dcr_em_uma_sntn,
                snp_hist=:snp_hist,
                rsm_hist=:rsm_hist
                WHERE pk_hist=:pk_hist;";

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

        $query->execute();
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
}
