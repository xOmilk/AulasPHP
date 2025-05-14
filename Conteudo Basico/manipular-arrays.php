<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Manipulação</title>

    <style>
        pre {
            font-size: 20px;
        }
    </style>

</head>

<body>

    <?php

    $jogos = ["TLOU" => 'The last of us 2', "RDR2" => 'Read Dead Redemption 2', "MINE" => 'Minecraft', "GTA V" => 'Grand Theft Auto V'];
    $variavel = 'BAPBAP';

    //verifica se é um array ou nao
    is_array($variavel) ? print 'É um array' : print 'Não é um array';
    echo "<br>";

    echo '<pre>';
    //array_keys($array)  ---  RETORNA AS CHAVES DO ARRAY
    print_r(array_keys($jogos));
    echo '</pre>';

    //Faz a contagem de quantos elementos existe dentro de um array
    echo count($jogos);

    //array_merge($array1,$array2)  --- Faz a união de arrays diferentes;
    $pessoas = ['Fernando', 'Natalia', 'Julia'];
    $novoArray = array_merge($jogos, $pessoas);
    echo '<pre>';
    print_r($novoArray);
    echo '</pre>';

    //explode('delimitador', $string)  ---  Dividir uma string em um array de acordo com um delimitador
    $texto = "Eu gostaria de comer um pedaço de queijo";
    $arrayRetorno = explode(' ', $texto);
    echo "<p>O texto original é: <br><b>'$texto'<b></p>";
    echo '<pre>';
    print_r($arrayRetorno);
    echo '</pre>';

    // implode('glue', $array)  ---  Junta os elementos de um array e retorna uma string
    $array1 = ['1', '2', '3', '4', '5'];
    $colado = implode('...', $array1);
    echo "'$colado'";
    ?>


</body>

</html>