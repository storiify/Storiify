<?php

class ModeloPersonagem {

    // <editor-fold defaultstate="collapsed" desc="Colunas">
    private $pk_psna;
    private $fk_hist;
    private $im_psna;
    private $im_psna_dets;
    private $nm_psna;
    private $nm_psna_dets;
    private $sexo_psna;
    private $dt_nsc;
    private $dt_nsc_dets;
    private $fk_lclz_natl;
    private $fk_raca;
    private $vsi_psna;
    private $dcr_bsca;
    private $h_psna;
    private $h_psna_dets;
    private $peso_psna;
    private $peso_pnsa_dets;
    private $prte_fsco;
    private $prte_fsco_dets;
    private $tip_pele;
    private $tip_pele_dets;
    private $cblo_pnsa;
    private $cblo_psna_dets;
    private $vstm_psna;
    private $vstm_psna_dets;
    private $acsr_psna;
    private $acsr_psna_dets;
    private $cptc_pst;
    private $cptc_pst_dets;
    private $cptc_ngt;
    private $cptc_ngt_dets;
    private $almt_psna;
    private $almt_psna_dets;
    private $papl_hist;
    private $papl_hist_dets;
    private $envl_hist;
    private $mmt_mact;
    private $objt_ppl;
    private $objt_ppl_dets;
    private $objt_pllo;
    private $objt_pllo_dets;
    private $fk_cena_into_erdo;
    private $mtvc_psna;
    private $evt_mact;
    private $evt_mact_dets;
    private $pda_mact;
    private $pda_mact_dets;
    private $medo_psna;
    private $segd_psna;
    private $dt_cric;
    private $dt_alt;

// </editor-fold>
    //Views
    public static $viewForm = "CadastrarPersonagem";
    public static $viewListar = "ListarPersonagens";
    //Nomes Formais
    public static $nomeSingular = "Personagem";
    public static $nomePlural = "Personagens";

    public function __construct($colunas) {
        foreach ($this as $keyPersonagem => $valuePersonagem) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyPersonagem == $keyColuna) {
                    $this->$keyPersonagem = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    // public function getAtributosListar() {
        // $qtdMaxAtt = 3;
        // $atributosSelecionados = array();

        // if ($this->vis_grl != "") {
            // $atributosSelecionados["Visão Geral"] = $this->vis_grl;
        // }
        // if ($this->fk_ppl_lcld != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $bdContext = new BdContextLocalizacao();
            // $parametros["id"] = $this->fk_ppl_lcld;
            // $instancia = new ModeloLocalizacao($bdContext->listar($parametros)[0]);
            
            // $atributosSelecionados["Principal Localidade"] = $instancia->nm_lczc();
        // }
        // if ($this->fk_fdd_decb != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $atributosSelecionados["Fundador/Descoridor"] = $this->fk_fdd_decb;
        // }
        // if ($this->hist_gov != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $atributosSelecionados["História de Governo"] = $this->hist_gov;
        // }
        // if ($this->actm_mor_oglh != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $atributosSelecionados["Acontecimento de Maior Orgulho"] = $this->actm_mor_oglh;
        // }
        // if ($this->etca_vls != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $atributosSelecionados["Ética e Valores"] = $this->etca_vls;
        // }
        // if ($this->dcr_ecn != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $atributosSelecionados["Descrição da Economia"] = $this->dcr_ecn;
        // }
        // if ($this->degd_scl != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $atributosSelecionados["Desigualdade Social"] = $this->degd_scl;
        // }
        // if ($this->nvl_tecn != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            // $atributosSelecionados["Nível Tecnológico"] = $this->nvl_tecn;
        // }

        // return $atributosSelecionados;
    // }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloPersonagem::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloPersonagem::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function pk_psna() {
        return $this->pk_psna;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function im_psna() {
        return $this->im_psna;
    }

    public function im_psna_dets() {
        return $this->im_psna_dets;
    }

    public function nm_psna($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_psna;
        }
        return truncar($this->nm_psna, $tamanhoMaximo);
    }

    public function nm_psna_dets() {
        return $this->nm_psna_dets;
    }

    public function sexo_psna() {
        return $this->sexo_psna;
    }

    public function dt_nsc() {
        return $this->dt_nsc;
    }

    public function dt_nsc_dets() {
        return $this->dt_nsc_dets;
    }

    public function fk_lclz_natl() {
        return $this->fk_lclz_natl;
    }

    public function fk_raca() {
        return $this->fk_raca;
    }
	
	public function vsi_psna() {
        return parseCheckbox($this->vsi_psna);
    }

    public function dcr_bsca() {
        return $this->dcr_bsca;
    }    

    public function h_psna() {
        return $this->h_psna;
    }

    public function h_psna_dets() {
        return $this->h_psna_dets;
    }

    public function peso_psna() {
        return $this->peso_psna;
    }

    public function peso_pnsa_dets() {
        return $this->peso_pnsa_dets;
    }

    public function prte_fsco() {
        return $this->prte_fsco;
    }

    public function prte_fsco_dets() {
        return $this->prte_fsco_dets;
    }

    public function tip_pele() {
        return $this->tip_pele;
    }

    public function tip_pele_dets() {
        return $this->tip_pele_dets;
    }

    public function cblo_pnsa() {
        return $this->cblo_pnsa;
    }

    public function cblo_psna_dets() {
        return $this->cblo_psna_dets;
    }

    public function vstm_psna() {
        return $this->vstm_psna;
    }

    public function vstm_psna_dets() {
        return $this->vstm_psna_dets;
    }

    public function acsr_psna() {
        return $this->acsr_psna;
    }

    public function acsr_psna_dets() {
        return $this->acsr_psna_dets;
    }

    public function cptc_pst() {
        return $this->cptc_pst;
    }

    public function cptc_pst_dets() {
        return $this->cptc_pst_dets;
    }

    public function cptc_ngt() {
        return $this->cptc_ngt;
    }

    public function cptc_ngt_dets() {
        return $this->cptc_ngt_dets;
    }

    public function almt_psna() {
        return $this->almt_psna;
    }

    public function almt_psna_dets() {
        return $this->almt_psna_dets;
    }

    public function papl_hist() {
        return $this->papl_hist;
    }

    public function papl_hist_dets() {
        return $this->papl_hist_dets;
    }

    public function envl_hist() {
        return $this->envl_hist;
    }

    public function mmt_mact() {
        return $this->mmt_mact;
    }

    public function objt_ppl() {
        return $this->objt_ppl;
    }

    public function objt_ppl_dets() {
        return $this->objt_ppl_dets;
    }

    public function objt_pllo() {
        return $this->objt_pllo;
    }

    public function objt_pllo_dets() {
        return $this->objt_pllo_dets;
    }

    public function fk_cena_into_erdo() {
        return $this->fk_cena_into_erdo;
    }

    public function mtvc_psna() {
        return $this->mtvc_psna;
    }

    public function evt_mact() {
        return $this->evt_mact;
    }

    public function evt_mact_dets() {
        return $this->evt_mact_dets;
    }

    public function pda_mact() {
        return $this->pda_mact;
    }

    public function pda_mact_dets() {
        return $this->pda_mact_dets;
    }

    public function medo_psna() {
        return $this->medo_psna;
    }

    public function segd_psna() {
        return $this->segd_psna;
    }

    public function dt_cric() {
        return $this->dt_cric;
    }

    public function dt_alt() {
        return $this->dt_alt;
    }

// </editor-fold>
}
