<?php
class loginController extends controller{
    public function index(){
        $u = new Usuarios();
        $dados = array();
        $mensagem = '';
    
        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];

            if($u->login($email, $senha)) {
                header("Location:".BASE_URL."home");
            } else {
                $mensagem = '
                <div class="alert alert-danger">
                    Usuário e/ou Senha errados!
                </div>
                ';
            }

        }
        
        $dados['mensagem'] = $mensagem;
        $this->loadTemplate('login',  $dados);

    }


    public function sair(){
        session_start();
        $dados = array();
        unset($_SESSION['cLogin']);
        header("Location:".BASE_URL."home");;
        $this->loadTemplate('login',  $dados);
    }

}


?>