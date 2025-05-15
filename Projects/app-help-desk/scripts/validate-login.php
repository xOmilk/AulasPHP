<?php

function recolherUsuario()
{

    if (!isset($_POST['email']) || !isset($_POST['password'])) {
        echo "Erro: campos nao foram enviados";
        return null;
    }


    $email = trim($_POST['email']);
    $password = trim($_POST['password']);


    echo "<h2>Usuario fornecido:</h2>";
    $usuario = array('Email' => $email, 'Senha' => $password);
    echo "<pre>";
    print_r($usuario);
    echo "</pre>";

    return $usuario;
}

function verifyUser()
{
    $verified = false;

    $authUsersApp = array(

        array('Email' => 'admuser@gmail.com', 'Senha' => '123456'),
        array('Email' => 'qualquer@email.com', 'Senha' => 'abcd')
    );

    $usuario = recolherUsuario();

    if ($usuario === null) {
        echo "Erro: não foi possivel coletar os dados do usuario";
        return;
    }


    echo "<h2>Usuarios com acesso:</h2>";
    foreach ($authUsersApp as $i => $user) {
        echo "<pre>";
        print_r($user);
        echo "</pre>";

        if ($usuario['Email'] == $user['Email'] && $usuario['Senha'] == $user['Senha']) {
            $verified = true;
            break;
        }
    }

    if ($verified) {
        echo "Usuario autenticado";
    }
    else{
        header('Location: ../index.php?login=erro');
    }
}
verifyUser();







/* print_r($_POST);
echo "<br>";

echo $_POST['email'];
echo "<br>";
echo $_POST['password'];
echo "<br>";

echo "teste!!!"; */
