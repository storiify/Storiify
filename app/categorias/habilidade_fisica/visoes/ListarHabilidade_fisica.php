<?php
$resultados = $controlador->getResultados();
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?= nomeFormal($categoria, "plural") ?></h1>
    </div>    
</div>

<div class="conteudo">
    <!--BOTÃO DE CRIAR NOVA INSTÂNCIA-->
    <div class='pos-cabecalho mx-auto'>
        <a href='?categoria=<?= $categoria ?>&acao=cadastrar' 
           title='Clique para criar uma nova <?= ModeloHabilidade_fisica::$nomeSingular ?>'
           class='btn btn-azul criar-nova-instancia'>
            <i class="fa fa-plus"></i>
            &nbsp&nbspCriar nova <?= ModeloHabilidade_fisica::$nomeSingular ?>
        </a>
        <div class="pull-right minimizar-todos" title="Clique para minimizar todas as instâncias">
            <span>Todos</span>
            <a class="btn btn-azul">
                <i class="fa fa-minus"></i>
            </a>
        </div>
    </div>

    <?php
    if (isset($resultados)) {
        foreach ($resultados as $fisicaArray) {
            $fisica = new ModeloHabilidade_fisica($fisicaArray);
            $nome = ($fisica->nm_hbld_fsca());

            $camposListar = "";
            foreach ($fisica->getAtributosListar() as $nomeCampo => $valorCampo) {
                $camposListar .= "<tr>"
                        . "         <th scope='row'>$nomeCampo</th>"
                        . "         <td>$valorCampo</td>"
                        . "       </tr>";
            }

            echo
            "<div title='Clique para editar $nome'"
            . "class='instancia-card mx-auto row clicavel' data-id='{$fisica->pk_hbld_fsca()}' data-nome='$nome'>"
            . "    <div class='instancia-corpo col-md-11 row'>"
            . "        <div class='instancia-conteudo col'>"
            . "            <div class='instancia-cabecalho'>"
            . "                <span>$nome</span>"
            . "            </div>"
            . "            <div class='instancia-detalhes'>"
            . "                <table class='table'>"
            . "                     $camposListar"
            . "                </table>"
            . "            </div>"
            . "        </div>"
            . "    </div>"
            . "    <a href='?categoria=$categoria&acao=editar&id={$fisica->pk_hbld_fsca()}'></a>"
            . "    <div class='instancia-controle col-md-1' style='padding-left: 0px;'>"
            . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
            . "            <i class='fa fa-times'></i>"
            . "        </button>"
            . "        <a href='?categoria=$categoria&acao=excluir&id={$fisica->pk_hbld_fsca()}' class='deletar-instancia-escondido'></a>"
            . "        <button class='btn btn-azul btn-minimizar-instancia' title='Clique para minimizar'>"
            . "            <i class='fa fa-minus'></i>"
            . "        </button>"
            . "        <!--button class='btn btn-azul btn-pdf-instancia' "
            . "            title='" . ($nome == "" ? " Clique para gerar PDF" : "Clique para gerar PDF de " . $nome) . " '>"
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
            . "        </button-->"
            . "    </div>"
            . "</div>";
        }
    }
    if (!isset($fisica)) {
        echo"<div align='center' class='sem-instancia' style='margin-bottom: 0.5%'>"
        . "	<div align='left' style='padding-left: 0.5%'>"
        . "	    <span>" . sprintf(const_Indefinida_Msg, ModeloHabilidade_fisica::$nomePlural) . "</span>"
        . "	</div>"
        . "     <img src='" . const_Indefinida . "' alt='' style='max-width: 99%;'/>"
        . "</div>";
    }
    ?>
</div>
