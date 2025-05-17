<?php

function setTexto()
{
    //conteudo do chamado
    $tituloChamado = $_POST['titulo'];
    $categoriaChamado = $_POST['categoria'];
    $descricaoChamado = $_POST['descricao'];

    //Juntando conteudo do chamado
    $arrayChamado = array('titulo' => $tituloChamado, 'categoria' => $categoriaChamado, 'descricao' => $descricaoChamado);
    $textoFinalChamado = implode("\/", $arrayChamado);
    //concatenando com uma quebra de linha
    $textoFinalChamado .= PHP_EOL;

    return $textoFinalChamado;
}

$textoFinalChamado = setTexto();
echo "$textoFinalChamado";

//Cria um novo arquivo 'write-only' caso nao exista um
$arquivo = fopen('chamados.hd', 'a');

//Escrevendo no arquivo
fwrite($arquivo, $textoFinalChamado);

fclose($arquivo);

header('Location: ../abrir_chamado.php');

?>