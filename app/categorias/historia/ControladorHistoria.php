<?php

class ControladorHistoria extends Controlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas História");
        $this->setCategoria($categoria);
    }

    public function criar() {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('FormHistoria');
    }

    public function listar() {
        $historias = Historia::SelecionarTodosCustomizado(array("pk_hist", "im_ppl", "tit_hist", "stit_hist", "aur_hist", "pbco_alvo", "snp_hist", "dt_alt"));
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
        $historia = new Historia($_POST['view_pk_hist']);
        $historia->tit_hist = (isset($_POST['view_tit_hist']) ? $_POST['view_tit_hist'] : NULL);
        $historia->dets_im_ppl = (isset($_POST['view_dets_im_ppl']) ? $_POST['view_dets_im_ppl'] : NULL);
        $historia->dets_tit = (isset($_POST['view_dets_tit']) ? $_POST['view_dets_tit'] : NULL);
        $historia->stit_hist = (isset($_POST['view_stit_hist']) ? $_POST['view_stit_hist'] : NULL);
        $historia->dets_stit = (isset($_POST['view_dets_stit']) ? $_POST['view_dets_stit'] : NULL);
        $historia->aur_hist = (isset($_POST['view_aur_hist']) ? $_POST['view_aur_hist'] : NULL);
        $historia->dets_aur = (isset($_POST['view_dets_aur']) ? $_POST['view_dets_aur'] : NULL);
        $historia->iltd_hist = (isset($_POST['view_iltd_hist']) ? $_POST['view_iltd_hist'] : NULL);
        $historia->dets_iltd = (isset($_POST['view_dets_iltd']) ? $_POST['view_dets_iltd'] : NULL);
        $historia->pbco_alvo = (isset($_POST['view_pbco_alvo']) ? $_POST['view_pbco_alvo'] : NULL);       
        if (isset($_POST['view_vsi_hist'])) {
            foreach ($_POST['view_vsi_hist'] as $valor) {
            $historia->vsi_hist += $valor;
            }
        }else{
            $historia->vsi_hist = NULL;
        }             
        $historia->dcr_em_uma_sntn = (isset($_POST['view_dcr_em_uma_sntn']) ? $_POST['view_dcr_em_uma_sntn'] : NULL);
        $historia->snp_hist = (isset($_POST['view_snp_hist']) ? $_POST['view_snp_hist'] : NULL);
        $historia->rsm_hist = (isset($_POST['view_rsm_hist']) ? $_POST['view_rsm_hist'] : NULL);      
        
        if ($historia->pk_hist == 0) {
            if ($_FILES['view_im_ppl']['name'] != "") {
                $idAlterado = Historia::ProximoId();
                $historia->im_ppl = uploadImagem(1, "historia", $idAlterado, $_FILES['view_im_ppl']);
            }
            Historia::Inserir($historia);
        } else {
            if ($_FILES['view_im_ppl']['name'] != "") {
                $historia->im_ppl = uploadImagem(1, "historia", $historia->pk_hist, $_FILES['view_im_ppl']);
            }
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
