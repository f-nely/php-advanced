<?php

/*// Inicia
$recurso = curl_init('http://api.postmon.com.br/v1/cep/13465970');

// Definido o que receber de conteúdo (GET)
curl_setopt($recurso, CURLOPT_RETURNTRANSFER, true);

// Executa e obtém o resultado
$resultado = curl_exec($recurso);

// Encerra a conexão (para liberar da memória)
curl_close($recurso);

// Transforma o json recebido para array
$endereco = json_decode($resultado);

// Imprime.
var_dump($endereco);*/


$recurso = curl_init('http://api.postmon.com.br/v1/cep/13465970');
curl_setopt($recurso, CURLOPT_RETURNTRANSFER, true);

$resultado = curl_exec($recurso);

$httpCode = curl_getinfo($recurso, CURLINFO_HTTP_CODE);

// Verifica o código de resposta
if (http_response_code(200)) {
    echo 'Ok! Tudo correto.';
} else {
    echo 'Hum. Recebemos esse código de resposta: ' . $httpCode;
}

curl_close($recurso);




