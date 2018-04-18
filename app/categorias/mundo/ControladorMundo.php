<?php

class ControladorMundo extends Controlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Mundo");
        $this->setCategoria($categoria);
    }

    public function criar() {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('FormMundo');
    }

    public function listar() {
        $mundos = Mundo::SelecionarTodosSimplificado();
        $this->setParametros($mundos);        
        $this->setVisao('ListarMundo');
    }

    public function editar($parametros) {
        $id = $parametros['parametros'];

        $mundo = Mundo::SelecionarUm($id);
        if ($mundo == null) {
            consoleLog("Não há instância com esse Id");
        }
        $this->setParametros($mundo);
        $this->setVisao('FormMundo');
    }

    public function salvar() { //dá pra receber $mundo ?
        $mundo = new Mundo($_POST['view_pk_mnd'], $_POST['view_nm_ppl']);

        if (!is_a($mundo, "Mundo")) {
            $this->setParametros($mundo); //Fazer retornar pro FormMundo com os parâmetros que ele já tinha cadastrado
            $this->setVisao('FormMundo');
        }

        if ($mundo->pk_mnd == 0) {
            Mundo::Inserir($mundo);
        } else {
            Mundo::Alterar($mundo);
        }

        if (true) { //usuário estiver logado
            $this->listar();
        } else {
            $this->setVisao('ALGUMA PÁGINA INICIAL');
        }
    }

    public function deletar($parametros) {
        $id = $parametros['parametros'];
        if (Mundo::Deletar($id)) {
           $this->listar(); 
        }     
    }
}
