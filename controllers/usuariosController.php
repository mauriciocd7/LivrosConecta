<?php
class usuariosController extends controller{
    public function index(){

	}

	public function addUsuario(){
    $u = new Usuarios();
    
    $dados = array();
    $mensagem = '';

	if(isset($_POST['nome']) && !empty($_POST['nome'])) {
		$nome = addslashes($_POST['nome']);
		$cpf = addslashes($_POST['cpf']);
		$email = addslashes($_POST['email']);
		$telefone = addslashes($_POST['telefone']);
		$celular = addslashes($_POST['celular']);
		$cep = addslashes($_POST['cep']);
		$uf = addslashes($_POST['uf']);
		$cidade = addslashes($_POST['cidade']);
		$bairro = addslashes($_POST['bairro']);
		$logradouro = addslashes($_POST['logradouro']);
		$complemento = addslashes($_POST['complemento']);
		$numero = addslashes($_POST['numero']);
		$senha = $_POST['senha'];
		

		if(!empty($nome) && !empty($email) && !empty($senha)) {
			if($u->cadastrar($nome, $cpf, $email, $telefone, $celular, $cep, $uf, $cidade, $bairro, $logradouro, $complemento, $numero, $senha)) {
                $mensagem = '
				<div class="alert alert-success">
					<strong>Parabéns!</strong> Cadastrado com sucesso. <a class="alert-link" href=../login> Faça o login agora</a>
				</div>
				';
			} else {
				$mensagem = '
				<div class="alert alert-warning">
					Este usuário já existe! <a href="../login" class="alert-link">Faça o login agora</a>
				</div>
				';
			}
		} else {
			$mensagem = '
			<div class="alert alert-warning">
				Preencha todos os campos!
			</div>
			';
			}

		}
		
		$dados['mensagem'] = $mensagem;

		$this->loadTemplate('addUsuario',  $dados);

	}


	public function editUsuario($id) {
		$dados = array();
		

		if(!empty($id)) {
			$usuarios = new Usuarios();

			if(!empty($_POST['nome'])) {
			
				$nome = $_POST['nome'];
				$cpf = $_POST['cpf'];
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				$celular = $_POST['celular'];
				$cep = $_POST['cep'];
				$uf = $_POST['uf'];
				$cidade = $_POST['cidade'];
				$bairro = $_POST['bairro'];
				$logradouro = $_POST['logradouro'];
				$complemento =$_POST['complemento'];
				$numero = $_POST['numero'];
				$senha = $_POST['senha'];

				$usuarios->editUsuario($nome, $id, $cpf, $email, $telefone, $celular, $cep, $uf, $cidade, $bairro, $logradouro, $complemento, $numero, $senha);
				$mensagem = '	
				<div class="alert alert-success">
					<strong>Parabéns!</strong> Editado com sucesso. 
				</div>';

			} else {
				$dados['info'] = $usuarios->getIdUsuario($id);

				if(isset($dados['info']['id'])) {
					$this->loadTemplate('editUsuario', $dados);
					exit;
				}
			}
		}
		$dados['info'] = $usuarios->getIdUsuario($id);
		

		$this->loadTemplate('editUsuario', $dados);
	}

	public function delUsuario($id){
      
        if(empty($_SESSION['cLogin'])) {
           header("Location:".BASE_URL."login");
        }

        $u = new Usuarios();
        
        //pega o id e utiliza função de exclusão
			$u->excluirUsuario($id);
			session_destroy();

        header("Location:".BASE_URL."home");

    }

  


}

?>