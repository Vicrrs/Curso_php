<?php
/*
A continue instrução interrompe uma iteração (no loop), se ocorrer uma condição especificada, e 
Scontinua com a próxima iteração no loop.

*/
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>\n";
  }

?>