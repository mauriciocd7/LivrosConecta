
<div class="container">
	<div class="card  rounded mx-auto d-block m-3" style="width: 30rem;">
            <div class="card-header text-center">
           		<h5> Anuncie Seu Livro!</h5>
            </div>

	<form method="POST" enctype="multipart/form-data"> <!-- sem action porque o controller pega por url os dados -->
<div class="card-body ">
		<div class="form-group">
			
		
		<h6><?php echo $mensagem; ?></h6>	
		<h6><label for="categoria">Categoria:</label></h6>
			<select name="categoria" id="categoria" class="form-control">
				<?php
				foreach($cats as $cat):
				?>
				<option value="<?php echo $cat['id']; ?>"><?php echo $cat['nome']; ?></option>
				<?php
				endforeach;
				?>
			</select>
		</div>
		<div class="form-group">
		<h6><label for="titulo">Titulo:</label></h6>
			<input type="text" name="titulo" id="titulo" class="form-control" />
		</div>
		<div class="form-group">
		<h6>	<label for="valor">Valor:</label></h6>
			<input type="text" name="valor" id="valor" class="form-control" />
		</div>
		<div class="form-group">
		<h6><label for="descricao">Descreva aqui sua experiência com este livro:</label></h6>
			<textarea class="form-control" name="descricao"></textarea>
		</div>
		<div class="form-group">
		<h6>	<label for="estado">Estado de Conservação:</label></h6>
			<select name="estado" id="estado" class="form-control">
				<option value="0">Ruim</option>
				<option value="1">Bom</option>
				<option value="2">Ótimo</option>
			</select>
		</div>


		<input type="submit" value="Adicionar" class="btn btn-dark btn-block" />
	</form>
			</div>
			</div>
 
</div>
