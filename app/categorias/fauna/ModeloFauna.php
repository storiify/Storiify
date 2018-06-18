<?php

class ModeloFauna {

    //Colunas
    private $pk_fna;
    private $fk_hist;
    private $nm_fna;
    private $dcr_fna;
    private $apci_fna;
    private $pvmt_fna;
    private $agsd_fna;
    //Views
    public static $viewForm = "FormFauna";
    public static $viewListar = "ListarFauna";
    //Nomes Formais
    public static $nomeSingular = "Fauna";
    public static $nomePlural = "Faunas";

    public function __construct($colunas) {
        foreach ($this as $keyFauna => $valueFauna) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyFauna == $keyColuna) {
                    $this->$keyFauna = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_fna != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_fna;
        }
        $bdContext = new BdContextFauna();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_fna);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->agsd_fna != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Agressividade"] = $this->agsd_fna;
        }
        if ($this->apci_fna != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Aparência"] = $this->apci_fna;
        }
        if ($this->pvmt_fna != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Povoamento"] = $this->pvmt_fna;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloFauna::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloFauna::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_fna() {
        return $this->pk_fna;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_fna($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_fna;
        }
        return truncar($this->nm_fna, $tamanhoMaximo);
    }

    public function dcr_fna() {
        return $this->dcr_fna;
    }

    public function apci_fna() {
        return $this->apci_fna;
    }

    public function pvmt_fna() {
        return $this->pvmt_fna;
    }

    public function agsd_fna() {
        return $this->agsd_fna;
    }

}
