<?php

class ModeloRaca {

    //Colunas
    private $pk_raca;
    private $fk_hist;
    private $nm_raca;
    private $dcr_raca;
    private $apci_raca;
    private $pvmt_raca;
    private $rptc_raca;
    //Views
    public static $viewForm = "FormRaca";
    public static $viewListar = "ListarRaca";
    //Nomes Formais
    public static $nomeSingular = "Raça";
    public static $nomePlural = "Raças";

    public function __construct($colunas) {
        $this->pk_raca = (isset($colunas["pk_raca"]) ? $colunas["pk_raca"] : "");
        $this->fk_hist = (isset($colunas["fk_hist"]) ? $colunas["fk_hist"] : "");
        $this->nm_raca = (isset($colunas["nm_raca"]) ? $colunas["nm_raca"] : "");
        $this->dcr_raca = (isset($colunas["dcr_raca"]) ? $colunas["dcr_raca"] : "");
        $this->apci_raca = (isset($colunas["apci_raca"]) ? $colunas["apci_raca"] : "");
        $this->pvmt_raca = (isset($colunas["pvmt_raca"]) ? $colunas["pvmt_raca"] : "");
        $this->rptc_raca = (isset($colunas["rptc_raca"]) ? $colunas["rptc_raca"] : "");
    }

    public function pk_raca() {
        return $this->pk_raca;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_raca($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_raca;
        }
        return truncar($this->nm_raca, $tamanhoMaximo);
    }

    public function dcr_raca() {
        return $this->dcr_raca;
    }

    public function apci_raca() {
        return $this->apci_raca;
    }

    public function pvmt_raca() {
        return $this->pvmt_raca;
    }

    public function rptc_raca() {
        return $this->rptc_raca;
    }

    public function getAtributosListar() {
        if ($this->dcr_raca != "") {
            return array(
                "Descrição" => $this->dcr_raca,
                "Povoamento" => $this->pvmt_raca);
        } elseif ($this->apci_raca != "") {
            return array(
                "Aparência" => $this->apci_raca,
                "Povoamento" => $this->pvmt_raca);
        }
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloRaca::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloRaca::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist;
        }
    }

}
