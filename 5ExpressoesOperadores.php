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
    echo "é par". "<br>";   
} else {            
    echo "é ímpar" . "<br>";
}

///Exercício 13
$naoexato = 13;
$exato = 15;

echo "Não é exato " . $naoexato%5 . "<br>";
echo "É exato " . $exato%5 . "<br>"; 

echo "<br><br>";
echo "Operador de Exponenciação";
echo "<br>";

echo "------------------------------------<br>";
//exponente **
//concatenação de string .

echo "5 (cinco) elevado a 2 (dois) é igual a " . 5**2 . "<br>";

$nome = "Nicole";
$sobrenome = "Lisboa";

$welcome = "Welcome ". $nome . " " . $sobrenome;
echo $welcome. "<br>";

//autoincremento e decremento ++ -- 
$fila = 0;

for ($i = 1; $i <= 10; $i++) {
    $fila++;
    echo $fila . "<br>"         ;

    if ($fila == 10) {
        echo "Fila cheia\n";
    }
}