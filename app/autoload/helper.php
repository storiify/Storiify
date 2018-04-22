<?php

/*
 * Contém funções para facilitar a vida (Usável em qualquer parte do código!)
 * 
 */

function proccessRequest() {
    $arrayTratado = ['categoria' => 'login', 'acao' => 'logar', 'parametros' => []];

    foreach ($_GET as $key => $val) {
        switch ($key) {
            case 'categoria':
                $arrayTratado['categoria'] = $val;
                break;
            case 'acao':
                $arrayTratado['acao'] = $val;
                break;
            default:
                $arrayTratado['parametros'][$key] = $val;
                break;
        }
    }
    return (object) $arrayTratado;
}

function redirecionar($url) {
    Redirecionar::url($url);
}

function sessao() {
    $session = new Sessao();
    return $session;
}

function notfount($msg = null) {
    $sessao = sessao();
    $sessao->setSessao('MSG_404', $msg);
    require_once PATH_VISOES_PUBLICAS . VISAO_404;
    die;
}

function truncar($stringEntrada, $tamanhoMaximo, $dots = "...") {
    return (strlen($stringEntrada) > $tamanhoMaximo) ? substr($stringEntrada, 0, $tamanhoMaximo - strlen($dots)) . $dots : $stringEntrada;
}

function uploadImagem($idUsuario, $nmCategoria, $idInstancia, $file) {
    $nomeSaida = "im_ppl";
    $diretorioAlvo = "usuarios/$idUsuario/$nmCategoria/$idInstancia/";

//Check if the directory already exists.
    if (!is_dir($diretorioAlvo)) {
        //Directory does not exist, so lets create it.
        mkdir($diretorioAlvo, 0755, true);
    }

    //$target_file = $diretorioAlvo . basename($file["name"]);
    $imExtensao = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
    $target_file = $diretorioAlvo . $nomeSaida . "." . $imExtensao;
    $uploadOk = 1;

// Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if ($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
// Check file size
    if ($file["size"] > 5000000) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    if ($imExtensao != "png") {
        //echo "Sorry, only PNG files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo "Sorry, your file was not uploaded.";
        return NULL;
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            //echo "The file " . basename($file["name"]) . " has been uploaded.";
            return $target_file;
        } else {
            //echo "Sorry, there was an error uploading your file.";
            return NULL;
        }
    }
}

function deleteImagem($idUsuario, $nmCategoria, $idInstancia) {

    $diretorioAlvo = "usuarios/$idUsuario/$nmCategoria/$idInstancia/";
    $arquivoAlvo = $diretorioAlvo . "im_ppl.png";

    if (file_exists($arquivoAlvo)) {
        unlink($arquivoAlvo);
        rmdir($diretorioAlvo);
    }
}

function parseCheckbox($valor) {
    $opcoes = [1, 2, 4];
    $opcoesRetorno = [];

    while ($valor != 0) {
        if ($valor >= max($opcoes)) {
            $opcoesRetorno[] = max($opcoes);
            $valor -= max($opcoes);
        }
        array_pop($opcoes);
    }
    return $opcoesRetorno;
}
