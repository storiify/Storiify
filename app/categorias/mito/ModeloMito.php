<?php

class ModeloMito {

    //Colunas
    private $pk_mito;
    private $fk_hist;
    private $nm_mito;
    private $dcr_mito;
    private $popd_mito;
    //Views
    public static $viewForm = "FormMito";
    public static $viewListar = "ListarMito";
    //Nomes Formais
    public static $nomeSingular = "Mito";
    public static $nomePlural = "Mitos";

    public function __construct($colunas) {
        foreach ($this as $keyMito => $valueMito) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyMito == $keyColuna) {
                    $this->$keyMito = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_mito != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_mito;
        }
        $bdContext = new BdContextMito();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_mito);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->popd_mito != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Popularidade"] = $this->popd_mito;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloMito::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloMito::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_mito() {
        return $this->pk_mito;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_mito($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_mito;
        }
        return truncar($this->nm_mito, $tamanhoMaximo);
    }

    public function dcr_mito() {
        return $this->dcr_mito;
    }

    public function popd_mito() {
        return $this->popd_mito;
    }
}
