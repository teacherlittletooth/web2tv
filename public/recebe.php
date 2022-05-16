<?php
    //Verificando se foi enviado via post o email
    if( isset($_POST['email']) ) {
        $email = $_POST['email']; //Caso sim, salvamos este email na variável $email
    } else {
        $email = null; //Caso não, deixamos a variável $email como null
    }

    if( isset($_POST['pass']) ) {
        $pass = $_POST['pass'];
    } else {
        $pass = null;
    }

    //Se as variáveis $email e $pass forem diferentes de null, então será
    //realizada a verificação de email e senha
    if($email != null && $pass != null) {
        if($email == 'paulo@ig.net' && $pass == '4321') {
            $result = "Seja bem vindo!";
            $redirect =
            "<meta http-equiv='refresh' content='2; url=https://www.youtube.com'/>";
        } else {
            $result = "Acesso negado!";
            $redirect =
            "<meta http-equiv='refresh' content='2; url=../index.php' />";
        }
    }

//Anexando cabeçalho com barra de navegação    
require_once "../src/views/header_nav.php";
?>

    <div class="container mt-3">

        <div class="text-center">
            <h1><?= (isset($result) ? $result : "Visitante") ?></h1>
            <?= (isset($redirect) ? $redirect : "<hr>") ?>
        </div>

        <form method="get" action="pedido.php">
            <div class="form-group">
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Pão"/>Pão<br>
                    <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Queijo"/>Queijo<br>
                    <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Presunto"/>Presunto<br>
                    <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Maionese"/>Maionese<br>
                    <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Tomate"/>Tomate<br>
                    <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Milho"/>Milho<br>
                    <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Ervilha"/>Ervilha<br>
                </div>

                <hr>
                Quantidade:
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <input type="number" class="form-control" name="qtde" value="1" min="1"/>
                    </div>
                </div>

                <hr>
                Pagamento:
                <div class="d-flex">
                    <div class="form-check col-lg-2 col-sm-4">
                        <input type="radio" class="form-check-input" name="pgto" value="Dinheiro"/> Dinheiro
                    </div>
                    <div class="form-check col-lg-2 col-sm-4">
                        <input type="radio" class="form-check-input" name="pgto" value="Pix"/> Pix
                    </div>
                    <div class="form-check col-lg-2 col-sm-4">
                        <input type="radio" class="form-check-input" name="pgto" value="Cartão"/> Cartão
                    </div>
                </div>

                <hr>
                Entrega:
                <div class="row">
                    <div class="col-4">
                        <select name="entrega" required class="form-select">
                            <option value="">Selecione...</option>
                            <option value="Santa Isabel">Stª Isabel</option>
                            <option value="Santo Onofre">Stº Onofre</option>
                            <option value="Krahe">Krahe</option>
                            <option value="Augusta">Augusta</option>
                            <option value="Centro">Centro</option>
                            <option value="Viamópolis">Viamópolis</option>
                            <option value="Jari">Jari</option>
                            <option value="Stª Cecília">Stª Cecília</option>
                        </select>
                    </div>
                </div>

                <br><br>
                <div class="row">
                    <input type="submit" class="btn btn-primary col-3 offset-3" value="Enviar" />
                    &nbsp;
                    <input type="reset" class="btn btn-warning col-3" value="Apagar" />
                </div>
            </div>
        </form>

    </div>

<?php require_once "../src/views/footer.php"; ?>