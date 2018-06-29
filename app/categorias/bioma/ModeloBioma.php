<?php

class ModeloBioma {

    //Colunas
    private $pk_bma;
    private $fk_hist;
    private $nm_bma;
    private $dcr_bma;
    private $clma_bma;
    private $vrc_bma;
    //Views
    public static $viewForm = "FormBioma";
    public static $viewListar = "ListarBioma";
    //Nomes Formais
    public static $nomeSingular = "Bioma";
    public static $nomePlural = "Biomas";

    public function __construct($colunas) {
        foreach ($this as $keyBioma => $valueBioma) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyBioma == $keyColuna) {
                    $this->$keyBioma = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_bma != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_bma;
        }
        $bdContext = new BdContextBioma();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_bma);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->clma_bma != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Clima"] = $this->clma_bma;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloBioma::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloBioma::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_bma() {
        return $this->pk_bma;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_bma($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_bma;
        }
        return truncar($this->nm_bma, $tamanhoMaximo);
    }

    public function dcr_bma() {
        return $this->dcr_bma;
    }

    public function clma_bma() {
        return $this->clma_bma;
    }
    
    public function vrc_bma() {
        return $this->vrc_bma;
    }
}
