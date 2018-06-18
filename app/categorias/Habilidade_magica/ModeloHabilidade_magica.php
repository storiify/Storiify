<?php

class ModeloHabilidade_magica {

    //Colunas
    private $pk_hbld_mgca;     
    private $fk_hist;
    private $nm_hbld_mgca;
    private $dcr_hbld_mgca;
    private $podr_hbld_mgca;
    //Views
    public static $viewForm = "FormHabilidade_magica";
    public static $viewListar = "ListarHabilidade_magica";
    //Nomes Formais
    public static $nomeSingular = "Habilidade Mágica";
    public static $nomePlural = "Habilidades Mágicas";

    public function __construct($colunas) {
        foreach ($this as $keymagica => $valuemagica) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keymagica == $keyColuna) {
                    $this->$keymagica = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public function getAtributosListar() {
        $qtdMaxAtt = 2;
        $atributosSelecionados = array();

        if ($this->dcr_hbld_mgca != "") {
            $atributosSelecionados["Descrição"] = $this->dcr_hbld_mgca;
        }
        $bdContext = new BdContextHabilidade_magica();
        $psnaQueAparece = $bdContext->PersonagensQueAparece($this->pk_hbld_mgca);
        if (!empty($psnaQueAparece)) {
            $atributosSelecionados["Presente em"] = "";
            foreach ($psnaQueAparece as $psna) {
                $atributosSelecionados["Presente em"] .= "<span class='listar-select-habilidade-magica' "
                        . "title='Clique para editar {$psna["nm_psna"]}'"
                        . "href='?categoria=personagem&acao=editar&id={$psna["pk_psna"]}'>" .
                        truncar($psna["nm_psna"], 20) . "</span>";
            }
        }
        if ($this->podr_hbld_mgca != "" && count($atributosSelecionados) < $qtdMaxAtt) {
            $atributosSelecionados["Poder"] = $this->podr_hbld_mgca;
        }

        return $atributosSelecionados;
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloHabilidade_magica::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloHabilidade_magica::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    public function pk_hbld_mgca() {
        return $this->pk_hbld_mgca;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function nm_hbld_mgca($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->nm_hbld_mgca;
        }
        return truncar($this->nm_hbld_mgca, $tamanhoMaximo);
    }

    public function dcr_hbld_mgca() {
        return $this->dcr_hbld_mgca;
    }

    public function podr_hbld_mgca() {
        return $this->podr_hbld_mgca;
    }

}
