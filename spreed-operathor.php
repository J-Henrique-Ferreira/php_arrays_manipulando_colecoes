<?php 
/* 
$vegetais = [
    "abacate" => "cenoura",
    "beterraba",
    "batata",
];

$cereais = [
    "abacate" => "aveia",
    "granola",
];
 */

$vegetais = [
    "cenoura",
    "beterraba",
    "batata",
];

$cereais = [
    "aveia",
    "granola",
];

$alimentos = [...$vegetais, ...$cereais];

var_dump($alimentos);
