<?php
$categoria = "cena";
$parametros = $controlador->getParametros();
$modelos = (array) $parametros;
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?php echo nomeFormal($categoria, "plural") ?></h1>
    </div>
</div>

<div class="conteudo">
    
    <!--BOTÃO DE CRIAR NOVA INSTÂNCIA-->
    <div class='pos-cabecalho mx-auto'>
        <a href='?categoria=<?php echo $categoria ?>&acao=criar' 
           title='Clique para criar uma nova <?php echo nomeFormal($categoria) ?>'
           class='btn btn-azul criar-nova-instancia'>
            <i class="fa fa-plus"></i>
            &nbsp&nbspCriar nova <?php echo nomeFormal($categoria) ?>
        </a>
    </div>

    <!--CASO NÃO HAJA INSTÂNCIAS-->
    <?php
    if (empty($modelos)) {
        echo"<div class='sem-instancia'>"
        . "     <span>".sprintf(Constantes::$instanciaIndefinidaMsg, nomeFormal($categoria, "plural"))."</span>"
        . "     <img src='" . Constantes::$instanciaIndefinida . "' alt=''/>"
        . "</div>";
    }
    ?>

    <?php
    foreach ($modelos as $modelo) {
        $imagemPrincipal = (isset($modelo->im_ppl)) ? $modelo->im_ppl : Constantes::$imIndefinida;
        $nome = Cena::GerarNome($modelo);
        $dataInLocal = $modelo->dt_alt;
        echo
        "<div title='Clique para editar $nome'"
        . "class='instancia-card mx-auto row' data-id='$modelo->pk_cena' data-nome='$nome'>"
        . "    <div class='instancia-corpo col-md-11 row'>"
        . "        <div class='instancia-imagem' style='background-image:url($imagemPrincipal)'></div>"
        . "        <div class='instancia-conteudo col'>"
        . "            <div class='instancia-cabecalho'>"
        . "                <span>$nome</span>"
        . "            </div>"
        . "            <div class='instancia-detalhes'>"
        . "                <table class='table'>"
        . "                    <tr>"
        . "                        <th scope='row'>Título da Cena</th>"
        . "                        <td>" . $modelo->tit_cena . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Data da Cena</th>"
        . "                        <td>" . truncar($modelo->dt_cena, 8) . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Descrição da Cena</th>"
        . "                        <td>" . truncar($modelo->dcr_cena, 1000) . "</td>"
        . "                    </tr>"
		. "					   <tr>"
        . "                        <th scope='row'>Desenvolvimento da Cena</th>"
        . "                        <td>" . $modelo->desm_cena . "</td>"
        . "                    </tr>"
        . "                </table>"
        . "            </div>"
        . "            <div class='instancia-ultima-alteracao hidden-xl-down'>"
        . "                <span>Última edição: $dataInLocal</span>"
        . "            </div>"
        . "        </div>"
        . "    </div>"
        . "    <a href='?categoria=$categoria&acao=editar&parametros=$modelo->pk_cena'></a>"
        . "    <div class='instancia-controle col-md-1'>"
        . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
        . "            <i class='fa fa-times'></i>"
        . "        </button>"
        . "        <a href='?categoria=$categoria&acao=deletar&parametros=$modelo->pk_cena' class='deletar-instancia-escondido'></a>"
        . "        <button class='btn btn-azul btn-minimizar-instancia' title='Clique para minimizar $nome'>"
        . "            <i class='fa fa-minus'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' "
        . "title='" . ($nome == "" ? " Clique para gerar PDF" : "Clique para gerar PDF de " . $nome) . " '>"
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