<?php
$categoria = "historia";
$parametros = $controlador->getParametros();
$modelos = (array)$parametros;
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?php echo nomeFormal($categoria, "plural")?></h1>
    </div>
</div>

<div class="conteudo">
    <br><br><br><br><br>

    <div class='pos-cabecalho mx-auto'>
        <a href='?categoria=<?php$categoria?>&acao=criar' 
           title='Clique para criar uma nova <?php echo nomeFormal($categoria) ?>'
           class='btn btn-azul'>
            <i class="fa fa-plus"></i>
            &nbsp&nbspCriar nova <?php echo nomeFormal($categoria) ?>
        </a>
    </div>

    <hr>

    <?php
    foreach ($modelos as $modelo) {
        $imagemPrincipal = (isset($modelo->im_ppl)) ? $modelo->im_ppl : Constantes::$imIndefinida;
        $nome = Historia::GerarNome($modelo);       
        $dataInLocal = $modelo->dt_alt;

        echo
        "<div title='Clique para editar $nome'"
        . "class='instancia-card mx-auto row' data-id='$modelo->pk_hist' data-nome='$nome'>"
        . "    <div class='instancia-corpo col-md-11 row'>"
        . "        <div class='instancia-imagem' style='background-image:url($imagemPrincipal)'></div>"
        . "        <div class='instancia-conteudo col'>"
        . "            <div class='instancia-cabecalho'>"
        . "                <span>$nome</span>"
        . "            </div>"
        . "            <div class='instancia-detalhes'>"
        . "                <table class='table'>"
        . "                    <tr>"
        . "                        <th scope='row'>Autor</th>"
        . "                        <td>".$modelo->aur_hist."</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Publico Alvo</th>"
        . "                        <td>".truncar($modelo->pbco_alvo,600)."</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Sinopse</th>"
        . "                        <td>".truncar($modelo->snp_hist,600)."</td>"
        . "                    </tr>"
        . "                </table>"
        . "            </div>"
        . "            <div class='instancia-ultima-alteracao hidden-xl-down'>"
        . "                <span>Última edição: $dataInLocal</span>"
        . "            </div>"
        . "        </div>"
        . "    </div>"
        . "    <a href='?categoria=$categoria&acao=editar&parametros=$modelo->pk_hist'></a>"
        . "    <div class='instancia-controle col-md-1'>"
        . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
        . "            <i class='fa fa-times'></i>"
        . "        </button>"
        . "        <a href='?categoria=$categoria&acao=deletar&parametros=$modelo->pk_hist' class='deletar-instancia-escondido'></a>"
        . "        <button class='btn btn-azul btn-minimizar-instancia' title='Clique para minimizar $nome'>"
        . "            <i class='fa fa-minus'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' "
        .            "title='" . ($nome == "" ? " Clique para gerar PDF" : "Clique para gerar PDF de " . $nome) . " '>"
        . "            <i class='fa fa-file-pdf-o'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' title='Em breve' disabled>"
        . "            <i class='fa fa-warning'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' title='Em breve' disabled>"
        . "            <i class='fa fa-warning'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' title='Em breve' disabled>"
        . "            <i class='fa fa-warning'></i>"
        . "        </button>"
        . "    </div>"
        . "</div>";
    }
    ?>
</div>