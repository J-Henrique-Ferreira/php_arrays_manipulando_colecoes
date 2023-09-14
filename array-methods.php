<?php

$lista = [
    "farofa" => 334,
    "cenoura" => 43,
    "couve" => null,
    "batata" => 34,
    "abacate" => 1,
];

// verifica se existe a chave independendo do valor alocado existir
echo "abacate existe? ";
var_dump(array_key_exists(key: "abacate", array: $lista));
echo PHP_EOL;

// considera epanas chaves com valores reais alocados ou sela != null
echo "couve possui um valor alocado? ";
var_dump(isset($lista["couve"]));
echo PHP_EOL;

// verifica se existe um valor dentro do array
echo 'Existe o valor 34 na var lista? ';
var_dump(in_array(34, $lista));
echo PHP_EOL;