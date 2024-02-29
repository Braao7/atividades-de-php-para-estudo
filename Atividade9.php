<!-- Estruturas condicionais: Faça um programa PHP que determine se um número é positivo, negativo ou zero. -->

<?php
    function tipoNum($num){
        if ($num > 0){
            echo $num . ": É positivo.";
        }else if ($num < 0){
            echo $num . ": É negativo.";
        }else{
            echo $num . ": É neutro.";
        }
    }

    $numero = readline("Digite um número: ");

    tipoNum($numero);
?>