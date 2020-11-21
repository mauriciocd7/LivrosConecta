<div class="row">
	<div class="col-9">
		<div class="m-4">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" class="m-5">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="<?php echo BASE_URL; ?>assets/images/home/home1.jpg" alt="First slide">
						<div class="carousel-caption d-md-block">
							<h4 class="text-white">Junte-se a nós</h4>
							<h3>
								<p>Já são <?php echo $total_usuarios; ?> usuários cadastrados.</p>
							</h3>
							<p>Publique e compartilhe</p>
							<small>fonte: http://getwallpapers.com/wallpaper/full/1/9/c/271312.jpg </small>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo BASE_URL; ?>assets/images/home/home2.jpg" alt="Second slide">
						<div class="carousel-caption d-md-block">
							<h4>Cadastre-se</h4>
							<p>E tenha acesso para anunciar seu livro</p>
							<small>fonte: http://www.kabu-load.net/data/out/100/IMG_31835.jpg </small>	
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="<?php echo BASE_URL; ?>assets/images/home/home3.jpg" alt="Third slide">
						<div class="carousel-caption d-md-block">
							<h5>Faça Amigos!</h5>
							<p>Você também pode doar seus livros através de anúncios!</p>
							<small>fonte: http://wallpaperswide.com/by_heart-wallpapers.html </small>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
</div>


	<div class="col-3 mt-4"><img src="<?php echo BASE_URL; ?>assets/images/home/ad.jpg" alt="..." class="img-thumbnail"> 
	<div class="dropdown-divider m-4"></div>
	<img src="<?php echo BASE_URL; ?>assets/images/home/ad.jpg" alt="..." class="img-thumbnail"> </div>
</div>


<div class="dropdown-divider"></div>

<div class="row">
	<div class="col-sm-3">
		<h4>Pesquisa Avançada</h4>
		<form method="GET">
			<div class="form-group">
				<label for="categoria">Categoria:</label>
				<select id="categoria" name="filtros[categoria]" class="form-control">
					<option></option>
					<?php foreach ($categorias as $cat) : ?>
						<option value="<?php echo utf8_encode($cat['id']); ?>" <?php echo ($cat['id'] == $filtros['categoria']) ? 'selected="selected"' : ''; ?>><?php echo $cat['nome']; ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group">
				<label for="preco">Preço:</label>
				<select id="preco" name="filtros[preco]" class="form-control">
					<option></option>
					<option value="0-50" <?php echo ($filtros['preco'] == '0-50') ? 'selected="selected"' : ''; ?>>R$ 0 - 50</option>
					<option value="51-100" <?php echo ($filtros['preco'] == '51-100') ? 'selected="selected"' : ''; ?>>R$ 51 - 100</option>
					<option value="101-200" <?php echo ($filtros['preco'] == '101-200') ? 'selected="selected"' : ''; ?>>R$ 101 - 200</option>
					<option value="201-500" <?php echo ($filtros['preco'] == '201-500') ? 'selected="selected"' : ''; ?>>R$ 201 - 500</option>
				</select>
			</div>

			<div class="form-group">
				<label for="estado">Estado de Conservação:</label>
				<select id="estado" name="filtros[estado]" class="form-control">
					<option></option>
					<option value="0" <?php echo ($filtros['estado'] == '0') ? 'selected="selected"' : ''; ?>>Ruim</option>
					<option value="1" <?php echo ($filtros['estado'] == '1') ? 'selected="selected"' : ''; ?>>Bom</option>
					<option value="2" <?php echo ($filtros['estado'] == '2') ? 'selected="selected"' : ''; ?>>Ótimo</option>
				</select>
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-block btn-info" value="Buscar" />
			</div>
		</form>

	</div>
	<div class="col-sm-9">
		<h4> <?php echo $total_anuncios; ?> Livro(s) Anunciado(s) Pesquisado(s) </h4>
		<table class="table table-striped">
			<tbody>
				<?php foreach ($anuncios as $anuncio) : ?>
					<tr>
						<td>
							<?php if (!empty($anuncio['url'])) : ?>
								<img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="0" />
							<?php else : ?>
								<img src="<?php echo BASE_URL; ?>assets/images/default.jpg" height="50" border="0" />
							<?php endif; ?>
						</td>
						<td>
							<a href="<?php echo BASE_URL; ?>livro/abrir/<?php echo $anuncio['id']; ?>"><?php echo $anuncio['titulo']; ?></a><br />
							<?php echo $anuncio['categoria']; ?>
						</td>
						<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<ul class="pagination">
			<?php for ($q = 1; $q <= $total_paginas; $q++) : ?>
				<li class="<?php echo ($p == $q) ? 'active' : ''; ?>"><a href="<?php echo BASE_URL; ?>?<?php
																											$w = $_GET;
																											$w['p'] = $q;
																											echo http_build_query($w);
																											?>"><?php echo $q; ?></a></li>
			<?php endfor; ?>
		</ul>
	</div>
</div>


