<?php

/**
 * Controlador base de todas as categorias do sistema, TODOS os controladores deverão se estender a esse.
 *
 * @author Yan P. Gabriel
 */

class Controlador {
    
    private $categoria;
    private $controlador;
    private $resultados;
    private $parametros;
    private $visao;
    private $visaoUnica;
    private $sessao;
    private $dicas;
    private $userData;
    private $historiaData;


    public function __construct() {
        //Em Breve chamar sessão aqui
        $this->sessao = new Sessao();
	$this->resultados = array();
        $this->dicas = "As dicas ficarão rodando aqui!";
    }
    
    public function exe($categoria, $acao, $parametros) {
        
        if(OBRIGAR_LOGIN===TRUE){            
            $acoesPermitidas = ['logar','check','registrar','salvar'];
            if(($categoria!="login") || (!in_array($acao, $acoesPermitidas))){
		$login = new Login();
		$login->check();              
            }
        }
	
        $this->controlador = $this->controladorCategoria($categoria);
        $this->resultados = $this->executeAcao($acao,$parametros);
                
        $controlador = $this->controlador;
        $ud = sessao()->getChave('user_data');
	if($ud!=null){
	    $controlador->userData = $ud;
	}
	if($this->resultados!=null){
	    $controlador->resultados = $this->resultados;
	}
        $file_base = PATH_VISOES_PUBLICAS.VISAO_BASE;
        $file_nf = VISAO_404;
        $file_dir = $this->controlador->getVisao();  
	
	if($this->controlador->visaoUnica==true){
	    if(file_exists($file_dir) || $file_dir=="none"){
		require_once $file_dir;
	    }else{
		require_once $file_nf;
		$this->sessao->setChave('MSG_404', "Visão unica não encontrada!");
	    }
	}else if(file_exists($file_base)){
	    if(file_exists($file_dir) || $file_dir=="none"){
		require_once $file_base;
	    }else{
		$file_dir = $file_nf;
		$this->sessao->setChave('MSG_404', "Visão não encontrada!");
		require_once $file_base;
	    }
	} else{
	    $file_dir = $file_nf;
	    $this->sessao->setChave('MSG_404', "A visão dessa categoria não encontrada!");
	    require_once $file_base;
        }
    }
    
    /*
     * Seta arquivo de visualização a ser apresentado ao usuario
     * 
     * @var $arquivoPHP Nome do arquivo com ou ser o ".php"
     */
    public function setVisao($arquivoPHP, $visaoUnica=false) {
        if((strpos($arquivoPHP, '.php') !== FALSE)){
            $this->visao = $arquivoPHP;
        }else{
            $this->visao = $arquivoPHP.'.php';
        }
	$this->visaoUnica = $visaoUnica;
    }
    
    /*
     * Retorna o arquivo de visão (Somente usado no controlador principal)
     */
    public function getVisao() {
        if($this->visao=="none.php" or !isset($this->visao)){
            return "none";
        }
        return PATH_CAT.$this->categoria.'/visoes/'.$this->visao;
    }
    
    /*
     * Seta os Parametros
     * 
     * @var $parametros Manda os parametros para serem salvos
     */
    public function setParametros(array $parametros) {
        $this->parametros = $parametros;  
    }
    /*
     * Resgata os Parametros
     * 
     * @return array()
     */
    public function getParametros(){
        return (object)$this->parametros;  
    }
    /*
     * Seta os Resultados de querys por exemplo
     * 
     * @var $resultados Manda uma array para ser salva
     */
    public function setResultados(array $resultados) {
        $this->resultados = $resultados;  
    }
    /*
     * Resgata os Resultados
     * 
     * @return array()
     */
    public function getResultados(){
        return (object)$this->resultados;  
    }
    
    /*
     * Seta a categoria no controlador geral
     * 
     * @var $categoria nome da categoria sendo usada
     */
    public function setCategoria($categoria) {
        $this->categoria = $categoria;  
    }
    public function getCategoria() {
        return $this->categoria;  
    }
    
    /*
     * Pegar a sessao para trabalhar internamente
     * 
     * @return array Sessão a ser tratada
     */
    public function getSessao() {
        return $this->sessao->getSessao();
    }
    
    public function setDicas($dicas = "Dicas não foram setadas!"){
	$this->dicas = $dicas;
    }
    
    public function getDicas(){
	return $this->controlador->dicas;
    }
    
    private function controladorCategoria($cat){
        $tempControlador = "Controlador".ucfirst(strtolower($cat));
	try{
	    class_exists($tempControlador);
	} catch (Exception $e){
	    die('arroz');
	    echo $e->getMessage();
	}
        if(!class_exists($tempControlador)){
	    notfount('Categoria "'.$cat.'" não encontrada no sistema!');
            //die('Categoria "'.$cat.'" não encontrada no sistema!');
        }
	$controlador = new $tempControlador($cat);
	if(!($controlador instanceof InterfaceControlador)) {
	    notfount('<span style="font-size: 50px !important;">Categoria "'.$cat.'" não implementa a "InterfaceControlador"!</span>');
	}
        return $controlador;
    }
    
    private function executeAcao($acao, $parametros=[]){
        $res = [];
        if(!method_exists($this->controlador, $acao)){
	    notfount('Ação "'.$acao.'" não encontrada no sistema!');
            //die('Ação "'.$acao.'" não encontrada no sistema!');
        }else{
            $res = $this->controlador->$acao($parametros);
        }
        return $res;
    }

}

