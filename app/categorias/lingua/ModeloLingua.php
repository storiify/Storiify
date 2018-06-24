<?php

class ModeloLingua {

    //Colunas
    private $pk_lnga;
    private $fk_hist;
    private $nm_lnga;
    private $dcr_lnga;
    private $popd_lnga;
    //Views
    public static $viewForm = "FormLingua";
    public static $viewListar = "ListarLingua";
    //Nomes Formais
    public static $nomeSingular = "Língua";
    public static $nomePlural = "Línguas";

    public function __construct($colunas) {
        foreach ($this as $keyLingua => $valueLingua) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyLingua == $keyColuna) {
                    $this->$keyLingua = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_lnga != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_lnga;
        }
        $bdContext = new BdContextLingua();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_lnga);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->popd_lnga != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Popularidade"] = $this->popd_lnga;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloLingua::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloLingua::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_lnga() {
        return $this->pk_lnga;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_lnga($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_lnga;
        }
        return truncar($this->nm_lnga, $tamanhoMaximo);
    }

    public function dcr_lnga() {
        return $this->dcr_lnga;
    }

    public function popd_lnga() {
        return $this->popd_lnga;
    }
}
