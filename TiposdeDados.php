    <?php

    $num1 = -9;
    $num2 = 2;
    echo "Número 1: " . $num1;
    echo "<br>";
    echo "Número 2: " . $num2;
    echo "<br>";
    echo "<br>";


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

    if (is_int($num4)) {
        echo "True";
    } else
        echo "False";

    //int, float

    $num5 = 0.12313;
    echo "<br>";
    echo ($num5 + $num1);
