<?php

class ModeloLogin extends ConexaoBd {

    private $campos = '';

    const tx_tabela = "tb_usuario";

    private $cryptAlgo;
    // <editor-fold defaultstate="collapsed" desc="Colunas">
    private $pk_usu;
    private $im_usu;
    private $nm_usu;
    private $snm_usu;
    private $mail_usu;
    private $snh_usu;
    private $apdo_usu;
    private $dt_nsc;
    private $sexo_usu;
    private $ct_vrfd;
    private $dt_cric;
    private $dt_alt;

// </editor-fold>

    public function __construct() {
        parent::__construct();
        if (!defined('PASSWORD_ARGON2I')) {
            $this->cryptAlgo = PASSWORD_BCRYPT;
        } else {
            $this->cryptAlgo = PASSWORD_ARGON2I;
        }
        $this->tabela = self::tx_tabela;
    }

    public function check($param) {

        $email = $param['email'];
        $senha = $param['senha'];

        $condicao = "WHERE MAIL_USU='$email'";

        $modeloBase = new ConexaoBd();
        $res = $modeloBase->listarBase("*", $this->tabela, $condicao);

        if (!isset($res[0]) || $res[0] == null || !password_verify($senha, $res[0]['snh_usu'])) {
            return false;
        }

        $temp = array(0 => array());
        $temp[0]['id'] = $res[0]['pk_usu'];
        $temp[0]['nome'] = $res[0]['nm_usu'];
        $temp[0]['sobrenome'] = $res[0]['snm_usu'];
        $temp[0]['email'] = $res[0]['mail_usu'];
        $temp[0]['apelido'] = $res[0]['apdo_usu'];
        $temp[0]['imagem'] = $res[0]['im_usu'];

        return $temp;
    }

    public function salvar($parametros) {

        $modeloBase = new ConexaoBd();

        date_default_timezone_set('America/Sao_Paulo');
        $horarioAtual = date("Y-m-d H:i:s");

        if (isset($parametros['pk_usu']) && $parametros['pk_usu'] != "") {
            //atualizar
            $id = $parametros['pk_usu'];
            unset($parametros['pk_usu']);
            $parametros['dt_alt'] = $horarioAtual;

            if (isset($parametros['nm_usu']) && $parametros['nm_usu'] == "") {
                return "nm";
            }
            if (isset($parametros['mail_usu']) && $parametros['mail_usu'] == "") {
                return "mail";
            }

            if (isset($parametros['dt_nsc']) && ($parametros['dt_nsc'] == "" || $parametros['dt_nsc'] == "0000-00-00")) {
                unset($parametros['dt_nsc']);
            }

            if (isset($parametros['snh_usu']) && $parametros['snh_usu'] != "") {
                $parametros['snh_usu'] = password_hash($parametros['snh_usu'], $this->cryptAlgo);
            } else {
                unset($parametros['snh_usu']);
            }

            $res = $modeloBase->updateBase($parametros, $this->tabela, "pk_usu='{$id}'");

            $this->pk_usu = $id;
            $this->nm_usu = $parametros['nm_usu'];
            $this->snm_usu = $parametros['snm_usu'];
            $this->mail_usu = $parametros['mail_usu'];
            $this->apdo_usu = $parametros['apdo_usu'];
            
            if($parametros['im_usu']!='' && $parametros['im_usu']!='0') {
                $this->im_usu = $parametros['im_usu'];
            }elseif ($parametros['im_usu']=='0') {
                $this->im_usu = const_Indefinida_IM;
            }
        } else {
            //inserir
            $parametros['dt_cric'] = $horarioAtual;
            $parametros['dt_alt'] = $parametros['dt_cric'];

            $parametros['nm_usu'] = $parametros['input1'];
            $parametros['mail_usu'] = $parametros['input2'];
            $parametros['snh_usu'] = $parametros['input3'];

            unset($parametros['input1'], $parametros['input2'], $parametros['input3']);

            $parametros['snh_usu'] = password_hash($parametros['snh_usu'], $this->cryptAlgo);

            $res = $modeloBase->inserirBase($parametros, $this->tabela);
        }

        return $res;
    }

    public function verificar($parametros) {

        $modeloBase = new ConexaoBd();

        $email = $parametros['txtEmail'];

        unset($parametros['txtEmail']);

        $condicao = "WHERE MAIL_USU='$email'";

        $res = $modeloBase->listarBase("*", $this->tabela, $condicao);
        
        return $res;
    }

    public function getDadosLogin() {

        $modeloBase = new ConexaoBd();

        $idLogado = sessao()->getUserData()->id;
        $res = $modeloBase->listarBase("*", $this->tabela, "WHERE pk_usu='$idLogado'");

        if ($res[0]['im_usu']=='') {
            $res[0]['im_usu'] = const_Indefinida_IM;
        }
        
        return $res;
    }

    // <editor-fold defaultstate="collapsed" desc="Getters">
    function pk_usu() {
        return $this->pk_usu;
    }

    function im_usu() {
        return $this->im_usu;
    }

    function nm_usu() {
        return $this->nm_usu;
    }

    function snm_usu() {
        return $this->snm_usu;
    }

    function mail_usu() {
        return $this->mail_usu;
    }

    function snh_usu() {
        return $this->snh_usu;
    }

    function apdo_usu() {
        return $this->apdo_usu;
    }

    function dt_nsc() {
        return $this->dt_nsc;
    }

    function sexo_usu() {
        return $this->sexo_usu;
    }

    function ct_vrfd() {
        return $this->ct_vrfd;
    }

    function dt_cric() {
        return $this->dt_cric;
    }

    function dt_alt() {
        return $this->dt_alt;
    }

// </editor-fold>
}
