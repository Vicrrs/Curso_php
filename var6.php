<!-- Variável com escopo local: -->
<?php
function myTest() {
    $x = 5; // Escopo local
    echo "<p>A variável x dentro da função vale: $x </p>";
}
MyTest()

// Se chamasse o x fora da função daria erro

?>