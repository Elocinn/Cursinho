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


    if (is_bool(true)) {
        echo "true";
        echo "<br>";
        echo true . "<br>";
    }

    if (is_bool(false)) {
        echo "false<br>";
    }

    if (is_int(2 + 4)) {
        $resultado = true;
    } else {
        $resultado = false;
    }

    echo "1: $resultado<br>";
    if (is_bool($resultado)) {
        echo "é Bool <br>";
    }

    if (is_int(2 + 4.1)) {
        $resultado = true;
    } else {
        $resultado = false . "0";
    }

    echo "2: $resultado<br>";
    if (is_bool($resultado)) {
        echo "é Bool <br>";
    } else {
        echo "Não é Bool. " .  $resultado;
    }

    $final = $num5 + $num6;
    //-22.99997
    echo "<br>$final";
    if (is_float($final)) {
        $resultado = true;
        $final = $final - 0.00003;
        echo "<br>$final";

        if (is_bool($resultado)) {
            echo "<br> final2"; {

                if (is_int($final)) {
                    echo "<br> final3";
                    //23.00000
                    //não imprime
                }
            }
        }
    }

    $verdadeiro = true;
    $falso = 0;

    switch ($verdadeiro && $falso) {
        case true:
            echo "<br> verdadeiro";
            break;

        case false:
            echo "<br> false";
            break;
    }


    $moeda = [true, false, 1, 0];
    if ($moeda[1] = true) {
        echo "<br>Cabeça";
    } else
        echo "<br>Coroa";

    if ($moeda[0] = false) {
        echo "<br>Coroa1";
    } else
        echo "<br>Cabeça1";

    echo "<br><br>";
    echo "OITAVA PARTE: ARRAY";
    echo "<br>";

    echo "------------------------------------<br>";
    //array, listas, conjuntos

    $chamada = ["Nicole", "Fulano", "Ciclano"];
    $idades = [21, 25, 36];

    //echo $chamada;
    echo "<br>" . $chamada[0];
    echo "<br> $idades[0]";
    echo "<br>";

    //print readable, human readable
    print_r($chamada);
    echo "<br>";
    print_r($idades[1]);
    echo "<br>";
    print_r($num1);

    //array associativo, insere a chave e o valor
    echo "<pre>";
    echo "<br>";
    $fifi = ['nome' => 'Fifi', 'especie' => 'Cachorro', 'porte' => 'P', 'cor' => 'Variado'];
    $gatito = ['nome' => 'Gatito', 'especie' => 'Gato', 'porte' => 'G', 'cor' => 'Branco'];
    $chico = ['nome' => 'Chico', 'especie' => 'Cachorro', 'porte' => 'M', 'cor' => 'Caramelo'];

    $Pet = [$fifi, $gatito, $chico];

    print_r($Pet);

    /*
    print_r($cachorro);
    echo $cachorro['nome'];*/

    //$DonoEPet[$chamada[0],$idades[0],$cachorro['nome']];
    //Errado

    $Dono = [$chamada, $idades];
    $DonoEPet = [['dono' => $chamada[0], 'idade' => $idades[0]], 'pet' => $Pet[0]];

    echo "<br><br>";
    print_r($DonoEPet);

    echo "</pre>";
    //Exercício 6 
    $golzinho = [
        'modelo' => 'Gol',
        'marca' => 'VW',
        'ano' => 2008,
        'manual' => true
    ];

    if ($golzinho['manual'] = true) {
        $a = "é";
    } else {
        $a = "não é";
    }

    echo "<br> O modelo do carro é {$golzinho['modelo']}, do ano {$golzinho['ano']}.
    <br> O carro é da marca {$golzinho['marca']}, assim $a manual";
    //Exercício 7

    $joao = ['nome' => 'Joao', 'idade' => 21];
    $maria = ['nome' => 'Maria', 'idade' => 15];
    $guilherme = ['nome' => 'Guilherme', 'idade' => 17];
    $ana = ['nome' => 'Ana', 'idade' => 18];

    $nomeClientes = ['Joao', 'Maria', 'Guilherme', 'Ana'];
    echo "<br>São " . count($nomeClientes) . " pessoas.";

    $idadeClientes = [$joao['idade'], $maria['idade'], $guilherme['idade'], $ana['idade']];

    for ($i = 0; $i < count($idadeClientes); $i++) {
        if ($idadeClientes[$i] <= 18) {
            echo "<br>" . $idadeClientes[$i] . " É menor de Idade";
        } else
            echo "<br>" . $idadeClientes[$i] . " É maior de Idade";
    }

    echo "<br><br>";
    echo "NONA PARTE: OBJETOS";
    echo "<br>";

    echo "------------------------------------<br>";

    ?>

    <?php
    //Orietação a objetos
    //Classes e Objetos
    //Métodos e Propriedades

    class Pessoa
    {

        function falar()
        {
            echo "Olá pessoal!";
        }
    }

    $usuario = new Pessoa();

    $usuario->id = "1";

    echo $usuario->id;

    echo "<br>";

    $usuario->falar();


    echo "<br><br>";
    echo "DECIMA PARTE: NULL";
    echo "<br>";

    echo "------------------------------------<br>";

    echo NULL;

    $nulo = NULL;
    $num = 1;
    echo $nulo;

    if (is_null($nulo)) {
        echo "<br> É NULL!!!";
    }

    if (is_null($num)) {
        echo "<br> É NULL!!!";
    }
    ?>

