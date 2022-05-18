<?php require_once "../src/views/header.php"; ?>

    <div class="login-center">
        <h1>::: Login :::</h1>
        <form method="post" action="recebe.php" >
            <div class="form-group">
                <div class="row">
                    <div class="col-10 offset-1">
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email" required/>
                        <br>
                        <input type="password" class="form-control" name="pass" placeholder="Digite sua senha" required/>
                        <br><br>
                        <input type="submit" class="btn btn-success" value="Enviar dados"/>&nbsp &nbsp
                        <input type="reset" class="btn btn-warning" value="Apagar dados"/>
                        <br>
                        <a href="recebe.php">Entrar como visitante</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php require_once "../src/views/footer.php"; ?>