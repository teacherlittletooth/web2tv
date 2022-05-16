<?php
//Variáveis
$numero1 = 99.9;
$numero2 = 88.8;
$objeto = "Colher";
$objeto2 = "Faca";

var_dump($numero1);
var_dump($objeto);

//Constantes
define("MEU_TIME", "Juazeirense");
define("MINHA_MAE", "Ana Maria da Rocha Donini");
define("MINHA_IDADE", 37);

echo "<hr>";
echo MEU_TIME." - ".MINHA_MAE." - ".MINHA_IDADE;

echo "<hr>";
//Concatenando strings
$concat = $objeto . $objeto2;
echo $concat;

echo "<hr>";
//Operadores atitméticos
$n1 = 5.8;
$n2 = 7.4;
$media = ($n1 + $n2) / 2;

echo "Média: " . $media . "<br>";

$result = ($numero1 + $numero2);
echo $result . "<br>";
$result = ($numero1 - $numero2);
echo $result . "<br>";
$result = ($numero1 * $numero2);
echo $result . "<br>";
$result = ($numero1 / $numero2);
echo $result . "<br>";

//Operadores relacionais (de comparação)
/*
igual       ==
diferente   !=
maior       >
menor       <
maior igual >=
menor igual <=
*/

echo "<hr>";
var_dump($numero1 == $numero2);
var_dump($numero1 != $numero2);
var_dump($numero1 > $numero2);
var_dump($numero1 <= $numero2);

echo "<hr>";
//Operadores lógicos
/*
AND     &&      and
OR      ||      or
NOT     !       not
*/
var_dump(
    ($objeto == "Colher") &&
    !(($numero1 + $numero2) >= 300) &&
    (strlen($objeto) + strlen($objeto2) <= 10)
);

echo "<hr>";
$sinal = random_int(1, 3);

if($sinal == 1) {
    echo "<h3 style='background-color: green'>Táca-le pau!!!</h3>";
} elseif($sinal == 2) {
    echo "<h3 style='background-color: yellow'>Cuidado aí, tchê!</h3>";
} else {
    echo "<h3 style='background-color: red'>PARE!!!</h3>";
}

echo "<hr>";

// Laços de repetição
// FOR => início; condição; incremento
for($i = 1; $i <= 10; $i++) {
    echo "6 x $i = ".(6 * $i) . "<br>";
}

// WHILE => condição
echo "<hr>";

//$teste = true;
$count = 0;
while($count <= 1000) {
    echo $count . " / ";
    $count+=10;
    // if($count > 1000) {
    //     $teste = !$teste;
    // }
}

//FOREACH => lista "as" referência
echo "<hr>";

//Criando uma lista
$carros = [
    "Chevette",
    "Opala",
    "Escort",
    "Brasília",
    "Uno",
    "Veraneio",
    "Fusca",
    "Belina",
    "Fiat 147"
];

//var_dump($carros);
foreach($carros as $carroDaVez) {
    echo $carroDaVez . "<br>";
}