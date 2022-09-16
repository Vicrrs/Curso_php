<!-- Váriavel com escopo global -->
<?php

$x = 5; //escopo global

function myTest() {
    // usar x dentro desta função irá gerar um erro
    echo "<p>A variável x dentro da função é: $ </p>";
}
myTest();

echo "<p>A função externa da variável x é: $x </p>";

?>