<div class="container">

    <form method="POST">
        <div class="card rounded mx-auto d-block m-3" style="width: 30rem;">
            <div class="card-header text-center">
            <h5>  Login</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                   <h6> <label for="email">E-mail:</label> </h6>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>

                <div class="form-group">
                <h6><label for="senha">Senha:</label> </h6>
                    <input type="password" name="senha" id="senha" class="form-control" />
                </div>
                <div class="dropdown-divider"></div>
                <?php echo $mensagem . " "; ?>
                <input type="submit" value="Fazer Login" class="btn btn-dark btn-block" />
                  </form>
</div>
</div>


</div>
</div>