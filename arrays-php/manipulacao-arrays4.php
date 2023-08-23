<?php

$cart = [
    0 => 'Macarrão', 
    1 => 'Feijão', 
    2 => 'Arroz', 
    3 => 'Batata'
];

echo '<pre>';
arsort($cart);
var_dump($cart);
// ordenar os produtos de Z a A, de forma decrescente.

echo '<hr>';

// asort ordena de forma crescente de A a Z.
asort($cart);
var_dump($cart);

echo '<hr>';
// sort ordena as chaves do array.
sort($cart);
var_dump($cart);

echo '<hr>';