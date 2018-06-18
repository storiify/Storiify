<?php

class ControladorCena extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
	parent::setDicas("Dicas Cena");
        $this->setCategoria($categoria);
    }
    
    public function cadastrar($parametros) {
        //Aqui que se puxa as instâncias necessárias para se cadastrar mundos (alimentar selects)
        $this->setVisao('FormCena');
    }

    public function listar($parametros) {
	
	$modelo = new ModeloCena();
	$res = $modelo->listar($parametros);
	
	sessao()->setCenaData($res);
        $this->setVisao('ListarCena');
	$this->setResultados($res);
    }
    
    public function listarAoLogar($parametros) {
	$modelo = new ModeloCena();
	$res = $modelo->listar($parametros);	
	sessao()->setCenaData($res);
    }
    

    public function editar($parametros) {
	
        $modelo = new ModeloCena();
	$res = $modelo->listar($parametros);
	
	if($res[0] != false){
	    $this->setResultados($res[0]);
	    $this->setVisao('FormCena');
	}else{
	    redirecionar("?categoria=cena&acao=listar");
	}
    }

    public function salvar($parametros) {
	
	$modelo = new ModeloCena();
	$idUsuario = sessao()->getUserData()->id;
	if(isset($_FILES) && $_FILES['im_ppl']['size']!=0){	    
	    $idCena = $modelo->proximoID();
	    $parametros['im_ppl'] = uploadImagem($idUsuario, "cena", $idCena, $_FILES['im_ppl']);
	}
	if(isset($parametros['vsi_cena']) && is_array($parametros['vsi_cena'])){
	    $tempStr = 0;
	    foreach ($parametros['vsi_cena'] as $value) {
		$tempStr = $tempStr+$value;
	    }
	    $parametros['vsi_cena'] = $tempStr;
	}
	$parametros['fk_usu'] = $idUsuario;
	$res = $modelo->salvar($parametros);
	
	if($res != false){
	    redirecionar("?categoria=cena&acao=listar");
	}else{
	    redirecionar("?categoria=cena&acao=cadastrar");
	}
    }

    public function excluir($parametros) {
	
    }

}