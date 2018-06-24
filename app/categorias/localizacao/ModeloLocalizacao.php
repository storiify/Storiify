<?php

class ModeloLocalizacao {

    // <editor-fold defaultstate="collapsed" desc="Colunas">
    private $pk_lczc;
    private $fk_hist;
    private $im_lczc;
    private $im_lczc_dets;
    private $nm_lczc;
    private $nm_lczc_dets;
    private $vis_grl;
    private $marc_geo;
    private $fk_ppl_lczc;
    private $arrd_lczc;
    private $hotl_lczc;
    private $hotl_lczc_dets;
    private $vsi_lczc;
    private $dcr_pasd;
    private $fk_fdd_decb;
    private $dt_fdc_decb;
    private $dt_fdc_decb_dets;
    private $envl_grrs;
    private $hist_gov;
    private $actm_mor_oglh;
    private $manc_hist;
    private $rtus_lczc;
    private $etca_vls;
    private $art_ettm;
    private $tbus_lczc;
    private $dics_lczc;
    private $dcr_ecn;
    private $moe_lczc;
    private $cmc_lczc;
    private $rlcs_extr_ecn;
    private $rlcs_itna_ecn;
    private $negs_ind;
    private $degd_scl;
    private $degd_scl_dets;
    private $fma_gov;
    private $leis_lczc;
    private $punc_lczc;
    private $rlcs_extr_pol;
    private $satc_pop;
    private $satc_pop_dets;
    private $orgz_anti_gov;
    private $cls_cast;
    private $nvl_tecn;
    private $nvl_tecn_dets;
    private $depe_tecn;
    private $depe_tecn_dets;
    private $acss_tecn;
    private $acss_tecn_dets;
    private $mtd_cmco;
    private $mtd_trnt;
    private $ciec_dcob;
    private $acss_magi;
    private $acss_magi_dets;
    private $efe_magi_lczc;
    private $efe_magi_scdd;
    private $efe_magi_tecn;
    private $dt_cric;
    private $dt_alt;
// </editor-fold>
    //Views
    public static $viewForm = "FormLocalizacao";
    public static $viewListar = "ListarLocalizacao";
    //Nomes Formais
    public static $nomeSingular = "Localização";
    public static $nomePlural = "Localizações";

