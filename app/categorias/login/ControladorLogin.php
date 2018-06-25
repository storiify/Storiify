<?php

class ControladorLogin extends Controlador implements InterfaceControlador {

    public function __construct($categoria) {
        parent::__construct();
        $this->setCategoria($categoria);
    }

    public function logar($param) {
        //Pega a lista de historias e ja salva na SESSAO ao logar
        $this->setVisao('logar', TRUE);
    }

    public function check($param) {
        $modelo = new ModeloLogin();
        $res = $modelo->check($param);

        if ($res[0]) {
            $login = new Login();
            $login->logar($res[0]);
        }
        redirecionar("?categoria=historia&acao=listar");
    }

    public function deslogar($param) {
        $login = new Login();
        $login->logout();
        redirecionar("?categoria=principal&acao=home");
    }

    public function registrar($param) {

        $this->setVisao('registrar', TRUE);
    }

    public function salvar($parametros) {
	
        $modelo = new ModeloLogin();
        
        if (isset($parametros['pk_usu']) && $parametros['pk_usu'] != '') {
            $idUsuario = $parametros['pk_usu'];
        }

        //Processamento de todas as imagens da categoria
        $imagens = array('im_usu'); //adicionar nomes dos campos aqui

        foreach ($imagens as $imagem) {
            $reset = $imagem . '_reset';
            if (array_key_exists($imagem, $_FILES) && $_FILES[$imagem]['error'] === UPLOAD_ERR_OK) {
                $parametros[$imagem] = uploadImagem($idUsuario, NULL, $modelo->getTabela(), NULL, $imagem, $_FILES[$imagem]);
            } else if (isset($parametros[$reset]) && $parametros[$reset] == true) {
                deleteImagem($idUsuario, NULL, $modelo->getTabela(), NULL, $imagem);
                $parametros[$imagem] = "0";
            }
            unset($parametros[$reset]);
        }
        
        $res = $modelo->salvar($parametros);
        if ($res !== true) {	    
	    if($res=='nm'){
                sessao()->setChave('msg', 'O campo "Nome" é obrigatório');
		redirecionar("?categoria=login&acao=editar");
	    }else if($res=='mail'){
                sessao()->setChave('msg', 'O campo "E-mail" é obrigatório');
		redirecionar("?categoria=login&acao=editar");
	    }else {
                sessao()->setChave('msg', 'Erro ao salvar o usuario');
		redirecionar("?categoria=login&acao=editar");
	    }
        }else{
	    if(isset($parametros['pk_usu'])){
                $userData = sessao()->getChave('user_data');

                $userData['id'] = $modelo->pk_usu();
                $userData['nome'] = $modelo->nm_usu();
                $userData['sobrenome'] = $modelo->snm_usu();
                $userData['email'] = $modelo->mail_usu();
                $userData['apelido'] = $modelo->apdo_usu();
                if ($modelo->im_usu() != '') {
                    $userData['imagem'] = $modelo->im_usu();
                }
               
                $this->setUserData($userData);
                
                sessao()->setChave('msg', 'Usuario editado com sucesso');
		redirecionar("?categoria=login&acao=editar");
	    }
	}	
	
    }

    public function verificar($parametros) {

        $modelo = new ModeloLogin();

        $res = $modelo->verificar($parametros);

        if ($res == true) { //se a consulta no banco de dados for verdadeira (se o registro constar no bd), ele "escreve" na resposta do ajax "email ja existe"
            echo "email ja existe";
        } else {
            die;
        } //se o registro não constar no banco de dados ele "retorna nada" para para o ajax 
    }

    public function editar($parametros) {
        
	$modelo = new ModeloLogin();	
	$dados = $modelo->getDadosLogin();
	
	$this->setTituloPagina("Editar perfil");
	if(isset($parametros['msg'])){
	    $this->setParametros($parametros);
	}
	$this->setResultados($dados[0]);
	$this->setVisao('editar');
    }

    public function excluir($parametros) {
        
    }

    public function listar($parametros) {
        
    }

    public function cadastrar($parametros) {
        
    }

}
