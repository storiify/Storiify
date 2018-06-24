<?php

class BdContextCena extends ConexaoBd {

    private $tabela = "tb_cena";
    private $campos = '*';

    public function __construct() {
        parent::__construct();
    }

    public function salvar($parametros) {
        //Gerencia a qual história essa cena pertence
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $parametros['fk_hist'] = ($parametros['fk_hist'] != '' ? $parametros['fk_hist'] : $idHistoria);

        $res = false;
		
		//Gerencia a cena anterior
        if (isset($parametros['fk_cena_ant'])) {
            $idsCenaAnt = $parametros['fk_cena_ant'];
            unset($parametros['fk_cena_ant']);
        }
		
		//Gerencia a cena posterior
        if (isset($parametros['fk_cena_ptrr'])) {
            $idsCenaPtrr = $parametros['fk_cena_ptrr'];
            unset($parametros['fk_cena_ptrr']);
        }

        if ($parametros['pk_cena'] != '') { //Ao editar
            $condicao = " pk_cena='{$parametros['pk_cena']}'";
            $res = $this->updateBase($parametros, $this->tabela, $condicao);
        } else { //Ao criar
            unset($parametros['pk_cena']);
            $res = $this->inserirBase($parametros, $this->tabela);
        }
        return $res;
    }

    public function listar($parametros) {

        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "WHERE fk_hist='$idHistoria'";

        if (isset($parametros["id"])) {
            $id = $parametros["id"];
            $condicao .= " AND pk_cena='$id'";
        }

        $res = $this->listarBase($this->campos, $this->tabela, $condicao);
        if (!isset($res) || $res == null) {
            return array();
        }

        return $res;
    }

    public function excluir($parametros) {

        //Primeira condição = fk_hist
        $idHistoria = sessao()->getHistoriaSelecionada()->pk_hist();
        $condicao = "fk_hist='$idHistoria'";
        //Segunda condição = pk_cena
        $id = $parametros['id'];
        $condicao .= " AND pk_cena='$id'";

        $res = $this->excluirBase($this->tabela, $condicao);

        return $res;
    }

    public function proximoID() {
        return $this->getNextID($this->tabela);
    }

}
