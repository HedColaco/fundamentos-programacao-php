<?php

// Fatorial 4 => 4*3*2*1 = 24
// Fatorial 2 => 2*1
// Fatorial 3 => 3*2*1

function factorial(int $number): int 
{
    if ($number <= 1)
        $number = $number;
    else
       $number *= factorial($number -1);

    return $number;
}

echo factorial(4);
