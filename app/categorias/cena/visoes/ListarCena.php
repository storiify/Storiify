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

    <!--CASO NÃO HAJA INSTÂNCIAS-->
    <?php
    if (empty($resultados)) {
        echo"<div align='center' class='sem-instancia' style='margin-bottom: 0.5%'>"
	. "	<div align='left' style='padding-left: 0.5%'>"
        . "	    <span>".sprintf(const_Indefinida_Msg, nomeFormal($categoria, "plural"))."</span>"
	. "	</div>"
        . "     <img src='" . const_Indefinida . "' alt='' style='max-width: 99%;'/>"
        . "</div>";
    }
    ?>

    <?php
    if(isset($resultados)){
    foreach ($resultados as $cena) {
	$modelo = (object) $cena;
        $imagemPrincipal = (isset($modelo->im_cena)) ? $modelo->im_cena : const_Indefinida_IM;
        $nome = $modelo->tit_cena.($modelo->tit_cena!=''?' - '.$modelo->tit_cena:'');
        $dataInLocal = $modelo->dt_alt;

        echo
        "<div title='Clique para editar $nome'"
        . "class='instancia-card mx-auto row clicavel' data-id='$modelo->pk_cena' data-nome='$nome'>"
        . "    <div class='instancia-corpo col-md-11 row'>"
        . "        <div class='instancia-imagem' style='background-image:url($imagemPrincipal)'></div>"
        . "        <div class='instancia-conteudo col'>"
        . "            <div class='instancia-cabecalho'>"
        . "                <span>$nome</span>"
        . "            </div>"
        . "            <div class='instancia-detalhes'>"
        . "                <table class='table'>"
        . "                    <tr>"
        . "                        <th scope='row'>Título:</th>"
        . "                        <td>" . $modelo->tit_cena . "</td>"
        . "                    </tr>"
		. "                    <tr>"
        . "                        <th scope='row'>Público Alvo:</th>"
        . "                        <td>" . $modelo->vsi_cena . "</td>"
        . "                    </tr>"
		. "                    <tr>"
        . "                        <th scope='row'>Resumo:</th>"
        . "                        <td>" . $modelo->rsm_cena . "</td>"
        . "                    </tr>"
		. "                    <tr>"
        . "                </table>"
        . "            </div>"
        . "            <div class='instancia-ultima-alteracao hidden-xl-down'>"
        . "                <span>Última edição: $dataInLocal</span>"
        . "            </div>"
        . "        </div>"
        . "    </div>"
        . "    <a href='?categoria=$categoria&acao=editar&id=$modelo->pk_cena'></a>"
        . "    <div class='instancia-controle col-md-1' style='padding-left: 0px;'>"
        . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
        . "            <i class='fa fa-times'></i>"
        . "        </button>"
        . "        <a href='?categoria=$categoria&acao=excluir&parametros=$modelo->pk_cena' class='deletar-instancia-escondido'></a>"
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
    }
    ?>
</div>