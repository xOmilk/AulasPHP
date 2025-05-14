<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas repeticao</title>

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
    echo '<h1 id="title">Utilizando estruturas de repetição</h1>';
    //For utilizado para impressão de array
    function printArray($array)
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

        echo "<h2>$count" . 'º' . "Array:</h2>";
        $passThroughArray = function ($array, $lengh) {
            echo "<pre id='arrayPrint'>";
            /* UTILIZANDO O FOR CONVENCIONAL
                for ($i = 0; $i < $lengh; $i++) {
                print_r("Posição $i: $array[$i]");
                echo "<br>";
                }
            */
            foreach ($array as $i => $value) {
                print_r("Posição $i: $value");
                echo "<br>";
            }


            echo "</pre>";
        };

        $passThroughArray($array, $lengh);
        $count++;
        echo "</div>";
    }

    $pessoas = array('Fernando', 'Lucas', 'Gabriel');
    printArray($pessoas);

    $segundo = ['tlou', 'rdr2', 'gow-ragnarock'];
    printArray($segundo);




    ?>


</body>

</html>