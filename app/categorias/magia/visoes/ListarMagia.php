<?php
$resultados = $controlador->getResultados();
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1><?= ModeloMagia::$nomePlural ?></h1>
    </div>    
</div>

<div class="conteudo">
    <!--BOTÃO DE CRIAR NOVA INSTÂNCIA-->
    <div class='pos-cabecalho mx-auto'>
        <a href='?categoria=<?= $categoria ?>&acao=cadastrar' 
           title='Clique para criar uma nova <?= ModeloMagia::$nomeSingular ?>'
           class='btn btn-azul criar-nova-instancia'>
            <i class="fa fa-plus"></i>
            &nbsp&nbspCriar nova <?= ModeloMagia::$nomeSingular ?>
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
        foreach ($resultados as $modeloArray) {
            $magia = new ModeloMagia($modeloArray);
            $nome = ($magia->nm_magi());

            $camposListar = "";
            foreach ($magia->getAtributosListar() as $nomeCampo => $valorCampo) {
                $camposListar .= "<tr>"
                        . "         <th scope='row'>$nomeCampo</th>"
                        . "         <td>$valorCampo</td>"
                        . "       </tr>";
            }

            echo
            "<div title='Clique para editar $nome'"
            . "class='instancia-card mx-auto row clicavel' data-id='{$magia->pk_magi()}' data-nome='$nome'>"
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
            . "    <a href='?categoria=$categoria&acao=editar&id={$magia->pk_magi()}'></a>"
            . "    <div class='instancia-controle col-md-1' style='padding-left: 0px;'>"
            . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
            . "            <i class='fa fa-times'></i>"
            . "        </button>"
            . "        <a href='?categoria=$categoria&acao=excluir&id={$magia->pk_magi()}' class='deletar-instancia-escondido'></a>"
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
    if (!isset($magia)) {
        echo"<div align='center' class='sem-instancia' style='margin-bottom: 0.5%'>"
        . "	<div align='left' style='padding-left: 0.5%'>"
        . "	    <span>" . "Seus " . ModeloMagia::$nomePlural . " aparecerão aqui" . "</span>"
        . "	</div>"
        . "     <img src='" . const_Indefinida . "' alt='' style='max-width: 99%;'/>"
        . "</div>";
    }
    ?>
</div>
