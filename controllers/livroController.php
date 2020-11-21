<?php
class livroController extends controller {

	public function index() {

	}

	public function abrir($id) { //recebe o id do produto que foi selecionado na home
		$dados = array();

		$a = new Anuncios();
		$u = new Usuarios();

		if(empty($id)) {
			header("Location: ".BASE_URL);
			exit;
		}

		$info = $a->getAnuncio($id); //id do anuncio

		$idUsuarioAnuncio = $info['id_usuario'];

		$usuario = $u->getIdUsuario($idUsuarioAnuncio);




		$dados['usuario'] = $usuario;
		$dados['info'] = $info;

		$this->loadTemplate('livro', $dados);

	}

}