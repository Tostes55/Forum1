<!DOCTYPE html>

<html>

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Seu Signo</title>

</head>

<body>

<main>

<?php

$dtaNasc = $_POST['data'];

$dtaNew = new DateTime($dtaNasc);

$dtaSig = $dtaNew->format('m-d');

$xml = simplexml_load_file('signos.xml');

echo 'Olá, Seu signo é: ';

foreach ($xml->signo as $signo) :

if ($dataSig >= $return->dataInicio and $dtaSig <= $return->dataFim) {

echo '<h5> De ' . $registro->dataInicio . ' até ' . $registro->dataFim . '</h5>';

echo '<p>' . nl2br($return->descricao) . '<p>';

}

endforeach;

?>

<button onclick="history.go(-1);">Voltar</button>

</main>

</body>

</html>