<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good day!\n";
} elseif($t > '10') {
  echo "Funcionou!\n";
}
?>