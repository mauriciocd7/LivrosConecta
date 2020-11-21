<div class="container">
	<form method="POST" enctype="multipart/form-data">
		<div class="card  rounded mx-auto d-block m-3" style="width: 30rem;">
			<div class="card-header text-center">
				<h5> Editar Anúncio</h5>
			</div>
			<div class="card-body ">
				<div class="form-group">
					<h6><label for="categoria">Categoria:</label> </h6>
					<?php echo $mensagem; ?>
					<select name="categoria" id="categoria" class="form-control">
						<?php
						foreach ($cats as $cat) :
							?>
							<option value="<?php echo $cat['id']; ?>" <?php echo ($info['id_categoria'] == $cat['id']) ? 'selected="selected"' : ''; ?>><?php echo utf8_encode($cat['nome']); ?></option>
						<?php
						endforeach;
						?>
					</select>
				</div>
				<div class="form-group">
					<h6> <label for="titulo">Titulo:</label></h6>
					<input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $info['titulo']; ?>" />
				</div>
				<div class="form-group">
					<h6> <label for="valor">Valor:</label></h6>
					<input type="text" name="valor" id="valor" class="form-control" value="<?php echo $info['valor']; ?>" />
				</div>
				<div class="form-group">
					<h6> <label for="descricao">Descreva aqui sua experiência com este livro:</label>
						<textarea class="form-control" name="descricao"><?php echo $info['descricao']; ?></textarea>
				</div>
				<div class="form-group">
					<h6> <label for="estado">Estado de Conservação:</label></h6>
					<select name="estado" id="estado" class="form-control">
						<option value="0" <?php echo ($info['estado'] == '0') ? 'selected="selected"' : ''; ?>>Ruim</option>
						<option value="1" <?php echo ($info['estado'] == '1') ? 'selected="selected"' : ''; ?>>Bom</option>
						<option value="2" <?php echo ($info['estado'] == '2') ? 'selected="selected"' : ''; ?>>Ótimo</option>
					</select>
				</div>
				<div class="form-group">
					<h6> <label for="add_foto">Fotos do anúncio:</label></h6>
					<input type="file" name="fotos[]" multiple /><br />

					<div class="row">

						<div class="container">
							<div class="dropdown-divider"> </div>
							<div class="h6">Fotos do Anúncio</div>

							<?php foreach ($info['fotos'] as $foto) : ?>
								<div class="foto_item">
									<img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php echo $foto['url']; ?>" class="img-thumbnail" border="0" /><br />
									<a href="delAnuncio?id=<?php echo $foto['id']; ?>" class="btn btn-default">Excluir Imagem</a>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<input type="submit" value="Salvar" class="btn btn-dark btn-default btn-block" />
			</div>
	</form>
</div>

</div>