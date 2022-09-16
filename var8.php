<?php 

$x = 5;
$y = 10;

function meuteste() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

meuteste();
echo $y;

?>
