<?php
$n1 = $_POST["N1"];
$n2 = $_POST["N2"];
$n3 = $_POST["N3"];
/* 
== igual
> mayor
>= mayor o igual
< menor
<= menor o igual
 */

if ($n1>$n2){
    if($n1>$n3){
        echo "el numero 1 es mayor";
    }else{
        echo "el numero 3 es mayor";
    }
}elseif($n2>$n3){
    echo "el nuemero 2 es mayor";
    }else{
        echo "el numero 3 es mayor";
}
?>