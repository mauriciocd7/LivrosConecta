<div class="container">
	<h3 class="text-center m-4">Meus Anúncios</h3>

	<a href="<?php echo BASE_URL; ?>anuncios/addAnuncio" class="btn btn-success">Adicionar Anúncio</a>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Titulo</th>
				<th>Valor</th>
				<th>Ações</th>
			</tr>
		</thead>
		<?php
		foreach($anuncios as $anuncio):
		?>
		<tr>
			<td>
				<?php if(!empty($anuncio['url'])): ?>
				<img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="0" />
				<?php else: ?>
				<img src="assets/images/default.jpg" height="50" border="0" />
				<?php endif; ?>
			</td>
			<td><?php echo $anuncio['titulo']; ?></td>
			<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
			<td>
				<a href="<?php echo BASE_URL; ?>anuncios/editAnuncio?id=<?php echo $anuncio['id']; ?>" class="btn btn-default">Editar</a>
				<a href="<?php echo BASE_URL; ?>anuncios/delAnuncio?id=<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>