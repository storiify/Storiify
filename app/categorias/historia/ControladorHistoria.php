<?php

class ControladorHistoria extends Controlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Historia");
        $this->setCategoria($categoria);
    }

    public function criar() {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('FormHistoria');
    }

    public function listar() {
        $historias = Historia::SelecionarTodosSimplificado();
        $this->setParametros($historias);
        $this->setVisao('ListarHistoria');
    }

    public function editar($parametros) {
        $id = $parametros['parametros'];

        $historia = Historia::SelecionarUm($id);
        if ($historia == null) {
            consoleLog("Não há instância com esse Id");
        }
        $this->setParametros($historia);
        $this->setVisao('FormHistoria');
    }

    public function salvar() { //dá pra receber $historia ?             
        $historia = new Historia($_POST['view_pk_hist'], $_POST['view_tit_hist']);
        $historia->dets_im_ppl = (isset($_POST['view_dets_im_ppl']) ? $_POST['view_dets_im_ppl'] : "");
        $historia->tit_hist = (isset($_POST['view_tit_hist']) ? $_POST['view_tit_hist'] : "");
        $historia->dets_tit = (isset($_POST['view_dets_tit']) ? $_POST['view_dets_tit'] : "");
        $historia->stit_hist = (isset($_POST['view_stit_hist']) ? $_POST['view_stit_hist'] : "");
        $historia->dets_stit = (isset($_POST['view_dets_stit']) ? $_POST['view_dets_stit'] : "");
        $historia->aur_hist = (isset($_POST['view_aur_hist']) ? $_POST['view_aur_hist'] : "");
        $historia->dets_aur = (isset($_POST['view_dets_aur']) ? $_POST['view_dets_aur'] : "");
        $historia->iltd_hist = (isset($_POST['view_iltd_hist']) ? $_POST['view_iltd_hist'] : "");
        $historia->dets_iltd = (isset($_POST['view_dets_iltd']) ? $_POST['view_dets_iltd'] : "");
        $historia->pbco_alvo = (isset($_POST['view_pbco_alvo']) ? $_POST['view_pbco_alvo'] : "");
        $historia->vsi_hist = (isset($_POST['view_vsi_hist']) ? $_POST['view_vsi_hist'] : "");
        $historia->dcr_em_uma_sntn = (isset($_POST['view_dcr_em_uma_sntn']) ? $_POST['view_dcr_em_uma_sntn'] : "");
        $historia->snp_hist = (isset($_POST['view_snp_hist']) ? $_POST['view_snp_hist'] : "");
        $historia->rsm_hist = (isset($_POST['view_rsm_hist']) ? $_POST['view_rsm_hist'] : "");
        
        if ($_FILES['fileToUpload']['name'] == "") {
            $historia->im_ppl = Historia::SelecionarUm($historia->pk_hist)['im_ppl'];
        } 
        
        if (!is_a($historia, "Historia")) {
            $this->setParametros($historia); //Fazer retornar pro FormHistoria com os parâmetros que ele já tinha cadastrado
            $this->setVisao('FormHistoria');
        }

        if ($historia->pk_hist == 0) {
            $historia->pk_hist = Historia::Inserir($historia);
        } else {
            Historia::Alterar($historia);
        }
        
        if ($_FILES['fileToUpload']['name'] != "") {
            $historia->im_ppl = uploadImagem(1, "historia", $historia->pk_hist, $_FILES["fileToUpload"]);
            Historia::Alterar($historia);
        } 

        if (true) { //usuário estiver logado
            $this->listar();
        } else {
            $this->setVisao('ALGUMA PÁGINA INICIAL');
        }
    }

    public function deletar($parametros) {
        $id = $parametros['parametros'];
        if (Historia::Deletar($id)) {
            deleteImagem(1, "historia", $id);
            $this->listar();
        }
    }
}
