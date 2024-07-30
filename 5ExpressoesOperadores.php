<?php

echo "<br><br>";
echo "Expressões e Operadores";
echo "<br>";

echo "------------------------------------<br>";

$a = 1;
$b = 2;
$c = 3;
$d = 4;

$e = (($a + $b) / $c) * $d;
echo "$e";
echo "<br>";

$f = 5.5;

$h = $f + $e;
echo "$h <br>";

$string = "5" . "5"; //é string
echo "$string";

///////////////Exercício 11
echo "<br>";
$i = "5" * 12;
echo "$i<br>";

echo gettype($i);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype("olá");
echo "<br>";
echo "<br>";
////////////////Exercício 12

$valor1 = 12;
$valor2 = 43;

$soma = $valor1 + $valor2;
echo "$soma" . "<br>";


$subtracao = $soma - $valor1;
echo "$subtracao" . "<br>";

$multiplicacao = $soma * $subtracao;
echo "$multiplicacao" . "<br>";

$divisao = $multiplicacao / $valor2;
echo "$divisao" . "<br>";

echo "<br><br>";
echo "Operador de Módulo";
echo "<br>";

echo "------------------------------------<br>";
//bagulho de achar número par e impar

if (12 % 2 == 0) {
    echo "é par";   
} else {
    echo "é ímpar";
}