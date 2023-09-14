<?php

$array = [
    0 => "um",
    1 => "dois",
    2 => "tres", 
    3 => "quatro",
];

foreach ($array as $index => $value) {
    echo "$index em portigues é $value" . PHP_EOL;
}

// se retirar uma chave de sequencia retorna false
var_dump(array_is_list($array));

// verifica se a var é um array
var_dump(is_array($array));