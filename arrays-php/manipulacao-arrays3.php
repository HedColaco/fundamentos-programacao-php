<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($cart);

echo '<hr>';

array_pop($cart);
var_dump($cart);
// array_pop remove o último elemento do array

echo '<hr>';

array_shift($cart);
var_dump($cart);
// array_shift remove o primeiro elemento do array

echo '<hr>';

//Escolher qual registro remover do array
unset($cart[0]);
var_dump($cart);

echo '<hr>';

// Adicionar elementos no final do array
array_push($cart, 'Tapete');
array_push($cart, 'Rodo');
var_dump($cart);

echo '<hr>';

// Adicionar elementos no início do array
array_unshift($cart, 'Microondas');
array_unshift($cart, 'Tapete');
var_dump($cart);

echo '<hr>';

// Remove elementos duplicados
$cart = array_unique($cart);
var_dump($cart);

echo '<hr>';




