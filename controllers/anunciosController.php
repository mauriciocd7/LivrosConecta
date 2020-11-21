<?php
class anunciosController extends controller{
    public function index(){

        $a = new Anuncios(); //instancia anuncios
        $dados = array(); 
        $valor = 0;

        if(empty($_SESSION['cLogin'])) {
        header("Location:".BASE_URL."login");
        }

        $anuncios = $a->getMeusAnuncios();
       
        $dados['anuncios'] = $anuncios;
        
        $this->loadTemplate('anuncios',  $dados);

    }


    //actions add, del, edit
    public function addAnuncio(){
        if(empty($_SESSION['cLogin'])) {
            header("Location:".BASE_URL."login");
        }
    
        $dados = array();
        $mensagem ="";
        $c = new Categorias();
        $cats = $c->getLista();
        $a = new Anuncios();
        
        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['categoria']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes($_POST['descricao']);
            $estado = addslashes($_POST['estado']);
        
            $a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);
        
            $mensagem = '
            <div class="alert alert-success">
                Produto adicionado com sucesso!
            </div>
            ';

            header("Location:".BASE_URL."anuncios");
        }else {
            $mensagem = '
            <div class="alert alert-warning">
                Preencha os campos referentes ao seu livro!
            </div>
            ';
        }

        $dados['mensagem'] = $mensagem;
        $dados['cats'] = $cats;
    
        $this->loadTemplate('addAnuncio',  $dados); //load somente a action para carregar somente a view correspondente

    }

    public function editAnuncio(){
        if(empty($_SESSION['cLogin'])) {
            header("Location:".BASE_URL."login");
        }
    
        $dados = array();
        $mensagem ="";
        $c = new Categorias();
        $cats = $c->getLista();

        $a = new Anuncios();
        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['categoria']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes($_POST['descricao']);
            $estado = addslashes($_POST['estado']);
            if(isset($_FILES['fotos'])) {
                $fotos = $_FILES['fotos'];
            } else {
                $fotos = array();
            }
        
            $a->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $_GET['id']);
        

           $mensagem =' 
            <div class="alert alert-success">
                Anúncio editado com sucesso!
            </div>';
            
        }
        
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $info = $a->getAnuncio($_GET['id']);
        } else {
            $mensagem ='
            <script type="text/javascript">window.location.href="./";</script>
            ';
            exit;
        }
        
        $dados['cats'] = $cats;
        $dados['mensagem'] = $mensagem;
        $dados['info'] = $info;
    
        $this->loadTemplate('editAnuncio',  $dados); //load somente a action para carregar somente a view correspondente

    }


    public function delAnuncio(){
      
        if(empty($_SESSION['cLogin'])) {
           header("Location:".BASE_URL."login");
        }

        $a = new Anuncios();
        
        if(isset($_GET['id']) && !empty($_GET['id'])) { //pega o id e utiliza função de exclusão
            $a->excluirAnuncio($_GET['id']);
        }
        
        header("Location:".BASE_URL."anuncios");

    }




    public function delFoto(){
        
        if(empty($_SESSION['cLogin'])) {
            header("Location:".BASE_URL."login"); //se não estiver logado vai a login
        }
        
        $a = new Anuncios();
        
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $id_anuncio = $a->excluirFoto($_GET['id']); //se há id exclui foto
        }
        
        if(isset($id_anuncio)) {
            header("Location:".BASE_URL."anuncios/editAnuncio?id=".$id_anuncio); //se o se o livro tiver id volta na edição dele após exclusão.
        } else {
            header("Location:".BASE_URL."anuncios");
        }

    }

    



}

?>