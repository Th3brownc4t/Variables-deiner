<?php
$velocidad = $_POST["velocidad"];
$tiempo = $_POST["tiempo"];
$distancia = $velocidad * $tiempo;

echo "la distancia que se recorrio fue de ".$distancia."m";
?>