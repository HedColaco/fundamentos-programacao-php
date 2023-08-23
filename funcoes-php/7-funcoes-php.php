<?php

$domain = 'https://www.especializati.com.br';

// echo str_replace('www.', 'https://www.', $domain);
// str_replace substitui parte da string pelo novo valor.


//echo substr($domain, 0, 4);
// substr ele retorna parte de uma string
// echo substr($domain, -7);

$protocol = substr($domain, 0, 8);
if ($protocol == 'https://')
    echo 'É seguro!';
else
    echo 'Não é seguro!';

// var_dump(substr($domain, 12, -7));

echo strlen($domain);

