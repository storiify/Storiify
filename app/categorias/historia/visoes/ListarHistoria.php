<?php
$categoria = "historia";
$parametros = $controlador->getParametros();
$modelos = (array) $parametros;
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Histórias</h1>
    </div>
</div>

<div class="conteudo">
    <br><br><br><br><br>
    <?php
    foreach ($modelos as $modelo) {
        echo
        "<div class='entidade-card'>"
        . "    <div class='entidade-cabecalho'>"
        . "        <a href='?categoria=$categoria&acao=editar&parametros=$modelo->pk_hist' class='entidade-nome'>" . $modelo->tit_hist." ". truncar($modelo->stit_hist, 40) . "</a>"
        . "        <div class='entidade-controle pull-right'>"
        . "            <a href='?categoria=$categoria&acao=deletar&parametros=$modelo->pk_hist' class='btn btn-azul deletar-entidade'>"
        . "                <i class='fa fa-times'></i>"
        . "            </a>"
        . "        </div>"
        . "    </div>"
        . "    <div class='entidade-corpo'>"
        . "        <img class='entidade-img col-md-3' src='../../../../imagens/Zelda_Avatar.png' alt='Imagem Mundo'>"
        . "        <div class='entidade-dados col-md-9 pull-right'>"
        . "            <table class='table'>"
        . "                <tbody>"
        . "                    <tr>"
        . "                        <th scope='row'>Autor</th>"
        . "                        <td colspan='3'>" . truncar($modelo->aur_hist, 150) . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Público Alvo</th>"
        . "                        <td colspan='3'>" . truncar($modelo->pbco_alvo, 150) . "</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Sinopse</th>"
        . "                        <td colspan='3'>" . truncar($modelo->snp_hist, 500) . "</td>"
        . "                    </tr>"
        . "                </tbody>"
        . "            </table>"
        . "        </div>"
        . "    </div>"
        . "</div>";
    }
    ?>
</div>