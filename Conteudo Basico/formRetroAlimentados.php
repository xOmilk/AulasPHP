<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios retroalimentados</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #ccc;
            margin: 0px;
            padding: 0px;

        }


        section {
            border-radius: 12px;
            box-shadow: 1px 1px 6px 5px rgb(0, 0, 0, 0.2);
            background-color: lightblue;
            margin: auto auto;
            margin-top: 10rem;
            height: 500px;
            width: 50%;
            display: flex;
            justify-content: center;
            flex-flow: column wrap;
            align-items: center;
        }

        section form {
            display: flex;
            flex-flow: column;
            padding: 10px;
        }

        form button {
            cursor: pointer;
            border: none;
            border-radius: 8px;
            margin-top: 15px;
            color: white;
            padding: 10px;
            background: #000123;
            transition: all 0.5s;
        }

        form button:hover {
            background: rgb(2, 5, 99);
        }

        input {
            margin-top: 20px;
            padding: 10px;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
            width: 70%;
            background-color: #000123;
            border-radius: 10px;
            height: 100px;
        }

        .container p {
            margin-left: 4px;
            margin-right: 4px;
            font-size: 18px;
            text-align: center;
            color: white;
        }

        .error {
            color: lightcoral;
            text-decoration: none !important;
        }

        b {
            text-decoration: underline;
        }
    </style>



</head>

<body>



    <section>
        <h1>Utilizando superglobal SERVER e SELF</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

            <input type="text" placeholder="Informe o seu nome" name="nome" id="">
            <input type="text" placeholder="Digite o seu curso" name="curso" id="">
            <input type="text" placeholder="Informe a sua idade" name="idade" id="">
            <button>Enviar</button>

        </form>

        <div class="container">

            <?php

            if (isset($_GET['nome']) && isset($_GET['curso']) && isset($_GET['idade'])) {
                $nome = $_GET['nome'];
                $curso = $_GET['curso'];
                $idade = $_GET['idade'];

                if ($nome != "" && $curso != "" && $idade != "") {
                    $result = "Seja muito bem vindo <b>$nome</b>, recebemos aqui que você possui <b>$idade</b> anos e faz o curso de <b>$curso</b>";
                    echo "<p>$result</p>";
                } else {
                    echo "<p>Preencha <b class='error'>TODOS</b> os campos para continuar</p>";
                }
            }

            ?>
        </div>


    </section>



</body>

</html>