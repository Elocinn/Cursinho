    <?php

    echo "PRIMEIRA PARTE: NÚMEROS INTEIROS";
    echo "<br>";
    $num1 = -9;
    $num2 = 2;
    echo "Número 1: " . $num1;
    echo "<br>";
    echo "Número 2: " . $num2;
    echo "<br>";
    //EQUAÇÕES
    echo "Adição: " . ($num1 + $num2);
    echo "<br>";
    echo "Substração: " . ($num1 - $num2);
    echo "<br>";
    echo "Multiplicação: " . ($num1 * $num2);
    echo "<br>";
    echo "Divisão: " . ($num1 / $num2);
    echo "<br>";
    echo "<br>";

    $num1 = 1;
    echo "Novo Número 1: " . $num1;
    echo "<br>";

    $num3 = $num1 + $num2;
    echo "Adicionando Número 1 e 2: ";
    echo $num3;

    $num4 = 4.5;
    echo "<br>";
    //checar se o número é inteiro, retorna BOOL
    
    echo "<br>";
    echo "SEGUNDA PARTE: IF INTEIROS";
    echo "<br>";
    if (is_int($num4)) {
        echo "INT True";
    } else
        echo "INT False";


    echo "<br>";
    echo "<br>";
    echo "TERCEIRA PARTE: NÚMEROS FLOATS";
    echo "<br>";

    $num5 = 0.12313;
    //echo "<br>";
    //echo ($num5 + $num1);
    echo "<br>";

    echo "QUARTA PARTE: IF FLOAT";
    echo "<br>";
    //checar float
    $string = "Sou uma string ";
    if (is_float($num5)) {

        echo "Float True";
        echo "<br>";
    } else
        echo "Float False";

    if (is_float($string)) {

        echo $string . "Float True";
        echo "<br>";
    } else
        echo $string . "Float False";
    echo "<br>";

    echo "<br>";
    echo "QUINTA PARTE: STRINGS";
    echo "<br>";
