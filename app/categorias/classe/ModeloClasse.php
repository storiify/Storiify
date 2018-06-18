<?php

class MOdeloClasse {

    //Colunas
    private $pk_cls;
    private $fk_hist;
    private $nm_cls;
    private $dcr_cls;
    private $qt_cls;
    private $rptc_cls;
    //Views
    public static $viewForm = "FormClasse";
    public static $viewListar = "ListarClasse";
    //Nomes Formais
    public static $nomeSingular = "Classe";
    public static $nomePlural = "Classes";

    public function __construct($colunas) {
        foreach ($this as $keyClasse => $valueClasse) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyClasse == $keyColuna) {
                    $this->$keyClasse = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_cls != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_cls;
        }
        $bdContext = new BdContextClasse();
        $psnaQueAparece = $bdContext->PersonagensQueAparece($this->pk_cls);
        if (!empty($psnaQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($psnaQueAparece as $psna) {
                $atributosSelecionados["Presente em"] .= "<span class='listar-select-classe' "
                        . "title='Clique para editar {$psna["nm_psna"]}'"
                        . "href='?categoria=personagem&acao=editar&id={$psna["pk_psna"]}'>" .
                        truncar($psna["nm_psna"], 20) . ", </span>";
            }
        }
        if ($this->qt_cls != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Quantidade"] = $this->qt_cls;
        }
        if ($this->rptc_cls != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Reputação"] = $this->rptc_cls;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloClasse::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloClasse::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist;
        }
    }

    public function pk_cls() {
        return $this->pk_cls;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_cls($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_cls;
        }
        return truncar($this->nm_cls, $tamanhoMaximo);
    }

    public function dcr_cls() {
        return $this->dcr_cls;
    }

    public function qt_cls() {
        return $this->qt_cls;
    }

    public function rptc_cls() {
        return $this->rptc_cls;
    }

}
