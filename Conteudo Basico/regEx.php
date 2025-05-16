<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular expressions</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;

        }

        .form {
            height: 100dvh;
            width: 50%;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            justify-content: center;
            margin: auto auto;
        }

        .form * {
            margin: auto auto;
            display: block;
            padding: 20px;
        }
    </style>


</head>

<body>

    <div class="form">


        <form action="" method="get">

            <input name="pesquisa" type="text" placeholder="Sua pesquisa">
            <br>
            <div class="feedback">
                <?php
                //Verificando se está setado e se é diferente de vazio
                if (isset($_GET['pesquisa']) && trim($_GET['pesquisa']) != "") {

                    $pesquisado = trim($_GET['pesquisa']);
                    $regEx = "/$pesquisado/i";
                    $stringOriginal = "Antonio Gabriel";
                    $condition = preg_match($regEx, $stringOriginal);

                    $howMany = preg_match_all($regEx, $stringOriginal);

                    if ($condition) echo "Expressão '$pesquisado' encontrada $howMany vezes";
                    else echo "Expressão '$pesquisado' não encontrada<br>";
                }
                ?>
            </div>

            <button type="submit">Submit</button>

        </form>
    </div>


</body>

</html>