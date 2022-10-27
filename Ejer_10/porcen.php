<?php
$precio = $_GET["precio"];
$descuento = ($precio * 20) / 100;
$total = $precio - $descuento;

if ($precio > 20000) {
    echo "Has ganado un descuento del 20%, el descuento es de ".$descuento." <br><br>el total es de ".$total;
}else{
    echo "No recibes descuento";
}
?>