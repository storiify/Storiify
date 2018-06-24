<?php

class ModeloReligiao {

    //Colunas
    private $pk_relg;
    private $fk_hist;
    private $nm_relg;
    private $dcr_relg;
    private $popd_relg;
    //Views
    public static $viewForm = "FormReligiao";
    public static $viewListar = "ListarReligiao";
    //Nomes Formais
    public static $nomeSingular = "Religião";
    public static $nomePlural = "Religiões";

    public function __construct($colunas) {
        foreach ($this as $keyReligiao => $valueReligiao) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyReligiao == $keyColuna) {
                    $this->$keyReligiao = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_relg != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_relg;
        }
        $bdContext = new BdContextReligiao();
        $lczcQueAparece = $bdContext->localizacoesQueAparece($this->pk_relg);
        if (!empty($lczcQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($lczcQueAparece as $lczc) {
                $atributosSelecionados["Presente em"] .= "<span class='btn-listar-select' "
                        . "title='Clique para editar {$lczc["nm_lczc"]}'"
                        . "href='?categoria=localizacao&acao=editar&id={$lczc["pk_lczc"]}'>" .
                        truncar($lczc["nm_lczc"], 20) . "</span>";
            }
        }
        if ($this->popd_relg != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Popularidade"] = $this->popd_relg;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloReligiao::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloReligiao::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_relg() {
        return $this->pk_relg;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_relg($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_relg;
        }
        return truncar($this->nm_relg, $tamanhoMaximo);
    }

    public function dcr_relg() {
        return $this->dcr_relg;
    }

    public function popd_relg() {
        return $this->popd_relg;
    }
}
