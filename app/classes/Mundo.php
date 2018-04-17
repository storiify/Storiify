<?php

class Mundo {

    public function __construct($id, $nome) {
        $this->pk_mnd = $id;
        $this->nm_ppl = $nome;
    }

    public static function SelecionarUm($id) {
        $db = ConexaoBd::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM tb_mundo WHERE pk_mnd = :pk_mnd');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('pk_mnd' => $id));
        $mundo = $req->fetch();
        
        return new Mundo($mundo['pk_mnd'], $mundo['nm_ppl']);
    }

    public $pk_mnd;
//    public $im_ppl;
//    public $dets_im_ppl;
    public $nm_ppl;
//    public $dets_nm_ppl;
//    public $vis_grl;
//    public $hist_grl;
//    public $era;
//    public $arrd;
//    public $hotl;
//    public $dets_hotl;
//    public $vsi_mnd;
//    public $etca_vls;
//    public $art_ettm;
//    public $tbus;
//    public $rtus;
//    public $dics;
//    public $dcr_ecn;
//    public $moe_mnd;
//    public $cmc_mnd;
//    public $ecn_rlcs_extr;
//    public $ecn_rlcs_itna;
//    public $negs_ind;
//    public $degd_scl;
//    public $dets_degd_scl;
//    public $fma_gov;
//    public $leis;
//    public $punc;
//    public $hist_gov;
//    public $pol_rlcs_extr;
//    public $satc_pop;
//    public $dets_satc_pop;
//    public $orgz_anti_gov;
//    public $envl_grrs;
//    public $cls_cast;
//    public $nvl_tecn;
//    public $depe_tecn;
//    public $acss_tecn;
//    public $mtd_cmco;
//    public $mtd_trnt;
//    public $dcob_citc;
//    public $acss_magi;
//    public $efe_magi_mnd;
//    public $efe_magi_scdd;
//    public $efe_magi_tecn;

}
