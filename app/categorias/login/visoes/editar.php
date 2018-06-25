<?php
$resultado = $controlador->getResultados();
$msg = $controlador->getParametros();
?>

<div class="pular-menu">
    <div class="marquee"><?= $this->getDicas(); ?></div>
</div>

<div id="titulo-bg">
    <div id="categoria-titulo" class="row">
        <h1>Editando Perfil</h1>
    </div>    
</div>

<div class="conteudo">
    <!--BOTÃO DE CRIAR NOVA INSTÂNCIA-->
    <div class='pos-cabecalho mx-auto'>
	<p class="texto-lista-categorias"><?=(isset($msg->msg)?$msg->msg."!":"")?></p>
    </div>
    
    <form action="?categoria=<?= $categoria ?>&acao=salvar" method="post" enctype="multipart/form-data">
        
	<div class="form-group">
	    <div class="row">
		<div class="col-md-1 input-controle">
		    <button type="button" class="btn btn-input-controle minimizar">
			<i class="fa fa-minus"></i>
		    </button>                      
		</div>
		<label class="col-md-11 input-label" for="nm_usu">Nome:</label>
		
		<div class="col-md-12 input-corpo">
		    <div class="col-md-12 input-conteudo">
			<input name="nm_usu" value="<?= $resultado['nm_usu'] ?>" 
			       placeholder="Digite aqui seu primeiro nome"
			       title="Seu nome aqui"
			       maxlength="20" type="text"
			       class="form-control" id="nm_usu"/>
		    </div>
		</div>		
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
		<div class="col-md-1 input-controle">
		    <button type="button" class="btn btn-input-controle minimizar">
			<i class="fa fa-minus"></i>
		    </button>                      
		</div>
		<label class="col-md-11 input-label" for="snm_usu">Sobrenome:</label>
		
		<div class="col-md-12 input-corpo">
		    <div class="col-md-12 input-conteudo">
			<input name="snm_usu" value="<?= $resultado['snm_usu'] ?>" 
			       placeholder="Digite aqui seu segundo nome"
			       title="Seu sobrenome aqui"
			       maxlength="80" type="text"
			       class="form-control" id="snm_usu"/>
		    </div>
		</div>		
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
		<div class="col-md-1 input-controle">
		    <button type="button" class="btn btn-input-controle minimizar">
			<i class="fa fa-minus"></i>
		    </button>                      
		</div>
		<label class="col-md-11 input-label" for="mail_usu">E-mail:</label>
		
		<div class="col-md-12 input-corpo">
		    <div class="col-md-12 input-conteudo">
			<input name="mail_usu" value="<?= $resultado['mail_usu'] ?>" 
			       placeholder="Digite aqui seu e-mail"
			       title="Digite aqui seu e-mail"
			       maxlength="100" type="email"
			       class="form-control" id="mail_usu"/>
		    </div>
		</div>		
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
		<div class="col-md-1 input-controle">
		    <button type="button" class="btn btn-input-controle minimizar">
			<i class="fa fa-minus"></i>
		    </button>                      
		</div>
		<label class="col-md-11 input-label" for="mail_usu">Senha:</label>
		
		<div class="col-md-12 input-corpo">
		    <div class="col-md-12 input-conteudo">
			<input name="snh_usu" value="" 
			       placeholder="Digite aqui sua senha caso queira mudar"
			       title="Digite aqui sua senha caso queira mudar"
			       maxlength="30" type="text"
			       class="form-control" id="snh_usu"/>
		    </div>
		</div>		
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
		<div class="col-md-1 input-controle">
		    <button type="button" class="btn btn-input-controle minimizar">
			<i class="fa fa-minus"></i>
		    </button>                      
		</div>
		<label class="col-md-11 input-label" for="apdo_usu">Apelido:</label>
		
		<div class="col-md-12 input-corpo">
		    <div class="col-md-12 input-conteudo">
			<input name="apdo_usu" value="" 
			       placeholder="Digite aqui seu apelido"
			       title="Digite aqui seu apelido"
			       maxlength="20" type="text"
			       class="form-control" id="apdo_usu"/>
		    </div>
		</div>		
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
		<div class="col-md-1 input-controle">
		    <button type="button" class="btn btn-input-controle minimizar">
			<i class="fa fa-minus"></i>
		    </button>                      
		</div>
		<label class="col-md-11 input-label" for="dt_nsc">Data de Nascimento:</label>
		
		<div class="col-md-12 input-corpo">
		    <div class="col-md-12 input-conteudo">
			<input name="dt_nsc" value="" 
			       placeholder="Digite aqui sua data de nascimento"
			       title="Digite aqui sua data de nascimento"
			       maxlength="30" type="date"
			       class="form-control" id="dt_nsc"/>
		    </div>
		</div>		
	    </div>
	</div>
	<div class="form-group">
	    <div class="row">
		<div class="col-md-1 input-controle">
		    <button type="button" class="btn btn-input-controle minimizar">
			<i class="fa fa-minus"></i>
		    </button>                      
		</div>
		<label class="col-md-11 input-label" for="mail_usu">Sexo:</label>
		
		<div class="col-md-12 input-corpo">
		    <div class="col-md-12 input-conteudo">			
			<select name="sexo_usu" class="form-control" id="sexo_usu">
			    <option value=""> -- Escolha -- </option>
			    <option value="F">Feminino</option>
			    <option value="M">Masculino</option>
			    <option value="O">Outro</option>
			</select>			
		    </div>
		</div>		
	    </div>
	</div>
	<div class="col-md-12 form-controle">
            <input type="hidden" name="pk_usu" value="<?= $resultado['pk_usu'] ?>">
            <button type="submit" id="btn-salvar-form" class="btn btn-azul btn-block">
                Salvar Edição
            </button>
        </div>
    </form>
    
</div>