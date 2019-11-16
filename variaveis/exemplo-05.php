<?php

$nome = "lucas";

function teste(){
    //Bizu para usar uma variavel de fora desse escopo aqui mesmo.
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "quem eu quiser";
    echo $nome."Agora no Teste 2";
}

teste();
teste2();

?>