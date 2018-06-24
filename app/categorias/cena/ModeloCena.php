<?php

class ModeloCena {

    // <editor-fold defaultstate="collapsed" desc="Colunas">
    private $pk_cena;
    private $fk_hist;
    private $im_cena;
    private $im_cena_dets;
    private $tit_cena;
    private $tit_cena_dets;
    private $fk_cena_ant;
    private $fk_cena_ptrr;
    private $dt_hora;
    private $dt_hora_dets;
    private $vsi_cena;
    private $rsm_cena;
    private $desm_cena;
    private $dt_cric;
    private $dt_alt;

// </editor-fold>
    //Views
    public static $viewForm = "CadastrarCena";
    public static $viewListar = "ListarCena";
    //Nomes Formais
    public static $nomeSingular = "Cena";
    public static $nomePlural = "Cenas";

    public function __construct($colunas) {
        foreach ($this as $keyCena => $valueCena) {
            foreach ($colunas as $keyColuna => $valueColuna) {
                if ($keyCena == $keyColuna) {
                    $this->$keyCena = $valueColuna ? $valueColuna : "";
                }
            }
        }
    }

    public static function getTituloPagina($acao) {
        if ($acao == "cadastrar") {
            return "Cadastrar " . ModeloCena::$nomeSingular;
        } elseif ($acao == "listar") {
            return ModeloCena::$nomePlural . " de " . sessao()->getHistoriaSelecionada()->tit_hist();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="Getters">
    public function pk_cena() {
        return $this->pk_cena;
    }

    public function fk_hist() {
        return $this->fk_hist;
    }

    public function im_cena() {
        return $this->im_cena;
    }

    public function im_cena_dets() {
        return $this->im_cena_dets;
    }

    public function tit_cena($tamanhoMaximo = -1) {
        if ($tamanhoMaximo == -1) {
            return $this->tit_cena;
        }
        return truncar($this->tit_cena, $tamanhoMaximo);
    }

    public function tit_cena_dets() {
        return $this->tit_cena_dets;
    }

    public function fk_cena_ant() {
        return $this->fk_cena_ant;
    }

    public function fk_cena_ptrr() {
        return $this->fk_cena_ptrr;
    }

    public function dt_hora() {
        return $this->dt_hora;
    }

    public function dt_hora_dets() {
        return $this->dt_hora_dets;
    }
	
	public function vsi_cena() {
        return parseCheckbox($this->vsi_cena);
    }

    public function rsm_cena() {
        return $this->rsm_cena;
    }    

    public function desm_cena() {
        return $this->desm_cena;
    }

    public function dt_cric() {
        return $this->dt_cric;
    }

    public function dt_alt() {
        return $this->dt_alt;
    }
	
// </editor-fold>
}
