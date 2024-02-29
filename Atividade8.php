<!-- Métodos: Crie uma programa em PHP que receba o valor de uma circunferência de um círculo. Implemente um método para calcular a área do círculo. -->

<?php
    function calcularAreaCirc($circuferencia){
        $raio = $circuferencia/ (3.14* 2);
        $area = ($raio**2)* 3.14;
        return $area;
    }

    $resultado = calcularAreaCirc(20);
    
    echo number_format($resultado, 1);
?>