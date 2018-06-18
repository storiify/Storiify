<?php

class ModeloObjeto {

    //Colunas
    private $pk_obj;
    private $fk_hist;
    private $nm_obj;
    private $dcr_obj;
    private $apci_obj;
    private $vlr_obj;
    //Views
    public static $viewForm = "FormObjetos";
    public static $viewListar = "ListarObjetos";
    //Nomes Formais
    public static $nomeSingular = "Objeto";
    public static $nomePlural = "Objetos";

    public function __construct($colunas) {
        foreach ($this as $keyObjeto => $valueObjeto) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyObjeto == $keyColuna) {
                    $this->$keyObjeto = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 5;
        $atributosSelecionados = array();

        if ($this->dcr_obj != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_obj;
        }
        $bdContext = new BdContextObjeto();
        $psnaQueAparece = $bdContext->PersonagensQueAparece($this->pk_obj);
        if (!empty($psnaQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($psnaQueAparece as $psna) {
                $atributosSelecionados["Presente em"] .= "<span class='listar-select-classe' "
                        . "title='Clique para editar {$psna["nm_psna"]}'"
                        . "href='?categoria=personagem&acao=editar&id={$psna["pk_psna"]}'>" .
                        truncar($psna["nm_psna"], 20) . ", </span>";
            }
        }
        if ($this->vlr_obj != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Valoração"] = $this->vlr_obj;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloObjeto::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloClasse::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist;
        }
    }

    public function pk_obj() {
        return $this->pk_obj;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_obj($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_obj;
        }
        return truncar($this->nm_obj, $tamanhoMaximo);
    }

    public function dcr_obj() {
        return $this->dcr_obj;
    }

    public function apci_obj() {
        return $this->apci_obj;
    }

    public function vlr_obj() {
        return $this->vlr_obj;
    }

}
