<?php

$url = 'http://localhost/API-REST/api';
$classe = 'Estoque';
$metodo = 'mostrar';

$montar = $url.'/'.$classe.'/'.$metodo;

$retorno = file_get_contents($montar);

echo"<pre>";
var_dump(json_decode($retorno,1));
echo"</pre>";
?>