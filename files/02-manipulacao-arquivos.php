<?php

$content = 'Algo Aqui';
$file = 'text.txt';

if (file_exists($file)) {
    // file_put_contents($file, $content); Inserir um conteúdo do arquivo

    var_dump(file_get_contents($file)); // ler conteúdo do arquivo
} else {
    echo 'Arquivo não existe!';
}
