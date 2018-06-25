<?php

class ModeloHabilidade_fisica {

    //Colunas
    private $pk_hbld_fsca;     
    private $fk_hist;
    private $nm_hbld_fsca;
    private $dcr_hbld_fsca;
    private $podr_hbld_fsca;
    //Views
    public static $viewForm = "FormHabilidade_fisica";
    public static $viewListar = "ListarHabilidade_fisica";
    //Nomes Formais
    public static $nomeSingular = "Habilidade Física";
    public static $nomePlural = "Habilidades Físicas";

    public function __construct($colunas) {
        foreach ($this as $keyFisica => $valueFisica) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyFisica == $keyColuna) {
                    $this->$keyFisica = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_hbld_fsca != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_hbld_fsca;
        }
        $bdContext = new BdContextHabilidade_fisica();
        $psnaQueAparece = $bdContext->PersonagensQueAparece($this->pk_hbld_fsca);
        if (!empty($psnaQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($psnaQueAparece as $psna) {
                $atributosSelecionados["Presente em"] .= "<span class='listar-select-habilidade-fisica' "
                        . "title='Clique para editar {$psna["nm_psna"]}'"
                        . "href='?categoria=personagem&acao=editar&id={$psna["pk_psna"]}'>" .
                        truncar($psna["nm_psna"], 20) . "</span>";
            }
        }
        if ($this->podr_hbld_fsca != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Poder"] = $this->podr_hbld_fsca;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloHabilidade_fisica::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloHabilidade_fisica::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_hbld_fsca() {
        return $this->pk_hbld_fsca;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_hbld_fsca($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_hbld_fsca;
        }
        return truncar($this->nm_hbld_fsca, $tamanhoMaximo);
    }

    public function dcr_hbld_fsca() {
        return $this->dcr_hbld_fsca;
    }

    public function podr_hbld_fsca() {
        return $this->podr_hbld_fsca;
    }

}
