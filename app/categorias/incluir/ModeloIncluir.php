<?php

class ModeloIncluir extends ConexaoBd {
	
	public function listar($parametros) {}
	public function excluir($parametros) {}
	
	public function salvar($parametros) {
    $modeloBase = new ConexaoBd();
	
	$res = false;
	
	$nm = "nm_" . $parametros['tabela']; //variavel auxiliar para o tratamento das colunas. ex de nome: "nm_cls"
	$dcr = "dcr_" . $parametros['tabela']; // || || || ||
	
	$parametros[$nm] = $parametros['col1']; //criando o array que vai passar os nomes das colunas e seus valores 
	$parametros[$dcr] = $parametros['col2']; // ||  ||  ||  ||  ||
	
	$tabela = "tb_" . $parametros['tabela']; //criando variavel auxiliar para o tratamento do nome da tabela. ex: tb_cls
	unset($parametros['tabela'],$parametros['col1'],$parametros['col2']); //destroi os parametros que não devem/podem ser passados para o ModeloBase.
	
	$res = $modeloBase->inserirBase($parametros, $tabela);
	}
}