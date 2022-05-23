<?php

use Database\Database;

require_once "../src/views/header_nav.php";

if( isset($_GET['cod']) ) {
    $cod = $_GET['cod'];
} else {
    header('location: ../public/lista.php');
}

require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->select(
    "SELECT * FROM pedidos WHERE cod = $cod; "
);

//var_dump($resultDb);
?>

<form method="post" action="../src/data/save.php" >
    <div class="container">
        <h3>Atualização de dados</h3>

        <h5>Código</h5>
        <input type="text" name="cod" value="<?= $resultDb[0]->cod ?>" readonly />

        <h5>Data e hora</h5>
        <input type="text" name="data-hora" value="<?= $resultDb[0]->data_hora ?>" readonly />

        <h5>Ingredientes</h5>
        <input type="text" name="ingredientes" value="<?= $resultDb[0]->ingredientes ?>" />

        <h5>Quantidade</h5>
        <input type="number" name="qtde" value="<?= $resultDb[0]->qtde ?>" min="1" />

        <h5>Pagamento</h5>
            <div class="d-flex">
                <div class="form-check col-lg-2 col-sm-4">
                    <input type="radio" class="form-check-input" name="pgto" value="Dinheiro" <?= ($resultDb[0]->pgto == "Dinheiro") ? "checked" : "" ?> /> Dinheiro
                </div>
                <div class="form-check col-lg-2 col-sm-4">
                    <input type="radio" class="form-check-input" name="pgto" value="Pix" <?= ($resultDb[0]->pgto == "Pix") ? "checked" : "" ?> /> Pix
                </div>
                <div class="form-check col-lg-2 col-sm-4">
                    <input type="radio" class="form-check-input" name="pgto" value="Cartão" <?= ($resultDb[0]->pgto == "Cartão") ? "checked" : "" ?> /> Cartão
                </div>
            </div>
       
        <h5>Entrega</h5>
        <div class="row">
            <div class="col-4">
                <select name="entrega" required class="form-select">
                    <option value="<?= $resultDb[0]->entrega ?>"> <?= $resultDb[0]->entrega ?> </option>
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

        <br>

        <input type="submit" value="Atualizar pedido" class="btn btn-primary" />
        <input type="reset" value="Reiniciar" class="btn btn-secondary" />

    </div>   
</form>

<?php require_once "../src/views/footer.php"; ?>