    public function __construct($colunas) {
        foreach ($this as $keyLocalizacao => $valueLocalizacao) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyLocalizacao == $keyColuna) {
                    $this->$keyLocalizacao = $valueColuna ? $valueColuna : "";
                }
            }
        }
        
        if($this->im_lczc == "") {
		$this->im_lczc = const_Indefinida_IM;
	}
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 3;
        $atributosSelecionados = array();

        if ($this->vis_grl != "") {
            $atributosSelecionados["Visão Geral"] = $this->vis_grl;
        }
        if ($this->fk_ppl_lczc != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $bdContext = new BdContextLocalizacao();
            $parametros["id"] = $this->fk_ppl_lczc;
            $instancia = new ModeloLocalizacao($bdContext->listar($parametros)[0]);
            $atributosSelecionados["Principal Localidade"] = "<span class='btn-listar-select' "
                    . "title='Clique para editar {$instancia->nm_lczc()}'"
                    . "href='?categoria=localizacao&acao=editar&id={$instancia->pk_lczc()}'>" .
                    truncar($instancia->nm_lczc(), 20) . "</span>";
        }
        if ($this->fk_fdd_decb != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $bdContext = new BdContextPersonagem();
            $parametros["id"] = $this->fk_fdd_decb;
            $instancia = new ModeloPersonagem($bdContext->listar($parametros)[0]);
            $atributosSelecionados["Fundador/Descobridor"] = "<span class='btn-listar-select' "
                    . "title='Clique para editar {$instancia->nm_psna()}'"
                    . "href='?categoria=personagem&acao=editar&id={$instancia->pk_psna()}'>" .
                    truncar($instancia->nm_psna(), 20) . "</span>";
        }
        if ($this->hist_gov != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["História de Governo"] = $this->hist_gov;
        }
        if ($this->actm_mor_oglh != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Acontecimento de Maior Orgulho"] = $this->actm_mor_oglh;
        }
        if ($this->etca_vls != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Ética e Valores"] = $this->etca_vls;
        }
        if ($this->dcr_ecn != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Descrição da Economia"] = $this->dcr_ecn;
        }
        if ($this->degd_scl != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Desigualdade Social"] = $this->degd_scl;
        }
        if ($this->nvl_tecn != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Nível Tecnológico"] = $this->nvl_tecn;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloLocalizacao::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloLocalizacao::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function pk_lczc() {
        return $this->pk_lczc;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function im_lczc() {
        return $this->im_lczc;
    }

    public function im_lczc_dets() {
        return $this->im_lczc_dets;
    }

    public function nm_lczc($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_lczc;
        }
        return truncar($this->nm_lczc, $tamanhoMaximo);
    }

    public function nm_lczc_dets() {
        return $this->nm_lczc_dets;
    }

    public function vis_grl() {
        return $this->vis_grl;
    }

    public function marc_geo() {
        return $this->marc_geo;
    }

    public function fk_ppl_lczc() {
        return $this->fk_ppl_lczc;
    }

    public function arrd_lczc() {
        return $this->arrd_lczc;
    }

    public function hotl_lczc() {
        return $this->hotl_lczc;
    }

    public function hotl_lczc_dets() {
        return $this->hotl_lczc_dets;
    }

    public function vsi_lczc() {
        return parseCheckbox($this->vsi_lczc);
    }

    public function dcr_pasd() {
        return $this->dcr_pasd;
    }

    public function fk_fdd_decb() {
        return $this->fk_fdd_decb;
    }

    public function dt_fdc_decb() {
        return $this->dt_fdc_decb;
    }

    public function dt_fdc_decb_dets() {
        return $this->dt_fdc_decb_dets;
    }

    public function envl_grrs() {
        return $this->envl_grrs;
    }

    public function hist_gov() {
        return $this->hist_gov;
    }

    public function actm_mor_oglh() {
        return $this->actm_mor_oglh;
    }

    public function manc_hist() {
        return $this->manc_hist;
    }

    public function rtus_lczc() {
        return $this->rtus_lczc;
    }

    public function etca_vls() {
        return $this->etca_vls;
    }

    public function art_ettm() {
        return $this->art_ettm;
    }

    public function tbus_lczc() {
        return $this->tbus_lczc;
    }

    public function dics_lczc() {
        return $this->dics_lczc;
    }

    public function dcr_ecn() {
        return $this->dcr_ecn;
    }

    public function moe_lczc() {
        return $this->moe_lczc;
    }

    public function cmc_lczc() {
        return $this->cmc_lczc;
    }

    public function rlcs_extr_ecn() {
        return $this->rlcs_extr_ecn;
    }

    public function rlcs_itna_ecn() {
        return $this->rlcs_itna_ecn;
    }

    public function negs_ind() {
        return $this->negs_ind;
    }

    public function degd_scl() {
        return $this->degd_scl;
    }

    public function degd_scl_dets() {
        return $this->degd_scl_dets;
    }

    public function fma_gov() {
        return $this->fma_gov;
    }

    public function leis_lczc() {
        return $this->leis_lczc;
    }

    public function punc_lczc() {
        return $this->punc_lczc;
    }

    public function rlcs_extr_pol() {
        return $this->rlcs_extr_pol;
    }

    public function satc_pop() {
        return $this->satc_pop;
    }

    public function satc_pop_dets() {
        return $this->satc_pop_dets;
    }

    public function orgz_anti_gov() {
        return $this->orgz_anti_gov;
    }

    public function cls_cast() {
        return $this->cls_cast;
    }

    public function nvl_tecn() {
        return $this->nvl_tecn;
    }

    public function nvl_tecn_dets() {
        return $this->nvl_tecn_dets;
    }

    public function depe_tecn() {
        return $this->depe_tecn;
    }

    public function depe_tecn_dets() {
        return $this->depe_tecn_dets;
    }

    public function acss_tecn() {
        return $this->acss_tecn;
    }

    public function acss_tecn_dets() {
        return $this->acss_tecn_dets;
    }

    public function mtd_cmco() {
        return $this->mtd_cmco;
    }

    public function mtd_trnt() {
        return $this->mtd_trnt;
    }

    public function ciec_dcob() {
        return $this->ciec_dcob;
    }

    public function acss_magi() {
        return $this->acss_magi;
    }

    public function acss_magi_dets() {
        return $this->acss_magi_dets;
    }

    public function efe_magi_lczc() {
        return $this->efe_magi_lczc;
    }

    public function efe_magi_scdd() {
        return $this->efe_magi_scdd;
    }

    public function efe_magi_tecn() {
        return $this->efe_magi_tecn;
    }

    public function dt_cric() {
        return $this->dt_cric;
    }

    public function dt_alt() {
        return $this->dt_alt;
    }

// </editor-fold>
}
