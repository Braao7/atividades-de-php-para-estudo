<!-- Vetores: Faça um programa PHP que encontre o segundo maior elemento em um array. -->

<?php
$lista = [9, 7, 3, 6, 8, 6, 3, 2, 5, 3];

$sorted = true;

while ($sorted) {
    $sorted = false;
    for ($i = 0; $i < count($lista) - 1; $i++) {
        if ($lista[$i] > $lista[$i + 1]) {
            $temp = $lista[$i + 1];
            $lista[$i + 1] = $lista[$i];
            $lista[$i] = $temp;
            $sorted = true;
        }
    }
}

$numero = $lista[count($lista) - 2];

echo $numero;
?>