<?php

$password = '123456';

// echo md5($password);
// echo sha1($password);
// echo crypt($password, $salt);
// $passCr = base64_encode($password);
// echo $passCr;
// echo base64_decode($passCr);
// echo hash('sha512', $password);

echo cryptC($password);

function cryptC(string $value): String
{
    $hash = crypt($value, 'soLskjdfioiorior98');
    $hash = md5($value); 
    $hash = sha1($hash);
    $hash = hash('sha512', $hash);

    return $hash;
}