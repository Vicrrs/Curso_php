<!-- A globalpalavra-chave é usada para acessar uma variável global de dentro de uma função. -->
<?php

$z = 0;
$x = 5;
$y = 10;

function myTest()
{
    global $x, $y, $z;
    $z = $x + $y;
}
MyTest();
echo $z;

?>