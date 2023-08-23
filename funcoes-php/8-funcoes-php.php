<?php


$name = "Carlos";
if (isset($name))
echo $name;
else
    echo 'Não existe!';

// função isset: verifica se uma variável existe 

unset($name);

if (isset($name))
    echo $name;
else
    echo 'Não existe!';

// função unset: deleta uma variável 
