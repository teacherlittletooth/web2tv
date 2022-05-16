<?php

use Model\Pedido;

    require_once '../vendor/autoload.php';

    $pedido = new Pedido();

    //var_dump( $produto->darOi() );

    //Se está setado (informado/enviado/criado/existe)
    //via GET o campo com 'name' ingrediente, então...
    if(isset($_GET['ingrediente'])) {
        //A variável '$ingrediente' (criada neste momento) receberá justamente
        //o valor que foi enviado via GET do campo ingrediente.
        $pedido->ingredientes = $_GET['ingrediente'];
    } else {
        //Senão (do contrário) a mesma variável $ingrediente será 'null'
        $pedido->ingredientes = null;
    }

    if(isset($_GET['qtde'])) {
        $pedido->qtde = $_GET['qtde'];
    } else {
        $pedido->qtde = null;
    }

    if(isset($_GET['pgto'])) {
        $pedido->pgto = $_GET['pgto'];
    } else {
        $pedido->pgto = null;
    }

    if(isset($_GET['entrega'])) {
        $pedido->entrega = $_GET['entrega'];
    } else {
        $pedido->entrega = null;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista do pedido</title>
</head>
<body>
    <?= $pedido->darDesconto() ?>

    <h2>Pedido:</h2>
    <?php foreach($pedido->ingredientes as $i) : ?>
        <h3 style="font-family:  courier;">
            <?= $i ?> <hr>
        </h3>
    <?php endforeach ?>
    
    <h2>Quantidade:</h2>
    <h3 style="font-family:  courier; color: green;">
        <?= $pedido->qtde ?> <hr>
    </h3>

    <h2>Forma de pagamento:</h2>
    <h3 style="font-family:  courier;  color: purple;">
        <?= $pedido->pgto ?> <hr>
    </h3>

    <h2>Local de entrega:</h2>
    <h3 style="font-family:  courier;  color: red;">
        <?= $pedido->entrega ?> <hr>
    </h3>

</body>
</html>