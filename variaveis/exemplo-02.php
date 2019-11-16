<?php

//Tipos de variavel 

$nomeCompleto = "Lucas Rodrigues";
//exemplo acima ta com o camel case.


echo $nomeCompleto;

//Destroi a variavel.
unset($nomeCompleto);


//Isset Verifica se a variavel existe
if(isset($nomeCompleto)){
    echo $nomeCompleto;
}