<?php

session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'sim') {
  header('Location: ./index.php?login=erroAuth');
} else {
  //echo"Você está autenticado";
}

?>
