<!-- Funções: Crie uma função em PHP que verifique se uma palavra é um palíndromo. -->

<?php
    function palindromo($palavra){
        $inverso = "";
        
        for ($i = strlen($palavra) - 1; $i >= 0; $i--){
            $inverso .= $palavra[$i];
        }
        
        if ($palavra == $inverso){
            echo $palavra . " : É uma palavra palíndromo. ";
        }else{
            echo $palavra . " : Não é uma palavra palíndromo. ";
        }
    }
    
    palindromo("ana");
?>