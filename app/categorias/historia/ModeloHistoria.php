<?php

class ModeloHistoria {

    // <editor-fold defaultstate="collapsed" desc="Colunas">
    private $pk_hist;
    private $fk_usu;
    private $im_hist;
    private $im_hist_dets;
    private $tit_hist;
    private $tit_hist_dets;
    private $stit_hist;
    private $stit_hist_dets;
    private $aur_hist;
    private $aur_hist_dets;
    private $iltd_hist;
    private $iltd_hist_dets;
    private $pbco_alvo;
    private $vsi_hist;
    private $fk_psna_ppl;
    private $dcr_em_uma_sntn;
    private $snp_hist;
    private $rsm_hist;
    private $dt_cric;
    private $dt_alt;
// </editor-fold>
    //Views
    public static $viewForm = "FormHistoria";
    public static $viewListar = "ListarHistoria";
    public static $viewCategoriasHistoria = "CategoriasHistoria";
    //Nomes Formais
    public static $nomeSingular = "História";
    public static $nomePlural = "Histórias";

    public function __construct($colunas) {
        foreach ($this as $keyHistoria => $valueHistoria) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyHistoria == $keyColuna) {
                    $this->$keyHistoria = $valueColuna ? $valueColuna : "";
                }
            }
        }
        
        if($this->im_hist == "") {
            $this->im_hist = const_Indefinida_IM;
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 3;
        $atributosSelecionados = array();

        if ($this->aur_hist != "") {
            $atributosSelecionados["Autor"] = $this->aur_hist;
        }
        if($this->fk_psna_ppl != "") {
            $parametros["idHist"] = $this->pk_hist;
            $parametros["idPsna"] = $this->fk_psna_ppl;
            
            $bdContext = new BdContextPersonagem();
            $psnaPpl = $bdContext->getPsnaDeHist($parametros)[0];
            
            $atributosSelecionados["Personagem Principal"] = "<span class='btn-listar-select' "
                    . "title='Clique para editar {$psnaPpl["nm_psna"]}'"
                    . "href='?categoria=personagem&acao=editarExterno&idPsna={$psnaPpl["pk_psna"]}&idHist={$this->pk_hist}'>" .
                    truncar($psnaPpl["nm_psna"], 20) . "</span>";
        }

        if ($this->dcr_em_uma_sntn != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Descrição em uma Sentença"] = $this->dcr_em_uma_sntn;
        }
        if ($this->snp_hist != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Sinopse"] = $this->snp_hist;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloHistoria::$nomeSingular;
        } elseif ($acao == "listar") {
            return "Suas " . ModeloHistoria::$nomePlural;
        }
    }

    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function pk_hist() {
        return $this->pk_hist;
    }

    public function fk_usu() {
        return $this->fk_usu;
    }

    public function im_hist() {
        return $this->im_hist;
    }

    public function im_hist_dets() {
        return $this->im_hist_dets;
    }

    public function tit_hist($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->tit_hist;
        }
        return truncar($this->tit_hist, $tamanhoMaximo);
    }

    public function tit_hist_dets() {
        return $this->tit_hist_dets;
    }

    public function stit_hist() {
        return $this->stit_hist;
    }

    public function stit_hist_dets() {
        return $this->stit_hist_dets;
    }

    public function aur_hist() {
        return $this->aur_hist;
    }

    public function aur_hist_dets() {
        return $this->aur_hist_dets;
    }

    public function iltd_hist() {
        return $this->iltd_hist;
    }

    public function iltd_hist_dets() {
        return $this->iltd_hist_dets;
    }

    public function pbco_alvo() {
        return $this->pbco_alvo;
    }

    public function vsi_hist() {
        return parseCheckbox($this->vsi_hist);
    }

    public function fk_psna_ppl() {
        return $this->fk_psna_ppl;
    }

    public function dcr_em_uma_sntn() {
        return $this->dcr_em_uma_sntn;
    }

    public function snp_hist() {
        return $this->snp_hist;
    }

    public function rsm_hist() {
        return $this->rsm_hist;
    }

    public function dt_cric() {
        return $this->dt_cric;
    }

    public function dt_alt() {
        return $this->dt_alt;
    }

// </editor-fold>
}
