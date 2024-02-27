<!-- Estruturas condicionais: Faça um programa PHP que verifique se um número é par ou ímpar. -->

<?php
    function comparador ($num){
        if ($num < 0){
            echo "Negativo";
        } 
        else{
            if ($num % 2 == 0){
                echo $num . ":" . "Par";
            } 
            else{
                echo $num . ":" . "Ímpar";
            }
        }
    }
    
    for($i = 0; $i<= 10; $i++){
        echo comparador($i), '<br>';
    }
?>