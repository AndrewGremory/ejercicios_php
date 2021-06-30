<?php
    $numero=10.0;
    echo "Divisores del numero ".$numero.": ";
    for ($i=1;$i<=$numero;$i++){
        $Residuo=$numero % $i;
        if ($Residuo==0)

        {
            echo " [ ".$i." ] ";
        }

    }
?>