<?php

class ModeloFlora {

    //Colunas
    private $pk_flra;
    private $fk_hist;
    private $nm_flra;
    private $dcr_flra;
    private $rrdd_flra;
    //Views
    public static $viewForm = "FormFlora";
    public static $viewListar = "ListarFlora";
    //Nomes Formais
    public static $nomeSingular = "Flora";
    public static $nomePlural = "Floras";

    public function __construct($colunas) {
        foreach ($this as $keyFlora => $valueFlora) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyFlora == $keyColuna) {
                    $this->$keyFlora = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_flra != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_flra;
        }
        $bdContext = new BdContextFlora();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_flra);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->rrdd_flra != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Raridade"] = $this->rrdd_flra;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloFlora::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloFlora::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_flra() {
        return $this->pk_flra;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_flra($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_flra;
        }
        return truncar($this->nm_flra, $tamanhoMaximo);
    }

    public function dcr_flra() {
        return $this->dcr_flra;
    }

    public function rrdd_flra() {
        return $this->rrdd_flra;
    }
}
