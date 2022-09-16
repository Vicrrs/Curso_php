<?php
/*
A breakinstrução também pode ser usada para sair de um loop.
*/
for ($x = 0; $x < 10; $x++) {
    if ($x == 9) {
      break;
    }
    echo "The number is: $x <br>\n";
  }
?>