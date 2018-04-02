<!--CORPO DE VERDADE-->
<div class="page-content col-md-12" style="min-height: 100vh;">
    <div class="page-heading mb0">
        <div class="marquee"><?=$this->getDicas()?></div>
        <h1>História</h1>
        <div class="options">
            <div class="btn-toolbar">
                <a href="#" class="btn btn-default"><i class="fa fa-fw fa-cog"></i></a>
            </div>
        </div>
    </div>
    <div class="page-tabs">
        <ul class="nav nav-tabs">
            <li class="dropdown pull-right tabdrop hide">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu"></ul>
            </li>
            <!--ABAS-->
            <li class="active"><a data-toggle="tab" href="#aba1">Geral</a></li>
            <li><a data-toggle="tab" href="#aba2">Inspirações</a></li>
        </ul>
    </div>
    <form action="?categoria=historia&acao=salvar" method="POST">
    <div class="container-fluid">
        <div class="tab-content">
            <!--ABA 1-->
            <div class="tab-pane active form-horizontal row-border" id="aba1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowGeral">			    
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label class="col-sm-2 control-label" for="imgImagem">Imagem</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <img src="imagens/no_photo.png" class="img-circle imgClicavel" data-inputFileId="imgPrincipal" style="display:block;margin: 0 auto; width:100px;" />
					    <input type='file' id="imgPrincipal" name="imagem_capa" style="display:none;" />
					    <a class="imgReset"><i class="fa fa-ban"></i></a>
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Titulo</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <input type="text" name="titulo" class="form-control" id="txtAttObg" placeholder="Digite aqui o titulo da sua História" />
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Subtitulo</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <input type="text" name="subtitulo" class="form-control" id="txtAttObg" placeholder="Digite aqui o subtitulo da sua História" />
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Autor</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <input type="text" name="autor" class="form-control" id="txtAttObg" placeholder="Digite aqui o autor da sua História" />
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Ilustrador</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <input type="text" name="ilustrador" class="form-control" id="txtAttObg" placeholder="Digite aqui o ilustrador da sua História" />
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Publico Alvo</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <textarea name="publico_alvo" id="txtArea" placeholder="Digite aqui o publico alvo da história" title="Campo de texto para descrever o publico alvo da história"></textarea>
					</div>
				    </div>
				</div>
			    </div>			    
			    <div class="form-group">
				<label for="checkbox" class="col-sm-2 control-label">Quem pode visualizar essa instância?</label>
				<div class="col-sm-8">
				    <div class="checkbox-inline">
					<input type="checkbox" id="ckbTodos" />
					<label for="ckbTodos">Todos</label>
				    </div>
				    <div class="checkbox-inline">
					<input type="checkbox" name="visibilidade[]" id="ckbAmigos" class="cBoxClass" />
					<label for="ckbAmigos">Amigos</label>
				    </div>
				    <div class="checkbox-inline">
					<input type="checkbox" name="visibilidade[]" id="ckbEquipes" class="cBoxClass" />
					<label for="ckbEquipes">Equipe</label>
				    </div>
				    <div class="checkbox-inline">
					<input type="checkbox" name="visibilidade[]" id="ckbPublico" class="cBoxClass" />
					<label for="ckbPublico">Público</label>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Sentença</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <textarea name="sentenca" id="txtArea" placeholder="Digite aqui a sentenca da história" title="Campo de texto para descrever o publico alvo da história"></textarea>
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Sinopse</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <textarea name="sinopse" id="txtArea" placeholder="Digite aqui a sinopse da história" title="Campo de texto para descrever o publico alvo da história"></textarea>
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Resumo</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <textarea name="resumo" id="txtArea" placeholder="Digite aqui o resumo da história" title="Campo de texto para descrever o publico alvo da história"></textarea>
					</div>
				    </div>
				</div>
			    </div>
			    
                        </div>
                    </div>
                </div>
            </div>

            <!--ABA 2-->
            <div class="tab-pane form-horizontal row-border" id="aba2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-pane active" id="bordered-rowEnredo">
			    
                            <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label for="txtAttObg" class="col-sm-2 control-label">Inspirações</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <textarea name="insp_nomes" id="txtArea" placeholder="Digite aqui o resumo da história" title="Campo de texto para descrever o publico alvo da história"></textarea>
					</div>
				    </div>
				</div>
			    </div>
			    <div class="form-group">
				<div class="col-sm-12 inputWrapper">
				    <label class="col-sm-2 control-label" for="imgImagem">Imagem Inspiração</label>
				    <div class="inputCorpo col-sm-10">
					<div class="col-sm-12">
					    <img src="imagens/no_photo.png" class="img-circle imgClicavel" data-inputFileId="imgPrincipal" style="display:block;margin: 0 auto; width:100px;" />
					    <input type='file' id="imgPrincipal" name="imagem_insp" style="display:none;" />
					    <a class="imgReset"><i class="fa fa-ban"></i></a>
					</div>
				    </div>
				</div>
			    </div>			    
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane" id="tab4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h2>Info</h2>
                            </div>
                            <div class="panel-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<!-- CORPO DE VERDADE/ -->