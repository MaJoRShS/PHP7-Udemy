<?php

$a = null;

$b = null;

$c = 10;

//Aqui ele vai mostrar a primeira variavel que não for nula, evitando assim que eu tenha que usar o if
echo $a ?? $b ?? $c;