<!-- Matrizes: Escreva um programa PHP para calcular e imprimir a transposta de uma matriz. -->

<?php
    $matriz = [[1,2,3],
               [4,5,6]];

    $matriz2 = [];

    for($i = 0; $i < count($matriz); $i++){
        for($j = 0; $j < count($matriz[$i]); $j++){
            $matriz2[$j][$i] = $matriz[$i][$j];
        }
    }
    
    for($i = 0; $i < count($matriz); $i++){
        echo implode ("" ,$matriz[$i]), '<br>';
    }

    echo "<br>";

    for($i = 0; $i < count($matriz2); $i++){
        echo implode ("" ,$matriz2[$i]), '<br>';
    }
    
?>