<!-- Vetores: Faça um programa PHP que calcule a média de um array de números. -->

<?php
    $list_num = [10,20,30,20];
    $acumulador = 0;
    for($i = 0; $i < count($list_num); $i++){
        $acumulador += $list_num[$i];
    }

    print_r($acumulador/count($list_num));
?>