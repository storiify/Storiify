<style> 
    .hero h2 {
        font-size: 38px;
        font-weight: 50;
        color: #fff;
        letter-spacing: -1px;
        margin: 30px 0 20px 0;
        text-shadow: 2px 2px #000;
    }

    .hero p {
        text-shadow: 2px 2px #000;
        color: #FFF;
    }
    .hero{
        width: 100%;
        height: 100vh;
    }
    body{
	margin: 0;
    }
</style>
<div class="container hero" style="background-color: #485a5a">
    <div class="row">
        <div align="center" class="col-md-12 text-center"><br><br><br>
            <img src="imagens/404.png" class="img-responsive" alt="Responsive image" style="display: inline; width: 90%;">
            <h2>Parece que sua imaginação foi longe demais!</h2>
            <p class="animated fadeInUpDelay"><?= (sessao()->getChave("MSG_404")!=null?sessao()->getChave("MSG_404"):'')?></p>
        </div>
    </div>
</div>
