<?php

interface InterfaceControlador {
    //Vi que estavam colocando nomes "fora do padrão" nos controladores e criei essa interface para "forçar" boas praticas
    public function __construct($categoria);
    public function cadastrar($parametros);
    public function listar($parametros);
    public function editar($parametros);
    public function salvar($parametros);
    public function excluir($parametros);
}
