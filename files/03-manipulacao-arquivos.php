<?php

$file = fopen('projetoX.log', 'a+');
fwrite($file, "Hoje é um lindo dia \r\n");
fclose($file);