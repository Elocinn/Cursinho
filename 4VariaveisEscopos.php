<?php
echo "<br><br>";
echo "DECIMA PRIMEIRA PARTE: Variáveis";
echo "<br>";

echo "------------------------------------<br>";

$velocidade = 100;
$marca = "VW";
$itens = ["Vidro Elétrico", 1.6, "4 portas", "Manual"];

echo $velocidade;
echo "<br>";
echo $marca;
echo "<br>";
print_r($itens);

$um = 1;
$dois = 2.2222;
$resultado = $um + $dois;
echo "<br>";
echo "<br>";
echo $resultado;

echo "<br><br>";
echo "DECIMA SEGUNDA PARTE: Variável da Variável";
echo "<br>";

echo "------------------------------------<br>";

//$$

$ident = "nome";
echo $ident;
$$ident = "Nicole";
echo "<br>";
echo $$ident;
echo "<br>";
echo $ident . ": " . $$ident;
echo "<br>";


echo "<br><br>";
echo "DECIMA TERCEIRA PARTE: Variável por referência";
echo "<br>";

echo "------------------------------------<br>";

//variável com referência a outra
// =&

$ident = "nome";
$name = &$ident;

echo "<br>";
echo $name;
echo "<br>";
////////
$um = 1;
$one = &$um;

echo $one;

$um = "um";
echo "<br>";
echo $one;

$um = "one";
echo "<br>";
echo $one;

echo "<br><br>";
echo "DECIMA QUARTA PARTE: Como escopo funciona";
echo "<br>";

echo "------------------------------------<br>";
echo "Local: variável declarada dentro de uma função";
echo "<br>";
echo "Não é possível acessar ela fora da função. Ela sempre é resetada quando a função é finalizada.";
echo "<br><br>";

echo "Global: variável declarada fora da função";
echo "<br>";
echo "Não são acessíveis dentro de funções";
echo "<br>";

$global = 10;
echo "Global 1: $global <br>";

function localteste1()
{
    $local = 5;
    echo "Local 1: $local <br><br>";
}

localteste1();

$global = 20;

function localteste2()
{
    $local = 15;
    echo "Local 2: $local<br><br>";
}
echo "Global 2: $global <br>";
localteste2();

/////////////////////////////////////
$valorglobal = 1;
echo "$valorglobal <br>"; //é 1

if ($valorglobal = 1) {
    $valorglobal = $valorglobal + 1;
}

echo "$valorglobal <br>"; //é 2

function globalteste1()
{
    $valorglobal = 3;
    echo "$valorglobal <br>";
}
globalteste1(); //imprime 3

function globalteste2()
{
    global $valorglobal;
    $valorglobal = 10;
}

globalteste2(); //declarou global como 10
echo $valorglobal;
echo "<br>";

if ($valorglobal > 11) {
    $valorglobal = $valorglobal + 1;
} else
    $valorglobal = $valorglobal - 1;

echo $valorglobal; //substraiu do valor global, e deu 9
echo "<br> <br>";

//////////////////////////////////////////////////////////////////////////////////
echo "Static: variável declarada dentro da função, porém ela permanece salvo entre as chamadas de função";
echo "<br>";
echo "O valor da mesma é mantido e alterado a cada execução de uma função";
echo "<br>";
?>

<?php

function staticteste()
{
    $valorstatic = 12;
    $valorstatic++;
    echo "$valorstatic <br>";
}

staticteste();
staticteste();
staticteste();

echo "<br>";
function staticteste1()
{
    static $valorstatic1 = 13;
    $valorstatic1++;
    echo "$valorstatic1 <br>";
}
staticteste1();
staticteste1();
staticteste1();

echo "Parâmetro de função: variável passada para uma função, podendo ser utilizada";
echo "<br> São considerados tipos de variáveis. São funções com valores dinamicos.";

function somaParametrosFunc($x, $y)
{
    $z = $x + $y;
    echo "<br> $z";
}

somaParametrosFunc(1,2);