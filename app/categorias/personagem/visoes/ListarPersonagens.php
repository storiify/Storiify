<?php
$resultados = $controlador->getResultados();
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas(); ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Personagens</h1>
    </div>
</div>

<div class="conteudo">
    <div class='pos-cabecalho mx-auto'>
        <a href='?categoria=<?php echo $categoria ?>&acao=cadastrar' 
           title='Clique para criar uma nova <?php echo nomeFormal($categoria) ?>'
           class='btn btn-azul criar-nova-instancia'>
            <i class="fa fa-plus"></i>
            &nbsp&nbspCriar nova <?php echo nomeFormal($categoria) ?>
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
        foreach ($resultados as $personagemArray) {
            $personagem = new ModeloPersonagem($personagemArray);
            $nome = $personagem->nm_psna();
            $imagemPrincipal = ($personagem->im_psna() != "" ? $personagem->im_psna() : const_Indefinida_IM);

            $camposListar = "";
            foreach ($personagem->getAtributosListar() as $nomeCampo => $valorCampo) {
                $camposListar .= "<tr>"
                        . "         <th scope='row'>$nomeCampo</th>"
                        . "         <td>$valorCampo</td>"
                        . "       </tr>";
            }

            echo
            "<div title='Clique para editar $nome'"
            . "class='instancia-card mx-auto row' data-id='{$personagem->pk_psna()}' data-nome='$nome'>"
            . "    <div class='instancia-corpo col-md-11 row'>"
            . "        <div class='instancia-imagem' style='background-image:url($imagemPrincipal)'></div>"
            . "        <div class='instancia-conteudo col'>"
            . "            <div class='instancia-cabecalho'>"
            . "                <span>$nome</span>"
            . "            </div>"
            . "            <div class='instancia-detalhes'>"
            . "                <table class='table'>"
            . "                     $camposListar"
            . "                </table>"
            . "            </div>"
            . "            <div class='instancia-ultima-alteracao hidden-xl-down'>"
            . "                <span>Última edição: {$personagem->dt_alt()} </span>"
            . "            </div>"
            . "        </div>"
            . "    </div>"
            . "    <a href='?categoria=$categoria&acao=editar&id={$personagem->pk_psna()}'></a>"
            . "    <div class='instancia-controle col-md-1' style='padding-left: 0px;'>"
            . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
            . "            <i class='fa fa-times'></i>"
            . "        </button>"
            . "        <a href='?categoria=$categoria&acao=excluir&id={$personagem->pk_psna()}' class='deletar-instancia-escondido'></a>"
            . "        <button class='btn btn-azul btn-minimizar-instancia' title='Clique para minimizar'>"
            . "            <i class='fa fa-minus'></i>"
            . "        </button>"
            . "        <!--button class='btn btn-azul btn-pdf-instancia' "
            . "title='" . ($nome == "" ? " Clique para gerar PDF" : "Clique para gerar PDF de " . $nome) . " '>"
            . "            <i class='fa fa-file-pdf-o'></i>"
            . "        </button-->"
            . "    </div>"
            . "</div>";
        }
    }
    if (empty($personagem)) {
        echo"<div align='center' class='sem-instancia' style='margin-bottom: 0.5%'>"
        . "	<div align='left' style='padding-left: 0.5%'>"
        . "	    <span>" . sprintf(const_Indefinida_Msg, nomeFormal($categoria, "plural")) . "</span>"
        . "	</div>"
        . "     <img src='" . const_Indefinida . "' alt='' style='max-width: 99%;'/>"
        . "</div>";
    }
    ?>
</div>
