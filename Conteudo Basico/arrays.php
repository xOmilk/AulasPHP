<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        pre {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        .principal {
            width: fit-content;
            display: block;
            padding: 20px;
            border: 1px solid black;
        }

        #botao {
            display: block;
            margin-top: 20px;
            margin: auto auto;
            padding: 10px;
        }
    </style>


</head>

<body>



    <?php
    //in_array('element', $array); return true or false
    //array_search('element', $array); return index of array or -1 if false



    $frutas = [0 => 'Maça', 3 => 'Uva', 'Pera'];

    $pessoas = array('Fernando', 'Maria', 'Julia', 'Gabriela');
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
    echo "<pre>";
    print_r($pessoas);
    echo "</pre>";

    $lista_de_coisas = array('Pessoas' => $pessoas, 'Frutas' => $frutas);
    echo "<pre>";
    print_r($lista_de_coisas);
    echo "</pre>";

    $elementoProcurado='uva';

    $condition = in_array($elementoProcurado, $frutas) ? "Existe dentro do array" : "Não está contido dentro do array";
    echo "<p>A fruta $elementoProcurado, $condition</p>";

    echo "<div class='principal'>";

    echo "<p>Este é um paragrafo em php</p>";

    echo "</div>";

    ?>
</body>

</html>