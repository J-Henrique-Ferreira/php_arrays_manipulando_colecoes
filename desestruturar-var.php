<?php

/* 
$array = [
    0 => "joao",
    1 => "20",
    2 => "homem",
];

[$nome, $idade, $sexo] = $array; 
*/

$array = [
    "nome" => "joao",
    "idade" => "20",
    "sexo" => "homem",
];

["nome" => $nome, "idade" => $idade, "sexo" => $sexo] = $array; 

var_dump($nome);
var_dump($idade);
var_dump($sexo);