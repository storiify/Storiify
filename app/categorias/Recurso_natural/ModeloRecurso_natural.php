<?php

class ModeloRecurso_natural {

    //Colunas
    private $pk_rcs_ntrl;
    private $fk_hist;
    private $nm_rcs_ntrl;
    private $dcr_rcs_ntrl;
    private $rrdd_rcs_ntrl;
    //Views
    public static $viewForm = "FormRecursoNatural";
    public static $viewListar = "ListarRecursoNatural";
    //Nomes Formais
    public static $nomeSingular = "Recurso Natural";
    public static $nomePlural = "Recursos Naturais";

    public function __construct($colunas) {
        foreach ($this as $keyRecursoNatural => $valueRecursoNatural) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyRecursoNatural == $keyColuna) {
                    $this->$keyRecursoNatural = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_rcs_ntrl != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_rcs_ntrl;
        }
        $bdContext = new BdContextRecurso_natural();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_rcs_ntrl);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->rrdd_rcs_ntrl != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Raridade"] = $this->rrdd_rcs_ntrl;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloRecurso_natural::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloRecurso_natural::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_rcs_ntrl() {
        return $this->pk_rcs_ntrl;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_rcs_ntrl($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_rcs_ntrl;
        }
        return truncar($this->nm_rcs_ntrl, $tamanhoMaximo);
    }

    public function dcr_rcs_ntrl() {
        return $this->dcr_rcs_ntrl;
    }

    public function rrdd_rcs_ntrl() {
        return $this->rrdd_rcs_ntrl;
    }
}
