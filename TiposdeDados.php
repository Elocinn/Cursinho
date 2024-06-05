    <?php

    echo "PRIMEIRA PARTE: NÚMEROS INTEIROS";
    echo "<br>";
    echo "------------------------------------<br>";
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
    echo "<br><br>";

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
    echo "------------------------------------<br>";
    if (is_int($num4)) {
        echo "INT True";
    } else
        echo "INT False";


    echo "<br><br>";
    echo "TERCEIRA PARTE: NÚMEROS FLOATS";
    echo "<br>";
    echo "------------------------------------<br>";

    $num5 = 0.12313;
    $num6 = -23.1231;
    //echo "<br>";
    echo $num5 . "<br>" . $num6;
    //echo ($num5 + $num1);
    echo "<br><br>";

    echo "QUARTA PARTE: IF FLOAT";
    echo "<br>";
    echo "------------------------------------<br>";
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

    echo "<br><br>";
    echo "QUINTA PARTE: STRINGS";
    echo "<br>";
    echo "------------------------------------<br>";

    $string1 = "Primeiro ";
    $string2 = 'Segundo ';
    $string3 = "Terceiro ";
    // não da certo!!!! echo ($string1 + $string2 + $string3);
    echo $string1 . $string2 . $string3;
    echo "<br>";
    echo $string1 . $num1;
    echo "<br>";
    echo $string2 . ($num1 + 1);
    echo "<br><br>";

    $idade = 21;
    $nome = "Nicole Lisboa";

    //aspas simples
    echo 'Meu nome é ' . $nome . "<br>" . 'Eu tenho ' . $idade . '  anos de idade.';
    echo "<br><br>";
    //aspas duplas
    echo "Meu nome é $nome.<br> Eu tenho $idade anos de idade.";
    echo "<br><br>";
    //aspas duplas e variável
    echo "Meu nome é " . $nome . "<br>" . "Eu tenho " . $idade . " anos de idade.";


    echo "<br><br>";
    echo "SEXTA PARTE: IF STRINGS";
    echo "<br>";
    echo "------------------------------------<br>";
    if (is_string($nome)) {
        echo "$nome é uma string.";
        echo "<br>";
    } else {
        echo "$nome não é uma string.";
        echo "<br>";
    }

    if (is_string($idade)) {
        echo "$idade é uma string.";
        echo "<br>";
    } else {
        echo "$idade não é uma string.";
        echo "<br>";
    }



    echo "<br><br>";
    echo "SÉTIMA PARTE: BOOLEAN";
    echo "<br>";
    echo "------------------------------------<br>";
