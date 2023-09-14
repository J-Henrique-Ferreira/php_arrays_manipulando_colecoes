<?php 

$vegetais = [
    "cenoura",
    "beterraba",
    "batata",
];

$cereais = [
    "aveia",
    "granola",
];

$alimentos = [];

// aciciona no fim do array


// array_push($alimentos, $cereais, $vegetais);
array_push($alimentos, ...$cereais, ...$vegetais);

// adiciona no inicio do array
array_unshift($alimentos, "alface");

var_dump($alimentos);