<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each multidimensional</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        #arrayPrint {
            font-size: 20px !important;
        }

        .negative,
        .positive {
            border-radius: 5px;
            padding: 10px;
            border: 1px solid black;
            width: fit-content;
        }

        .positive {
            background: lightgreen;
        }

        .negative {
            background: lightcoral;
        }


        #title {
            text-align: center;
        }

        .array {
            /* background-color: #ccc; */
            width: 60%;
            margin: auto auto;
            margin-bottom: 30px;
            padding: 20px;
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;
            /* border: 1px solid red; */
            box-shadow: 1px 2px 6px 6px rgb(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <?php

    function printArrayMultiDimensional($array)
    {
        static $count = 1;
        echo "<div class='array' id='$count'>";
        if (is_array($array)) {
            print("<p class='positive'>O parametro fornecido é um array</p>");
        } else {
            print "<p class='negative'>O parametro fornecido [$array]º <b>NÃO</b> um array</p>";
            return;
        }
        $lengh = (count($array) === 0) ? print "O array possui tamanho zero" : count($array);
        if (!is_int($lengh)) {
            return;
        }

        echo "<h2>${count}º Array:</h2>";

        $passThroughArray = function ($array, $lengh) {
            echo "<pre id='arrayPrint'>";

            foreach ($array as $idx => $funcionario) {
                echo "Funcionario $idx:<br>";
                echo "<pre>";
                print_r($funcionario);
                echo "</pre>";
                foreach ($funcionario as $atributo => $valor) {
                    echo "$atributo: $valor<br>";
                }
            }

            echo "</pre>";
        };

        $count++;
        $passThroughArray($array, $lengh);
        echo "</div>";
    }

    $funcionarios = array(
        array('Nome' => 'João', 'Salario' => '3000'),
        array('Nome' => 'Antônio', 'Salario' => '1500'),
        array('Nome' => 'Lucas', 'Salario' => '2000')
    );

    printArrayMultiDimensional($funcionarios);




    ?>

</body>

</html>