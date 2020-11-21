<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="m-4">

				<div class="carousel slide" data-ride="carousel" id="meuCarousel">
					<div class="carousel-inner" role="listbox">
						<?php if (!empty($info['fotos'])) : ?>
							<?php foreach ($info['fotos'] as $chave => $foto) : ?>
								<div class="carousel-item <?php echo ($chave == '0') ? 'active' : ''; ?>">
									<img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php echo $foto['url']; ?>" />
								</div>
							<?php endforeach; ?>

						<?php else : ?>
							<img src="<?php echo BASE_URL; ?>assets/images/default.jpg" />
						<?php endif; ?>

					</div>
					<a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev"><span>
							<</span> </a> <a class="right carousel-control" href="#meuCarousel" role="button" data-slide="next"><span>></span></a>
				</div>

			</div>
		</div>


		<div class="col-6">

			<div class="m-4">

				<div class="row text-left">

					<div class="col-12 text-left">
						<h6><?php echo $info['titulo']; ?></h6>
					</div>
					<div class="col-12 text-left">
						<h6><?php echo $info['categoria']; ?></h6>
					</div>
					<div class="col-12 text-left">
						<h6><?php echo $info['descricao']; ?></p>
						</h6>
						<div class="row dropdown-divider"></div>
					</div>
					<div class="row dropdown-divider"></div>
					<div class="col-6">
						<h5>R$</h5>
					</div>

					<div class="col-6">
						<h6><?php echo number_format($info['valor'], 2); ?></h6>
					</div>

					<div class="col-6">
						<h5>Anunciante:</h5>
					</div>
					<div class="col-6">
						<h6><?php echo strtoupper($usuario['nome']); ?></h6>
					</div>
					<div class="col-6">
						<h5>Telefone:</h5>
					</div>
					<div class="col-6">
						<h6><?php echo $usuario['telefone']; ?></h6>
					</div>
					<div class="col-6">
						<h5>Celular:</h5>
					</div>
					<div class="col-6">
						<h6><?php echo $usuario['celular']; ?></h6>
					</div>

					<div class="col-6">
						<h5>Cidade: </h5>
					</div>

					<div class="col-6">
						<h6><?php echo $usuario['cidade']; ?></h6>
					</div>

				</div>
			</div>
		</div>
	</div>
	<h4><a class="btn btn-light btn-block" href="<?php echo BASE_URL; ?>">Voltar</a> </h4>
</div>