<?php

$lista = [
    "farofa"    => 334,
    "cenoura"   => 43,
    "couve"     => 33,
    "batata"    => 34,
    "abacate"   => 1,
];

// asort($lista); // sobrescreve as chaves de acordo com a ordenação dos valores
// rsort($lista); // reverse

// asort($lista); // manten as chaves e ordena de acordo com os valores
// arsort($lista); // reverse

ksort($lista); // ordena (alfabetica) pela chave "string"
// krsort($lista); // reverse

var_dump($lista);