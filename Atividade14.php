<!-- Métodos: Crie um codigo PHP que represente uma calculadora. Implemente métodos para realizar operações básicas como adição, subtração, multiplicação e divisão. -->

<?php
function calculadora($op, $num1, $num2) {
    switch ($op) {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
        default:
            echo "Isso não é um operador";
    }
}

calculadora("/", 3, 2);
?>