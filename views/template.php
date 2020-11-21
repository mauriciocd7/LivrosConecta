<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">

  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  
  <title>Livros Conecta</title>
</head>

<body class="d-flex flex-column h-100 bg-light">

  <header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Livros Conecta</a> <!--O BASE_URL para o home aproveitado do config ótimo ao mudar links-->
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarsExample04" style="">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo BASE_URL; ?>sobre">Sobre <span class="sr-only">(atual)</span></a>
          </li>
        </ul>
        <ul class="navbar-nav" >
          <?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) : ?>
            <li class="nav-item"> <a class="nav-link"> Olá <?php echo strtoupper($_SESSION['cNome']); ?>, bem vindo!</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>anuncios">Meus Anúncios</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>usuarios/editUsuario/<?php echo $_SESSION['cLogin']; ?>">Dados Pessoais</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>login/sair">Sair</a></li>
          <?php else : ?>
            <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>usuarios/addUsuario">Cadastre-se</a></li>
            <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL; ?>login">Login</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
</div>
  </header>


  <div class="container-fluid">
    
  <?php $this->loadViewInTemplate($viewName, $viewData); //chama o conteúdo da template 
  ?>
  </div>

  <footer class="footer mt-auto py-3 bg-dark">
   <!-- Footer Elements -->
  <div class="container">

<div class="text-center">

<a href="#" class="fa fa-facebook m-2"></a>

<a href="#" class="fa fa-twitter m-2"></a>
<a href="#" class="fa fa-google m-2"></a>
<a href="#" class="fa fa-youtube m-2"></a>
<a href="#" class="fa fa-instagram m-2"></a>
  
</div>
<div class="text-center text-light py-3 bg-dark">© 2019 - Livros Conecta 
</div>

  </footer>


  <!--JS -->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.slim.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/popper.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>

  <!--JS VALIDATOR -->
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.validate.js"></script>


</body>

</html>