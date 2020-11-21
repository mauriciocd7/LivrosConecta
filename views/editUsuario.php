<div class="container">
	

	<form method="POST" id="formCadastro">
  <div class="card  rounded mx-auto d-block m-3" style="width: 30rem;">
            <div class="card-header text-center">
           <h5> Editar Perfil</h5>
            </div>
            <div class="card-body ">
 
		<div class="form-group">
      <h6><label for="name">Nome</label></h6>
      <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $info['nome']; ?>" >
    </div>
    <div class="form-group">
      <h6><label for="cpf">CPF</label></h6>
      <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $info['cpf']; ?>">
    </div>
    <div class="form-group">
      <h6><label for="email">Email</label></h6>
      <input type="text" class="form-control" id="email" name="email" value="<?php echo $info['email']; ?>">
    </div>

    <div class="form-group">
      <h6><label for="telefone">Telefone</label></h6>
      <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $info['telefone']; ?>">
    </div>
    <div class="form-group">
      <h6><label for="celular">Celular</label></h6>
      <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $info['celular']; ?>">
    </div>

    <div class="form-group">
          <h6><label for="cep">CEP</label></h6>
	  	  <input type="text" class="form-control"  id="cep" name="cep" value="<?php echo $info['cep']; ?>" required/>
    </div>

    <div class="form-group">
    <h6><label for="uf" >Estado</label></h6>
          <select id="uf" name="uf" value="<?php echo $info['uf']; ?>" class="form-control">
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
      <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $info['cidade']; ?>">
    </div>

    <div class="form-group">
      <h6><label for="bairro">Bairro</label></h6>
      <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $info['bairro']; ?>">
    </div>

    <div class="form-group">
      <h6><label for="logradouro">Logradouro</label></h6>
      <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo $info['logradouro']; ?>" required>
    </div>

    <div class="form-group">
      <h6><label for="complemento">Complemento</label></h6>
      <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $info['complemento']; ?>">
    </div>

    <div class="form-group">
      <h6><label for="numero">Número</label></h6>
      <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $info['numero']; ?>" required>
    </div>
    <div class="form-group">
      <h6><label for="password">Senha</label></h6>
      <input type="password" class="form-control" id="password" name="senha" value="<?php echo $info['senha']; ?>">
    </div>
    <div class="form-group">
      <h6><label for="password_confirmation">Confirmação de senha</label></h6>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmação de senha">
    </div>




		<!--incluir mais dados-->
	
		<input type="submit" value="Salvar" class="btn btn-dark btn-block"  />

		<a class="btn btn-danger mx-auto d-block mt-4" href="<?php echo BASE_URL; ?>usuarios/delUsuario/<?php echo $info['id']; ?>">Excluir Cadastro</a><br/>
		
		
  </form>
  
</div>
</div>
<!--JS Cadastro-->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/formCadastro.js"></script>
</div>