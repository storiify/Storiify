<?php
$resultados = $controlador->getResultados();
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas();?></div>
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
    </div>
    <?php
    if (empty($resultados)) {
        echo"<div class='sem-instancia'>"
        . "     <span>".sprintf(instanciaIndefinidaMsg, nomeFormal($categoria, "plural"))."</span>"
        . "     <img src='" . instanciaIndefinida . "' alt=''/>"
        . "</div>";
    }
    ?>
    <?php
	if(isset($resultados)){
    foreach ($resultados as $personagem) {
		$modelo = (object) $personagem;
		$nome = $modelo->nm_psna;
		$imagemPrincipal = (isset($modelo->im_psna)) ? $modelo->im_psna : imIndefinida;
        echo
       "<div title='Clique para editar $nome'"
        . "class='instancia-card mx-auto row' data-id='$modelo->pk_psna' data-nome='$nome'>"
        . "    <div class='instancia-corpo col-md-11 row'>"
        . "        <div class='instancia-imagem' style='background-image:url($imagemPrincipal)'></div>"
        . "        <div class='instancia-conteudo col'>"
        . "            <div class='instancia-cabecalho'>"
        . "                <span>$nome</span>"
        . "            </div>"
        . "            <div class='instancia-detalhes'>"
        . "                <table class='table'>"
        . "                    <tr>"
        . "                        <th scope='row'>Nome:</th>"
        . "                        <td>" . $modelo->nm_psna . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Publico Alvo</th>"
        . "                        <td>" . $modelo->dcr_bsca_psna . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Sinopse</th>"
	. "                        <td>" . $modelo->nsc_psna . "</td>"
        . "                    </tr>"
        . "                </table>"
        . "            </div>"
        . "            <div class='instancia-ultima-alteracao hidden-xl-down'>"
        . "                <span>Última edição: $dataInLocal</span>"
        . "            </div>"
        . "        </div>"
        . "    </div>"
        . "    <a href='?categoria=$categoria&acao=editar&parametros=$modelo->pk_psna'></a>"
        . "    <div class='instancia-controle col-md-1' style='padding-left: 0px;'>"
        . "        <button class='btn btn-azul btn-deletar-instancia' title='Clique para deletar $nome'>"
        . "            <i class='fa fa-times'></i>"
        . "        </button>"
        . "        <a href='?categoria=$categoria&acao=excluir&parametros=$modelo->pk_psna' class='deletar-instancia-escondido'></a>"
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
	}
    ?>
</div>