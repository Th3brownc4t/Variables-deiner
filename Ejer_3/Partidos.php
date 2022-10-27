<?php
$partidosg = $_POST["pganados"];
$partidosp = $_POST["pperdidos"];
$partidose = $_POST["pempatados"];

$pganados = $partidosg * 3;
$pperdidos = $partidosg * 0;
$pempatados = $partidosg * 1;
$resultado = $pganados + $pperdidos + $pempatados;

echo "el total de puntos ganados es = ".$pganados." + ".$pperdidos." + ".$pempatados." = ".$resultado." puntos";

?>