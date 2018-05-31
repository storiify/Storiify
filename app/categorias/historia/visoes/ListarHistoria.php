<?php
$resultados = $controlador->getResultados();
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas(); ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?php echo nomeFormal($categoria, "plural") ?></h1>
    </div>    
</div>

<div class="conteudo" style="margin-top: 100px;">

    <!--BOTÃO DE CRIAR NOVA INSTÂNCIA-->
    <div class='pos-cabecalho mx-auto'>
        <a href='?categoria=<?php echo $categoria ?>&acao=cadastrar' 
           title='Clique para criar uma nova <?php echo nomeFormal($categoria) ?>'
           class='btn btn-azul criar-nova-instancia'>
            <i class="fa fa-plus"></i>
            &nbsp&nbspCriar nova <?php echo nomeFormal($categoria) ?>
        </a>
    </div>

    <?php
    foreach ($resultados as $historia) {
        $modelo = (object) $historia;
        $imagemPrincipal = (isset($modelo->im_hist)) ? $modelo->im_hist : const_Indefinida_IM;
        $nome = $modelo->tit_hist . ($modelo->stit_hist != '' ? ' - ' . $modelo->stit_hist : '');
        $dataInLocal = $modelo->dt_alt;

        echo
        "<div title='Clique para editar $nome'"
        . "class='instancia-card mx-auto row clicavel' data-id='$modelo->pk_hist' data-nome='$nome'>"
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
        . "                        <td>" . $modelo->aur_hist . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Publico Alvo</th>"
        . "                        <td>" . truncar($modelo->pbco_alvo, 600) . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Sinopse</th>"
        . "                        <td>" . truncar($modelo->snp_hist, 600) . "</td>"
        . "                    </tr>"
        . "                </table>"
        . "            </div>"
        . "            <div class='instancia-ultima-alteracao hidden-xl-down'>"
        . "                <span>Última edição: $dataInLocal</span>"
        . "            </div>"
        . "        </div>"
        . "    </div>"
        . "    <a href='?categoria=$categoria&acao=editar&id=$modelo->pk_hist'></a>"
        . "    <div class='instancia-controle col-md-1' style='padding-left: 0px;'>"
        . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
        . "            <i class='fa fa-times'></i>"
        . "        </button>"
        . "        <a href='?categoria=$categoria&acao=excluir&parametros=$modelo->pk_hist' class='deletar-instancia-escondido'></a>"
        . "        <button class='btn btn-azul btn-minimizar-instancia' title='Clique para minimizar $nome'>"
        . "            <i class='fa fa-minus'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' "
        . "title='" . ($nome == "" ? " Clique para gerar PDF" : "Clique para gerar PDF de " . $nome) . " '>"
        . "            <i class='fa fa-file-pdf-o'></i>"
        . "        </button>"
        . "        <!--button class='btn btn-azul btn-pdf-instancia' title='Em breve' disabled>"
        . "            <i class='fa fa-warning'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' title='Em breve' disabled>"
        . "            <i class='fa fa-warning'></i>"
        . "        </button>"
        . "        <button class='btn btn-azul btn-pdf-instancia' title='Em breve' disabled>"
        . "            <i class='fa fa-warning'></i>"
        . "        </button-->"
        . "    </div>"
        . "</div>";
    }

    if (!isset($modelo)) {
        echo"<div align='center' class='sem-instancia' style='margin-bottom: 0.5%'>"
        . "	<div align='left' style='padding-left: 0.5%'>"
        . "	    <span>" . sprintf(const_Indefinida_Msg, nomeFormal($categoria, "plural")) . "</span>"
        . "	</div>"
        . "     <img src='" . const_Indefinida . "' alt='' style='max-width: 99%;'/>"
        . "</div>";
    }
    ?>
</div>
