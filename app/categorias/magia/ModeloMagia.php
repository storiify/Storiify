<?php

class ModeloMagia {

    //Colunas
    private $pk_magi;
    private $fk_hist;
    private $nm_magi;
    private $dcr_magi;
    private $rgrs_magi;
    //Views
    public static $viewForm = "FormMagia";
    public static $viewListar = "ListarMagia";
    //Nomes Formais
    public static $nomeSingular = "Magia";
    public static $nomePlural = "Magias";

    public function __construct($colunas) {
        foreach ($this as $keyMagia => $valueMagia) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyMagia == $keyColuna) {
                    $this->$keyMagia = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_magi != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_magi;
        }
        $bdContext = new BdContextMagia();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_magi);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->rgrs_magi != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Regras"] = $this->rgrs_magi;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloMagia::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloMagia::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_magi() {
        return $this->pk_magi;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_magi($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_magi;
        }
        return truncar($this->nm_magi, $tamanhoMaximo);
    }

    public function dcr_magi() {
        return $this->dcr_magi;
    }

    public function rgrs_magi() {
        return $this->rgrs_magi;
    }
}
