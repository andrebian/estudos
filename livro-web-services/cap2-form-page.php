<?php

$method = $_SERVER['REQUEST_METHOD'];

$methodsMap = array('GET' => $_GET, 'POST' => $_POST);

if (isset($method) && !empty($methodsMap[$method])) {
    echo 'O m&eacute;todo de solicita&ccedil;&atilde;o &eacute; ' . $method . ' e chegou ao seu destino com sucesso!';

    extractDataFromRequest($methodsMap[$method]);
}

function extractDataFromRequest($method)
{
    var_dump($method);
}

if ($method == 'POST' && !empty($methodsMap[$method]['email'])) {
    echo "<br /><br />Este eh o email tratado: " . filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) . '<br />';
}