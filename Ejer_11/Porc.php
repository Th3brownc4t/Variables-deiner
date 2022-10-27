<?php
$precio = $_GET["precio"];
$descuento = ($precio * 15) / 100;
$total = $precio + $descuento;

echo "Lo vendiste con un bono del 15%, sacaste una ganancia de ".$descuento." <br><br>el total es de ".$total;
?>