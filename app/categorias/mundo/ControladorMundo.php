<?php

class ControladorMundo extends Controlador {

    public function __construct($categoria) {
        parent::__construct();
        parent::setDicas("Dicas Mundo");
        $this->setCategoria($categoria);
    }

    public function cadastrar($parametros) {
        if ($parametros == null) {
            $this->setVisao('CadastrarMundo');
        } else {
            $mundo = Mundo::SelecionarUm($parametros);
            $this->setVisao('CadastrarMundo');
            $this->setParametros($mundo);
        }
    }

}
