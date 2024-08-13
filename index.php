<?php

$numero1 = 10;
$numero2 = 20;
$soma = $numero1 + $numero2;

echo "<pre>";
echo " O resultado da soma é {$soma}";

$primeiroNome = "Filipe";
$sobrenome = "Magnus";

$nomeCompleto = $primeiroNome ." ". $sobrenome;

echo "\n\n $nomeCompleto";

$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
echo "\n\n O resultado das operações dos números $numero1 e $numero2 são:";
echo "\n\n Subtracao = $subtracao \n Multiplicacao = $multiplicacao \n Divisao = $divisao \n Soma = $soma ";

$array = ["Filipe", "Lucas", "Dantrione"];
var_dump($array);

krsort($array);
var_dump($array);

ksort($array);
var_dump($array);

for ($i=0; $i <= 10; $i++) { 
    echo "\n $i";
}

foreach ($array as $key => $value) {
    echo "\n\n chave: $key, valor: $value";
}

$array = array_flip($array);
var_dump($array);

$count = 0;
do{
    $count++;
} while($count < 10);

while($count < 10){
    $count++;
}
