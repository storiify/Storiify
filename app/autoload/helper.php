<?php

/*
 * Contém funções para facilitar a vida (Usável em qualquer parte do código!)
 * 
 */

function proccessRequest() {
    $arrayTratado = ['categoria' => 'historia', 'acao' => 'listar', 'parametros' => []];

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
    foreach ($_POST as $key => $val) {
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
    $sessao->setChave('MSG_404', $msg);
    require_once PATH_VISOES_PUBLICAS . VISAO_404;
    die;
}

function truncar($stringEntrada, $tamanhoMaximo, $dots = "...") {
    return (strlen($stringEntrada) > $tamanhoMaximo) ? substr($stringEntrada, 0, $tamanhoMaximo - strlen($dots)) . $dots : $stringEntrada;
}

function uploadImagem($idUsuario, $idHistoria, $nmCategoria, $idInstancia, $nomeSaida, $file) {
    if ($file["size"] == 0) {
        return null;
    }

    deleteImagem($idUsuario, $idHistoria, $nmCategoria, $idInstancia, $nomeSaida); //deleta a imagem antiga antes de fazer o upload

    $diretorioAlvo = build_dir_imagem($idUsuario, $idHistoria, $nmCategoria, $idInstancia);

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

    /* Mudar PHP.ini para
      ; Maximum allowed size for uploaded files.
      ; http://php.net/upload-max-filesize
      upload_max_filesize=5M
     * post_max_size=15M
     * memory_limit = 128M
     */

    // Check file size
    if ($file["size"] > 5000000) {
        //echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if ($imExtensao != "png" && $imExtensao != "jpg" && $imExtensao != "jpeg") {
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

function deleteImagem($idUsuario, $idHistoria, $nmCategoria, $idInstancia, $nomeSaida) {

    $diretorioAlvo = build_dir_imagem($idUsuario, $idHistoria, $nmCategoria, $idInstancia);
    $arquivoAlvo = $diretorioAlvo . $nomeSaida . '.*';

    $files = glob($arquivoAlvo);

    foreach ($files as $file) {
        if (file_exists($file)) {
            unlink($file);
        }
    }
}

function build_dir_imagem($idUsuario, $idHistoria, $nmCategoria, $idInstancia) {
    $dir = "usuarios/$idUsuario/";

    if ($nmCategoria == ModeloLogin::tx_tabela) {
        $dir .= "$nmCategoria/";
    } else {
        $dir .= "$idHistoria/$nmCategoria/";

        //if ($nmCategoria != BdContextHistoria::tx_tabela) {
        if ($nmCategoria != 'tb_historia') {
            $dir .= "$idInstancia/";
        }
    }
    return $dir;
}

/* Função dir_is_empty não utilizada no momento, será usada para limpar os diretórios futuramente */

function dir_is_empty($dir) {
    $handle = opendir($dir);
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            return FALSE;
        }
    }
    return TRUE;
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

function nomeFormal($nome, $plural = "singular") {
    if ($plural == "plural") {
        return ($nome == "historia" ? "Histórias" :
                ($nome == "mundo" ? "Mundos" :
                ($nome == "localizacao" ? "Localizações" :
                ($nome == "cena" ? "Cenas" :
                ($nome == "personagem" ? "Personagens" :
                ($nome == "raca" ? "Raças" :
                ($nome == "classe" ? "Classes" :
                ($nome == "profisao" ? "Profissões" :
                ($nome == "habilidade_fisica" ? "Habilidades Físicas" :
                ($nome == "habilidade_magica" ? "Habilidades Mágicas" :
                ($nome == "lembranca" ? "Lembranças" :
                ($nome == "objeto" ? "Objetos" :
                "Categoria não encontrada"))))))))))));
    }
    return ($nome == "historia" ? "História" :
            ($nome == "mundo" ? "Mundo" :
            ($nome == "localizacao" ? "Localização" :
            ($nome == "cena" ? "Cena" :
            ($nome == "personagem" ? "Personagem" :
            ($nome == "raca" ? "Raça" :
            ($nome == "classe" ? "Classe" :
            ($nome == "profisao" ? "Profissão" :
            ($nome == "habilidade_fisica" ? "Habilidade Física" :
            ($nome == "habilidade_magica" ? "Habilidade Mágica" :
            ($nome == "lembranca" ? "Lembrança" :
            ($nome == "objeto" ? "Objeto" :
            "Categoria não encontrada"))))))))))));
}
