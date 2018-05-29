<?php

class ControladorPersonagem extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
	parent::setDicas("Dicas Localização");
        $this->setCategoria($categoria);
    }
    
    public function cadastrar($parametros) {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('CadastrarPersonagem');
    }

    public function listar($parametros) {
	
	$modelo = new ModeloPersonagem();
	$res = $modelo->listar($parametros);
	
    $this->setVisao('ListarPersonagens');
	$this->setResultados($res);
    }    

    public function editar($parametros) {
	
    $modelo = new ModeloPersonagem();
	$res = $modelo->listar($parametros);
	
	if($res[0] != false){
	    $this->setResultados($res[0]);
	    $this->setVisao('CadastrarPersonagem');
	}else{
	    redirecionar("?categoria=personagem&acao=listar");
	}
    }

    public function salvar($parametros) {
	
	$modelo = new ModeloPersonagem();
	$idUsuario = sessao()->getUserData()->id;
	if(isset($_FILES) && $_FILES['im_psna']['size']!=0){	    
	    $idPersonagem = $modelo->proximoID();
	    $parametros['im_psna'] = uploadImagem($idUsuario, "personagem", $idPersonagem, $_FILES['im_psna']);
	}
	// if(isset($parametros['vsi_hist']) && is_array($parametros['vsi_hist'])){
	    // $tempStr = 0;
	    // foreach ($parametros['vsi_hist'] as $value) {
		// $tempStr = $tempStr+$value;
	    // }
	    // $parametros['vsi_hist'] = $tempStr;
	// }
	$parametros['fk_usu'] = $idUsuario;
	$res = $modelo->salvar($parametros);
	
	if($res != false){
	    redirecionar("?categoria=personagem&acao=listar");
	}else{
	    redirecionar("?categoria=personagem&acao=cadastrar");
	}
    }

    public function excluir($parametros) {
        
    $modelo = new ModeloPersonagem();
	$idUsuario = sessao()->getUserData()->id;
	$parametros['fk_usu'] = $idUsuario;
	$res = $modelo->excluir($parametros);
	
	if($res != false){
	    redirecionar("?categoria=personagem&acao=listar");
	}else {
	    redirecionar("?categoria=personagem&acao=listar"); //mudar pra uma pagina de erro (Personagem não encontrado ou não faz parte de seus persongens cadastrados) :D
	}
	}

}
