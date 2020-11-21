<?php
class Usuarios extends model {

	public function getTotalUsuarios() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function getIdUsuario($id) {
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch(); //é só uma linha 
		}

		return $array;
	}


	public function cadastrar($nome, $cpf, $email, $telefone, $celular, $cep, $uf, $cidade, $bairro, $logradouro, $complemento, $numero, $senha) {
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, cpf = :cpf, email = :email, telefone = :telefone, celular = :celular, cep = :cep, uf = :uf, cidade = :cidade, bairro = :bairro, logradouro = :logradouro, complemento = :complemento, numero = :numero, senha = :senha");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":cpf", $cpf);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":telefone", $telefone);
			$sql->bindValue(":celular", $celular);
			$sql->bindValue(":cep", $cep);
			$sql->bindValue(":uf", $uf);
			$sql->bindValue(":cidade", $cidade);
			$sql->bindValue(":bairro", $bairro);
			$sql->bindValue(":logradouro", $logradouro);
			$sql->bindValue(":complemento", $complemento);
			$sql->bindValue(":numero", $numero);
			$sql->bindValue(":senha", md5($senha));
			$sql->execute();
			return true;

		} else {
			return false;
		}

	}


	public function editUsuario($nome, $id, $cpf, $email, $telefone, $celular, $cep, $uf, $cidade, $bairro, $logradouro, $complemento, $numero, $senha) { //recebe do controller os parâmetros nome e id do form 
		$sql = "UPDATE usuarios SET nome = :nome, cpf = :cpf, email = :email, telefone = :telefone, celular = :celular, cep = :cep, uf = :uf, cidade = :cidade, bairro = :bairro, logradouro = :logradouro, complemento = :complemento, numero = :numero, senha = :senha WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome); //bindValue liga os valores recebidos aos campos da tabela
		$sql->bindValue(':id', $id);
		$sql->bindValue(":cpf", $cpf);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":telefone", $telefone);
		$sql->bindValue(":celular", $celular);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":uf", $uf);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":logradouro", $logradouro);
		$sql->bindValue(":complemento", $complemento);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();
	}


	public function excluirUsuario($id) {

		$sql = $this->db->prepare("DELETE FROM usuarios WHERE id = :id"); //exclui da tabela usuario
		$sql->bindValue(":id", $id);
		$sql->execute();

		$sql = $this->db->prepare("DELETE FROM anuncios WHERE id_usuario = :id"); //exclui anuncios vinculados ao usuario
		$sql->bindValue(":id", $id);
		$sql->execute();

		$sql = $this->db->prepare("SELECT id_anuncio FROM anuncios_imagens WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();


	}




	public function login($email, $senha) {
		$sql = $this->db->prepare("SELECT id, nome FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			$_SESSION['cLogin'] = $dado['id'];
			$_SESSION['cNome'] = $dado['nome'];
			return true;
		} else {
			return false;
		}

	}














}
?>