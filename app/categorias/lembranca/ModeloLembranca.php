<?php

class ModeloLembranca {

    //Colunas
    private $pk_lmca;
    private $fk_hist;
    private $dcr_lmca;
    private $apcc_lmca;
    //Views
    public static $viewForm = "Formlembranca";
    public static $viewListar = "Listarlembranca";
    //Nomes Formais
    public static $nomeSingular = "Lembrança";
    public static $nomePlural = "Lembranças";

    public function __construct($colunas) {
        foreach ($this as $keyLembranca => $valueLembranca) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyLembranca == $keyColuna) {
                    $this->$keyLembranca = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_lmca != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_lmca;
        }
        $bdContext = new BdContextLembranca();
        $psnaQueAparece = $bdContext->PersonagensQueAparece($this->pk_lmca);
        if (!empty($psnaQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($psnaQueAparece as $psna) {
                $atributosSelecionados["Presente em"] .= "<span class='listar-select-lembranca' "
                        . "title='Clique para editar {$psna["nm_psna"]}'"
                        . "href='?categoria=personagem&acao=editar&id={$psna["pk_psna"]}'>" .
                        truncar($psna["nm_psna"], 20) . ", </span>";
            }
        }
        if ($this->apcc_lmca != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Apreciação"] = $this->apcc_lmca;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloLembranca::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloLembranca::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist;
        }
    }

    public function pk_lmca() {
        return $this->pk_lmca;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function dcr_lmca() {
        return $this->dcr_lmca;
    }

    public function apcc_lmca() {
        return $this->apcc_lmca;
    }

}
