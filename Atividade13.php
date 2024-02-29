<!-- Escreva um programa PHP que verifique se uma matriz é simétrica ou não -->

<?php
$matriz = [
    [1, 2, 3],
    [2, 5, 8],
    [3, 8, 9]
];

$cont=0;
for ($i = 0; $i < count($matriz); $i++) {
    for ($j = 0; $j < count($matriz[$i]); $j++) {
        if($matriz[$j][$i] == $matriz[$i][$j]){
            $cont+=1;
        }
    }
}

if($cont == 9){
    echo "Esta matriz é simétrica";
}else{
    echo "Esta matriz não é simétrica";
}

?>