<?php

$url = 'http://localhost/estudos/livro-web-services/cap2-get-form-page.php';
$data = array('category' => 'test', 'rows' => 50);
$getAddr = $url . '?' . http_build_query($data);


// Primeiro exemplo de forma simples, sem CURL ou qualquer outra biblioteca
$page = file_get_contents($getAddr);
echo $page;



# Com CURL
# 
// iniciando CURL
$ch = curl_init($getAddr);

// definindo para que haja transferência do conteúdo retornado
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// executando o CURL e imprimindo o conteúdo
$page = curl_exec($ch);
echo $page;

// fechando o CURL
curl_close($ch);