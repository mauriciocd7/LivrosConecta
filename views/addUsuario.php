<div class="container">
  
<form id="formCadastro" method="post" action="">
<div class="card  rounded mx-auto d-block m-3" style="width: 30rem;">
            <div class="card-header text-center">
           <h5> Cadastre-se</h5>
            </div>
  
  <div class="card-body ">
     <?php echo $mensagem; ?>
 
    <div class="form-group">
    <h6><label for="name">Nome</label></h6>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" pattern="[A-Za-z]">
    </div>
    <div class="form-group">
    <h6> <label for="cpf">CPF</label></h6>
      <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
    </div>
    <div class="form-group">
    <h6> <label for="email">Email</label></h6>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email">
    </div>

    <div class="form-group">
    <h6> <label for="telefone">Telefone</label></h6>
      <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
    </div>
    <div class="form-group">
    <h6> <label for="celular">Celular</label></h6>
      <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular">
    </div>

    <div class="form-group">
    <h6>    <label for="cep">CEP</label></h6>
	  	  <input type="text" class="form-control"  id="cep" name="cep" placeholder="CEP" required/>
    </div>

    <div class="form-group">
    <h6> <label for="uf">Estado</label></h6>
          <select id="uf" name="uf" class="form-control">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
          </select>
    </div>

    <div class="form-group">
    <h6><label for="cidade">Cidade</label></h6>
      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
    </div>

    <div class="form-group">
    <h6><label for="bairro">Bairro</label></h6>
      <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
    </div>

    <div class="form-group">
    <h6> <label for="logradouro">Logradouro</label></h6>
      <input type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro" required>
    </div>

    <div class="form-group">
    <h6> <label for="complemento">Complemento</label></h6>
      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento" >
    </div>

    <div class="form-group">
    <h6> <label for="numero">Número</label></h6>
      <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" required>
    </div>
    <div class="form-group">
    <h6><label for="password">Senha</label></h6>
      <input type="password" class="form-control" id="password" name="senha" placeholder="Senha">
    </div>
    <div class="form-group">
    <h6> <label for="password_confirmation">Confirmação de senha</label></h6>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmação de senha">
    </div>
    <div class="form-group ">
      
    
    <div id="accordion">
  <div class="">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Termos de uso
</a>
      </h5>
      
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Transações são de responsabilidade dos usuários.
      </div>
      
    </div>
    <div class="form-group rounded mx-auto d-block">
    <input type="checkbox" class="form-check-input " name="terms_of_use" id="terms_of_use"> <h6 class="form-check-label">Lí e aceito os termos </h6> 
  </div>
</div>
</div>
</div>


    </div>
    <div class="dropdown-divider"></div>
   
    <button type="submit" class="btn btn-dark btn-block">Cadastrar</button>
  </form>
</div>
</div>

<!--JS Cadastro-->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/formCadastro.js"></script>
  
</div>



