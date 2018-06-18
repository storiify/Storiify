<?php

class ModeloProfissao {

    //Colunas
    private $pk_pfs;
    private $fk_hist;
    private $nm_pfs;
    private $dcr_pfs;
    private $qt_pfs;
    private $rptc_pfs;
    //Views
    public static $viewForm = "FormProfissao";
    public static $viewListar = "ListarProfissao";
    //Nomes Formais
    public static $nomeSingular = "Profissão";
    public static $nomePlural = "Profissões";

    public function __construct($colunas) {
        foreach ($this as $keyProfissao => $valueProfissao) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyProfissao == $keyColuna) {
                    $this->$keyProfissao = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_pfs != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_pfs;
        }
        $bdContext = new BdContextProfissao();
        $psnaQueAparece = $bdContext->PersonagensQueAparece($this->pk_pfs);
        if (!empty($psnaQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($psnaQueAparece as $psna) {
                $atributosSelecionados["Presente em"] .= "<span class='listar-select-profissao' "
                        . "title='Clique para editar {$psna["nm_psna"]}'"
                        . "href='?categoria=personagem&acao=editar&id={$psna["pk_psna"]}'>" .
                        truncar($psna["nm_psna"], 20) . ", </span>";
            }
        }
        if ($this->qt_pfs != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Quantidade"] = $this->qt_pfs;
        }
        if ($this->rptc_pfs != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Reputação"] = $this->rptc_pfs;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloProfissao::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloProfissao::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist;
        }
    }

    public function pk_pfs() {
        return $this->pk_pfs;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_pfs($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_pfs;
        }
        return truncar($this->nm_pfs, $tamanhoMaximo);
    }

    public function dcr_pfs() {
        return $this->dcr_pfs;
    }

    public function qt_pfs() {
        return $this->qt_pfs;
    }

    public function rptc_pfs() {
        return $this->rptc_pfs;
    }

}
