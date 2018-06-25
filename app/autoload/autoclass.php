<?php

/*
 * Autoload - Da um request assim que a gente chama uma class. 
 * Ex:
 *    $test = new Test();
 * 
 * Ou seja, ele importa automaticamente todas as classes que você for usar em sua CATEGORIA
 * 
 * NÃO EDITAR A MENOS QUE SEJA COMBINADO ANTES!
 */
spl_autoload_register("autoload");
function autoload($class) {
    
    $pathfile = PATH_CLASS.$class.'.php';
    $pathc = PATH_CAT;
    
    if(!file_exists($pathfile)){
        
        // Checa se existe nome da class
        if ($class) {
            //Separa o nome da class por letras maiusculas
            $auxClass = preg_split('/(?=[A-Z])/', $class);
            if (is_array($auxClass)) {
                //Percorre todos os valores retornados e remove os em branco
                foreach ($auxClass as $key => $val) {
                    if (!$val) {
                        unset($auxClass[$key]);
                    }
                }
                //verifica se esta setado o nome da CATEGORIA
                if (isset($auxClass[2])) {
                    //checa se o diretorio das categorias é valido
                    if (is_dir($pathc . strtolower($auxClass[2]))) {
                        $verificar = $pathc . strtolower($auxClass[2]) . "/" . $class . ".php";
                        if (file_exists($verificar)) {
                            $pathfile = $verificar;
                            //$tipopesquisacompleta = false;
                        }
                    }
                }
            }
        }
    }
    
    if(file_exists($pathfile)){
        require_once $pathfile;
    }
    
}

