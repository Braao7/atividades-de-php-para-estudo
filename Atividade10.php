<!-- Repetição: Escreva um programa PHP que imprima os primeiros 10 números da sequência de Fibonacci. -->

<?php
    $a = 0;
    $b = 1;

    for($i = 0; $i < 10; $i++){
       echo $a . " ";
       $c = $a + $b;
       $a = $b;
       $b = $c;
    }
?>