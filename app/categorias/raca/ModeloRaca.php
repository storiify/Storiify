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
        foreach ($this as $keyRaca => $valueRaca) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyRaca == $keyColuna) {
                    $this->$keyRaca = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_raca != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_raca;
        }
        $bdContext = new BdContextRaca();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_raca);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->pvmt_raca != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Povoamento"] = $this->pvmt_raca;
        }
        if ($this->apci_raca != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Aparência"] = $this->apci_raca;
        }
        if ($this->rptc_raca != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Reputação"] = $this->rptc_raca;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloRaca::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloRaca::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
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

}
