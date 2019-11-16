<?php

//O int ali faz o cast do tipo de dado mudando de string para inteiro.
$nome = (int)$_GET["a"];

var_dump($nome);


//Mostra o IP do cliente que acessou o servidor
$ip = $_SERVER["REMOTE_ADDR"];

//Mostra o nome do Arquivo ou pagina que ele acessou.
$ip = $_SERVER["SCRIPT_NAME"];

var_dump($ip);


?>
