<?php

use Database\Database;

//cod
if( isset($_POST['cod']) ) {
    $cod = $_POST['cod'];
} else {
    $cod = null;
}

//ingredientes
if( isset($_POST['ingredientes']) ) {
    $ingredientes = $_POST['ingredientes'];
} else {
    $ingredientes = null;
}

//qtde
if( isset($_POST['qtde']) ) {
    $qtde = $_POST['qtde'];
} else {
    $qtde = null;
}

//pgto
if( isset($_POST['pgto']) ) {
    $pgto = $_POST['pgto'];
} else {
    $pgto = null;
}

//entrega
if( isset($_POST['entrega']) ) {
    $entrega = $_POST['entrega'];
} else {
    $entrega = null;
}

/*
var_dump($cod);
var_dump($ingredientes);
var_dump($qtde);
var_dump($pgto);
var_dump($entrega);
*/

require_once "../model/Database.php";
$db = new Database();

$db->update(
    "UPDATE pedidos SET ingredientes = '$ingredientes',
    qtde = $qtde, pgto = '$pgto', entrega = '$entrega'
    WHERE cod = $cod; "
);