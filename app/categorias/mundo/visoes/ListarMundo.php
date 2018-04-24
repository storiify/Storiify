<?php
$parametros = $controlador->getParametros();
$modelos = (array) $parametros;
?>

<div style="margin-top:60px;">
    <div class="marquee"><?= $this->getDicas() ?></div>
</div>


<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Mundos</h1>
    </div>
</div>

<div class="conteudo">
    <br><br><br><br><br>
    <?php
    foreach ($modelos as $modelo) {
        echo
        "<div class='entidade-card' data-id='$modelo->pk_mnd'>"
        . "    <div class='entidade-cabecalho'>"
        . "        <a href='?categoria=mundo&acao=editar&parametros=$modelo->pk_mnd' class='entidade-nome'>".truncar($modelo->nm_ppl, 100)."</a>"
        . "        <div class='entidade-controle pull-right'>"
        . "            <a href='?categoria=mundo&acao=deletar&parametros=$modelo->pk_mnd' class='btn btn-azul deletar-entidade'>"
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
        . "                        <th scope='row'>Visão Geral</th>"
        . "                        <td colspan='3'>".truncar($modelo->vis_grl, 150)."</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Ética e Valores</th>"
        . "                        <td colspan='3'>".truncar($modelo->etca_vls, 150)."</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Descrição da Economia</th>"
        . "                        <td colspan='3'>".truncar($modelo->dcr_ecn, 150)."</td>"
        . "                    </tr>"
        . "                    <tr>"
        . "                        <th scope='row'>Satisfação da População</th>"
        . "                        <td>$modelo->satc_pop</td>"
        . "                        <th scope='row'>Nível Tecnológico</th>"
        . "                        <td>$modelo->nvl_tecn</td>"
        . "                    </tr>"
        . "                </tbody>"
        . "            </table>"
        . "        </div>"
        . "    </div>"
        . "</div>";
    }
    ?>
</div>